<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/home';
		$this->load->view('layout/main', $data);
	}
	public function logout()
	{
		$_SESSION['user']='';
		$w = base_url();
		redirect("$w", location);
	}
	public function siswa()
	{
		if ($_SESSION['user']=='') {
			redirect('login/siswa', location);
		}
		else{
		$data['nav'] = 'layout/navbar-kiri-siswa';
		$data['border']='black';
		$data['page']='userview/awaluser';
		$data['caro']=$this->mainmodel->caro();
		$data['nama'] = 'Beranda';
		$data['beranda'] = 'aktif';
		$data['nilai'] = '';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
		}
	}
	public function guru()
	{
		if ($_SESSION['user']=='') {
			redirect('login/guru', location);
		}
		else{
		$data['border']='black';
		$data['page']='userview/awalguru';
		$data['nama'] = 'Beranda';
		$data['caro']=$this->mainmodel->caro();
		$data['beranda'] = 'aktif';
		$data['nav'] = 'layout/navbar-kiri-guru';
		$data['nilai'] = '';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
		}
	}
	
	// public function logort()
	// {
	// 	$user=$this->input->post('username');
	// 	$pass=$this->input->post('password');
	// 	$this->mainmodel->lortu($user, $pass);
	// }		
}
