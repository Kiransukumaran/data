<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataModel extends CI_Model {

	public function getCount()
	{
		return $this->db->get('data')->result_array();
	}
}
