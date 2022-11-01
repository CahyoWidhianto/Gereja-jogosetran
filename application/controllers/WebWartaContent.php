<?php
defined('BASEPATH') or exit('No direct script access allowed');

class webwartaContent extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model("ModelWarta");
    }

    public function index($id)
    {
        $warta = $this->ModelWarta->getByPrimaryKey($id);
        $data = array(
            "warta" => $warta,
        );
        $data['title'] = 'Gereja Jogosetran';
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['sosial_media'] = $this->db->get('sosial_media')->row_array();
        $data['tema'] = $this->db->get('tema')->row_array();
        $this->load->view('web/header', $data);
        $this->load->view('web/wartacontent', $data);
        $this->load->view('web/footer', $data);
    }
}
