<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubahsandi extends CI_Controller {

	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/ubahsandi';

		$this->load->view('layout/home', $data);
	}

	public function guru()
	{
		$data['border']='transparent';
		if ($_SESSION['nis']!='') {
			$data['nav'] = 'layout/navbar-kiri-siswa';
		}
		elseif($_SESSION['nip']!='')
		{
			if ($_SESSION['wali']!='') {
				$data['nav'] = 'layout/navbar-kiri-walikelas';
			}
			else{
				$data['nav'] = 'layout/navbar-kiri-guru';
			}
		}
		$data['page']='userview/gantipasswordguru';
		$this->load->view('layout/home', $data);
	}

	public function siswa()
	{
		$data['border']='transparent';
		if ($_SESSION['nis']!='') {
			$data['nav'] = 'layout/navbar-kiri-siswa';
		}
		elseif($_SESSION['nip']!='')
		{
			if ($_SESSION['wali']!='') {
				$data['nav'] = 'layout/navbar-kiri-walikelas';
			}
			else{
				$data['nav'] = 'layout/navbar-kiri-guru';
			}
		}
		$data['page']='userview/ubahsandi';
		$this->load->view('layout/home', $data);
	}
}