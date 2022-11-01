<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebPengumuman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("ModelPengumuman");
    }
    public function index()
    {
        $dataPengumuman = $this->ModelPengumuman->getAll();
        $data = array(
            "pengumuman" => $dataPengumuman
        ); 
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['jadwalpelayanan'] = $this->db->get_where('jadwalpelayanan', ['Berkas'])->row_array();
        $data['sosial_media'] = $this->db->get('sosial_media')->row_array();
        $data['tema'] = $this->db->get('tema')->row_array();
        $data['title'] = 'Gereja Jogosetran';
        $this->load->view('web/header', $data);
        $this->load->view('web/pengumuman', $data);
        $this->load->view('web/footer', $data);
    }
}
