<?php
class admin extends CI_Controller {
	public function index(){
		$this->load->view('coba');
	}

	public function home_admin(){
		session_start();
		if (!isset($_SESSION['username'])) {
			redirect('login');
			//$this->load->view('login_view');
			exit();
		}
		else
		$this->load->view('home_admin');
	}

	public function manage_admin(){
		session_start();
		if (!isset($_SESSION['username'])) {
			redirect('login');
			//$this->load->view('login_view');
			exit();
		}
		else
		$this->load->view('manage_admin');
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
	
	public function logout(){	
		session_start();
		unset($_SESSION['username']);
		session_destroy();
		//if no session variable then redirect the user
		if (!isset($_SESSION['username'])) {
			redirect('login');
			//$this->load->view('login_view');
			exit();
		}
		else{ //cancel the session
			$_SESSION = array(); // Destroy the variables
			session_destroy(); // Destroy the session
			setcookie('PHPSESSID', ", time()-3600,'/', ", 0, 0);//Destroy the cookies
			redirect('login');
			//$this->load->view('login_view');
			exit();	
			}
	}

	//USERS MODEL
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
				
				//to check username wasn't use before
				$this->load->model('admin_model');
				$cek = $this->admin_model->cekuser($username);
				if($cek == 1){
					echo '<script>alert("Please use another username");</script>';
				}
				else{
					$this->load->model('admin_model');
					$hash = password_hash($password, PASSWORD_DEFAULT);
					
					$result = $this->admin_model->insert_user($username, $hash);
					if($result == 1){
						echo '<script>alert("New admin success added");</script>';
					}
				}
			}
			else{
					$this->load->view('tambah_admin');
					echo '<script>alert("username and password must be filled");</script>'; 
				}
		}
		else{
				$this->load->view('tambah_admin');
			}	
	}
}
?>
