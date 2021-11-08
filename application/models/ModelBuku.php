<?php

class ModelBuku extends CI_Model{

    public function get_data()
    {
        return $this->db->get('buku')->result_array();
    }
}