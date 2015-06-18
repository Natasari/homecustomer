<?php
class admin extends CI_Controller {
	public function index(){
		$this->load->view('coba');
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