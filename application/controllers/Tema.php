<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tema extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_tema');
    }

    public function index()
    {
        $tema = $this->M_tema->getAll();
        $datatema = array(
            'temas' => $tema
        );
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Tema Gereja";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/tema/list_data', $datatema);
        $this->load->view('templates/footer', $data);
    }

    public function Tambah()
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Tema Gereja";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('content/tema/add_data');
    }
    public function insert()
    {


        $config['upload_path']          = './assets/img/tema/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload',  $config);
        $this->load->library('upload', 'pdfgenerator');


        if (!$this->upload->do_upload('userfile')) {
            echo "Gambar Gagal Dikirim";
        } else {


            $gambar = $this->upload->data();
            $gambar = $gambar['file_name'];
            $judul_tema = $this->input->post('judul_tema', TRUE);
            $isi_tema = $this->input->post('isi_tema', TRUE);
            $data = array(
                "judul_tema" => $judul_tema,
                "isi_tema" => $isi_tema,
                "gambar" => $gambar
            );

            $id = $this->M_tema->insertGetId($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
             Data Berhasil Ditambahkan
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>');
            redirect('tema');
        }
    }
    public function edit($id)
    {
        $tema = $this->M_tema->getByPrimaryKey($id);
        $datatema =  array(
            'tema' => $tema
        );
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Tema Gereja";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('content/tema/edit_data', $datatema);
    }

    public function update()
    {
        $config['upload_path']          = './assets/img/tema/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload',  $config);
        $this->load->library('upload', 'pdfgenerator');
        $judul_tema = $this->input->post('judul_tema', TRUE);
        $isi_tema = $this->input->post('isi_tema', TRUE);
        $id = $this->input->post('id_tema');
        $data = array(
            "judul_tema" => $judul_tema,
            "isi_tema" => $isi_tema
        );
        if ($this->upload->do_upload('userfile')) {
            $old_image = $data['tema']['gambar'];
            if ($old_image != 'default.png') {
                unlink(FCPATH . './assets/img/tema/' . $old_image);
            }
            $new_image = $this->upload->data('file_name');
            $this->db->set('gambar', $new_image);
        } else {
            echo $this->upload->display_errors();
        }
        $id = $this->M_tema->update($id, $data);
        // $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //      Data Berhasil Diedit
        //      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //        <span aria-hidden="true">&times;</span>
        //      </button>
        //    </div>');
        redirect('tema');
    }

    public function hapus($id)
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $tema = $this->M_tema->getByPrimaryKey($id);
        $datatema =  array(
            'tema' => $tema
        );
        $data['title'] = "Tema Gereja";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('content/tema/hapus_data', $datatema);
    }


    public function delete()
    {
        $id = $this->input->post('id_tema');
        $this->M_tema->delete($id);
        redirect('tema');
    }
}
