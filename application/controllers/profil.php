<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function siswa()
	{
		$data['border']='transparent';
		$data['page']='userview/profilsiswa';
		$this->load->view('layout/home', $data);
	}
	public function guru()
	{
		$data['border']='transparent';
		$data['page']='userview/profilguru';
		$this->load->view('layout/home', $data);
	}
	public function walikelas()
	{
		$data['border']='transparent';
		$data['page']='userview/profilwalikelas';
		$this->load->view('layout/home', $data);
	}
}