<?php
class admin extends CI_Controller {
<<<<<<< HEAD
	public function index(){
=======
	public function index()
	{
>>>>>>> 9f97c9d5acc68ad6603987406a759b6292f8c611
	}

	public function home_admin(){
		session_start();
		if (!isset($_SESSION['username'])) {
			redirect('login');
			exit();
		}
		else
		$this->load->view('home_admin');
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
			//$this->load->view('login_view');
			exit();
		}
		else
		$this->load->view('tambah_admin');

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
				//echo $username;
				//echo $password;
				$this->load->model('admin_model');
<<<<<<< HEAD
				$cek = $this->admin_model->cekuser($username);
				if($cek == 1){
					echo '<script>alert("Please use another username");</script>';
					$this->load->view('tambah_admin');
				}
				else{
					$this->load->model('admin_model');
					$hash = password_hash($password, PASSWORD_DEFAULT);
					
					$result = $this->admin_model->insert_user($username, $hash);
					if($result == 1){
						echo '<script>alert("New admin success added");</script>';
					}
				}
=======
				$result = $this->admin_model->insert_user($username, $password);
>>>>>>> 9f97c9d5acc68ad6603987406a759b6292f8c611
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
	public function logout()
	{	/*session_start();
		session_unset();
		session_destroy();
		$this->load->view('login_view');
		*/
		//redirect('login_view');

		session_start();
		//echo $_SESSION['username'];
		//session_unset();
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
}
?>
