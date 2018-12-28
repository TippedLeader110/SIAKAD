<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubahsandi extends CI_Controller {

	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/ubahsandi';

		$this->load->view('layout/home', $data);
	}

	public function guru()
	{
		$data['nama'] = 'Ubah Sandi Siswa';
		$data['border']='transparent';
		if ($_SESSION['nis']!='') {
			$data['nav'] = 'layout/navbar-kiri-siswa';
		}
		elseif($_SESSION['nip']!='')
		{
			if ($_SESSION['wali']!='') {
				$data['nav'] = 'layout/navbar-kiri-walikelas';
			}
			else{
				$data['nav'] = 'layout/navbar-kiri-guru';
			}
		}
		$data['page']='userview/ubahsandi';
		$this->load->view('layout/home', $data);
	}

	public function siswa()
	{
		$data['nama'] = 'Ubah Sandi Guru';
		$data['border']='transparent';
		if ($_SESSION['nis']!='') {
			$data['nav'] = 'layout/navbar-kiri-siswa';
		}
		elseif($_SESSION['nip']!='')
		{
			if ($_SESSION['wali']!='') {
				$data['nav'] = 'layout/navbar-kiri-walikelas';
			}
			else{
				$data['nav'] = 'layout/navbar-kiri-guru';
			}
		}
		$data['page']='userview/ubahsandi';
		$this->load->view('layout/home', $data);
	}
	public function sandisiswa()
	{
	$lama = $this->input->post('lama');
	$baru1 = $this->input->post('baru1');
	$baru2 = $this->input->post('baru2');
	$this->db->where('nis', $_SESSION['nis']);
	$this->db->where('password', $lama);
	$l = $this->db->get('siswa')->num_rows();
	if ($l==0) {
		$_SESSION['do'] = 1;
		redirect('ubahsandi/siswa', location);
	}
	else{
		$this->db->set('password', $baru1);
		$this->db->where('nis' ,$_SESSION['nis']);
		$this->db->update('siswa');
		session_destroy();
		$_SESSION['do'] = 1;
		redirect('home', location);
	}

}
	public function sandiguru()
	{
	$lama = $this->input->post('lama');
	$baru1 = $this->input->post('baru1');
	$baru2 = $this->input->post('baru2');
	$this->db->where('nip', $_SESSION['nip']);
	$this->db->where('password', $lama);
	$l = $this->db->get('guru')->num_rows();
	if ($l==0) {
		$_SESSION['do'] = 1;
		redirect('ubahsandi/siswa', location);
	}
	else{
		$this->db->set('password', $baru1);
		$this->db->where('nip' ,$_SESSION['nip']);
		$this->db->update('nip');
		session_destroy();
		$_SESSION['do'] = 1;
		redirect('home', location);
	}
	}
}