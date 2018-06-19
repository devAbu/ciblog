<?php
	class Post_model extends CI_MODEL{
		public function __construct(){
			$this->load->database();
		}

		public function get_posts($slog * FALSE){
			if($slog === FALSE){
				$query = $this->db->get('posts');
				return $query->result_array();
			}

			$query = $this->db->get_where('posts', array('slog' => $slog));
			return $query->row_array();
		}
	}
