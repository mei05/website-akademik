<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Prodi_model');
        $this->load->model('Jurusan_model');
        $this->load->model('Dosen_model');
    }
    function index()
    {
        $data['judul'] = "Halaman Prodi";
        $data['prodi'] = $this->Prodi_model->get();
        $data['jurusan'] = $this->Jurusan_model->get();
        $data['dosen'] = $this->Dosen_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("prodi/vw_prodi", $data);
        $this->load->view("layout/footer", $data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->get();
        $data['jurusan'] = $this->Jurusan_model->get();
        $data['dosen'] = $this->Dosen_model->get();
        $this->form_validation->set_rules('nama', 'Nama Prodi', 'required', ['required' => 'Nama Prodi Wajib di isi']);
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', ['required' => 'Ruangan Prodi Wajib di isi']);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', ['required' => 'Jurusan Prodi Wajib di isi']);
        $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', ['required' => 'Akreditasi Prodi Wajib di isi']);
        $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', ['required' => 'Nama Kaprodi Wajib di isi']);
        $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|numeric', [
            'required' => 'Tahun Berdiri Prodi Wajib di isi',
            'numeric' => 'Tahun Berdiri Prodi Harus Angka',
        ]);
        $this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', ['required' => 'Output Lulusan Prodi Wajib di isi']);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("prodi/vw_tambah_prodi", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan'),
                'BPF-TI' => 'bpftiabcde',
            ];
            $this->Prodi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Prodi Berhasil Ditambah!</div>');
            redirect('Prodi');
        }
    }
    public function hapus($id)
    {
        $this->Prodi_model->delete($id);
        $error = $this->db->error();

        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
    fas fa-info-circle"></i>Data Prodi tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
    class="icon fas fa-check-circle"></i>Data Prodi Berhasil Dihapus!</div>');
        }
        redirect('Prodi');
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Prodi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->Prodi_model->getById($id);
        $data['dosen'] = $this->Dosen_model->get();
        $data['jurusan'] = $this->Jurusan_model->get();
        $this->form_validation->set_rules('nama', 'Nama Prodi', 'required', ['required' => 'Nama Prodi Wajib di isi']);
        $this->form_validation->set_rules('ruangan', 'Ruangan', 'required', ['required' => 'Ruangan Prodi Wajib di isi']);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', ['required' => 'Jurusan Prodi Wajib di isi']);
        $this->form_validation->set_rules('akreditasi', 'Akreditasi', 'required', ['required' => 'Akreditasi Prodi Wajib di isi']);
        $this->form_validation->set_rules('nama_kaprodi', 'Nama Kaprodi', 'required', ['required' => 'Nama Kaprodi Wajib di isi']);
        $this->form_validation->set_rules('tahun_berdiri', 'Tahun Berdiri', 'required|numeric', [
            'required' => 'Tahun Berdiri Prodi Wajib di isi', 'numeric' => 'Tahun Berdiri Prodi Harus Angka',
        ]);
        $this->form_validation->set_rules('output_lulusan', 'Output Lulusan', 'required', [
            'required' => 'Output Lulusan Prodi Wajib di isi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("prodi/vw_ubah_prodi", $data);
            $this->load->view("layout/footer", $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'ruangan' => $this->input->post('ruangan'),
                'jurusan' => $this->input->post('jurusan'),
                'akreditasi' => $this->input->post('akreditasi'),
                'nama_kaprodi' => $this->input->post('nama_kaprodi'),
                'tahun_berdiri' => $this->input->post('tahun_berdiri'),
                'output_lulusan' => $this->input->post('output_lulusan'),
                'BPF-TI' => 'bpftiabcde',
                'id' => $this->input->post('id'),
            ];

            $this->Prodi_model->update($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Prodi Berhasil Diubah!</div>');
            redirect('Prodi');
        }
    }
}
