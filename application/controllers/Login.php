<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_login');
        }
	public function index()
	{

		$this->load->view('template/header');
		$this->load->view('view_login');
		$this->load->view('template/footer');
	}


  public function masuk(){
	    $username = $this->input->post('username');
	    $password = md5($this->input->post('password'));
		$valid_user = $this->Model_login->verifikasi($username);
		$validation_user = $valid_user->result_array();
		if($validation_user != null){
			$username_valid = $validation_user[0];
			if($username_valid['password'] == $password && $username_valid['role']=="admin"){
				#BERHASIL

				$data_session = array(
					'username' => $username,
					'password' => $password,
					'status'   => 'berhasil',
					'role'	   => $username_valid['role']
				);

				$this->session->set_userdata($data_session);
				redirect('Dashboard');
			}elseif($username_valid['role']!="admin"){
			    $message = 'User Tidak Bisa Login';
			    echo "<script type='text/javascript'>alert('$message');
			            window.location.replace('https://gordenotomatis.000webhostapp.com/Login');
			        </script>";
			}else{
                $message = 'PASSWORD SALAH';
			    echo "<script type='text/javascript'>alert('$message');
			            window.location.replace('https://gordenotomatis.000webhostapp.com/Login');
			          </script>";
			}
		}else{
                $message = 'USERNAME TIDAK ADA';
			    echo "<script type='text/javascript'>alert('$message');
			            window.location.replace('https://gordenotomatis.000webhostapp.com/Login');
			    </script>";
		}
	}
function logout(){
  $this->session->sess_destroy();
  redirect('Login');
}
}