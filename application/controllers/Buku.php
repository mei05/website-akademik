<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Buku_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Buku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->Buku_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("buku/vw_buku", $data);
        $this->load->view("layout/footer", $data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Buku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->Buku_model->get();
        $this->form_validation->set_rules('judul', 'Judul', 'required', ['required' => 'Judul Buku Wajib di isi']);
        $this->form_validation->set_rules('penulis', 'Penulis', 'required', ['required' => 'Penulis Wajib di isi']);
        $this->form_validation->set_rules('stok', 'Stok', 'required', ['required' => 'Stok Buku Wajib di isi']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga Buku Wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("buku/vw_tambah_buku", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'penulis' => $this->input->post('penulis'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/buku/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Buku_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku Berhasil Ditambah!</div>');
            redirect('Buku');
        }
    }
    public function hapus($id)
    {
        $this->Buku_model->delete($id);
        $error = $this->db->error();

        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle">
            </i>Data Buku tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle">
            </i>Data Buku Berhasil Dihapus!</div>');
        }
        redirect('Buku');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Buku";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['buku'] = $this->Buku_model->getById($id);
        $this->form_validation->set_rules('judul', 'Judul', 'required', ['required' => 'Judul Buku Wajib di isi']);
        $this->form_validation->set_rules('penulis', 'Penulis', 'required', ['required' => 'Penulis Wajib di isi']);
        $this->form_validation->set_rules('stok', 'Stok', 'required', ['required' => 'Stok Buku Wajib di isi']);
        $this->form_validation->set_rules('harga', 'Harga', 'required', ['required' => 'Harga Buku Wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("buku/vw_ubah_buku", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'penulis' => $this->input->post('penulis'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/buku/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Buku_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Buku Berhasil Diubah!</div>');
            redirect('Buku');
        }
    }
}
