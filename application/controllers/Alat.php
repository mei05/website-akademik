<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Alat_model');
    }
    function index($id)
    {
        $data['judul'] = "Detail Alat";
        $data['alat'] = $this->Alat_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("Alat/vw_alat", $data);
        $this->load->view("layout/footer");
    }
}
