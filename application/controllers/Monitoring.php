<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_monitoring');
            
            if($this->session->userdata('status') != "berhasil"){
			redirect("Login");
            }
		}
	public function index()
	{

		$data['data_monitoring'] = $this->Model_monitoring->getMonitoring();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_monitoring', $data);
		$this->load->view('template/footer');
	}
}
