<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$data['page']='userview/home';
		$this->load->view('layout/main', $data);
	}
	public function loginSiswa()
	{
		$data['page']='userview/loginsiswa';
		$this->load->view('layout/main', $data);
	}
}
