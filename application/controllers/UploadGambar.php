<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UploadGambar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("ModelGambar");
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }
    public function index()
    {
        $gambar = $this->ModelGambar->getAll();
        $dataGambar  =  array(
            "gambars" => $gambar
        );
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Data Foto";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/gambar/list_gambar', $dataGambar);
        $this->load->view('templates/footer', $data);
    }
    public function tambah()
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Data Foto";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('content/gambar/add_gambar');
    }
    public function insert()
    {
        $config['upload_path']          = './assets/img/foto/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|PNG|JPG|JPEG';
        $config['overwrite']            = true;
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gambar Gagal Dikirim";
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $data = array(
                "gambar" => $gambar

            );
            $id = $this->ModelGambar->insertGetId($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
             Data Berhasil Ditambahkan
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
            redirect('UploadGambar');
        }
    }

    public function ubah($id)
    {
        $gambar = $this->ModelGambar->getByPrimaryKey($id);
        $dataGambar = array(
            "gambars" => $gambar
        );
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Data Foto";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('content/gambar/update_gambar', $dataGambar);
    }
    public function update()
    {
        $config['upload_path']          = './assets/img/foto/';
        $config['allowed_types']        = 'gif|jpg|png|jpegjpeg||PNG|JPG|JPEG';
        $config['overwrite']            = true;
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            echo "Gambar Gagal Dikirim";
        } else {
            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $id = $this->input->post('id_gambar');
            $data = array(
                "gambar" => $gambar

            );
            echo var_dump($data);
            echo var_dump($id);
            $id = $this->ModelGambar->update($id, $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
             Data Berhasil Ditambahkan
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
            redirect('UploadGambar');
        }
    }

    public function hapus($id)
    {

        $gambar = $this->ModelGambar->getByPrimaryKey($id);
        $gambar = array(
            "gambar" => $gambar,
        );
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Data Foto";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('content/gambar/delete_gambar', $gambar);
    }

    public function delete()
    {
        $id = $this->input->post('id_gambar');
        $this->ModelGambar->delete($id);
        redirect('uploadgambar');
    }
}
