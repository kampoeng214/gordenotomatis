<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            //$this->load->model('model_user');
        }
	public function open_all()
	{
			$query = $this->db->get('tb_eks');

			foreach ($query->result() as $row)
            {
                echo json_encode($row);
            }
	}
	public function get()
	{
            $data = array(
	                'input' =>13    
	            );
	        
	        $this->db->where('id',1);
			$this->db->update('tb_eks',$data);	
	}
	public function close_all()
	{
            $data = array(
	                'input' => 14    
	            );
	        
	        $this->db->where('id',1);
			$this->db->update('tb_eks',$data);		
	}

	public function input()
	{
	        $data = array(
	                'input' => $_POST['input']    
	            );
	        
	        $this->db->where('id',1);
			$this->db->update('tb_eks',$data);	
	}
	
		public function input_user()
	{
	    if($_POST['username'] == 'eka123'){
	        if($_POST['input'] == 1){
	            $_POST['input'] = 1;
	        }elseif($_POST['input'] == 2){
	            $_POST['input'] = 2;
	        }elseif($_POST['input'] == 3){
	            $_POST['input'] = 3;
	        }elseif($_POST['input'] == 4){
	            $_POST['input'] = 4;
	        }elseif($_POST['input'] == 5){
	            $_POST['input'] = 9;
	        }elseif($_POST['input'] == 6){
	            $_POST['input'] = 10;
	        }
	    
	    }elseif($_POST['username'] == 'sukron123'){
	        if($_POST['input'] == 1){
	            $_POST['input'] = 5;
	        }elseif($_POST['input'] == 2){
	            $_POST['input'] = 6;
	        }elseif($_POST['input'] == 3){
	            $_POST['input'] = 7;
	        }elseif($_POST['input'] == 4){
	            $_POST['input'] = 8;
	        }elseif($_POST['input'] == 5){
	            $_POST['input'] = 11;
	        }elseif($_POST['input'] == 6){
	            $_POST['input'] = 12;
	        }
	    }
	        $data = array(
	                'input' => $_POST['input']    
	            );
	            
	            $data1 = array(
	                'nama' => $_POST['username']    
	            );
	            $this->db->insert('tb_test',$data1);
	        
	        $this->db->where('id',1);
			$this->db->update('tb_eks',$data);	
	}

		public function history()
	{	
		$id_user = $_POST["id_user"];
		$id_ruangan = $_POST["id_ruangan"];
		$id_device = $_POST["id_device"];
		$status = 'berhasil';
		$tanggal = date('Y:m:d h:i:s');
		$data = array(
				'id_user' => $id_user,
				'id_ruangan' => $id_ruangan,
				'id_device' => $id_device,
				'status' => $status,
				'tanggal' => $tanggal
		);
		$this->db->insert('tb_monitoring',$data);	
	}

		public function monitoring()
	{	
		
		$data = array(
				'status' => $_POST["status"]
		);
		$this->db->where('id_device',$_POST["id_device"]);
		$this->db->update('tb_device',$data);	
	}
	
		public function monitoring_all()
	{	
			$query = $this->db->get('tb_monitoring');

			header('Content-type: application/json');
				$arr = array('status' => 'success', 'data' => $query->result());
                echo json_encode($arr,200);
            }
}
