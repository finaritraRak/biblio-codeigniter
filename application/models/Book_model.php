<?php
	class Book_Model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function get_books($slug = FALSE, $limit = FALSE, $offset = FALSE)
		{
			if ($limit) {
				$this->db->limit($limit, $offset);
			}

			if($slug === FALSE){
				$this->db->order_by('books.id', 'DESC');
				$this->db->join('categories', 'categories.id = books.category_id');
				$query = $this->db->get('books');
				return $query->result_array(); 
			}

			$query = $this->db->get_where('books', array('slug' => $slug));
			return $query->row_array();
		}

		public function create_book($book_file)
		{
			$slug = url_title($this->input->book('title'), "dash", TRUE);

			$data = array(
				'title' => $this->input->book('title'), 
			    'slug' => $slug,
			    'description' => $this->input->book('description'),
			    'category_id' => $this->input->book('category_id'),
			    'book_file' => $book_file,
			    'user_id' => $this->session->userdata('user_id')
			    );
			return $this->db->insert('books', $data);
		}

		public function delete_book($id)
		{
			$file_file_name = $this->db->select('book_file')->get_where('books', array('id' => $id))->row()->book_file;
			$cwd = getcwd(); // save the current working directory
			$file_file_path = $cwd."\\assets\\files\\books\\";
			chdir($file_file_path);
			unlink($file_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('books');
			return true;
		}

		public function update_book(){
			$slug = url_title($this->input->book('title'), "dash", TRUE);

			$data = array(
				'title' => $this->input->book('title'), 
			    'slug' => $slug,
			    'description' => $this->input->book('description'),
			    'category_id' => $this->input->book('category_id')
			    );
			$this->db->where('id', $this->input->book('id'));
			return $this->db->update('books', $data);
		}

		public function get_categories(){
			$this->db->order_by('name');
			$query = $this->db->get('categories');
			return $query->result_array();
		}

		public function get_books_by_category($category_id){
			$this->db->order_by('books.id', 'DESC');
			$this->db->join('categories', 'categories.id = books.category_id');
			$query = $this->db->get_where('books', array('category_id' => $category_id));
			return $query->result_array(); 
		}
	}