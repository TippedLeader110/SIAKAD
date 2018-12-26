<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function post(){
		$data['border']='black';
		$data['nama'] = 'Beranda';
		if ($_SESSION['wali']=='') {
		$data['nav'] = 'layout/navbar-kiri-guru';
		}
		elseif ($_SESSION['nis']=='') {
			$data['nav'] = 'layout/navbar-kiri-murid';
		}
		else{
			$data['nav'] = 'layout/navbar-kiri-walikelas';	
		}
		$data['page']='userview/berita';
		$id=$this->uri->segment(3);
		$data['mama'] = $this->adminmodel->ambilspes('terkini', $id, 'id');
		$data['beranda'] = 'aktif';
		$data['nilai'] = '';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
}