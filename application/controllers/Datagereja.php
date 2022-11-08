<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Datagereja extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->model("ModelGereja");
   }
   public function index()
   {
      $dataGereja = $this->ModelGereja->getAll();
      $data = array(
         "gerejas" => $dataGereja
      );
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
      $data['title'] = "Data Gereja";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('content/dataGereja/list_data_Gereja', $data);
      $this->load->view('templates/footer', $data);
   }

   public function tambah()
   {
      $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
      $data['title'] = "Data Gereja";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('content/dataGereja/tambah_data_Gereja');
   }

   public function insert()
   {
      $config['upload_path']          = './assets/img/Logo/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 10000;
      $config['max_width']            = 10000;
      $config['max_height']           = 10000;

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('userfile')) {
         echo "data gagal dikirim";
      } else {
         $url_logo_gereja = $this->upload->data();
         $url_logo_gereja = $url_logo_gereja['file_name'];
         $nama_gereja = $this->input->post('nama_gereja', TRUE);
         $tgl_berdiri_gereja  = $this->input->post('tgl_berdiri_gereja', TRUE);
         $visi_gereja = $this->input->post('visi_gereja', TRUE);
         $misi_gereja  = $this->input->post('misi_gereja', TRUE);
         $deskripsi_gereja = $this->input->post('deskripsi_gereja', TRUE);
         $alamat_gereja  = $this->input->post('alamat_gereja', TRUE);
         $kontak_gereja = $this->input->post('kontak_gereja', TRUE);
         $email_gereja = $this->input->post('email_gereja', TRUE);
         $data = array(
            "nama_gereja" => $nama_gereja,
            "tgl_berdiri_gereja" => $tgl_berdiri_gereja,
            "visi_gereja" => $visi_gereja,
            "misi_gereja" => $misi_gereja,
            "deskripsi_gereja" => $deskripsi_gereja,
            "alamat_gereja" => $alamat_gereja,
            "kontak_gereja" => $kontak_gereja,
            "email_gereja" => $email_gereja,
            "url_logo_gereja" => $url_logo_gereja
         );
         $id = $this->ModelGereja->insertGetId($data);
         redirect('datagereja');
      }
   }

   public function ubah($id)
   {
      $datagereja = $this->ModelGereja->getByPrimaryKey($id);
      $data = array(
         "datagereja" => $datagereja,
      );
      $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
      $data['title'] = "Data Gereja";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('content/dataGereja/ubah_data_Gereja', $data);
   }

   public function update()
   {
      $config['upload_path']          = './assets/img/Logo/';
      $config['allowed_types']        = 'gif|jpg|png|jpeg';
      $config['max_size']             = 10000;
      $config['max_width']            = 10000;
      $config['max_height']           = 10000;

      $this->load->library('upload', $config);
      $nama_gereja = $this->input->post('nama_gereja', TRUE);
      $tgl_berdiri_gereja  = $this->input->post('tgl_berdiri_gereja', TRUE);
      $visi_gereja = $this->input->post('visi_gereja', TRUE);
      $misi_gereja  = $this->input->post('misi_gereja', TRUE);
      $deskripsi_gereja = $this->input->post('deskripsi_gereja', TRUE);
      $alamat_gereja  = $this->input->post('alamat_gereja', TRUE);
      $kontak_gereja = $this->input->post('kontak_gereja', TRUE);
      $email_gereja = $this->input->post('email_gereja', TRUE);
      $id = $this->input->post('id_gereja');
      $data = array(
         "nama_gereja" => $nama_gereja,
         "tgl_berdiri_gereja" => $tgl_berdiri_gereja,
         "visi_gereja" => $visi_gereja,
         "misi_gereja" => $misi_gereja,
         "deskripsi_gereja" => $deskripsi_gereja,
         "alamat_gereja" => $alamat_gereja,
         "kontak_gereja" => $kontak_gereja,
         "email_gereja" => $email_gereja
      );

      if ($this->upload->do_upload('userfile')) {
         $old_image = $data['data_gereja']['url_logo_gereja'];
         if ($old_image != 'default.png') {
            unlink(FCPATH . './assets/img/Logo/' . $old_image);
         }
         $new_image = $this->upload->data('file_name');
         $this->db->set('url_logo_gereja', $new_image);
      } else {
         echo $this->upload->display_errors();
       }
      $this->ModelGereja->update($id, $data);
      redirect('dataGereja');
   }

   public function hapus($id)
   {
      $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
      $data['title'] = "Hapus Data Gereja";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $datagereja = $this->ModelGereja->getByPrimaryKey($id);
      $data = array(
         "datagereja" => $datagereja,
      );
      $this->load->view('content/dataGereja/delete_data', $data);
   }

   public function delete()
   {
      $id = $this->input->post('id_gereja');
      $this->ModelGereja->delete($id);
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Di Hapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('datagereja');
   }
}
