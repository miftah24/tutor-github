<?php

class Eb extends CI_Controller
{
	private function index()
	{
		echo "Hello World";
	}

	public function akses()
	{
		$this->index();
	}
}