<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HitungTabung extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
        $this->load->library('tabung');
	}

    function index()
    {
        
        $data['volume'] =  $this->tabung->volume (4, 10) ;
        $data['luas'] =  $this->tabung->luaspermukaan (2, 8);
        $data['luase'] = $this->tabung->luasselimut (6, 7);
        $this->load->view("tabungg", $data);
       ;
    }
}