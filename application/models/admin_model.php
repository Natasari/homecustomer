<?php
	class admin_model extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}
		public function list_user() 
		{
			$this->load->database(); 
			$show = $this->db->query("SELECT USERS.USERNAME, USERS.PREV FROM USERS");
			$result = $show->result();
			return $result;
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

		public function info_user($username){
			$this->load->database();
			$query = $this->db->query("SELECT * FROM USERS WHERE USERS.USERNAME='$username'");
			return $query->result_array();
		}

		public function update($data){
			$username = $data['username'];
			$password = $data['password'];
			$oldusername = $_SESSION['username'];

			$this->load->database();
			$query = $this->db->query("UPDATE USERS SET USERS.USERNAME = '$username',  USERS.PASS = '$password' WHERE USERS.USERNAME = '$oldusername' ");
			return $query;
		}
	}


?>