<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Device extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_device');

            if($this->session->userdata('status') != "berhasil"){
			redirect("Login");
		}
        }
	public function index()
	{
		$data['data'] = $this->Model_device->getDevice();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_device', $data);
		$this->load->view('template/footer');
	}
	public function show($id)
	{
		$data['data'] = $this->db->select('*')->from('tb_device')->where('id_device',$id)->get();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_device_show',$data);
		$this->load->view('template/footer');		
	}
	public function create()
	{
		if(isset($_POST['submit'])){
			$data_device = array(
				'nama_device' => $this->input->post('nama_device'),
			);
			$this->db->insert('tb_device',$data_device);
			redirect('Device');
		}else{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_device_create');
		$this->load->view('template/footer');		
		}
	}
		public function edit($id)
	{
		if(isset($_POST['submit'])){
			$data_device = array(
				'nama_device' => $this->input->post('nama_device'),
			);
			$this->db->where('id_device',$id)->update('tb_device',$data_device);
			redirect('device');
		}else{
			$data['data_device_user'] = $this->db->select('*')->from('tb_device')->where('id_device',$id)->get();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_device_edit',$data);
		$this->load->view('template/footer');		
		}
	}
	public function delete($id)
	{
		$this->db->where('id_device',$id);
		$this->db->delete('tb_device');
		redirect('Device');
	}
}

