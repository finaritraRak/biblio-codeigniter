<?php
	class Mention extends CI_Controller
	{
		
		public function create()
		{
			// Check login
			if(!$this->session->userdata('login')) {
				redirect('users/login');
			}
			
			$data['title'] = 'Create Mention';
			$this->form_validation->set_rules('name', 'Name', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('Mentions/create', $data);
				$this->load->view('templates/footer');
			}else{
				$this->Mention_Model->create_mention();

				//Set Message
				$this->session->set_flashdata('mention_created', 'Your mention has been created.');
				redirect('categories/create');
			}
		}

		public function index()
		{
			$data['title'] = 'Mention';

			$data['mentions'] = $this->Mention_Model->get_mentions();

			$this->load->view('templates/header');
			$this->load->view('mentions/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($id = NULL)
		{
			$data['mentions'] = $this->Mention_Model->get_mentions($id);
			if (empty($data['mentions'])) {
				show_404();
			}
			$data['title'] = $data['mentions']['title'];

			$this->load->view('templates/header');
			$this->load->view('mentions/view', $data);
			$this->load->view('templates/footer');
		}

		public function posts($id){
			$data['title'] = $this->Mention_Model->get_mention($id)->name_mention;

			$data['posts'] = $this->Post_Model->get_posts_by_category($id);

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}

		public function delete($id)
		{
			// Check login
			if(!$this->session->userdata('login')) {
				redirect('users/login');
			}

			$this->Mention_Model->delete_mention($id);

			//Set Message
			$this->session->set_flashdata('mention_deleted', 'Your mention has been deleted.');
			redirect('mentions');
		}
	}