<?php
class Model_ruangan_device extends CI_Model {

        public function getRuangan_device()
        {
        		$this->db->select('*');
        		$this->db->from('tb_ruangan_device');
        		$this->db->join('tb_device','tb_device.id_device = tb_ruangan_device.id_device');
        		$this->db->join('tb_ruangan','tb_ruangan_device.id_ruangan = tb_ruangan.id_ruangan');
                $query = $this->db->get();
                return $query;
        }
}