<?php
class M_login extends CI_Model{
    function cekdosen($u,$p){
        $hasil=$this->db->query("SELECT * FROM dosen WHERE niy='$u' AND password='$p'");
        return $hasil;
    }
    

}
