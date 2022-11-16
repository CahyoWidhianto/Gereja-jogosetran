<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Ibadah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("m_ibadah");
    }

    public function index()
    {
        $dataIbadah = $this->m_ibadah->getAll();
        $data = array(
            "ibadah" => $dataIbadah
        );
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Jadwal Ibadah";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/ibadah/list', $data);
        $this->load->view('templates/footer', $data);
    }

    // untuk me-load tampilan form tambah barang
    public function tambah()
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Jadwal Ibadah";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view("content/ibadah/tambah");
    }

    public function insert()
    {
        $data = array(

            "hari" => $this->input->post("hari"),
            "jam" => $this->input->post("waktu"),
            "nama" => $this->input->post("nama"),

        );
        $id = $this->m_ibadah->insertGetId($data);
        redirect('Ibadah');
    }

    public function ubah($id)
    {
        $ibadah = $this->m_ibadah->getByPrimaryKey($id);
        $data = array(
            "ibadah" => $ibadah,
        );
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Jadwal Ibadah";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('content/ibadah/ubah', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data = array(

            "hari" => $this->input->post("hari"),
            "jam" => $this->input->post("waktu"),
            "nama" => $this->input->post("nama"),

        );
        $this->m_ibadah->update($id, $data);
        redirect('Ibadah');
    }

    public function hapus($id)
    {
        $ibadah = $this->m_ibadah->getByPrimaryKey($id);
        $data = array(
            "ibadah" => $ibadah,
        );
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Jadwal Ibadah";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('content/ibadah/hapus', $data);
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $this->m_ibadah->delete($id);
        redirect('Ibadah');
    }
}
