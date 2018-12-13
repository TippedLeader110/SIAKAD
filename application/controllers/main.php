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
	public function logsis()
	{
		$this->form_validation->set_rules('username', 'Username', 'required["%s sudah digunakan"]|is_unique[data_mhs.nim]');
		$user=$this->input->post('username');
		$pass=$this->input->post('password');
		$this->mainmodel->lsiswa($user, $pass);
	}
	public function loggur()
	{
		$user=$this->input->post('username');
		$pass=$this->input->post('password');
		$this->mainmodel->lguru($user, $pass);
	}
	public function daftarguru()
	{
		$data['border']='black';
		$data['page']='userview/daftarguru';
		$this->load->view('layout/home', $data);
	}
	public function daftarsiswa()
	{
		$data['border']='black';
		$data['page']='userview/daftarsiswa';
		$this->load->view('layout/home', $data);
	}
	public function daftarnilai()
	{
		$data['border']='black';
		$data['page']='userview/daftarnilai';
		$this->load->view('layout/home', $data);
	}
	public function profilsiswa()
	{
		$data['border']='transparent';
		$data['page']='userview/profilsiswa';
		$this->load->view('layout/home', $data);
	}
	public function profilguru()
	{
		$data['border']='transparent';
		$data['page']='userview/profilguru';
		$this->load->view('layout/home', $data);
	}
	public function profilwalikelas()
	{
		$data['border']='transparent';
		$data['page']='userview/profilwalikelas';
		$this->load->view('layout/home', $data);
	}
	
	// public function logort()
	// {
	// 	$user=$this->input->post('username');
	// 	$pass=$this->input->post('password');
	// 	$this->mainmodel->lortu($user, $pass);
	// }		
}
