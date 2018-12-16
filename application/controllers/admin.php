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

    public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
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
		$data['jumlahkelas'] = $this->adminmodel->hitung('kelas');
		$data['muridbaru'] = $this->adminmodel->ambil('siswa');
		$data['page']="admin/awal";
		$this->load->view('layout/admin', $data);
	}
	public function murid()
	{
		$id=$this->uri->segment(3);
		if (isset($id)) {
			$max = $id;	
			$data['test'] = $max;
			$nama=$max;
			$data['muridtam'] = $this->adminmodel->ambilspes('siswa', $nama);	
		}
		else
		{
		$data['muridtam'] = $this->adminmodel->ambil('siswa');
		}
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['kelas']="";
		$data['page']="admin/murid";
		$this->load->view('layout/admin', $data);	
	}


	public function rMurid()
	{
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['kelas']="";
		$data['page']="admin/regis";
		$this->load->view('layout/admin', $data);
	}
	public function simpanm()
	{
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$nohpa = $this->input->post('nohpa');
		$nohpi = $this->input->post('nohpi');
		$anak = $this->input->post('anak');
		$username = $this->input->post('username');
		$pass = $this->input->post('pass');
		$sekolah = $this->input->post('sekolah');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$jkel = $this->input->post('jkel');
		$jurusan = $this->input->post('jurusan');
		$ayah = $this->input->post('ayah');
		$ibu = $this->input->post('ibu');
		$payah = $this->input->post('payah');
		$pibu = $this->input->post('pibu');
		$aayah = $this->input->post('aayah');
		$aibu = $this->input->post('aibu');
		$tahun = $this->input->post('tahun');
		$tlahir = $this->input->post('tlahir');
		$date = $this->input->post('date');
		$file = $this->input->post('file');
		$nfile = "/gambar/$nis";
		$this->adminmodel->kirimsiswa($nis,$nama,$username,$pass,$sekolah,$agama,$alamat,$email,$jkel,$jurusan,$ayah,$ibu,$payah,$pibu,$aayah,$aibu,$tahun,$tlahir,$date,$nfile, $anak, $nohpa, $nohpi);
		
		$data['page'] = 'admin/test';
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['kelas']="";
		$data['nis'] = $nis;
		$this->load->view('layout/admin', $data);
	}
	public function info()
	{
		$nis = $this->input->post('nis');
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['kelas']="";
		$data['page']="admin/regis2";
		$data['data'] = $this->adminmodel->ambilspes2($nis);
		$this->load->view('layout/admin', $data);
	}
	public function test()
	{
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['kelas']="";
		$data['page']="admin/test";
		$this->load->view('layout/admin')	;
	}
	public function do_upload()
        {

        	$nis= $this->input->post('nis');
        		$config['file_name']			= $nis;
                $config['upload_path']          = './gambar/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $this->load->view('admin/foto', $error);
                }
                else
                {
                		$w = $config['file_name'];
                        $data = array('upload_data' => $this->upload->data());
                        
                        $this->db->set('pict', $w); 
                        $this->db->where(['nis' => $nis]);
						$this->db->update('siswa');
                        redirect("admin/murid");
                }
        }
}

?>
