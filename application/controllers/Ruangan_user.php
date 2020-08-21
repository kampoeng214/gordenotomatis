<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_user extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_ruangan');
            $this->load->model('Model_user');
            $this->load->model('Model_ruangan_user');

            if($this->session->userdata('status') != "berhasil"){
			redirect("Login");
		}
        }
	public function index()
	{
		$data['data_ruangan_user'] = $this->Model_ruangan_user->getRuangan_user();

		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan_user', $data);
		$this->load->view('template/footer');
	}
	public function show($id)
	{
		$data['data'] = $this->db->select('*')->from('tb_ruangan_user')->where('id',$id)->join('tb_ruangan','tb_ruangan.id_ruangan = tb_ruangan_user.id_ruangan')->join('tb_user','tb_ruangan_user.id_user = tb_user.id_user')->get();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan_show',$data);
		$this->load->view('template/footer');		
	}
	public function create()
	{
		$data['data_user'] = $this->Model_user->getUser();
		$data['data_ruangan'] = $this->Model_ruangan->getRuangan();
		if(isset($_POST['submit'])){
			$data_ruangan_user = array(
				'id_ruangan' => $this->input->post('nama_ruangan'),
				'id_user' => $this->input->post('nama_user')
			); 

			$this->db->insert('tb_ruangan_user',$data_ruangan_user);
			redirect('Ruangan_user');
		}else{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan_user_create',$data);
		$this->load->view('template/footer');		
		}
	}
		public function edit($id)
	{
		$data['data_user'] = $this->Model_user->getUser();
		$data['data_ruangan'] = $this->Model_ruangan->getRuangan();
		if(isset($_POST['submit'])){
			$data_ruangan = array(
				'nama_ruangan' => $this->input->post('nama_ruangan'),
			);
			$this->db->where('id_ruangan',$this->input->post('id_ruangan'))->update('tb_ruangan',$data_ruangan);
			$data_ruangan_user = array(
				'id_ruangan' => $this->input->post('nama_ruangan'),
				'id_user' => $this->input->post('nama_pengguna')
			); 
			$this->db->where('id',$id)->update('tb_ruangan_user',$data_ruangan_user);
			redirect('Ruangan_user');
		}else{
			$data['data_ruangan_user'] = $this->db->select('*')->from('tb_ruangan_user')->where('id',$id)->join('tb_ruangan','tb_ruangan.id_ruangan = tb_ruangan_user.id_ruangan')->join('tb_user','tb_ruangan_user.id_user = tb_user.id_user')->get();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_ruangan_user_edit',$data);
		$this->load->view('template/footer');		
		}
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('tb_ruangan_user');
		redirect('Ruangan_user');
	}
}