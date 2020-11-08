<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_model{
    function cari_data($nama){
        $query = $this->db->query("SELECT * FROM tb_member WHERE nama LIKE '%$nama%' ");

        return $query->result();
    }
}