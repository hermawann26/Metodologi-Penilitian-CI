<?php
class M_semprop extends CI_Model{
    function get(){
        $hasil=$this->db->query("SELECT tbl_mahasiswa.nim as nim,tbl_mahasiswa.nama as nama,tbl_mahasiswa.judul as judul,tbl_mahasiswa.dosen_pembimbing as pembimbing,tbl_ujian.penguji as penguji,tbl_ujian.jadwal as jadwal,tbl_ujian.ruangan as ruang FROM tbl_mahasiswa INNER JOIN tbl_jadwal on tbl_mahasiswa.nim=tbl_jadwal.nim INNER JOIN tbl_ujian on tbl_ujian.penguji=tbl_jadwal.dsn ");
        return $hasil;
    }
     function get1(){
        $hasil=$this->db->query("SELECT tbl_mahasiswa.nim ,tbl_mahasiswa.nama,tbl_mahasiswa.judul,tbl_mahasiswa.dosen_pembimbing,tbl_ujian.penguji,tbl_ujian.jadwal,tbl_ujian.ruangan FROM tbl_mahasiswa,tbl_jadwal,tbl_ujian INNER JOIN where tbl_mahasiswa.nim=tbl_jadwal.nim and tbl_ujian.penguji=tbl_jadwal.dsn ");
        return $hasil;
    }
    function insert($nim,$dsn){
    	$hasil=$this->db->query("INSERT INTO tbl_jadwal (nim,dsn) values ('$nim','$dsn')");
        return $hasil;
    }
    

}
