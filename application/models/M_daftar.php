<?php
class M_daftar extends CI_Model{

	function get_all_daftar(){
		$hsl=$this->db->query("SELECT * FROM tbl_daftar");
		return $hsl;	
	}

	function simpan_daftar($nim,$nama,$judul,$dosen,$status){
		$hsl=$this->db->query("INSERT INTO tbl_daftar (nim,nama,judul_metopen,dosen,status) VALUES ('$nim','$nama','$judul','$dosen','$status')");
		return $hsl;
	}
	function simpan_daftar_rek($nim,$nama,$judul,$dosen){
		$hsl=$this->db->query("INSERT INTO tbl_daftar (nim,nama,judul_metopen,dosen,status) VALUES ('$nim','$nama','$judul','$dosen', 1)");
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
	function updatenilaiuts($nim,$nilai,$status){
		$hsl=$this->db->query("UPDATE tbl_mahasiswa set nilai_uts='$nilai',status='$status'  where Nim='$nim'");
		return $hsl;
	}
	function updatenilaiuas($nim,$nilai,$status){
		$hsl=$this->db->query("UPDATE tbl_mahasiswa set nilai_uas='$nilai',status='$status' where Nim='$nim'");
		return $hsl;
	}


}