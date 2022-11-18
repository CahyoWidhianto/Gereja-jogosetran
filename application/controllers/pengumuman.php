<?php
defined('BASEPATH') or exit('No direct script access allowed');


class pengumuman extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("ModelPengumuman");
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $dataPengumuman = $this->ModelPengumuman->getAll();
        $data = array(
            "pengumumans" => $dataPengumuman
        );
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Pengumuman";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/pengumuman/v_list_pengumuman', $data);
        $this->load->view('templates/footer', $data);
    }

    // untuk me-load tampilan form tambah barang
    public function tambah()
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Pengumuman";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view("content/pengumuman/v_add_pengumuman");
    }

    public function insert()
    {
        $data = array(

            "isi_pengumuman" => $this->input->post("isi_pengumuman"),
            "tgl_pengumuman" => $this->input->post("tgl_pengumuman")

        );
        $id = $this->ModelPengumuman->insertGetId($data);
        redirect('pengumuman');
    }

    public function ubah($id)
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Ubah Pengumuman";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $pengumuman = $this->ModelPengumuman->getByPrimaryKey($id);
        $data = array(
            "pengumuman" => $pengumuman,
        );
        $this->load->view('content/pengumuman/v_update_pengumuman', $data);
    }

    public function update()
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $id = $this->input->post('id_pengumuman');
        $data = array(

            "isi_pengumuman" => $this->input->post("isi_pengumuman"),
            "tgl_pengumuman" => $this->input->post("tgl_pengumuman"),

        );
        $this->ModelPengumuman->update($id, $data);
        redirect('pengumuman');
    }

    public function hapus($id)
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Hapus Pengumuman";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $pengumuman = $this->ModelPengumuman->getByPrimaryKey($id);
        $dataPengumuman = array("pengumumans" => $pengumuman);
        $this->load->view('content/pengumuman/v_delete_pengumuman', $dataPengumuman);
    }

    public function delete()
    {
        $id = $this->input->post('id_pengumuman');
        $this->ModelPengumuman->delete($id);
        redirect('pengumuman');
    }
}
