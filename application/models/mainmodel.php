<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmodel extends CI_Model {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function lsiswa($user, $pass)
	{
		$this->db->where(['user' => $user, 'pass' => $pass]);
		$query = $this->db->get('siswa');
		$query = $query->num_rows();
		if ($query==0) {
			redirect(''); //redirect gagal
		}
		else if ($query==1) {
		$this->db->where(['user' => $user, 'pass' => $pass]);
		$query = $this->db->get('siswa');
		$data = $query->result();
		foreach ($data as $key => $w) {
			}
			$this->session->user = $w->nama;
			redirect(''); //redirect berhasil
		}
	}

	public function lguru($user, $pass)
	{
		$this->db->where(['user' => $user, 'pass' => $pass]);
		$query = $this->db->get('guru');
		$query = $query->num_rows();
		if ($query==0) {
			redirect(''); //redirect gagal
		}
		else if ($query==1) {
		$this->db->where(['user' => $user, 'pass' => $pass]);
		$query = $this->db->get('guru');
		$data = $query->result();
		foreach ($data as $key => $w) {
			}
			$this->session->user = $w->nama;
			redirect(''); //redirect berhasil
		}
	}


}
