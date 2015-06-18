<?php
	class admin_model extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}
		public function insert_user($username,$password) {
				$this->load->database(); 
				$result = $this->db->query("INSERT INTO USERS (USERS.USERNaME, USERS.PASS) VALUES ('$username','$password')");
				//print_r($result);
		}
		public function search($name){
			$this->load->database();
			$query = $this->db->query("SELECT USERS.USERNAME FROM USERS WHERE USERS.USERNAME LIKE '%{$name}%'");
			return $query->result();
		}
	}

?>