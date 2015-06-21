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
				$result = $this->db->query("INSERT INTO USERS (USERS.USERNAME, USERS.PASS, USERS.PREV) VALUES ('$username','$password', 'A')");
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
			
			if(count($query->result_array) > 0){
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

		public function homedata($tahunbulan, $terms){
			$this->load->database();
			$tabelBulanini = "dossier_datek_sda_" . $tahunbulan;

			if(strcmp($terms, 'all') == 0){
				$query = $this->db->query("SELECT KOTA, COUNT(DISTINCT JALAN) AS JML_CLUSTER FROM $tabelBulanini GROUP BY KOTA");
				return ($query->result_array());
			}
			else{
				$query = $this->db->query( "SELECT DISTINCT KOTA, COUNT(DISTINCT JALAN) AS JML_CLUSTER 
											FROM DOSSIER_DATEK_SDA_201506 DAT, DOSSIER_REV_SDA_201506 REV
											WHERE DAT.NCLI = REV.NCLI AND REV.PLBLCL_TREMS='$terms'
											GROUP BY KOTA");
				return($query->result_array());
			}			
		}

	}


?>