<?php 
defined ('BASEPATH') or exit('no direct script access allowed');

class Indek_model extends CI_Model
{
	public function get_data()
	{
		$cars = array(
			array('Volvo', 22, 18)
			, array('BMW', 15, 13)
			, array('Saab', 5, 2)
			, array('Land Rover', 17, 15) 
		);

		return $cars;
	}
}