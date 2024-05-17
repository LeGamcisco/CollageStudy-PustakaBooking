<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelKelompok extends CI_Model {

    public function get_data_by_ids($ids) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where_in('id', $ids);
        $query = $this->db->get();
        return $query->result();
    }
}
