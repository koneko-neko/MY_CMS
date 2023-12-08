<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Caraousel extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        if ($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }

	public function index(){   
        $this->db->from('caraousel');
        $caraousel = $this->db->get()->result_array();
        $data = array(
            'caraousel' => $caraousel
        );
		$this->template->load('template_admin', 'admin/caraousel_index', $data);
	}

    public function simpan(){
        $namafoto               = date('YmdHis').'.jpg';
        $config['upload_path']  = 'assets/upload/caraousel';
        $config['max_size']     = 500 * 1024; //3 * 1024 * 1024; //3mb; 0=unlimited
        $config['file_name']    = $namafoto;
        $config['allowed_types']= '*';
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 500 * 1024){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <i class="fa fa-exclamation-circle me-2"></i>Ukuran Foto Terlalu Besar, 
                upload dengan ukuran kurang dari 500kb!
            </div>');
            redirect('admin/caraousel');
        } elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload_data' => $this->upload->data());
        }
        $data = array(
            'judul'         => $this->input->post('judul'), 
            'keterangan'    => $this->input->post('keterangan'),
            'foto'          => $namafoto
        );
        $this->db->insert('caraousel', $data);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>Berhasil menambahkan caraousel!!
        </div>');
        redirect('admin/caraousel');
    }

    public function delete_data($id){
        $filename=FCPATH.'/assets/upload/caraousel/'.$id;
            if(file_exists($filename)){
                unlink("./assets/upload/caraousel/".$id);
            }
        $where = array(
            'foto' => $id 
        );
        $this->db->delete('caraousel', $where);
        $this->session->set_flashdata('alert', '
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <i class="fa fa-exclamation-circle me-2"></i>carousel Berhasil Dihapus!!
        </div>');
        redirect('admin/caraousel');
    }

}
