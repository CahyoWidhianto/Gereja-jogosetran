<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebJadwal extends CI_Controller
{
    public function index() {
        $data['title'] = 'Gereja Jogosetran';
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['jadwalpelayanan'] = $this->db->get('jadwalpelayanan')->row_array();
        $data['sosial_media'] = $this->db->get('sosial_media')->row_array();
        $data['tema'] = $this->db->get('tema')->row_array();
        $this->load->view('web/header', $data);
        $this->load->view('web/jadwal', $data);
        $this->load->view('web/footer', $data);
    }

}