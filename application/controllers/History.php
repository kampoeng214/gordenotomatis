<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_history');

            if($this->session->userdata('status') != "berhasil"){
			redirect("Login");
		}
        }
	public function index()
	{
		// print_r($this->model_history->gethistory()->result());
		$data['data_history'] = $this->Model_history->getHistory();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_history', $data);
		$this->load->view('template/footer');
	}
}
