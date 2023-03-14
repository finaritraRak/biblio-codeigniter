<?php
	class Mention_Model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function create_mention()
		{
			$data = array(
				'name' => $this->input->post('name_mention'), 
				'user_id' => $this->session->userdata('user_id')
			    );
			return $this->db->insert('mentions', $data);
		}

		public function get_mentions(){
			$this->db->order_by('name_mention');
			$query = $this->db->get('mentions');
			return $query->result_array();
		}

		public function get_mention($id){
			$query = $this->db->get_where('mentions', array('id' => $id));
			return $query->row();
		}

		public function delete_mention($id){
			$this->db->where('id', $id);
			$this->db->delete('mentions');
			return true;
		}
	}