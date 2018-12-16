<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/home';
		$this->load->view('layout/main', $data);
	}
	public function siswa()
	{
		$data['border']='black';
		$data['page']='userview/awaluser';
		$data['nama'] = 'Beranda';
		$data['beranda'] = 'aktif';
		$data['nilai'] = '';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function guru()
	{
		$data['border']='black';
		$data['page']='userview/awalguru';
		$data['nama'] = 'Beranda';
		$data['beranda'] = 'aktif';
		$data['nilai'] = '';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
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
