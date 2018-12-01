<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$data['border']='black';
		$data['page']='userview/home';
		$this->load->view('layout/main', $data);
	}
	public function regsis()
	{

	}
	public function daftarsiswa()
	{
		$this->form_validation->set_rules('NIS', 'NIS', 'required["%s sudah digunakan"]|is_unique[login_siswa.NIS]');
		$this->form_validation->set_rules('Username', 'Username', 'required["%s sudah digunakan"]|is_unique[login_siswa.Username]');
		$Siswa=$this->input->post('Siswa');
		$NIS=$this->input->post('NIS');
		$Nama=$this->input->post('Nama');
		$TTL=$this->input->post('TTL');
		$Jenis_Kelamin=$this->input->post('Jenis_Kelamin');
		$Agama=$this->input->post('Agama');
		$Jurusan=$this->input->post('Jurusan');
		$Alamat=$this->input->post('Alamat');
		$Asal_Sekolah=$this->input->post('Asal_Sekolah');
		$Nama_Orangtua=$this->input->post('Nama_Orangtua');
		$Pekerjaan_Orangtua=$this->input->post('Pekerjaan_Orangtua');
		$Alamat_Orangtua=$this->input->post('Alamat_Orangtua');
		$Nomor_HP_Orangtua=$this->input->post('Nomor_HP_Orangtua');
		$Anak_ke=$this->input->post('Anak_ke');
		$Username=$this->input->post('Username');
		$Password=$this->input->post('Password');

	}
	public function daftarguru()
	{
		$this->form_validation->set_rules('NIP', 'NIP', 'required["%s sudah digunakan"]|is_unique[guru.NIP]');
		$this->form_validation->set_rules('Username', 'Username', 'required["%s sudah digunakan"]|is_unique[guru.Username]');		
		$NIP=$this->input->post('NIP');
		$Nama=$this->input->post('Nama');
		$Username=$this->input->post('Username');
		$Password=$this->input->post('Password');
		$Ttl=$this->input->post('Ttl');
		$Alamat=$this->input->post('Alamat');
		$JK=$this->input->post('JK');
		$Agama=$this->input->post('Agama');
		$Gol=$this->input->post('Gol');
		$No_HP=$this->input->post('No_HP');
		$Email=$this->input->post('Email');
		$Wali_Kelas=$this->input->post('Wali_Kelas');
		$Foto=$this->input->post('Foto');
	}
}
