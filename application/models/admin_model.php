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
				$result = $this->db->query("INSERT INTO USERS (USERS.USERNAME, USERS.PASS) VALUES ('$username','$password')");
				//print_r($result);
		}
	}

?>