<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index news for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{	
		$_SESSION['admin'] = 'a';
		$data['dashboard']="active";
		$data['murid']="";
		$data['guru']="";
		$data['matapel']="";
		$data['kelas']="";
		$data['jumlahmurid'] = $this->adminmodel->hitung('siswa');
		$data['jumlahguru'] = $this->adminmodel->hitung('guru');
		$data['muridbaru'] = $this->adminmodel->ambil('siswa');
		$data['page']="admin/awal";
		$this->load->view('layout/admin', $data);
	}
	public function murid()
	{
		$_SESSION['admin'] = '';
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['kelas']="";
		$data['muridtam'] = $this->adminmodel->ambil('siswa');
		$data['page']="admin/murid";
		$this->load->view('layout/admin', $data);	
	}
	public function rMurid()
	{
		$data['dashboard']="active";
		$data['murid']="";
		$data['guru']="";
		$data['matapel']="";
		$data['kelas']="";
		$data['page']="admin/regis";
		$this->load->view('layout/admin', $data);
	}
}

?>
