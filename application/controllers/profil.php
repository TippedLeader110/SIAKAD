<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function siswa()
	{
		$data['border']='transparent';
		$data['page']='userview/profilsiswa';
		$data['nav'] = 'layout/navbar-kiri-siswa';
		$data['nama'] = 'Profil';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = 'aktif';
		$this->load->view('layout/home', $data);
	}
	public function guru()
	{
		$data['border']='transparent';
		$data['page']='userview/profilguru';
		$data['nav'] = 'layout/navbar-kiri-guru';
		$data['nama'] = 'Profil';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = 'aktif';
		$this->load->view('layout/home', $data);
	}
	public function walikelas()
	{
		$data['border']='transparent';
		$data['page']='userview/profilwalikelas';
		$data['nav'] = 'layout/navbar-kiri-guru';
		$data['nama'] = 'Profil';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = 'aktif';
		$this->load->view('layout/home', $data);
	}
}