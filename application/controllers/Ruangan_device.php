<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_device extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_ruangan');
            $this->load->model('Model_device');
            $this->load->model('Model_ruangan_device');

            if($this->session->userdata('status') != "berhasil"){
			redirect("login");
		}
        }
	public function index()
	{
		$data['data_ruangan_device'] = $this->Model_ruangan_device->getRuangan_device();

		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan_device', $data);
		$this->load->view('template/footer');
	}
	public function show($id)
	{
		$data['data'] = $this->db->select('*')->from('tb_ruangan_device')->where('id',$id)->join('tb_device','tb_device.id_device = tb_ruangan_device.id_device')->join('tb_ruangan','tb_ruangan_device.id_ruangan = tb_ruangan.id_ruangan')->get();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan_show',$data);
		$this->load->view('template/footer');		
	}
	public function create()
	{
		$data['data_ruangan'] = $this->Model_ruangan->getRuangan();
		$data['data_device'] = $this->Model_device->getDevice();
		if(isset($_POST['submit'])){
			$data_ruangan_device = array(
				'id_device' => $this->input->post('nama_device'),
				'id_ruangan' => $this->input->post('nama_ruangan')
			); 
			$this->db->insert('tb_ruangan_device',$data_ruangan_device);
			redirect('Ruangan_device');
		}else{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan_device_create',$data);
		$this->load->view('template/footer');		
		}
	}
		public function edit($id)
	{
		$data['data_ruangan'] = $this->Model_ruangan->getRuangan();
		$data['data_device'] = $this->Model_device->getDevice();
		if(isset($_POST['submit'])){
			$data_ruangan_device = array(
				'id_device' => $this->input->post('nama_device'),
				'id_ruangan' => $this->input->post('nama_ruangan')
			); 
			$this->db->where('id',$id)->update('tb_ruangan_device',$data_ruangan_device);
			redirect('Ruangan_device');
		}else{
			$data['data_ruangan_device'] = $this->db->select('*')->from('tb_ruangan_device')->where('id',$id)->join('tb_device','tb_device.id_device = tb_ruangan_device.id_device')->join('tb_ruangan','tb_ruangan_device.id_ruangan = tb_ruangan.id_ruangan')->get();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan_device_edit',$data);
		$this->load->view('template/footer');		
		}
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tb_ruangan_device');
		redirect('Ruangan_device');
	}
}

