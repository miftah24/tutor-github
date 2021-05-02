<?php

defined ('BASEPATH') or exit('no direct script access allowed');

class Oop extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('indek_model');
	}

	public function index()
	{
		$data = array(
			'konten' => $this->indek_model->get_data()
		);
		$this->load->view('cetak_model', $data);
	}
}