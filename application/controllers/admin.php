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
			if($tahunbulan == $sekarang || $tahunbulan < $sekarang){
				$this->load->model('admin_model');	
				$result = $this->admin_model->homedata($tahunbulan, $terms);
				if($result == NULL){
					$data = array(
					'jombang' => '0',
					'mojokerto' => '0',
					'pasuruan' => '0',
					'sidoarjo' => '0'
					);
				}
				else{
					$data = array(
					'jombang' => $result[0]['JML_CLUSTER'],
					'mojokerto' => $result[1]['JML_CLUSTER'],
					'pasuruan' => $result[2]['JML_CLUSTER'],
					'sidoarjo' => $result[3]['JML_CLUSTER']
					);	
				}
				
				$this->load->view('home_admin', $data);	
			}
			elseif($tahunbulan > $sekarang){
				echo '<script type="text/javascript">'; 
				echo 'alert("Data Belum Ada");';
				echo '</script>';
				redirect('/admin/home_admin', 'refresh');
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
	public function search(){
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
?>
