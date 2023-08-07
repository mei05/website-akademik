<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HitungPersegi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('persegi');
	}
	function index()
	{
		$this->persegi->keliling('10');
        echo "<br/>";
        $this->persegi->luas('10');
	}
}