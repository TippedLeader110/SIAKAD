<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {

	public function hitung($s)
	{
		$query = $this->db->get($s);
		$query = $query->num_rows();
		return $query;
	}
	public function ambil($data)
	{
		$query = $this->db->get($data);
		return $query->result();
	}

}
