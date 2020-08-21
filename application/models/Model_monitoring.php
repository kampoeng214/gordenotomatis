<?php
class Model_monitoring extends CI_Model {

        public function getMonitoring()

        {
                $query = $this->db->select('*')->from('tb_device')
                		->join('tb_ruangan_device','tb_ruangan_device.id_device = tb_device.id_device')
                		->join('tb_ruangan_user','tb_ruangan_user.id_ruangan = tb_ruangan_device.id_ruangan')
                		->join('tb_user','tb_user.id_user = tb_ruangan_user.id_user')
                		->join('tb_ruangan','tb_ruangan.id_ruangan = tb_ruangan_device.id_ruangan')
                		->get();
          
                return $query;
        }
}