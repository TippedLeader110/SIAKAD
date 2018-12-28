<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmodel extends CI_Model {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function caro()
	{
		$query = $this->db->get('terkini');
		return $query->result();		
	}

	public function loginsiswa($user, $pass)
	{
		$this->db->where(['username' => $user, 'password' => $pass]);
		$query = $this->db->get('siswa');
		$query = $query->num_rows();
		if ($query==0) {
			$_SESSION['flash'] = 'no';
			redirect('login/siswa');
		}
		else if ($query>=1) {
		$this->db->where(['username' => $user, 'password' => $pass]);
		$query = $this->db->get('siswa');
		$data = $query->result();
			foreach ($data as $key => $w) {
			}
			if ($w->status=='Aktif') {
			$this->session->user = $w->nama;
			$this->session->nis = $w->nis;
			$this->session->img = $w->pict;
			redirect('home/siswa');
			}
			else{
			$_SESSION['flash'] = 'ban';
				redirect('login/siswa');
			}
		}

	}

	public function loginguru($user, $pass)
	{
		$this->db->where(['username' => $user, 'password' => $pass]);
		$query = $this->db->get('guru');
		$query = $query->num_rows();
		if ($query==0) {
			$_SESSION['flash'] = 'no';
			redirect('login/guru');
		}
		else if ($query!=0) {
		$this->db->where(['username' => $user, 'password' => $pass]);
		$query = $this->db->get('guru');
		$data = $query->result();
			foreach ($data as $key => $w) {
			}
			if ($w->status=='Aktif') {
			$this->session->user = $w->nama;
			$this->session->nip = $w->nip;
			$this->session->img = $w->foto;
			$this->session->wali = $w->wali_kelas;
			redirect('home/guru');
			}
			else{
			$_SESSION['flash'] = 'ban';
			redirect('login/guru');
			}
		}
	}
	public function daftarsiswa($user, $pass)
	{
		$this->db->where(['username' => $user]);
		$query = $this->db->get('siswa');
		$row = $query->num_rows();
		 if ($row>0) {
		 redirect (" ");		 	
		 }
		 else if ($row==0) {
		 $data = array('username' => $user,
		 			'password' => $pass);
		 $this->db->insert('login', $data);
		 			echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
			echo "<div class='alert alert-success'><strong>Berhasil!</strong> Akun anda telah dibuat.</div>";
			header(" ");
			 }
	}
	public function daftarguru($user, $pass)
	{
		$this->db->where(['username' => $user]);
		$query = $this->db->get('guru');
		$row = $query->num_rows();
		 if ($row>0) {
		 redirect (" ");		 	
		 }
		 else if ($row==0) {
		 $data = array('username' => $user,
		 			'password' => $pass);
		 $this->db->insert('login', $data);
		 			echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
			echo "<div class='alert alert-success'><strong>Berhasil!</strong> Akun anda telah dibuat.</div>";
			header( " " );
			 }
	}
	public function inputnilai($tugas1, $tugas2, $tugas3, $uts, $uas, $mapel)
	{
		$this->db->where(['tugas_1' => $tugas1, 'tugas_2' => $tugas2, 'tugas_3' => $tugas3, 'uts' => $uts, 'uas' => $uas]);
		$query = $this->db->get($mapel);
		$data = array('tugas_1' => $tugas1, 'tugas_2' => $tugas2, 'tugas_3' => $tugas3, 'uts' => $uts, 'uas' => $uas);
		 $this->db->insert($mapel, $data);
			header( " " );
	}
	public function inputabsen($alpa, $izin, $sakit, $bulan)
	{
		$this->db->where(['alpa' => $alpa, 'izin' => $izin, 'sakit' => $sakit, 'hadir' => $kehadiran, 'bulan' =>  $bulan]);
		$query = $this->db->get('absen');
		$data = array('alpa' => $alpa, 'izin' => $izin, 'sakit' => $sakit, 'hadir' => $kehadiran, 'bulan' =>  $bulan);
		 $this->db->insert('absen', $data);
			header( " " );
	}



}
