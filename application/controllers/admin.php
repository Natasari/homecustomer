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
	public function insert(){
		session_start();
		$this->load->view('tambah_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->load->model('login_model');
		$result = $this->login_model->insert_user($username, $password);
	}
}
?>