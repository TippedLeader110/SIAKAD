<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {

	public function guru()
	{
		$naruto = $this->input->post('kelas');
		if ($this->input->post('jurusan')=='ips') {
			$data['murid'] = $this->adminmodel->ambilspesx('siswa','ips','jurusan',$naruto);	
		}
		if ($this->input->post('jurusan')=='ipa') {
			$data['murid'] = $this->adminmodel->ambilspesx('siswa','ipa','jurusan',$naruto);
		}
		$data['border']='black';
		$data['page']='userview/inputnilai';
		$data['nama'] = 'Input Nilai';
		if ($_SESSION['wali']=='') {
		$data['nav'] = 'layout/navbar-kiri-guru';
		}
		else{
			$data['nav'] = 'layout/navbar-kiri-walikelas';	
		}
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['input'] = 'aktif';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function gurusimpan()
	{
		$tugas1 = $this->input->post('tugas1');
		$nis = $this->input->post('nis');
		$semester = $this->input->post('semester');
		$tugas2 = $this->input->post('tugas2');
		$tugas3 = $this->input->post('tugas3');
		$mapel = $this->input->post('mapel');
		if($mapel=='Akidah Akhlak')
		{
			$mapel = 'akidah_akhlak';
		}
		if($mapel=='Al Quran Hadist')
		{
			$mapel = 'quran_hadis';
		}
		if($mapel=='Bahasa Arab')
		{
			$mapel = 'b_arab' ;
		}
		if($mapel=='Bahasa Indonesia')
		{
			$mapel = 'b_indo' ;
		}
		if($mapel=='Bahasa Inggris')
		{
			$mapel = 'b_ing';
		}
		if($mapel=='Bahasa Jerman Peminatan')
		{
			$mapel = 'b_jerman_p';
		}
		if($mapel=='Biologi Peminatan')
		{
			$mapel = 'biologi_p';
		}
		if($mapel=='Ekonomi Peminatan')
		{
			$mapel = 'ekonomi_p';
		}
		if($mapel=='Fikih')
		{
			$mapel = 'fikih';
		}
		if($mapel=='Fisika Peminatan')
		{
			$mapel = 'fisika_p';
		}
		if($mapel=='Geografi')
		{
			$mapel = 'geografi';
		}
		if($mapel=='Kimia Peminatan')
		{
			$mapel = 'kimia_p';
		}
		if($mapel=='Matematika')
		{
			$mapel = 'matematika';
		}
		if($mapel=='Pendidikan Jasmani')
		{
			$mapel = 'penjas';
		}
		if($mapel=='Pendidikan Kewarganegaraan')
		{
			$mapel = 'pkn';
		}
		if($mapel=='Prakarya Kewirausahaan')
		{
			$mapel = 'prakarya_kewirausahaan';
		}
		if($mapel=='Sejarah')
		{
			$mapel = 'sejarah';
		}
		if($mapel=='Sejarah Indonesia')
		{
			$mapel = 'sejarah_indo';
		}
		if($mapel=='Sejarah Kebudayaan Islam')
		{
			$mapel = 'ski';
		}
		if($mapel=='Seni Budaya')
		{
			$mapel = 'seni_budaya';
		}
		if($mapel=='Sosiologi')
		{
			$mapel = 'sosiologi';
		}

		$jurusan = $this->input->post('jurusan');
		$uts = $this->input->post('uts');
		$uas = $this->input->post('uas');
		$this->db->where(['semester' => $semester, 'nis' => $nis]);
		$query = $this->db->get($mapel);
		$query = $query->num_rows();
		if ($query==0) {
			$data = array('jurusan' => $jurusan, 'nis' => $nis ,'semester' => $semester , 'tugas_1' => $tugas1 , 'tugas_2' => $tugas2 , 'tugas_3' => $tugas3 , 'uts' => $uts , 'uas' => $uas ,);
			$this->db->insert($mapel, $data);
			$_SESSION['do']=1;
			redirect('nilai/guru');
		}
		else{
			$this->db->set('semester', $semester );
			$this->db->set('tugas_1', $tugas1 );
			$this->db->set('jurusan', $jurusan );
			$this->db->set('tugas_2', $tugas2 );
			$this->db->set('tugas_3', $tugas3 );
			$this->db->set('uts', $uts );
			$this->db->set('uas', $uas );
			$this->db->where(['nis' => $nis, 'semester' => $semester]);
			$this->db->update($mapel);
			$_SESSION['do']=1;
			redirect('nilai/guru');
		}
	}
	public function input()
	{
		$f = $this->input->post('nis');
		$in = $_SESSION['nip'];
		$data['murid'] = $this->adminmodel->ambilspes('siswa',$f,'nis');
		$data['guru1'] = $this->adminmodel->ambilspes('guru',$in,'nip');
		$data['border']='black';
		$data['page']='userview/nilai';
		$data['nama'] = 'Input Nilai';
		if ($_SESSION['wali']=='') {
		$data['nav'] = 'layout/navbar-kiri-guru';
		}
		else{
			$data['nav'] = 'layout/navbar-kiri-walikelas';	
		}
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['input'] = 'aktif';
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
		$data['akidah']= $this->adminmodel->ambilspes('akidah_akhlak',$nama,'nis');
		$data['bio']= $this->adminmodel->ambilspes('biologi_p',$nama,'nis');
		$data['arab']= $this->adminmodel->ambilspes('b_arab',$nama,'nis');
		$data['indo']= $this->adminmodel->ambilspes('b_indo',$nama,'nis');
		$data['ing']= $this->adminmodel->ambilspes('b_ing',$nama,'nis');
		$data['jerman']= $this->adminmodel->ambilspes('b_jerman_p',$nama,'nis');
		$data['eko']= $this->adminmodel->ambilspes('ekonomi_p',$nama,'nis');
		$data['fikih']= $this->adminmodel->ambilspes('fikih',$nama,'nis');
		$data['fisika_p']= $this->adminmodel->ambilspes('fisika_p',$nama,'nis');
		$data['geo']= $this->adminmodel->ambilspes('geografi',$nama,'nis');
		$data['kimia']= $this->adminmodel->ambilspes('kimia_p',$nama,'nis');
		$data['mm']= $this->adminmodel->ambilspes('matematika',$nama,'nis');
		$data['penjas']= $this->adminmodel->ambilspes('penjas',$nama,'nis');
		$data['pkn']= $this->adminmodel->ambilspes('pkn',$nama,'nis');
		$data['sejarah']= $this->adminmodel->ambilspes('sejarah',$nama,'nis');
		$data['sejarah_indo']= $this->adminmodel->ambilspes('sejarah_indo',$nama,'nis');
		$data['seni_budaya']= $this->adminmodel->ambilspes('seni_budaya',$nama,'nis');
		$data['sosiologi']= $this->adminmodel->ambilspes('sosiologi',$nama,'nis');
		$data['page']='userview/raport';
		$data['nav'] = 'layout/navbar-kiri-siswa';
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
		$data['nav'] = 'layout/navbar-kiri-siswa';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
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
		if ($_SESSION['wali']=='') {
		$data['nav'] = 'layout/navbar-kiri-guru';
		}
		else{
			$data['nav'] = 'layout/navbar-kiri-walikelas';	
		}
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
		$data['nav'] = 'layout/navbar-kiri-siswa';
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
		$data['nav'] = 'layout/navbar-kiri-siswa';		
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
		$data['nav'] = 'layout/navbar-kiri-siswa';	
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
