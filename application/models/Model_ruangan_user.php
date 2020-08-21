<?php
class Model_ruangan_user extends CI_Model {

        public function getRuangan_user()
        {
        		$this->db->select('*');
        		$this->db->from('tb_ruangan_user');
        		$this->db->join('tb_ruangan','tb_ruangan.id_ruangan = tb_ruangan_user.id_ruangan');
        		$this->db->join('tb_user','tb_ruangan_user.id_user = tb_user.id_user');
                $query = $this->db->get();
                return $query;
        }
}