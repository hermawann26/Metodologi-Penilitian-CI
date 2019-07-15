<?php
class M_rekomen extends CI_Model{

	function get_all_rek(){
		$hsl=$this->db->query("SELECT * FROM tbl_rekomen where status = 1");
		return $hsl;	
	}
	function update($judul,$dosen){
		$hsl=$this->db->query("UPDATE tbl_rekomen set status = 2 where Judul_rek='$judul' and dosen_rek='$dosen'");
		return $hsl;
	}

	

}