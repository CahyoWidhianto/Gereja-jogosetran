<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sosmed extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("M_sosmed");
	}

	public function index()
    {
        $dataSosmed = $this->M_sosmed->getAll();
        $data = array(
            "sosmeds" => $dataSosmed
        ); 
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Sosial Media"; 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/sosmed/list', $data);
        $this->load->view('templates/footer', $data);
    }

    // untuk me-load tampilan form tambah barang
    public function tambah(){
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Sosial Media"; 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view("content/sosmed/tambah");
    }
    
    public function insert()
    {
        $data = array(
            
            "ig" => $this->input->post("ig"),
            "fb" => $this->input->post("fb"),
            "twt" => $this->input->post("twt")
           
        );
        $id = $this->M_sosmed->insertGetId($data);
        redirect('sosmed');
    }

    public function ubah($id)
    {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Sosial Media"; 
        $sosmed = $this->M_sosmed->getByPrimaryKey($id);
        $data = array(
            "sosmed" => $sosmed,
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('content/sosmed/ubah',$data);
    }

    public function update()
    {
        $id = $this->input->post('id_sosmed');
        $data = array(
           
            "ig" => $this->input->post("ig"),
            "fb" => $this->input->post("fb"),
            "twt" => $this->input->post("twt"),
           
        );
        $this->M_sosmed->update($id, $data);
        redirect('sosmed');
    }

    public function hapus($id) {
        $data['data_gereja'] = $this->db->get('data_gereja')->row_array();
        $data['title'] = "Sosial Media"; 
        $sosmed = $this->M_sosmed->getByPrimaryKey($id);
        $data = array(
            "sosmed" => $sosmed,
        );
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('content/sosmed/hapus',$data);
    }

    public function delete()
    {
        $id = $this->input->post('id_sosmed');
        $this->M_sosmed->delete($id);
        redirect('sosmed');
    }
}
