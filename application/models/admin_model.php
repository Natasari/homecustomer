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
<<<<<<< HEAD
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
=======
				$result = $this->db->query("INSERT INTO USERS (USERS.USERNAME, USERS.PASS) VALUES ('$username','$password')");
				//print_r($result);
>>>>>>> 9f97c9d5acc68ad6603987406a759b6292f8c611
		}
	}

?>