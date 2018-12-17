<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct(){
		parent::__construct();		
		session_start();
 
	}

	public function guru()
	{
		$data['gurudaf']=$this->adminmodel->ambil('guru');
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
		$data['muridtam'] = $this->adminmodel->ambilspes('siswa', $nama, 'tahun');

		$this->load->view('layout/home', $data);
	}
	

	// public function logort()
	// {
	// 	$user=$this->input->post('username');
	// 	$pass=$this->input->post('password');
	// 	$this->mainmodel->lortu($user, $pass);
	// }		
}
