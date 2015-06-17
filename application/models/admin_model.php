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
	}

?>