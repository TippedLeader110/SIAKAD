<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller {
	public function proto2()
	{
		$data['border']='black';
		$data['page']='userview/raportipa';
		$data['page2']='userview/ipsraport';
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
		$data['rapot'] = 'aktif';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function proto()
	{
		$data['border']='black';
		$data['page']='userview/raportipa';
		$data['page2']='userview/iparaport';
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
		$data['rapot'] = 'aktif';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
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
		$data['rapot'] = 'aktif';
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
		$data['absen'] = '';
		$data['input'] = 'aktif';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function raport()
	{
		$semester = $this->input->post('semester');
		$nis = $_SESSION['nis'];
		$bis = $_SESSION['nis'];
		$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['geografi'] = $this->db->get('geografi')->result();
$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sejarah'] = $this->db->get('sejarah')->result();
			$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['quran_hadis'] = $this->db->get('quran_hadis')->result();
$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['akidah_akhlak'] = $this->db->get('akidah_akhlak')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['fikih'] = $this->db->get('fikih')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['ski'] = $this->db->get('ski')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['pkn'] = $this->db->get('pkn')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_indo'] = $this->db->get('b_indo')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_arab'] = $this->db->get('b_arab')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['matematika'] = $this->db->get('matematika')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['matematika_p'] = $this->db->get('matematika_p')->result();
$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sejarah_indo'] = $this->db->get('sejarah_indo')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_ing'] = $this->db->get('b_ing')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['seni_budaya'] = $this->db->get('seni_budaya')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['penjas'] = $this->db->get('penjas')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['prakarya_kewirausahaan'] = $this->db->get('prakarya_kewirausahaan')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['matematika'] = $this->db->get('matematika')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['biologi_p'] = $this->db->get('biologi_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['fisika_p'] = $this->db->get('fisika_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['kimia_p'] = $this->db->get('kimia_p')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['ekonomi_p'] = $this->db->get('ekonomi_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sosiologi'] = $this->db->get('sosiologi')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_jerman_p'] = $this->db->get('b_jerman_p')->result();
		$data['border']='black';
		$this->db->where('nis', $nis);
		$d = $this->db->get('siswa')->result();
		foreach ($d as $key => $v) {	}
			$jur = $v->jurusan;
		if ($jur=='IPA' || $semester!='') {
			include 'ipa.php';
			
		}
		elseif($jur=='IPS' || $semester!='')
		{
		include 'ips.php';
		
		}


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
		$bis = $_SESSION['nis'];
		$this->db->where('nis', $bis);
		$lol = $this->db->get('siswa')->result();
		foreach ($lol as $key => $kk) {
			$jur = $kk->jurusan;
		}

		if ($this->input->post('semester')!='') {
			$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['geografi'] = $this->db->get('geografi')->result();
$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sejarah'] = $this->db->get('sejarah')->result();
			$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['quran_hadis'] = $this->db->get('quran_hadis')->result();
$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['akidah_akhlak'] = $this->db->get('akidah_akhlak')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['fikih'] = $this->db->get('fikih')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['ski'] = $this->db->get('ski')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['pkn'] = $this->db->get('pkn')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_indo'] = $this->db->get('b_indo')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_arab'] = $this->db->get('b_arab')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['matematika'] = $this->db->get('matematika')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sejarah_indo'] = $this->db->get('sejarah_indo')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_ing'] = $this->db->get('b_ing')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['seni_budaya'] = $this->db->get('seni_budaya')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['penjas'] = $this->db->get('penjas')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['prakarya_kewirausahaan'] = $this->db->get('prakarya_kewirausahaan')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['matematika'] = $this->db->get('matematika')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['biologi_p'] = $this->db->get('biologi_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['fisika_p'] = $this->db->get('fisika_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['kimia_p'] = $this->db->get('kimia_p')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['ekonomi_p'] = $this->db->get('ekonomi_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sosiologi'] = $this->db->get('sosiologi')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_jerman_p'] = $this->db->get('b_jerman_p')->result();
if($jur=='IPA'){
$data['page2'] = 'userview/uastampil';
}
else{
$data['page2'] = 'userview/uastampil2';	
}
		}
		else{$data['page2'] = 'userview/blank';}
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
	public function tugas()
	{
		$bis = $_SESSION['nis'];
		$this->db->where('nis', $bis);
		$lol = $this->db->get('siswa')->result();
		foreach ($lol as $key => $kk) {
			$jur = $kk->jurusan;
		}

		if ($this->input->post('semester')!='') {
			$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['geografi'] = $this->db->get('geografi')->result();
$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sejarah'] = $this->db->get('sejarah')->result();
			$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['quran_hadis'] = $this->db->get('quran_hadis')->result();
$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['akidah_akhlak'] = $this->db->get('akidah_akhlak')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['fikih'] = $this->db->get('fikih')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['ski'] = $this->db->get('ski')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['pkn'] = $this->db->get('pkn')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_indo'] = $this->db->get('b_indo')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_arab'] = $this->db->get('b_arab')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['matematika'] = $this->db->get('matematika')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sejarah_indo'] = $this->db->get('sejarah_indo')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_ing'] = $this->db->get('b_ing')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['seni_budaya'] = $this->db->get('seni_budaya')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['penjas'] = $this->db->get('penjas')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['prakarya_kewirausahaan'] = $this->db->get('prakarya_kewirausahaan')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['matematika'] = $this->db->get('matematika')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['biologi_p'] = $this->db->get('biologi_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['fisika_p'] = $this->db->get('fisika_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['kimia_p'] = $this->db->get('kimia_p')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['ekonomi_p'] = $this->db->get('ekonomi_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sosiologi'] = $this->db->get('sosiologi')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_jerman_p'] = $this->db->get('b_jerman_p')->result();
if($jur=='IPA'){
$data['page2'] = 'userview/tugastampil';
}
else{
$data['page2'] = 'userview/tugastampil2';	
}
		}
		else{$data['page2'] = 'userview/blank';}
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
	
	public function uts()
	{
		$bis = $_SESSION['nis'];
		$this->db->where('nis', $bis);
		$lol = $this->db->get('siswa')->result();
		foreach ($lol as $key => $kk) {
			$jur = $kk->jurusan;
		}

		if ($this->input->post('semester')!='') {
			$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['geografi'] = $this->db->get('geografi')->result();
$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sejarah'] = $this->db->get('sejarah')->result();
			$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['quran_hadis'] = $this->db->get('quran_hadis')->result();
$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['akidah_akhlak'] = $this->db->get('akidah_akhlak')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['fikih'] = $this->db->get('fikih')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['ski'] = $this->db->get('ski')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['pkn'] = $this->db->get('pkn')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_indo'] = $this->db->get('b_indo')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_arab'] = $this->db->get('b_arab')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['matematika'] = $this->db->get('matematika')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sejarah_indo'] = $this->db->get('sejarah_indo')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_ing'] = $this->db->get('b_ing')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['seni_budaya'] = $this->db->get('seni_budaya')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['penjas'] = $this->db->get('penjas')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['prakarya_kewirausahaan'] = $this->db->get('prakarya_kewirausahaan')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['matematika'] = $this->db->get('matematika')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['biologi_p'] = $this->db->get('biologi_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['fisika_p'] = $this->db->get('fisika_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['kimia_p'] = $this->db->get('kimia_p')->result();


$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['ekonomi_p'] = $this->db->get('ekonomi_p')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['sosiologi'] = $this->db->get('sosiologi')->result();

$this->db->where('semester', $this->input->post('semester'));
			$this->db->where('nis', $bis);
$data['b_jerman_p'] = $this->db->get('b_jerman_p')->result();
if($jur=='IPA'){
$data['page2'] = 'userview/utstampil';
}
else{
$data['page2'] = 'userview/utstampil2';	
}
		}
		else{$data['page2'] = 'userview/blank';}
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
	public function lihat()
	{
		$this->db->where('nip' , $_SESSION['nip']);
		$raw = $this->db->get('guru')->result();
		foreach ($raw as $key => $value) {
			$data['mapel'] =  $value->mapel;
			$mapel =  $value->mapel;
		}
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
		$nis = $this->input->post('nis');
		$sem = $this->input->post('semester');
		if ($this->input->post('semester')!='') {
			$this->db->where('nis' , $nis);
			$this->db->where('semester' , $sem);
			$data['nilaidata']  = $this->db->get($mapel)->result();	
		}
		$a = $this->input->post('nis');
		$data['border']='black';
		$data['page']='userview/lihatnilai';
		$data['nama'] = 'Daftar Nilai';
		if ($_SESSION['wali']=='') {
		$data['nav'] = 'layout/navbar-kiri-guru';
		}
		elseif ($_SESSION['nis']!='') {
			$data['nav'] = 'layout/navbar-kiri-siswa';
		}
		else{
			$data['nav'] = 'layout/navbar-kiri-walikelas';	
		}
		$data['murid'] = $this->adminmodel->ambilspes('siswa' ,$a , 'nis');
		$data['beranda'] = '';
		$data['nilai'] = 'aktif';
		$data['absen'] = '';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);	
	}


	// public function logort()
	// {
	// 	$user=$this->input->post('username');
	// 	$pass=$this->input->post('password');
	// 	$this->mainmodel->lortu($user, $pass);
	// }		
}
