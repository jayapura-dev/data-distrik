<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penduduk extends CI_model{
    function get_family($name = null){
        if($name === null){
            $query = $this->db->query("SELECT 
                tb_familiy.id_fam as id_fam,
                nama_kk,
                nomor_kartu_keluarga,
                tb_familiy.suku as suku,
                rt,
                rw,
                COUNT(tb_member.id_member) as jumlah_anggota,
                tb_kampung.kampung as kampung
                FROM tb_familiy 
                LEFT JOIN tb_kampung ON tb_familiy.id_kampung = tb_kampung.id_kampung
                LEFT JOIN tb_member ON tb_familiy.id_fam = tb_member.id_fam
                GROUP BY tb_familiy.id_fam ");
            return $query->result();
        } else {
            $query = $this->db->query("SELECT 
                tb_familiy.id_fam as id_fam,
                nama_kk,
                nomor_kartu_keluarga,
                tb_familiy.suku as suku,
                rt,
                rw,
                COUNT(tb_member.id_member) as jumlah_anggota,
                tb_kampung.kampung as kampung
                FROM tb_familiy 
                LEFT JOIN tb_kampung ON tb_familiy.id_kampung = tb_kampung.id_kampung
                LEFT JOIN tb_member ON tb_familiy.id_fam = tb_member.id_fam
                WHERE nama_kk LIKE '%$name%'
                GROUP BY tb_familiy.id_fam ");
            return $query->result();
        }
    } 
        

    function save_family($data){
        $this->db->insert('tb_familiy', $data);
    }

    function edit_family($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function delete_family($where = 0)
    {
        $hapus_member = $this->db->get_where('tb_member',['id_fam'  => $where]);
        if($hapus_member->num_rows() > 0){
            $this->db->delete('tb_member', array('id_fam' => $where));
        }

        $this->db->delete('tb_familiy', array('id_fam' => $where));
    }

    function get_member($id){
        $query = $this->db->query("SELECT * FROM tb_member WHERE id_fam = '$id' ");
        return $query->result();
    }

    function save_member($data){
        $this->db->insert('tb_member',$data);
    }

    function edit_member($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
}