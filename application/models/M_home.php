<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_home extends CI_Model {

    public function count_all(){
        return $this->db->get('konten')->num_rows();
    }
}
