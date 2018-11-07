<?php
class M_berita extends CI_Model{
 
    function simpan_berita($jdl,$berita){
        $hsl=$this->db->query("INSERT INTO data VALUES ('', $jdl','$berita'");
        return $hsl;
    }
 
    function get_berita_by_kode($kode){
        $hsl=$this->db->query("SELECT * FROM data WHERE id='$kode'");
        return $hsl->row();
    }
 
    function get_all_berita(){
        $hsl=$this->db->query("SELECT * FROM data ORDER BY id DESC");
        return $hsl;
    }
}