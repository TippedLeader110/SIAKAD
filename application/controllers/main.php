<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$data['border']='black';
		$data['page']='userview/home';
		$this->load->view('layout/main', $data);
	}
	public function loginSiswa()
	{
		$data['border']='transparent';
		$data['page']='userview/loginsiswa';
		$this->load->view('layout/main', $data);
	}
}
