<?php
class admin extends CI_Controller {
	public function index()
	{
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
				$result = $this->admin_model->insert_user($username, $password);
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
