<?php

class Warta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("ModelWarta");
    }

    public function index()
    {
        $dataWarta = $this->ModelWarta->getAll();
        $data = array(
            "wartas" => $dataWarta
        );
        $data['title'] = "Warta";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/warta/v_list_warta', $data);
        $this->load->view('templates/footer', $data);
    }

    //untuk meload  form tambah tampilan barang
    public function tambah()
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Tambah Warta";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view("content/warta/v_add_warta");
    }

    public function insert()
    {
        $config['upload_path']          = './assets/img/warta/';
        $config['allowed_types']        = 'jpg';
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
            $judul_warta = $this->input->post('judul_warta', TRUE);
            $ayat = $this->input->post('ayat', TRUE);
            $isi_warta = $this->input->post('isi_warta', TRUE);
            $tgl_warta = $this->input->post('tgl_warta', TRUE);
            $data = array(
                "judul_warta" => $judul_warta,
                "ayat" => $ayat,
                "isi_warta" => $isi_warta,
                "tgl_warta" => $tgl_warta,
                "gambar" => $gambar
            );

            $id = $this->ModelWarta->insertGetId($data);
            // $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            //    Data Berhasil Ditambahkan

            //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //      <span aria-hidden="true">&times;</span>
            //    </button>
            //  </div>');
            redirect('warta');
        }
    }
    //untuk meload tampilan form update
    public function ubah($id)
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Ubah Warta";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $warta = $this->ModelWarta->getByPrimaryKey($id);
        $data = array(
            "warta" => $warta,
        );
        $this->load->view('content/warta/v_update_warta', $data);
    }

    public function update()
    {

        $config['upload_path']          = './assets/img/warta/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload',  $config);
        $judul_warta = $this->input->post('judul_warta', TRUE);
        $ayat = $this->input->post('ayat', TRUE);
        $isi_warta = $this->input->post('isi_warta', TRUE);
        $tgl_warta = $this->input->post('tgl_warta', TRUE);
        $id = $this->input->post('kd_warta');
        $data = array(
            "judul_warta" => $judul_warta,
            "ayat" => $ayat,
            "isi_warta" => $isi_warta,
            "tgl_warta" => $tgl_warta
        );
        if ($this->upload->do_upload('userfile')) {
            $old_image = $data['warta']['gambar'];
            if ($old_image != 'default.png') {
                unlink(FCPATH . './assets/img/warta/' . $old_image);
            }
            $new_image = $this->upload->data('file_name');
            $this->db->set('gambar', $new_image);
        } else {
            echo $this->upload->display_errors();
        }

        $id = $this->ModelWarta->update($id, $data);
        // $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //    Data Berhasil Ditambahkan

        //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //      <span aria-hidden="true">&times;</span>
        //    </button>
        //  </div>');
        redirect('warta');
    }

    public function hapus($id)
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Hapus Warta";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $warta = $this->ModelWarta->getByPrimaryKey($id);
        $dataWarta = array(
            "wartas" => $warta
        );
        $this->load->view('content/warta/v_delete_warta', $dataWarta);
    }

    public function delete()
    {
        $id = $this->input->post('kd_warta');
        $this->ModelWarta->delete($id);
        redirect('warta');
    }
}
