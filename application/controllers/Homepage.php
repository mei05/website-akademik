<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->model('Search_maha_model');
		$this->load->model('Search_instan_model');
		$this->load->model('Instansi_model');
	}
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['berita'] = $this->db->get('berita')->result_array();
		$this->load->view('layout/header');
		$this->load->view('home/vw_home', $data);
		$this->load->view('layout/footer');
	}

	public function instansi()
	{
		$this->load->view('layout/header');
		$this->load->view('home/form_instansi');
		$this->load->view('layout/footer');
	}

	public function mahasiswa()
	{
		$this->load->view('layout/header');
		$this->load->view('home/form_mahasiswa');
		$this->load->view('layout/footer');
	}

	public function cekStatus()
	{
		$data['mahasiswa_ajuan'] = $this->Search_maha_model->get();
		$data['instansi_ajuan'] = $this->Instansi_model->get();
		$this->load->view('layout/header', $data);
		$this->load->view('home/caristatus', $data);
		$this->load->view('layout/footer');
	}
	public function fetchData()
	{
		$data['keyword'] = $this->input->post('keyword');
		$data['ajuan'] = $this->Instansi_model->getByToken($data['keyword']);
		$data['ajuan'] = $this->Mahasiswa_model->getByToken($data['keyword']);
		$data['search_result'] = $this->Search_maha_model->cari($data['keyword']);
		$data['search_result'] = $this->Search_instan_model->cari($data['keyword']);
		$this->load->view('layout/header', $data);
		$this->load->view('home/hasilstatus', $data);
		$this->load->view('layout/footer');
	}
}
