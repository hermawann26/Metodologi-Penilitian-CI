<?php
class M_admin extends CI_Model{

	function list($status){
		$hsl=$this->db->query("SELECT * FROM tbl_mahasiswa where status='$status'");
		return $hsl;	
	}

	function simpan_daftar($nim,$nama,$judul,$dosen,$status){
		$hsl=$this->db->query("INSERT INTO tbl_daftar (nim,nama,judul_metopen,dosen,status) VALUES ('$nim','$nama','$judul','$dosen','$status')");
		return $hsl;
	}
	function simpan_daftar_rek($nim,$judul,$dosen){
		$hsl=$this->db->query("INSERT INTO tbl_daftar (nim,judul_metopen,dosen,status) VALUES ('$nim','$judul','$dosen', 3)");
		return $hsl;
	}

	function list_aju(){
		$hsl=$this->db->query("SELECT * FROM tbl_daftar where status = 3");
		return $hsl;
	}
	function terima($kode){
		$hsl=$this->db->query("UPDATE tbl_daftar set status= 1 where Nim='$kode'");
		return $hsl;
	}

	function tolak($kode){
		$hsl=$this->db->query("UPDATE tbl_daftar set status= 2 where Nim='$kode'");
		return $hsl;
	}


}