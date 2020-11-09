<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Api extends REST_Controller {
    function  __construct()
    {
        parent::__construct();
        $this->load->model('M_api');
    }

    function kk_get($id = null){
        $id = $this->get('id_fam');

        if ($id === null) {
            $result = $this->M_api->get_family();
            
            foreach ($result as $item) {
                $post[] = array(
                    'id'        => $item->id_fam,
                    'city_id'   => null,
                    'district_id' => $item->id_distrik,
                    'village_id'=> $item->id_kampung,
                    'nomor_kartu_keluarga' => $item->nomor_kartu_keluarga,
                    'suku'      => $item->suku,
                    'rw'        => $item->rw,
                    'rt'        => $item->rt,
                    'nomor_rumah' => $item->nomor_rumah,
                    'nomor_foto'  => null,
                    'nomor_telefon' => $item->nomor_telfon,
                    'penguasaan_bangunan' => $item->penguasaan_bangunan,
                    'luas_lantai'=> $item->luas_lantai,
                    'jenis_lantai'=> $item->jenis_lantai,
                    'kondisi_lantai' => $item->kondisi_lantai,
                    'jenis_dinding'=> $item->jenis_dinding,
                    'kondisi_dinding'=> $item->kondisi_dinding,
                    'jumlah_kamar'  => $item->jumlah_kamar,
                    'sumber_air_minum' => $item->sumber_air_minum,
                    'peroleh_air_minum'=> $item->peroleh_air_minum,
                    'ketersediaan_air' => $item->ketersediaan_air,
                    'sumber_penerangan'=> $item->sumber_penerangan,
                    'daya_pln'      => $item->daya_pln,
                    'energi_memasak'=> $item->energi_memasak,
                    'fasilitas_buang_air' => $item->fasilitas_buang_air,
                    'penggunaan_jamban'   => $item->penggunaan_jamban,
                    'total_anggota_keluarga' => $item->jumlah_anggota,
                    'nama_kepala_keluarga'=> $item->nama_kk
                );
            }

            if ($result) {
                $this->response([
                    'status'   => true,
                    'message'  => 'Data Ditemukan',
                    'length'   => count($post),
                    'result'   => $post
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status'   => false,
                    'message'  => 'Data Tidak Ditemukan',
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        } else {
            $result = $this->M_api->get_family($id);
            
            foreach ($result as $item) {
                $post[] = array(
                    'id'        => $item->id_fam,
                    'city_id'   => null,
                    'district_id' => $item->id_distrik,
                    'village_id'=> $item->id_kampung,
                    'nomor_kartu_keluarga' => $item->nomor_kartu_keluarga,
                    'suku'      => $item->suku,
                    'rw'        => $item->rw,
                    'rt'        => $item->rt,
                    'nomor_rumah' => $item->nomor_rumah,
                    'nomor_foto'  => null,
                    'nomor_telefon' => $item->nomor_telfon,
                    'penguasaan_bangunan' => $item->penguasaan_bangunan,
                    'luas_lantai'=> $item->luas_lantai,
                    'jenis_lantai'=> $item->jenis_lantai,
                    'kondisi_lantai' => $item->kondisi_lantai,
                    'jenis_dinding'=> $item->jenis_dinding,
                    'kondisi_dinding'=> $item->kondisi_dinding,
                    'jumlah_kamar'  => $item->jumlah_kamar,
                    'sumber_air_minum' => $item->sumber_air_minum,
                    'peroleh_air_minum'=> $item->peroleh_air_minum,
                    'ketersediaan_air' => $item->ketersediaan_air,
                    'sumber_penerangan'=> $item->sumber_penerangan,
                    'daya_pln'      => $item->daya_pln,
                    'energi_memasak'=> $item->energi_memasak,
                    'fasilitas_buang_air' => $item->fasilitas_buang_air,
                    'penggunaan_jamban'   => $item->penggunaan_jamban,
                    'total_anggota_keluarga' => $item->jumlah_anggota,
                    'nama_kepala_keluarga'=> $item->nama_kk
                );
            }

            if ($result) {
                $this->response([
                    'status'    => true,
                    'message'   => 'Data Ditemukan',
                    'id'        => $id,
                    'result'    => $post
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status'    => false,
                    'message'   => 'Data Tidak Ditemukan',
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    function member_get(){
        $result = $this->M_api->get_member();
        $countResult = count($result);

        if($countResult != null) {
            foreach($result as $item){
                $post[] = array(
                    'id'        => $item->id_member,
                    'survey_family_id' => $item->id_fam,
                    'village_id'=> null,
                    'no_urut'   => null,
                    'nama'      => $item->nama,
                    'nik'       => $item->nik,
                    'suku'      => $item->suku,
                    'golongan_darah'   => $item->golongan_darah,
                    'tempat_lahir'     => $item->tempat_lahir,
                    'tanggal_lahir'    => $item->tgl_lahir,
                    'nama_ayah' => $item->nama_ayah,
                    'adminduk_akta_lahir' => $item->adminduk_akta_lahir,
                    'status_perkawinan'=> $item->status_perkawinan,
                    'adminduk_ktp'     => $item->adminduk_ktp,
                    'partisipasi_sekolah' => $item->partisipasi_sekolah,
                    'ijazah_tertinggi' => $item->ijazah_terahir,
                    'pekerjaan' => $item->pekerjaan,
                    'agama'     => $item->agama,
                    'hubungan_dengan_kepala_keluarga' => $item->hub_kk,
                    'city_id'   => null,
                    'district_id'=> null
                );
            }

            $this->response([
                'status'   => true,
                'message'  => 'Data Ditemukan',
                'length'   => count($post),
                'result'   => $post
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status'   => false,
                'message'  => 'Data Tidak Ditemukan',
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}