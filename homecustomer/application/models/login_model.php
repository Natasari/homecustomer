<?php
	class Login_model extends CI_Model {

		function __construct()
		{
			parent::__construct();
			
		}
		public function cek_user($username, $password) {
			//to give return function that wrong username or password
			$nothing=0;
			//load database from localhost : 127.0.0.1
			$this->load->database(); 
			//get hash password from database
			$hashuserpassword = $this->db->query("SELECT USERS.PASS FROM USERS WHERE USERS.USERNAME='$username'");
			$result = $hashuserpassword->result_array();
			$hash = $result[0]['PASS'];

			//to verify that password and hash password match
			if (password_verify($password, $hash)) {
				$query = $this->db->query("SELECT USERS.ID_USERS, USERS.PREV, USERS.USERNAME FROM USERS WHERE USERS.USERNAME='$username' AND USERS.PASS='$hash'");
		    	$result = $query->result_array();
		    	$data = array(
		    		'USERNAME' => $result[0]['USERNAME'],
		    		'ID_USERS' => $result[0]['ID_USERS'],
		    		'PREV' => $result[0]['PREV']
		    	);
		    	return $data;
			}
			else {
			    return $nothing;
			}
		}
	}

?>