<?php

class JadwalPelayanan extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      $this->load->model('M_jadwalPelayanan');
      $this->load->helper('form', 'url');
   }

   public function index()
   {
      $jadwalPelayanan = $this->M_jadwalPelayanan->getAll();
      $data = array(
         "jadwal" => $jadwalPelayanan
      );
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['title'] = "Jadwal Pelayanan";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('jadwal/list', $data);
      $this->load->view('templates/footer', $data);
   }
   public function tambah()
   {
      $data['title'] = "Jadwal Pelayanan";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('jadwal/tambah');
   }

   public function insert()
   {
      $waktu = $this->input->post('waktu');
      $Berkas = $_FILES['file'];
      if ($Berkas = '') {
      } else {
         $config['upload_path']          = './assets/jadwal/';
         $config['allowed_types']        = 'pdf';

         $this->load->library('upload', $config);
         $this->upload->initialize($config);

         if (!$this->upload->do_upload('file')) {
            echo "Upload gagal";
            die();
         } else {
            $Berkas = $this->upload->data('file_name');
         }
      }
      $data = array(
         'Waktu' => $waktu,
         'Berkas' => $Berkas
      );


      $this->M_jadwalPelayanan->insert($data);
      redirect('jadwalpelayanan');
   }

   function edit($id)
   {
      $data['title'] = "Ubah Jadwal";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $where = array('KD_jadwalpelayanan' => $id);
      $jadwalPelayanan = $this->M_jadwalPelayanan->getByPrimaryKey($id);
      $data = array(
         "jadwal" => $jadwalPelayanan
      );
      $this->load->view('jadwal/edit', $data);
   }

   public function update()
   {
      $id = $this->input->post('KD_jadwalpelayanan');
      $waktu = $this->input->post('waktu');
      $Berkas = $_FILES['file'];
      if ($Berkas = '') {
      } else {
         $config['upload_path']          = './assets/jadwal/';
         $config['allowed_types']        = 'pdf';

         $this->load->library('upload', $config);
         $this->upload->initialize($config);

         if (!$this->upload->do_upload('file')) {
            echo "Upload gagal";
            die();
         } else {
            $Berkas = $this->upload->data('file_name');
         }
      }
      $data = array(
         'Waktu' => $waktu,
         'Berkas' => $Berkas
      );


      $this->M_jadwalPelayanan->update($id, $data);
      redirect('jadwalpelayanan');
   }
   public function hapus($id)
   {
      $data['title'] = "Jadwal Pelayanan";
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $jadwalPelayanan = $this->M_jadwalPelayanan->getByPrimaryKey($id);
      $data = array(
         "jadwal" => $jadwalPelayanan
      );
      $this->load->view('jadwal/hapus', $data);
   }

   public function delete()
   {
      $id = $this->input->post('KD_jadwalpelayanan');
      $this->M_jadwalPelayanan->delete($id);
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Di Hapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('jadwalpelayanan');
   }
}
