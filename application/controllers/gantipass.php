<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gantipass extends CI_Controller {

	public function guru()
	{
		$data['border']='transparent';
		$data['page']='userview/gantipasswordguru';
		$this->load->view('layout/main', $data);
	}

	public function siswa()
	{
		$data['border']='transparent';
		$data['page']='userview/gantipasswordsiswa';
		$this->load->view('layout/main', $data);
	}
}