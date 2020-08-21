<?php
class Model_history extends CI_Model {

        public function getHistory()
        {
//                $query = $this->db->get('tb_history');
  //              return $query;
    //            $query = $this->db->select('*')->from('tb_history')->join('tb_monitoring','tb_monitoring.id_monitoring = tb_history.id_monitoring')->get();
//                return $query;
        	$query = $this->db->query("
        			  SELECT a.id_monitoring,b.nama_user,d.nama_ruangan,c.nama_device,a.tanggal,a.status FROM tb_monitoring a 
        			  INNER JOIN tb_user b ON b.id_user = a.id_user
                      INNER JOIN tb_device c ON c.id_device = a.id_device
                      INNER JOIN tb_ruangan d ON d.id_ruangan = a.id_ruangan
        			  ");
        	return $query;
        }
}