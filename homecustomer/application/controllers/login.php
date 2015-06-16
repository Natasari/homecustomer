<?php

class login extends CI_Controller {
	public function index()
	{
		$this->load->view('login_view');
	}
	public function do_login(){
		if($_SERVER['REQUEST_METHOD']== 'POST'){
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			$this->form_validation->set_message('required', '%s must be filled');

			if($this->form_validation->run() == TRUE){
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$this->load->model('login_model');
				$result = $this->login_model->cek_user($username, $password);

				if($result !=0){
					//cek previlege
					if($result['PREV'] == 'A'){
						$this->load->view('admin_view', $result);
					}
					else{
						echo "manager";
					}
					//
				}
				else{
					$this->load->view('login_view');
					echo '<script>alert("Username/password salah!");</script>'; 
				}
			}else{
				$this->load->view('login_view');
			}	
		}else {
			show_404();
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */