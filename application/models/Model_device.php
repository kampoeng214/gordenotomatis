<?php
class Model_device extends CI_Model {

        public function getDevice()
        {
        		$this->db->select('*');
        		$this->db->from('tb_device');
                $query = $this->db->get();
                return $query;
        }
}