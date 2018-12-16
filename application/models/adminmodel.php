<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {

	public function hitung($s)
	{
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
	public function ambildata($nis)
	{
		$this->db->where(['nis' => $nis]);
		$query = $this->db->get('siswa');
		return $query->result();
	}
	public function kirimsiswa($nis,$nama,$username,$pass,$sekolah,$agama,$alamat,$email,$jkel,$jurusan,$ayah,$ibu,$payah,$pibu,$aayah,$aibu,$tahun,$tlahir,$date,$nfile,$anak, $nohpa, $nohpi)
	{
		$adata = array('nis' =>$nis,'nama' =>$nama,'username' =>$username,'password' =>$pass,'asal_sekolah' =>$sekolah,'agama' =>$agama,'alamat' =>$alamat,'email' =>$email,'jk' =>$jkel,'jurusan' =>$jurusan,'nama_ayah' =>$ayah,'nama_ibu' =>$ibu,'pekerjaan_ayah' =>$payah,'pekerjaan_ibu' =>$pibu,'alamat_ayah' =>$aayah,'alamat_ibu' =>$aibu,'tahun' =>$tahun,'tempat' =>$tlahir,'tanggal_lahir' =>$date,'pict' =>$nfile, 'anak_ke' => $anak, 'no_hp_ayah' => $nohpa,'no_hp_ibu' => $nohpi);
		$this->db->insert('siswa', $adata);
	}
}
