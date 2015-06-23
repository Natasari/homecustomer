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
			$tabelUserBulanini = "dossier_datek_sda_" . $tahunbulan;
			$tabelreveBulanini = "dossier_rev_sda_" .$tahunbulan;

			if(strcmp($terms, 'all') == 0){
				$query = $this->db->query( "SELECT * FROM JUMLAHKLASTER");
				return ($query->result());
			}
			else{
				$query = $this->db->query( "SELECT DISTINCT KOTA, COUNT(DISTINCT JALAN) AS JML_CLUSTER 
											FROM $tabelUserBulanini DAT, $tabelreveBulanini REV
											WHERE DAT.NCLI = REV.NCLI AND REV.PLBLCL_TREMS='$terms'
											GROUP BY KOTA");
				return($query->result_array());
			}			
		}

		public function jumlah_bangunan($tahunbulan, $terms){
			$tabelUserBulanini = "dossier_datek_sda_" . $tahunbulan;
			$tabelreveBulanini = "dossier_rev_sda_" .$tahunbulan;
			if(strcmp($terms, 'all') == 0){
				/*$query = $this->db->query(  "SELECT QUE2.KOTA, SUM(QUE2.MAKSIMAL) AS JML_BNG FROM
										  (
										  SELECT DISTINCT $tabelUserBulanini.KOTA, QUE1.MAKSIMAL
										  FROM $tabelUserBulanini,
										    (SELECT JALAN, MAX(NO_JALAN) AS MAKSIMAL FROM $tabelUserBulanini GROUP BY JALAN) QUE1
										  WHERE QUE1.JALAN = $tabelUserBulanini.JALAN 
										  ORDER BY QUE1.MAKSIMAL ASC
										  )QUE2
										GROUP BY QUE2.KOTA");*/
				return (null);	
			}
			else{
				echo "belum ada query";
			}
		}

		public function CUST_WIRELINE($tahunbulan, $terms){
			$this->load->database();
			$tabelBulanini = "dossier_rev_sda_" . $tahunbulan;

			if(strcmp($terms, 'all') == 0){
				$query = $this->db->query("SELECT KANDATEL, COUNT(DISTINCT NCLI) AS CUST_WIRELINE FROM $tabelBulanini where cprod=1 GROUP BY KANDATEL");
				return ($query->result_array());
			}
					
		}

		public function CUST_INTERNET($tahunbulan, $terms){
			$this->load->database();
			$tabelBulanini = "dossier_rev_sda_" . $tahunbulan;

			if(strcmp($terms, 'all') == 0){
				$query = $this->db->query("SELECT KANDATEL, COUNT(DISTINCT NCLI) AS CUST_INTERNET FROM $tabelBulanini WHERE cprod=11 GROUP BY KANDATEL");
				return ($query->result_array());
			}
					
		}

		public function CUST_TOTAL($tahunbulan, $terms){
			$this->load->database();
			$tabelBulanini = "dossier_rev_sda_" . $tahunbulan;

			if(strcmp($terms, 'all') == 0){
				$query = $this->db->query("SELECT KANDATEL, COUNT(DISTINCT NCLI) AS CUST_TOTAL FROM $tabelBulanini WHERE cprod=11 or cprod=1 GROUP BY KANDATEL");
				return ($query->result_array());
			}
					
		}


		public function list_usertelkom($tahunbulan) 
		{
			$tabelUserBulanini = "dossier_datek_sda_" . $tahunbulan;
			$tabelreveBulanini = "dossier_rev_sda_" .$tahunbulan;
			$this->load->database(); 
			$show = $this->db->query("SELECT DATEK.NCLI, DATEK.NAMA, DATEK.JALAN, DATEK.NO_JALAN, DATEK.KOTA, DATEK.KELURAHAN FROM $tabelUserBulanini DATEK");
			$result = $show->result();
			return $result;
		}

		public function update_usertelkom($data, $tahunbulan){
			$tabelUserBulanini = "dossier_datek_sda_" . $tahunbulan;
			$tabelreveBulanini = "dossier_rev_sda_" .$tahunbulan;
			
			$ncli = $data['NCLI'];
			$nama = $data['NAMA'];
			$jalan = $data['JALAN'];
			$no_jalan= $data['NO_JALAN'];
			$kelurahan = $data['KELURAHAN'];
			$kota = $data['KOTA'];

			

			if($no_jalan == null){
				$is = "is null";
			}
			else{
				$is = "='$no_jalan'";
			}

			if($jalan == null){
				$isj = "is null";
			}
			else{
				$isj = "='$jalan'";
			}
			
			$this->load->database();
			$query = $this->db->query("SELECT DATEK.NCLI, DATEK.NAMA, DATEK.JALAN, DATEK.NO_JALAN, DATEK.KELURAHAN, DATEK.KOTA
										 FROM $tabelUserBulanini DATEK 
										 WHERE DATEK.NCLI='$ncli' 
										 AND DATEK.NAMA= '$nama'
										 AND DATEK.JALAN $isj 
										 AND DATEK.NO_JALAN $is 
										 AND DATEK.KELURAHAN='$kelurahan' 
										 AND DATEK.KOTA='$kota'");
			return($query->result_array());
		}


	}


?>