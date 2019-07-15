<?php
class M_dosen extends CI_Model{

	function get_namadosen($kode){
		$hsl=$this->db->query("SELECT * FROM dosen where niy='$kode'");
		return $hsl;	
	}
	function get_request($username){
		$hsl=$this->db->query("SELECT * FROM tbl_daftar where dosen='$username' and status=3");
		return $hsl;	
	}
	function simpan_mahasiswa($nim,$nama,$judul,$namadosen){
		$hsl=$this->db->query("INSERT INTO tbl_mahasiswa (nim,nama,judul,dosen_pembimbing) VALUES ('$nim','$nama','$judul','$namadosen')");
		return $hsl;
	}
	function get_ampu($username){
		$hsl=$this->db->query("SELECT * FROM tbl_mahasiswa where dosen_pembimbing='$username' ");
		return $hsl;
	}
	
}