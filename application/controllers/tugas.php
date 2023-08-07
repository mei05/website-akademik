<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tugas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->library('rumus');
	}
	function index()
	{
		$this->rumus->rums('3.14','5','3');
        echo "<br/>";
	}
}