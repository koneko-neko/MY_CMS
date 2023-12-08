<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class kategori_model extends CI_Model {

    public function simpan(){   
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->db->insert('kategori', $data);
	}

    public function update(){
        $where = array('id_kategori' => $this->input->post('id_kategori'));
        $data = array('nama_kategori' => $this->input->post('nama_kategori'));
        $this->db->update('kategori', $data, $where);
    }
}