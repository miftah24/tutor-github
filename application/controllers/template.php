<?php

class Template extends CI_Controller
{
	function page()
	{
		$this->load->view('eb/head');
		$this->load->view('eb/konten');
		$this->load->view('eb/foot');
	}
}
