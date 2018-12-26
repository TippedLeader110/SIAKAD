<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {

	public function login($user, $pass)
	{
		$this->db->where(['username' => $user, 'password' => $pass]);
		$query = $this->db->get('admin');
		$query = $query->num_rows();
		if ($query==0) {
			redirect('home/login');
		}
		else if ($query==1) {
		$this->db->where(['username' => $user, 'password' => $pass]);
		$query = $this->db->get('admin');
		$data = $query->result();
			foreach ($data as $key => $w) {
			}
			$this->session->admin = $w->username;
			redirect('admin');
		}

	}
	public function hitung($s)
	{
		$query = $this->db->get($s);
		$query = $query->num_rows();
		return $query;
	}
	public function hitunga($s)
	{
		$this->db->where(['status' => $s]);
		$query = $this->db->get('siswa');
		$query = $query->num_rows();
		return $query;
	}	
	public function hitungda($s, $w)
	{
		$this->db->where(['jk' => $w]);
		$query = $this->db->get($s);
		$query = $query->num_rows();
		return $query;
	}
	public function ambil($data)
	{
		$query = $this->db->get($data);
		return $query->result();
	}
	public function ambilspes($data,$nama,$spes)
	{
		$this->db->like([$spes => $nama]);
		$query = $this->db->get($data);
		return $query->result();
	}
	public function ambilspesx($data2,$nama,$spes,$naruto)
	{
		$w = date('Y');
		if ($naruto=='1') {
			$w = $w;
		}
		if ($naruto=='2') {
			$w = 1-$w;
		}
		if ($naruto=='3') {
			$w = 2-$w;
		}
		$anj = $_SESSION['nip'];
		$this->db->where(['nip' => $anj ]);
		$query = $this->db->get('guru');
		$data = $query->result();
		foreach ($data as $key => $v) {	}

			$b = $v->kode_mapel;
		$this->db->like([$spes => $nama, 'tahun' => $w, 'kelas' => $b]);
		$query = $this->db->get($data2);
		return $query->result();
	}
	public function ambilspesg($data,$nama,$spes)
	{
		$this->db->where([$spes => $nama]);
		$query = $this->db->get($data);
		return $query->result();
	}	
	public function ambilspes2nd($data,$nama,$spes,$jur)
	{
		$this->db->like([$spes => $nama, 'jurusan' => $jur]);
		$query = $this->db->get($data);
		return $query->result();
	}
	public function spes($data,$nama,$spes)
	{
		$this->db->where([$spes => $nama]);
		$query = $this->db->get($data);
		return $query->result();
	}
	public function ambilspes3($data,$nama,$spes)
	{
		$this->db->like([$spes => $nama]);
		$query = $this->db->get($data);
		return $query->result();
	}
	public function absen($id,$nis,$a){
		$this->db->where(['semester' => $id, 'nis' => $nis, 'bulan' => $a]);
			$query = $this->db->get('absen');
			return $query->result();
	}
	public function ambildata($nis)
	{
		$this->db->where(['nis' => $nis]);
		$query = $this->db->get('siswa');
		return $query->result();
	}
	public function ambilart($id)
	{
		$this->db->where(['id' => $id]);
		$query = $this->db->get('terkini');
		return $query->result();
	}
	public function kirimsiswa($nis,$nama,$username,$pass,$sekolah,$agama,$alamat,$email,$jkel,$jurusan,$ayah,$ibu,$payah,$pibu,$aayah,$aibu,$tahun,$tlahir,$date,$nfile,$anak, $nohpa, $nohpi, $kelas, $penibu, $penayah)
	{
		echo $pass;
		$adata = array('nis' =>$nis,'nama' =>$nama,'username' =>$username,'password' =>$pass,'asal_sekolah' =>$sekolah,'agama' =>$agama,'alamat' =>$alamat,'email' =>$email,'jk' =>$jkel,'jurusan' =>$jurusan,'nama_ayah' =>$ayah,'nama_ibu' =>$ibu,'pekerjaan_ayah' =>$payah,'pekerjaan_ibu' =>$pibu,'alamat_ayah' =>$aayah,'alamat_ibu' =>$aibu,'tahun' =>$tahun,'tempat' =>$tlahir,'tanggal_lahir' =>$date,'pict' =>$nfile, 'anak_ke' => $anak, 'no_hp_ayah' => $nohpa,'no_hp_ibu' => $nohpi,'kelas' => $kelas, 'pendidikan_ibu' => $penibu, 'pendidikan_ayah' => $penayah, 'status' => 'Aktif');
		$this->db->insert('siswa', $adata);
	}
	public function kirimguru($nama,$nip,$kode_mapel,$username,$password,$tanggal,$agama,$alamat,$email,$mapel,$jk,$gol,$no_hp, $tmpt)
	{
		$adata = array('nama' =>$nama,'nip' =>$nip,'kode_mapel' =>$kode_mapel,'username' =>$username,'password' =>$password,'tgl_lahir' =>$tanggal,'alamat' =>$alamat,'email' =>$email,'mapel' =>$mapel,'jk' =>$jk,'gol' =>$gol,'no_hp' =>$no_hp, 'tmpt_lahir' => $tmpt, 'status' => 'Aktif');
		$this->db->insert('guru', $adata);
	}
	public function post($judul,$isi,$waktu,$penulis)
	{

		$adata = array('judul' =>$judul,'isi' =>$isi,'waktu' =>$waktu,'penulis' =>$penulis,);
		$this->db->insert('terkini', $adata);
	}
	function data($number,$offset, $w){
		return $query = $this->db->get($w,$number,$offset)->result();		
	}
	function dataspes($number,$offset, $w, $ww){
		$this->db->where(['jurusan' => $ww]);
		return $query = $this->db->get($w,$number,$offset)->result();		
	}
	function dataspes2($number,$offset, $w, $ww, $w2){
		$this->db->where([$w2 => $ww]);
		return $query = $this->db->get($w,$number,$offset)->result();		
	}
}
