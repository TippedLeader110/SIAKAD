<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function siswa()
	{
		if ($_SESSION['nip']!='') {
			redirect('home/guru');
		}
		if ($_SESSION['nis']!='') {
			redirect('home/siswa');
		}
		$data['border']='transparent';
		$data['page']='userview/loginsiswa';
		$this->load->view('layout/main', $data);
	}
	public function guru()
	{
		if ($_SESSION['nip']!='') {
			redirect('home/guru');
		}
		if ($_SESSION['nis']!='') {
			redirect('home/siswa');
		}
		$data['border']='transparent';
		$data['page']='userview/loginguru';
		$this->load->view('layout/main', $data);
	}
	public function loginsiswa()
	{
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$this->mainmodel->loginsiswa($user, $pass);
	}
	public function loginguru()
	{
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$this->mainmodel->loginguru($user, $pass);
	}
	
	// public function logort()
	// {
	// 	$user=$this->input->post('username');
	// 	$pass=$this->input->post('password');
	// 	$this->mainmodel->lortu($user, $pass);
	// }		
}
