<?php
	class Books extends CI_Controller
	{
		
		public function index($offset = 0)
		{
			// Pagination Config
			$config['base_url'] = base_url(). 'book/index/';
			$config['total_rows'] = $this->db->count_all('books');
			$config['per_page'] = 3;
			$config['uri_segment'] = 3;
			$config['attributes'] = array('class' => 'paginate-link');

			// Init Pagination
			$this->pagination->initialize($config);

			$data['title'] = 'Latest Books';

			$data['books'] = $this->Book_Model->get_books(FALSE, $config['per_page'], $offset);

			$this->load->view('templates/header');
			$this->load->view('book/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug = NULL)
		{
			$data['book'] = $this->Book_Model->get_books($slug);

			$book_id = $data['book']['id'];
			$data['comments'] = $this->Comment_Model->get_comments($book_id);
			
			if (empty($data['book'])) {
				show_404();
			}
			$data['title'] = $data['book']['title'];

			$this->load->view('templates/header');
			$this->load->view('book/view', $data);
			$this->load->view('templates/footer');
		}

		public function create()
		{
			// Check login
			if(!$this->session->userdata('login')) {
				redirect('users/login');
			}

			$data['title'] = 'Create Book';

			//$data['categories'] = $this->Book_Model->get_categories();

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('description', 'description');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('book/create', $data);
				$this->load->view('templates/footer');	
			}else{
				//Upload Image
				$config['upload_path'] = './assets/book';
				$config['allowed_types'] = 'pdf|doc|epub';
				$config['max_size'] = '2048';
				$config['max_width'] = '2000';
				$config['max_height'] = '2000';

				$this->load->library('upload', $config);

				if(!$this->upload->do_upload()){
					$errors =  array('error' => $this->upload->display_errors());
					$book_file = 'noimage.jpg';
				}else{
					$data =  array('upload_data' => $this->upload->data());
					$book_file = $_FILES['userfile']['name'];
				}
				$this->Book_Model->create_book($book_file);

				//Set Message
				$this->session->set_flashdata('book_created', 'Your book has been created.');
				redirect('book');
			}
			
		}

		public function delete($id)
		{
			// Check login
			if(!$this->session->userdata('login')) {
				redirect('users/login');
			}

			$this->Book_Model->delete_book($id);

			//Set Message
			$this->session->set_flashdata('book_deleted', 'Your book has been deleted.');
			redirect('book');
		}

		public function edit($slug){
			// Check login
			if(!$this->session->userdata('login')) {
				redirect('users/login');
			}

			$data['book'] = $this->Book_Model->get_books($slug);
			if (empty($data['book'])) {
				show_404();
			}

			// check user
			if($this->session->userdata('user_id') != $this->Book_Model->get_books($slug)['user_id']){
				redirect('book');
			}

			$data['categories'] = $this->Book_Model->get_categories();
			$data['title'] = 'Edit Book';

			$this->load->view('templates/header');
			$this->load->view('book/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){
			// Check login
			if(!$this->session->userdata('login')) {
				redirect('users/login');
			}
			
			$this->Book_Model->update_book();

			//Set Message
			$this->session->set_flashdata('book_updated', 'Your book has been updated.');
			redirect('book');
		}
	}