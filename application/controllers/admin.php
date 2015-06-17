<?php
class admin extends CI_Controller {
	public function index()
	{
	}

	public function home_admin(){
		session_start();
		$this->load->view('home_admin');
	}
	public function manage_admin(){
		session_start();
		$this->load->view('manage_admin');
	}
	public function tambah(){
		session_start();
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
}
?>