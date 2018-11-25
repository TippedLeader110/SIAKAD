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
	public function LoginGuru()
	{
		$data['border']='transparent';
		$data['page']='userview/loginguru';
		$this->load->view('layout/main', $data);
	}
	public function student()
	{
		$data['border']='black';
		$data['page']='userview/awaluser';
		$this->load->view('layout/home', $data);
	}
	public function teacher()
	{
		$data['border']='black';
		$data['page']='userview/awalguru';
		$this->load->view('layout/home', $data);
	}
}
