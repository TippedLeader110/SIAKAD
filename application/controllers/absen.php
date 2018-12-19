<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function walikelas()
	{
		$data['border']='black';
		$data['page']='userview/abseninput';
		$data['nama'] = 'Absen Siswa';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['absen'] = 'aktif';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function siswa()
	{
		$id=$this->input->post('sub');				
		if ($id!='') {
			$data['ab1'] = $this->adminmodel->absen($id, $nis, '1');	
			$data['ab2'] = $this->adminmodel->absen($id, $nis, '2');
			$data['ab3'] = $this->adminmodel->absen($id, $nis, '3');
			$data['ab4'] = $this->adminmodel->absen($id, $nis, '4');
			$data['ab5'] = $this->adminmodel->absen($id, $nis, '5');
			$data['ab6'] = $this->adminmodel->absen($id, $nis, '6');
			$data['ab7'] = $this->adminmodel->absen($id, $nis, '7');	
			$data['ab8'] = $this->adminmodel->absen($id, $nis, '8');
			$data['ab9'] = $this->adminmodel->absen($id, $nis, '9');
			$data['ab10'] = $this->adminmodel->absen($id, $nis, '10');
			$data['ab11'] = $this->adminmodel->absen($id, $nis, '11');
			$data['ab12'] = $this->adminmodel->absen($id, $nis, '12');	
			}
		else {
			$data['ab1'] = $this->adminmodel->absen($id, $nis, '1');	
		}
		$data['t']=$this->input->post('sub');	
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
