<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_ruangan');

            if($this->session->userdata('status') != "berhasil"){
			redirect("login");
		}
        }
	public function index()
	{
		$data['data'] = $this->Model_ruangan->getRuangan();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan', $data);
		$this->load->view('template/footer');
	}
	public function show($id)
	{
		$data['data'] = $this->db->select('*')->from('tb_ruangan')->where('id_ruangan',$id)->get();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan_show',$data);
		$this->load->view('template/footer');		
	}
	public function create()
	{
		if(isset($_POST['submit'])){
			$data_ruangan = array(
				'nama_ruangan' => $this->input->post('nama_ruangan'),
			);
			$this->db->insert('tb_ruangan',$data_ruangan);
			redirect('Ruangan');
		}else{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan_create');
		$this->load->view('template/footer');		
		}
	}
		public function edit($id)
	{
		if(isset($_POST['submit'])){
			$data_ruangan = array(
				'nama_ruangan' => $this->input->post('nama_ruangan'),
			);
			$this->db->where('id_ruangan',$id)->update('tb_ruangan',$data_ruangan);
			redirect('Ruangan');
		}else{
			$data['data_ruangan_user'] = $this->db->select('*')->from('tb_ruangan')->where('id_ruangan',$id)->get();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan_edit',$data);
		$this->load->view('template/footer');		
		}
	}
	public function delete($id)
	{
		$this->db->where('id_ruangan',$id);
		$this->db->delete('tb_ruangan');
		redirect('Ruangan');
	}
}

