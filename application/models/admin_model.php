<?php
	class admin_model extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}
		//model USERS
		public function list_user($username) 
		{
			$this->load->database(); 
			$show = $this->db->query("SELECT USERS.USERNAME FROM USERS ASC");
			$result = $show->result_array();
		}

		public function insert_user($username,$password) {
				$this->load->database(); 
				$result = $this->db->query("INSERT INTO USERS (USERS.USERNaME, USERS.PASS, USERS.PREV) VALUES ('$username','$password', 'A')");
				return $result;
		}

		public function search($username){
			$this->load->database();
			$query = $this->db->query("SELECT USERS.USERNAME FROM USERS WHERE USERS.USERNAME LIKE '%{$username}%'");
			return $query->result();
		}

		public function cekuser($username){
			$this->load->database();
			$query = $this->db->query("SELECT USERS.USERNAME FROM USERS WHERE USERS.USERNAME='$username'");
			if(count($query) > 0){
				return 1;
			}
		}
	}

?>