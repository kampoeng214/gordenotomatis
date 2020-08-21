<?php
class Model_ruangan extends CI_Model {

        public function getRuangan()
        {
        		$this->db->select('*');
        		$this->db->from('tb_ruangan');
                $query = $this->db->get();
                return $query;
        }
}