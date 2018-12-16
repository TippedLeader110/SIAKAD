<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function guru()
	{
		$data['border']='black';
		$data['page']='userview/input';
		$data['nama'] = 'Daftar Nilai';
		$this->load->view('layout/home', $data);
	}
	public function raport()
	{
		$data['border']='black';
		$data['page']='userview/raport';
		$data['nama'] = 'Rapot';
		$this->load->view('layout/home', $data);
	}
	public function hasil()
	{
		$data['border']='black';
		$data['page']='userview/daftarnilai';
		$data['nama'] = 'Daftar Nilai';
		$this->load->view('layout/home', $data);	
	}
	public function walikelas()
	{
		$data['border']='black';
		$data['page']='userview/walikelas';
		$data['nama'] = 'Wali kelas';
		$this->load->view('layout/home', $data);
	}
	public function inputnilai()
	{
		if ($status=='fail') {
			echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
			echo "<div class='alert alert-danger'><strong>Error!</strong> Gagal.</div>";
		}
		else {
		$tugas1 = $this->input->post('tugas1');
		$tugas2 = $this->input->post('tugas2');
		$tugas3 = $this->input->post('tugas3');
		$uts = $this->input->post('uts');
		$uas = $this->input->post('uas');
		$mapel = $this->input->post('mapel');
		$this->mainmodel->inputnilai($tugas1, $tugas2, $tugas3, $uts, $uas, $mapel);}
	}



	// public function logort()
	// {
	// 	$user=$this->input->post('username');
	// 	$pass=$this->input->post('password');
	// 	$this->mainmodel->lortu($user, $pass);
	// }		
}
