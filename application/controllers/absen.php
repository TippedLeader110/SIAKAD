<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

	public function walikelas()
	{
		$this->db->where('nip', $_SESSION['nip']);
		$w = $this->db->get('guru')->result();
		foreach ($w as $key => $v) {
			$mapel = $v->wali_kelas;
					}
			if ($mapel=='IPA1A') {
				$jurusan = 'IPA';
			$kelas = 'A';
			$tahun = date('Y');
			}
			if ($mapel=='IPA1B') {
				$jurusan = 'IPA';
			$kelas = 'A';
			$tahun = date('Y');
			}
			if ($mapel=='IPA1C') {
				$jurusan = 'IPA';
			$kelas = 'A';
			$tahun = date('Y');
			}
			if ($mapel=='IPA2A') {
				$jurusan = 'IPA';
			$kelas = 'B';
			$tahun = date('Y');
			$tahun = $tahun-1;
			}
			if ($mapel=='IPA2B') {
				$jurusan = 'IPA';
			$kelas = 'B';
			$tahun = date('Y');
			$tahun = $tahun-1;
			}
			if ($mapel=='IPA2C') {
				$jurusan = 'IPA';
			$kelas = 'B';
			$tahun = date('Y');
			$tahun = $tahun-1;
			}
			if ($mapel=='IPA3A') {
				$jurusan = 'IPA';
			$kelas = 'C';
			$tahun = date('Y');
			$tahun = $tahun-2;
			}
			if ($mapel=='IPA3B') {
				$jurusan = 'IPA';
			$kelas = 'C';
			$tahun = date('Y');
			$tahun = $tahun-2;
			}
			if ($mapel=='IPA3C') {
				$jurusan = 'IPA';
			$kelas = 'C';
			$tahun = date('Y');
			$tahun = $tahun-2;
			}
			
			if ($mapel=='IPS1A') {
				$jurusan = 'IPS';
			$kelas = 'A';
			$tahun = date('Y');
			}
			if ($mapel=='IPS1B') {
				$jurusan = 'IPS';
			$kelas = 'A';
			$tahun = date('Y');
			}
			if ($mapel=='IPS1C') {
				$jurusan = 'IPS';
			$kelas = 'A';
			$tahun = date('Y');
			}
			if ($mapel=='IPS2A') {
				$jurusan = 'IPS';
			$kelas = 'B';
			$tahun = date('Y');
			$tahun = $tahun-1;
			}
			if ($mapel=='IPS2B') {
				$jurusan = 'IPS';
			$kelas = 'B';
			$tahun = date('Y');
			$tahun = $tahun-1;
			}
			if ($mapel=='IPS2C') {
				$jurusan = 'IPS';
			$kelas = 'B';
			$tahun = date('Y');
			$tahun = $tahun-1;
			}
			if ($mapel=='IPS3A') {
				$jurusan = 'IPS';
			$kelas = 'C';
			$tahun = date('Y');
			$tahun = $tahun-2;
			}
			if ($mapel=='IPS3B') {
				$jurusan = 'IPS';
			$kelas = 'C';
			$tahun = date('Y');
			$tahun = $tahun-2;
			}
			if ($mapel=='IPS3C') {
				$jurusan = 'IPS';
			$kelas = 'C';
			$tahun = date('Y');
			$tahun = $tahun-2;
			}
			if ($this->input->post('tent')=='nama') {
				$this->db->like('nama', $this->input->post('cari'));
			}
			$this->db->like('kelas', $kelas);
			$this->db->like('tahun', $tahun);
			$this->db->like('jurusan', $jurusan);
		$data['murid'] = $this->db->get('siswa')->result();
		$data['page']='userview/abseninput';
		$data['nav'] = 'layout/navbar-kiri-walikelas';

		$data['nama'] = 'Absen Siswa';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['absen'] = 'aktif';
		$data['rapot'] = '';
		$data['mana'] = 'aktif';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function siswa()
	{
		$nis = $_SESSION['nis'];
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
		$data['nav'] = 'layout/navbar-kiri-siswa';
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
	public function IsiAbsen()
	{
		$data['border']='black';
		$data['nav'] = 'layout/navbar-kiri-walikelas';
		$data['page']='userview/abseninput';
		$data['nama'] = 'Absen';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['absen'] = 'aktif';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function presensi()
	{
		$w = $this->input->post('id');
		$data['murid'] = $this->adminmodel->ambilspes('siswa', $w , 'nis');
		$data['border']='black';
		$data['nav'] = 'layout/navbar-kiri-walikelas';
		$data['page']='userview/presensi';
		$data['nama'] = 'Absen';
		$data['mana'] = 'aktif';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['absen'] = 'aktif';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function pressave()
	{
		$nis = $this->input->post('nis');
		$hadir = $this->input->post('hadir');
		$semester = $this->input->post('semester');
		$izin = $this->input->post('izin');
		$alpha = $this->input->post('alpha');
		$sakit = $this->input->post('sakit');
		$bulan = $this->input->post('bulan');
		$kelas = $this->input->post('kelas');
		$tahun = $this->input->post('tahun');

		$this->db->where(['semester' => $semester, 'nis' => $nis, 'bulan' => $bulan]);
		$query = $this->db->get('absen');
		$query = $query->num_rows();
		if ($query==0) {
			$data = array('nis' => $nis ,'semester' => $semester , 'izin' => $izin , 'alpha' => $alpha , 'sakit' => $sakit , 'bulan' => $bulan , 'kelas' => $kelas ,'tahun' => $tahun, 'hadir' => $hadir);
			$this->db->insert('absen', $data);
			$_SESSION['do']=1;
			redirect('absen/walikelas');
		}
		else{
			$this->db->set('hadir', $hadir );
			$this->db->set('nis', $nis );
			$this->db->set('semester', $semester );
			$this->db->set('izin', $izin );
			$this->db->set('alpha', $alpha );
			$this->db->set('sakit', $sakit );
			$this->db->set('bulan', $bulan );
			$this->db->set('kelas', $kelas );
			$this->db->set('tahun', $tahun );
			$this->db->where(['nis' => $nis, 'semester' => $semester]);
			$this->db->update('absen');
			$_SESSION['do']=1;
			redirect('Absen/walikelas');
		}
	}
	// public function logort()
	// {
	// 	$user=$this->input->post('username');
	// 	$pass=$this->input->post('password');
	// 	$this->mainmodel->lortu($user, $pass);
	// }		
}
