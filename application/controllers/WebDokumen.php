<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebDokumen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_dokumen');
        $this->load->helper('form', 'url');
    }
    
    public function index() {
        $data['title'] = 'Gereja Jogosetran';
        $data['dokumen'] = $this->m_dokumen->show_data()->result();
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['sosial_media'] = $this->db->get('sosial_media')->row_array();
        $data['tema'] = $this->db->get('tema')->row_array();
        $this->load->view('web/header', $data);
        $this->load->view('web/dokumen', $data);
        $this->load->view('web/footer', $data);
    }

}