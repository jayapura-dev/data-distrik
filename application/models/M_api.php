<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_model{
    function get_family($id = null){
        if($id === null){
            $query = $this->db->query("SELECT 
                tb_familiy.id_fam as id_fam,
                nama_kk,
                nomor_kartu_keluarga,
                tb_familiy.suku as suku,
                tb_familiy.id_distrik as id_distrik,
                tb_familiy.id_kampung as id_kampung,
                rt,
                rw,
                nomor_rumah,
                nomor_telfon,
                penguasaan_bangunan,
                status_lahan,
                luas_lantai,
                jenis_lantai,
                kondisi_lantai,
                jenis_dinding,
                kondisi_dinding,
                jenis_atap,
                kondisi_atap,
                jumlah_kamar,
                sumber_air_minum,
                peroleh_air_minum,
                ketersediaan_air,
                sumber_penerangan,
                energi_memasak,
                daya_pln,
                fasilitas_buang_air,
                penggunaan_jamban,
                pembuangan_air,
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
                tb_familiy.id_distrik as id_distrik,
                tb_familiy.id_kampung as id_kampung,
                rt,
                rw,
                nomor_rumah,
                nomor_telfon,
                penguasaan_bangunan,
                status_lahan,
                luas_lantai,
                jenis_lantai,
                kondisi_lantai,
                jenis_dinding,
                kondisi_dinding,
                jenis_atap,
                kondisi_atap,
                jumlah_kamar,
                sumber_air_minum,
                peroleh_air_minum,
                ketersediaan_air,
                sumber_penerangan,
                energi_memasak,
                daya_pln,
                fasilitas_buang_air,
                penggunaan_jamban,
                pembuangan_air,
                COUNT(tb_member.id_member) as jumlah_anggota,
                tb_kampung.kampung as kampung
                FROM tb_familiy 
                LEFT JOIN tb_kampung ON tb_familiy.id_kampung = tb_kampung.id_kampung
                LEFT JOIN tb_member ON tb_familiy.id_fam = tb_member.id_fam
                WHERE tb_familiy.id_fam = '$id' ");
            return $query->result();
        }
    }

    function get_member(){
        $query = $this->db->query("SELECT * FROM tb_member");
        return $query->result();
    }
}