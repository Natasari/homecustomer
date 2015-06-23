<?php
class admin extends CI_Controller {

	public function index()
	{
		
	}

	public function home_admin(){

		session_start();
		if (!isset($_SESSION['username'])) {
			redirect('login');
			exit();
		}
		else{
			//if the home_admin load in the first time
			if(empty($_POST['waktu'])){
				$tahunbulan = date('Ym');
				$terms = 'all';
			}
			//if the user choose the filter
			else {
				$string = $this->input->post('waktu');
				$waktu = explode(" ", $string);
				$bulan = $waktu[0];
				$tahun = $waktu[1];
				$tahunbulan = $tahun.'0'.$bulan;
				$terms = $this->input->post('terms');
			}

			$sekarang = date('Ym');
			
			//check the time that choosen by admin
			if($tahunbulan == $sekarang  /*||$tahunbulan < $sekarang*/){
				$this->load->model('admin_model');	

				$result['hasilcluster'] = $this->admin_model->homedata($tahunbulan, $terms);
				print_r($result);
				/*$jumlah_bangunan = $this->admin_model->jumlah_bangunan($tahunbulan, $terms);
				$result2['cwireline'] = $this->admin_model->CUST_WIRELINE($tahunbulan, $terms);
				$result3 = $this->admin_model->CUST_INTERNET($tahunbulan, $terms);
				$result4 = $this->admin_model->CUST_TOTAL($tahunbulan, $terms);
				
				print_r($result);
				if($result == NULL){
					$data = array(
					'jombang' => '0',
					'mojokerto' => '0',
					'pasuruan' => '0',
					'sidoarjo' => '0'
					);
				}
				else{
					/*$data = array();
					$a =  count($result);
					for($b=0; $b<$a; $b++){
						if(strcmp($result[$b]['KOTA'],'JOMBANG') ==0){
							echo $result[$b]['KOTA'];
							echo $result[$b]['JML_CLUSTER'];
						}
						
					}
					$data = array(
					'jombang' => $result[0]['JML_CLUSTER'],
					'mojokerto' => $result[1]['JML_CLUSTER'],
					'pasuruan' => $result[2]['JML_CLUSTER'],
					'sidoarjo' => $result[3]['JML_CLUSTER']
					);}*/
				

				/*
				if($jumlah_bangunan == NULL){
					$jml_bangunan = array(
						'bangun_jombang' => '0',
						'bangun_mojokerto' => '0',
						'bangun_pasuruan' => '0',
						'bangun_sidoarjo' => '0'
					);

				}
				else{
					$jml_bangunan = array(
						'bangun_jombang' => $jumlah_bangunan[0]['JML_BNG'],
						'bangun_mojokerto' => $jumlah_bangunan[1]['JML_BNG'],
						'bangun_pasuruan' => $jumlah_bangunan[2]['JML_BNG'],
						'bangun_sidoarjo' => $jumlah_bangunan[3]['JML_BNG']
					);
				}

				if($result2 == NULL){
						$data2 = array(
						'jombang2' => '0',
						'mojokerto2' => '0',
						'pasuruan2' => '0',
						'sidoarjo2' => '0'
						);
				}
				else{
					$data2 = array(
					'jombang2' => $result2[0]['CUST_WIRELINE'],
					'mojokerto2' => $result2[1]['CUST_WIRELINE'],
					'pasuruan2' => $result2[2]['CUST_WIRELINE'],
					'sidoarjo2' => $result2[3]['CUST_WIRELINE']
					);
				}

				if($result3 == NULL){
						$data3 = array(
						'jombang3' => '0',
						'mojokerto3' => '0',
						'pasuruan3' => '0',
						'sidoarjo3' => '0'
						);
				}
				else{
					$data3 = array(
					'jombang3' => $result3[0]['CUST_INTERNET'],
					'mojokerto3' => $result3[1]['CUST_INTERNET'],
					'pasuruan3' => $result3[2]['CUST_INTERNET'],
					'sidoarjo3' => $result3[3]['CUST_INTERNET']
					);
				}

				if($result3 == NULL){
					$data4 = array(
					'jombang4' => '0',
					'mojokerto4' => '0',
					'pasuruan4' => '0',
					'sidoarjo4' =>'0' 
					);	
				}
				else{

					$data4 = array(
					'jombang4' => $result4[0]['CUST_TOTAL'],
					'mojokerto4' => $result4[1]['CUST_TOTAL'],
					'pasuruan4' => $result4[2]['CUST_TOTAL'],
					'sidoarjo4' => $result4[3]['CUST_TOTAL']
					);
				}*/
				

				$this->load->view('home_admin', array_merge($result));

			}
			elseif($tahunbulan > $sekarang){
				echo '<script type="text/javascript">'; 
				echo 'alert("Data Belum Ada");';
				echo '</script>';
				redirect('/admin/home_admin', 'refresh');
			}
			elseif($tahunbulan < $sekarang){
				echo "datatable tidak ada";
			}

		}
	}

	
	public function manage_admin(){
		session_start();
		if (!isset($_SESSION['username'])) {
			redirect('login');
			exit();
		}
		else
		{	$this->load->model('admin_model');
			$result = $data['listuser'] = $this->admin_model->list_user();
			print_r($data['listuser']);
			$this->load->view('manage_admin', $data, $result);		
		}
	}
	public function tambah(){
		session_start();
		if (!isset($_SESSION['username'])) {
			redirect('login');
			exit();
		}
		else{
			$this->load->view('tambah_admin');
		}

	}
	public function insert()
	{
		session_start();
		if($_SERVER['REQUEST_METHOD']== 'POST')
		{
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_message('required', '%s must be filled');
			if($this->form_validation->run() == TRUE)
			{
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				
				$this->load->model('admin_model');
				$cek = $this->admin_model->cekuser($username);

				if($cek == 1){
					echo '<script>alert("Please use another username");</script>';
					$this->load->view('tambah_admin');
				}
				else
				{
					$this->load->model('admin_model');
					$hash = password_hash($password, PASSWORD_DEFAULT);
					
					$result = $this->admin_model->insert_user($username, $hash);

					if($result == 1){
						//
						//echo '<script>alert("New admin success added");</script>';

						echo '<script type="text/javascript">'; 
						echo 'alert("New admin success added");';
						echo '</script>';
						redirect('/admin/tambah', 'refresh');
					}
				}
			}
			else{
					$this->load->view('tambah_admin');
				}
		}
		else{
				$this->load->view('tambah_admin');
		}	
	}

	public function update(){
		session_start();
		$username = $this->input->post('username');
		$this->load->model('admin_model');
		$result = $this->admin_model->info_user($username);
		
		$data = array(
    		'USERNAME' => $result[0]['USERNAME'],
    		'ID_USERS' => $result[0]['ID_USERS'],
    		'PREV' => $result[0]['PREV']
    	);
		$this->load->view('update_admin', $data);
	}

	public function update_insert(){
		
		session_start();
		if($_SERVER['REQUEST_METHOD']== 'POST'){

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('rpassword', 'Re-Type Password', 'required');
			$this->form_validation->set_message('required', '%s must be filled');

			$data = array(
				'USERNAME' => $this->input->post('username')
			);

			if($this->form_validation->run() == TRUE){
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$rpassword = $this->input->post('rpassword');
				
				//checking that password and retype match
				$hash = password_hash($password, PASSWORD_DEFAULT);
				if( (strcmp($password, $rpassword)) == 0){
					$databaru = array (
						'username' => $username,
						'password' => $hash
					);
					$this->load->model('admin_model');
					$result = $this->admin_model->update($databaru);

					if($result == 1){
						echo '<script>alert("Data berhasil disimpan");</script>';
						redirect('/admin/manage_admin', 'refresh');
					}
					else{
						echo '<script>alert("Data gagal disimpan");</script>';
						$this->load->view('update_admin', $data);		
					}
				}
				else{
					echo '<script>alert("Password dan Re-type password tidak sama");</script>';
					$this->load->view('update_admin', $data);		
				}
			}else{
				$this->load->view('update_admin', $data);
			}	
		}else {
			show_404();
		}
	}

	public function logout()
	{	
		session_start();
		unset($_SESSION['username']);
		session_destroy();
		//if no session variable then redirect the user
		if (!isset($_SESSION['username'])) {
			redirect('login');
			exit();
		}
		else{ //cancel the session
			$_SESSION = array(); // Destroy the variables
			session_destroy(); // Destroy the session
			setcookie('PHPSESSID', ", time()-3600,'/', ", 0, 0);//Destroy the cookies
			redirect('login');
			exit();	
			}
	}

	public function profile(){
		session_start();
		$this->load->view('profile');
	}
	public function denah_cluster(){
		session_start();
		$this->load->view('denah_klaster');
	}
	public function data_teknik(){
		session_start();
		$this->load->view('data_teknik');
	}
	public function pelanggan_eksisting(){
		session_start();
		$this->load->view('pelanggan_eksisting');
	}
	public function revenue_per_bulan(){
		session_start();
		$this->load->view('revenue_per_bulan');
	}
	public function rekap_revenue(){
		session_start();
		$this->load->view('rekap_revenue');
	}
	public function standarisasi(){
		session_start();
		if (!isset($_SESSION['username'])) {
			redirect('login');
			exit();
		}
		else
		{	
			if(empty($_POST['waktu'])){
				$tahunbulan = date('Ym');
			}
			else{
				$string = $this->input->post('waktu');
				$waktu = explode(" ", $string);
				$bulan = $waktu[0];
				$tahun = $waktu[1];
				$tahunbulan = $tahun.'0'.$bulan;
			}
			$this->load->model('admin_model');
			$data['listuser'] = $this->admin_model->list_usertelkom($tahunbulan);
			
			$this->load->view('standarisasi', $data);
		}

	}

	public function update_standarisasi(){
		session_start();
		if (!isset($_SESSION['username'])) {
			redirect('login');
			exit();
		}
		else
		{
			if(empty($_POST['waktu'])){
				$tahunbulan = date('Ym');
			}
			else{
				$string = $this->input->post('waktu');
				$waktu = explode(" ", $string);
				$bulan = $waktu[0];
				$tahun = $waktu[1];
				$tahunbulan = $tahun.'0'.$bulan;
			}
			$data = array(
				'NCLI' => $this->input->post('ncli'),
				'NAMA' => $this->input->post('nama'),
				'JALAN' => $this->input->post('jalan'),
				'NO_JALAN' => $this->input->post('no_jalan'),
				'KELURAHAN' => $this->input->post('kelurahan'),
				'KOTA' => $this->input->post('kota')
				);

			$this->load->model('admin_model');

			$result = $this->admin_model->update_usertelkom($data, $tahunbulan);

			$data = array(
	    		'NCLI' => $result[0]['NCLI'],
	    		'NAMA' => $result[0]['NAMA'],
	    		'JALAN' => $result[0]['JALAN'],
	    		'NO_JALAN' => $result[0]['NO_JALAN'],
	    		'KELURAHAN' => $result[0]['KELURAHAN'],
	    		'KOTA' => $result[0]['KOTA']
	    	);

			$this->load->view('update_standarisasi', $data);
		}
	}

	public function search(){
		session_start();
		if (!isset($_SESSION['username'])) {
			redirect('login');
			exit();
		}
		else
		{	
			if(isset($_GET['term']))
			{
				$this->load->model('admin_model');
				$result = $this->admin_model->search(strtolower($_GET['term']));
				foreach ($result as $key => $value) {
				    $baca[] = $value->USERNAME;
				}
				echo json_encode($baca);
			}
			else{
				echo "ga ada";
			}
		}
	}

}
?>
