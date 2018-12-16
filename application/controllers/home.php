<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['border']='black';
		$data['page']='userview/home';
		$this->load->view('layout/main', $data);
	}
	public function siswa()
	{
		$data['border']='black';
		$data['page']='userview/awaluser';
		$this->load->view('layout/home', $data);
	}
	public function guru()
	{
		$data['border']='black';
		$data['page']='userview/awalguru';
		$this->load->view('layout/home', $data);
	}
	public function daftarnilai()
	{
		$data['border']='black';
		$data['page']='userview/daftarnilai';
		$this->load->view('layout/home', $data);
	}
	
	// public function logort()
	// {
	// 	$user=$this->input->post('username');
	// 	$pass=$this->input->post('password');
	// 	$this->mainmodel->lortu($user, $pass);
	// }		
}
