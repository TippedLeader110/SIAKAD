<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmodel extends CI_Model {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function loginsiswa($user, $pass)
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

	public function loginguru($user, $pass)
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
	public function daftarsiswa($user, $pass)
	{
		$this->db->where(['username' => $user]);
		$query = $this->db->get('siswa');
		$row = $query->num_rows();
		 if ($row>0) {
		 redirect (" ");		 	
		 }
		 else if ($row==0) {
		 $data = array('username' => $user,
		 			'password' => $pass);
		 $this->db->insert('login', $data);
		 			echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
			echo "<div class='alert alert-success'><strong>Berhasil!</strong> Akun anda telah dibuat.</div>";
			header( " " );
			 }
	}
	public function daftarguru($user, $pass)
	{
		$this->db->where(['username' => $user]);
		$query = $this->db->get('guru');
		$row = $query->num_rows();
		 if ($row>0) {
		 redirect (" ");		 	
		 }
		 else if ($row==0) {
		 $data = array('username' => $user,
		 			'password' => $pass);
		 $this->db->insert('login', $data);
		 			echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
			echo "<div class='alert alert-success'><strong>Berhasil!</strong> Akun anda telah dibuat.</div>";
			header( " " );
			 }
	}



}
