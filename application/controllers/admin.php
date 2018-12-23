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
    public function logout()
    {
    	session_destroy();
    	redirect('admin/login', location);
    }
	public function index()
	{	
		if ($_SESSION['admin']=='') {
			redirect('admin/login', location);
		}
		else{
		$data['dashboard']="active";
		$data['murid']="";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="";
		$data['jumlahmurid'] = $this->adminmodel->hitung('siswa');
		$data['jumlahguru'] = $this->adminmodel->hitung('guru');
		$data['jumlahkelas'] = $this->adminmodel->hitung('kelas');
		$data['muridbaru'] = $this->adminmodel->ambil('siswa');
		$data['page']="admin/awal";
		$this->load->view('layout/admin', $data);
		}
	}
	public function login()
	{
		$data['page'] = 'admin/login';
		$this->load->view('layout/admin2', $data);
	}
	public function logpro()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$this->adminmodel->login($user, $pass);
	}
	public function atur()
	{
		$id=$this->uri->segment(3);
		$tipe=$this->uri->segment(4);
		if (isset($id)) {
			if ($tipe=='nama') {
			$max = $id;	
			$data['test'] = $max;
			$nama=$max;
			$data['muridtam'] = $this->adminmodel->ambilspes('siswa', $nama, 'nama');	
			}
			else
			{
			$max = $id;	
			$data['test'] = $max;
			$nama=$max;
			$data['muridtam'] = $this->adminmodel->ambilspes('siswa', $nama, 'tahun');		
			}
		}
		else
		{
		$data['muridtam'] = $this->adminmodel->ambil('siswa');
		}
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="";
		$data['page']="admin/muridkelas";
		$this->load->view('layout/admin', $data);	
	}
	public function murid()
	{
		$data['jumlahmurid'] = $this->adminmodel->hitung('siswa');
		$data['jumlahmurida'] = $this->adminmodel->hitungda('siswa','Laki-laki');
		$data['jumlahmuridi'] = $this->adminmodel->hitungda('siswa','Perempuan');
		$id=$this->uri->segment(3);
		$tipe=$this->uri->segment(4);
		if (isset($id)) {
			if ($tipe=='nama') {
			$max = $id;	
			$data['test'] = $max;
			$nama=$max;
			$data['muridtam'] = $this->adminmodel->ambilspes('siswa', $nama, 'nama');	
			}
			else
			{
			$max = $id;	
			$data['test'] = $max;
			$nama=$max;
			$data['muridtam'] = $this->adminmodel->ambilspes('siswa', $nama, 'tahun');		
			}
		}
		else
		{
		}
		$data['muridtam'] = $this->adminmodel->ambil('siswa');
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="";
		$data['page']="admin/murid";
		$this->load->view('layout/admin', $data);	
	}
	public function Daftar_murid()
	{
		$data['jumlahmurid'] = $this->adminmodel->hitung('siswa');
		$id=$this->uri->segment(3);
		$tipe=$this->uri->segment(4);
		if (isset($id)) {
			if ($tipe=='nama') {
			$max = $id;	
			$data['test'] = $max;
			$nama=$max;
			$data['muridtam'] = $this->adminmodel->ambilspes('siswa', $nama, 'nama');	
			}
			else
			{
			$max = $id;	
			$data['test'] = $max;
			$nama=$max;
			$data['muridtam'] = $this->adminmodel->ambilspes('siswa', $nama, 'tahun');		
			}
		}
		else
		{
		}
		$data['muridtam'] = $this->adminmodel->ambil('siswa');
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="";
		$data['page']="admin/smurid";
		$this->load->view('layout/admin', $data);	
	}
	public function guru()
	{	
		$id=$this->uri->segment(3);
		$tipe=$this->uri->segment(4);
		if (isset($id)) {
			if ($tipe=='nama') {
			$max = $id;	
			$data['test'] = $max;
			$nama=$max;
			$data['gurutam'] = $this->adminmodel->ambilspes('guru', $nama, 'nama');	
			}
			else
			{
			$max = $id;	
			$data['test'] = $max;
			$nama=$max;
			$data['gurutam'] = $this->adminmodel->ambilspes('guru', $nama, 'kode_mapel');		
			}
		}
		else
		{
		$data['gurutam'] = $this->adminmodel->ambil('guru');
		}
		$data['dashboard']="";
		$data['murid']="";
		$data['guru']="active";
		$data['post']="";
		$data['page'] = "admin/guru";
		$this->load->view('layout/admin', $data);	
	}
	public function post()
	{
		$id=$this->uri->segment(3);
		$tipe=$this->uri->segment(4);
		if (isset($id)) {
			if ($tipe=='nama') {
			$max = $id;	
			$data['test'] = $max;
			$nama=$max;
			$data['art'] = $this->adminmodel->ambilspes('terkini', $nama, 'penulis');	
			}
			else
			{
			$max = $id;	
			$data['test'] = $max;
			$nama=$max;
			$data['art'] = $this->adminmodel->ambilspes('terkini', $nama, 'isi');		
			}
		}
		else
		{
		$data['art'] = $this->adminmodel->ambil('terkini');
		}
		$data['dashboard']="";
		$data['murid']="";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="active";
		$data['page']="admin/artikel";
		$this->load->view('layout/admin', $data);
	}
	public function rPost()
	{
		$data['dashboard']="";
		$data['murid']="";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="active";
		$data['page']="admin/post";
		$this->load->view('layout/admin', $data);
	}	
	public function rMurid()
	{
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="";
		$data['page']="admin/regis";
		$this->load->view('layout/admin', $data);
	}
	public function rGuru()
	{
		$data['post']="";
		$data['dashboard']="";
		$data['murid']="";
		$data['guru']="active";
		$data['matapel']="";
		$data['page']="admin/regisg";
		$this->load->view('layout/admin', $data);
	}
	public function simpanm2()
	{
		
		$id = $this->input->post('id');
		$nis = $this->input->post('nis');
		$this->db->set('nis', $nis);
		$nama = $this->input->post('nama');
		$this->db->set('nama', $nama);
		$nohpa = $this->input->post('nohpa');
		$this->db->set('no_hp_ayah', $nohpa);
		$nohpi = $this->input->post('nohpi');
		$this->db->set('no_hp_ibu', $nohpi);
		$anak = $this->input->post('anak');
		$this->db->set('anak_ke', $anak);
		$username = $this->input->post('username');
		$this->db->set('username', $username);
		$pass = $this->input->post('pass');
		$this->db->set('password', $pass);
		$sekolah = $this->input->post('sekolah');
		$this->db->set('asal_sekolah', $sekolah);
		$agama = $this->input->post('agama');
		$this->db->set('agama', $agama);
		$alamat = $this->input->post('alamat');
		$this->db->set('alamat', $alamat);
		$email = $this->input->post('email');
		$this->db->set('email', $email);
		$jkel = $this->input->post('jkel');
		$this->db->set('jk', $jkel);
		$jurusan = $this->input->post('jurusan');
		$this->db->set('jurusan', $jurusan);
		$kelas = $this->input->post('kelas');
		$this->db->set('kelas', $kelas);
		$ayah = $this->input->post('ayah');
		$this->db->set('nama_ayah', $ayah);
		$ibu = $this->input->post('ibu');
		$this->db->set('nama_ibu', $ibu);
		$payah = $this->input->post('payah');
		$this->db->set('pekerjaan_ayah', $payah);
		$pibu = $this->input->post('pibu');
		$this->db->set('pekerjaan_ibu', $pibu);
		$aayah = $this->input->post('aayah');
		$this->db->set('alamat_ayah', $aayah);
		$aibu = $this->input->post('aibu');
		$this->db->set('alamat_ibu', $aibu);
		$tahun = $this->input->post('tahun');
		$this->db->set('tahun', $tahun);
		$tlahir = $this->input->post('tlahir');
		$this->db->set('tempat', $tlahir);
		$date = $this->input->post('date');
		$this->db->set('tanggal_lahir', $date);
                        $this->db->where(['nis' => $id]);
						$this->db->update('siswa');
                        redirect("admin/murid");
	}
	public function simpanm()
	{
		$nis = $this->input->post('nis');
		$nama = $this->input->post('nama');
		$nohpa = $this->input->post('nohpa');
		$nohpi = $this->input->post('nohpi');
		$anak = $this->input->post('anak');
		$username = $this->input->post('username');
		$kelas = $this->input->post('kelas');
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
		$this->form_validation->set_rules('nis', 'NIS', 'required["%s wajib diisi"]|is_unique[siswa.nis]',array('is_unique' => '%s sudah digunakan'));
		if ($this->form_validation->run()==FALSE) {
			$data['dashboard']="";
			$data['murid']="active";
			$data['guru']="";
			$data['matapel']="";
			$data['post']="";
			$data['page']="admin/regis";
			$this->load->view('layout/admin', $data);
		}
		else {
			
			$this->session->set_flashdata('success', 'Data berhasil disimpan');
		$this->adminmodel->kirimsiswa($nis,$nama,$username,$pass,$sekolah,$agama,$alamat,$email,$jkel,$jurusan,$ayah,$ibu,$payah,$pibu,$aayah,$aibu,$tahun,$tlahir,$date,$nfile, $anak, $nohpa, $nohpi,$kelas);

		$data['page'] = 'admin/test';
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="";
		$data['nis'] = $nis;
		$this->load->view('layout/admin', $data);
		}
	}
	public function simpang()
	{
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$kode_mapel = $this->input->post('kode_mapel');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$tanggal = $this->input->post('tanggal');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$mapel = $this->input->post('mapel');
		$jk = $this->input->post('jk');
		$gol = $this->input->post('gol');
		$no_hp = $this->input->post('no_hp');
		$nfile = "/gambar/$nis";
		$this->adminmodel->kirimguru($nama,$nip,$kode_mapel,$username,$password,$tanggal,$agama,$alamat,$email,$mapel,$jk,$gol,$no_hp);
		
		$data['page'] = 'admin/test2';
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="";
		$this->load->view('layout/admin', $data);
	}
	public function info()
	{

		$nis = $this->input->post('nis');
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="";
		$data['page']="admin/regis2";
		$data['arra'] = $this->adminmodel->ambildata($nis);
		$this->load->view('layout/admin', $data);
	}
	public function edit()
	{

		$nis = $this->input->post('nis');
		$data['dashboard']="";
		$data['murid']="";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="active";
		$data['page']="admin/post2";
		$data['art'] = $this->adminmodel->ambilart($nis);
		$this->load->view('layout/admin', $data);
	}	
	public function test()
	{
		$data['dashboard']="";
		$data['murid']="active";
		$data['guru']="";
		$data['matapel']="";
		$data['post']="";
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
        public function simpanPOST()
	{
		$penulis = $_SESSION['admin'];
		$judul = $this->input->post('judul');
		$isi = $this->input->post('editor1');
		$waktu = $this->input->post('waktu');
		$penulis = $this->input->post('penulis');
		$this->adminmodel->post($judul,$isi,$waktu,$penulis);
		redirect("admin/post", location);
		}
}

?>
