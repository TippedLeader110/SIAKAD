<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function guru()
	{
		$data['border']='black';
		$data['page']='userview/inputnilai';
		$data['nama'] = 'Input Nilai';
		$data['beranda'] = '';
		$data['nilai'] = 'aktif';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function raport()
	{
		$nama = $_SESSION['nis'];
		$data['border']='black';
		$data['akidah']= spes('akidah_akhlak',$nama,'nis');
		$data['bio']= spes('biologi_p',$nama,'nis');
		$data['arab']= spes('b_arab',$nama,'nis');
		$data['indo']= spes('b_indo',$nama,'nis');
		$data['ing']= spes('b_ing',$nama,'nis');
		$data['jerman']= spes('b_jerman_p',$nama,'nis');
		$data['eko']= spes('ekonomi_p',$nama,'nis');
		$data['fikih']= spes('fikih',$nama,'nis');
		$data['fisika_p']= spes('fisika_p',$nama,'nis');
		$data['geo']= spes('geografi',$nama,'nis');
		$data['kimia']= spes('kimia_p',$nama,'nis');
		$data['mm']= spes('matematika',$nama,'nis');
		$data['penjas']= ambilspes('penjas',$nama,'nis');
		$data['pkn']= ambilspes('pkn',$nama,'nis');
		$data['sejarah']= ambilspes('sejarah',$nama,'nis');
		$data['sejarah_indo']= ambilspes('sejarah_indo',$nama,'nis');
		$data['seni_budaya']= ambilspes('seni_budaya',$nama,'nis');
		$data['sosiologi']= ambilspes('sosiologi',$nama,'nis');
		$data['page']='userview/raport';
		$data['nama'] = 'Rapot';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['absen'] = '';
		$data['rapot'] = 'aktif';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function siswa()
	{
		$data['border']='black';
		$data['nama'] = 'Daftar Nilai';
		$data['beranda'] = '';
		$data['nilai'] = 'aktif';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$data['nav'] = 'layout/navbar-kiri-guru';
		$data['page']='userview/daftarnilai';
		$this->load->view('layout/home', $data);	
	}
	public function walikelas()
	{
		$data['border']='black';
		$data['page']='userview/inputnilaiwalikelas';
		$data['nama'] = 'Wali kelas';
		$data['beranda'] = '';
		$data['nilai'] = 'aktif';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function uas()
	{
		
		$data['border']='black';
		$data['page']='userview/uas';
		$data['nama'] = 'Daftar Nilai';
		$data['beranda'] = '';
		$data['nilai'] = 'aktif';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function uts()
	{
		$data['border']='black';
		$data['page']='userview/uts';
		$data['nama'] = 'Daftar Nilai';
		$data['beranda'] = '';
		$data['nilai'] = 'aktif';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function tugas()
	{
		$data['border']='black';
		$data['page']='userview/tugas';
		$data['nama'] = 'Daftar Nilai';
		$data['beranda'] = '';
		$data['nilai'] = 'aktif';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
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
