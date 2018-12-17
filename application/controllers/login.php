<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function siswa()
	{
		$data['border']='transparent';
		$data['page']='userview/loginsiswa';
		$this->load->view('layout/main', $data);
	}
	public function guru()
	{
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
		if ($status=='fail') {
			echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
			echo "<div class='alert alert-danger'><strong>Error!</strong> Password atau Username tidak valid.</div>";
		}
		else{
		$user = $this->input->post('user');
		$pass = md5($this->input->post('pass'));
		$this->mainmodel->loginguru($user, $pass);
		}
	}
	
	// public function logort()
	// {
	// 	$user=$this->input->post('username');
	// 	$pass=$this->input->post('password');
	// 	$this->mainmodel->lortu($user, $pass);
	// }		
}
