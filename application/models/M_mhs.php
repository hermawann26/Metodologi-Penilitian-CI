<?php
class M_mhs extends CI_Model{

	function get_all(){
		$hsl=$this->db->query("SELECT * FROM tbl_mahasiswa");
		return $hsl;	
	}
	function updateuts($nim,$file){
		$hsl=$this->db->query("UPDATE tbl_mahasiswa set fileuts='$file' where nim='$nim'");
		return $hsl;
	}
	function updateuas($nim,$link){
		$hsl=$this->db->query("UPDATE tbl_mahasiswa set fileuas='$link' where nim='$nim'");
		return $hsl;
	}
	function status($nim,$status){
		$hsl=$this->db->query("UPDATE tbl_mahasiswa set status='$status' where nim='$nim'");
		return $hsl;
	}
	function daftarpps(){
		$hsl=$this->db->query("SELECT * FROM tbl_mahasiswa WHERE status='DAFTARPPS'");
		return $hsl;
	}
	function daftarptta(){
		$hsl=$this->db->query("SELECT * FROM tbl_mahasiswa WHERE status='DAFTARPTTA'");
		return $hsl;
	}
}