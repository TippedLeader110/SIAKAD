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
		$data['murid']="inactive";
		$data['guru']="inactive";
		$data['matapel']="inactive";
		$data['kelas']="inactive";
		$data['page']="admin/awal";
		$this->load->view('layout/admin', $data);
	}
	public function login()
	{
		$_SESSION['admin'] = '';
		$data['murid']="inactive";
		$data['guru']="inactive";
		$data['matapel']="inactive";
		$data['kelas']="inactive";
		$data['page']="admin/login";
		$this->load->view('layout/admin', $data);	
	}
	public function register()
	{
		$data['murid']="inactive";
		$data['guru']="inactive";
		$data['matapel']="inactive";
		$data['kelas']="inactive";
		$data['page']="admin/regis";
		$this->load->view('layout/admin', $data);
	}
}

?>
