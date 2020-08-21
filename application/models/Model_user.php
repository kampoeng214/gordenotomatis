<?php
class Model_user extends CI_Model {

        public function getUser()
        {
                $query = $this->db->get('tb_user');
                return $query;
        }
}