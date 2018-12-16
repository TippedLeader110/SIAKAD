<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function siswa()
	{
		$data['border']='black';
		$data['page']='userview/absensiswa';
		$data['nama'] = 'Absen';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['absen'] = 'aktif';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function inputabsen()
	{
		if ($status=='fail') {
			echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
			echo "<div class='alert alert-danger'><strong>Error!</strong> Gagal.</div>";
		}
		else {
		$alpa = $this->input->post('alpa');
		$izin = $this->input->post('izin');
		$sakit = $this->input->post('sakit');
		$kehadiran = $this->input->post('kehadiran');
		$bulan = $this->input->post('bulan');
		$this->mainmodel->inputabsen($alpa, $izin, $sakit, $kehadiran, $bulan);}
	}

	// public function logort()
	// {
	// 	$user=$this->input->post('username');
	// 	$pass=$this->input->post('password');
	// 	$this->mainmodel->lortu($user, $pass);
	// }		
}
