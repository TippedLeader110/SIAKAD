<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wali extends CI_Controller {

	public function tampil()
	{
		$w = $this->input->post('id');
		$data['murid'] = $this->adminmodel->ambilspes('siswa', $w , 'nis');
		$data['border']='black';
		$data['nav'] = 'layout/navbar-kiri-walikelas';
		$data['page']='userview/inputnilaiwalikelas';
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
	public function SikaEks()
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
		$data['border']='black';
		$data['nav'] = 'layout/navbar-kiri-walikelas';
		$data['page']='userview/sikaptampil';
		$data['nama'] = 'Ekstrakulikuler dan Sikap';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['ab'] = 'aktif';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}
	public function SikapEkstra()
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
		$data['border']='black';
		$data['nav'] = 'layout/navbar-kiri-walikelas';
		$data['page']='userview/sikaptampil2';
		$data['nama'] = 'Ekstrakulikuler dan Sikap';
		$data['beranda'] = '';
		$data['nilai'] = '';
		$data['ab'] = 'aktif';
		$data['rapot'] = '';
		$data['guru'] = '';
		$data['profil'] = '';
		$this->load->view('layout/home', $data);
	}

}

