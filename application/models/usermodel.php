<?php
	class Usermodel extends CI_Model {
		function __construct()
		{
			parent::__construct();
		}

		public function authenticate($username='', $password='')
		{
			if(empty($username) || empty($password))
				return FALSE;
			$db = $this->load->database('bootcamp', TRUE);
			$query = $this->db->select()
							->from('users')
							->where('username', $username)
							->get();
			if($query->num_rows<1)
				return FALSE;
			$q = $query->first_row();
			if($password != $q->password)
				return FALSE;
			return $q;
			//print_r($query->result());
		}

	}