<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function guru()
	{
		$data['border']='black';
		$data['page']='userview/daftarguru';
		$data['nama'] = 'Daftar Guru';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = 'aktif';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function siswa()
	{
		$data['border']='black';
		$data['page']='userview/daftarsiswa';
		$data['nama'] = 'Daftar Siswa';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = 'aktif';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	

	// public function logort()
	// {
	// 	$user=$this->input->post('username');
	// 	$pass=$this->input->post('password');
	// 	$this->mainmodel->lortu($user, $pass);
	// }		
}
