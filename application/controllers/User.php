<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            $this->load->model('Model_user');
            if($this->session->userdata('status') != "berhasil" || $this->session->userdata('role')=='user'){
			redirect("Login");
		}
        }
	public function index()
	{
		$data['data'] = $this->Model_user->getUser();
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_user', $data);
		$this->load->view('template/footer');
	}
	public function show($id)
	{
		$data['data'] = $this->db->where('id_user',$id)->get('tb_user');
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_user_show',$data);
		$this->load->view('template/footer');		
	}
	public function create()
	{
		if(isset($_POST['submit'])){
			$data = array(
				'nama_user' => $this->input->post('nama_user'),
				'password' => md5($this->input->post('password')),
				'username' => $this->input->post('username'),
				'role'	=> $this->input->post('role')
			);
			$this->db->insert('tb_user',$data);
			redirect('User');
		}else{
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_user_create');
		$this->load->view('template/footer');		
		}
	}
	public function edit($id)
	{
		if(isset($_POST['submit'])){
			$data = array(
				'nama_user' => $this->input->post('nama_user'),
				'password' => md5($this->input->post('password')),
				'username' => $this->input->post('username'),
				'role'	=> $this->input->post('role')
			);
			$this->db->where('id_user',$id)->update('tb_user',$data);
			redirect('User');
		}else{
			$data['data'] = $this->db->where('id_user',$id)->get('tb_user');
		$this->load->view('template/header');
		$this->load->view('template/navbar');
		$this->load->view('template/sidebar');
		$this->load->view('view_user_edit',$data);
		$this->load->view('template/footer');		
		}
	}
	public function delete($id)
	{
		$this->db->where('id_user',$id);
		$this->db->delete('tb_user');
		redirect('User');
	}
}
