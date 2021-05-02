<?php

class Komunikasi extends CI_Controller
{
	
	public function index()
	{
		$data = array ('konten' => "Hello World");
		$this->load->view('cetak', $data);
	}
}