<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
    public function index() {
        $data['title'] = 'Gereja Jogosetran';
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['profile_gembala'] = $this->db->get('profile_gembala')->row_array();
        $data['warta'] = $this->db->get('warta')->row_array();
        $data['dokumen'] = $this->db->get('dokumen')->row_array();
        $data['gambar'] = $this->db->get('gambar')->row_array();
        $data['jadwalpelayanan'] = $this->db->get('jadwalpelayanan')->row_array();
        $data['pengumuman'] = $this->db->get('pengumuman')->row_array();
        $data['sosial_media'] = $this->db->get('sosial_media')->row_array();
        $data['tema'] = $this->db->get('tema')->row_array();
        $this->load->view('web/header', $data);
        $this->load->view('web/index', $data);
        $this->load->view('web/footer', $data);
    }


    public function gembala(){
        $data['title'] = 'Tentang Gembala';
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['profile_gembala'] = $this->db->get('profile_gembala')->row_array();
        $data['sosial_media'] = $this->db->get('sosial_media')->row_array();
        $this->load->view('web/header', $data);
        $this->load->view('web/gembala', $data);
        $this->load->view('web/footer', $data);

    }



}