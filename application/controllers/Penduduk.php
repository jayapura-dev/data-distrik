<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {
    function  __construct()
    {
        parent::__construct();
        $this->load->model('M_penduduk');
    }

    public function index(){
        $data['title'] = 'Kampung';
        //$data['kamp'] = $this->M_penduduk->kampung();

        $this->template->load('base_site','page/r-kampung', $data);
    }

    public function family($name = null){
        $data['title'] = 'Data Kepala Keluarga';

        $name = $this->input->get('nama_kk');
        $data['kk'] = $this->M_penduduk->get_family($name);

        $this->template->load('base_site','page/r-family',$data);
    }

    public function create_family(){
        $data['title'] = 'Create Family';
        $data['kampung'] = $this->db->query("SELECT * FROM tb_kampung WHERE id_distrik = 4 ")->result();
        $this->template->load('base_site','page/c-family',$data);
    }

    function save_family(){
        $id_distrik = $this->input->post('id_distrik');
        $id_kampung = $this->input->post('id_kampung');
        $nama_kk = $this->input->post('nama_kk');
        $nomor_kartu_keluarga = $this->input->post('nomor_kartu_keluarga');
        $nomor_rumah = $this->input->post('nomor_rumah');
        $nomor_telfon = $this->input->post('nomor_telfon');
        $suku = $this->input->post('suku');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $penguasaan_bangunan = $this->input->post('penguasaan_bangunan');
        $status_lahan = $this->input->post('status_lahan');
        $luas_lantai = $this->input->post('luas_lantai');
        $jenis_lantai = $this->input->post('jenis_lantai');
        $kondisi_lantai = $this->input->post('kondisi_lantai');
        $jenis_dinding = $this->input->post('jenis_dinding');
        $kondisi_dinding = $this->input->post('kondisi_dinding');
        $jenis_atap = $this->input->post('jenis_atap');
        $kondisi_atap = $this->input->post('kondisi_atap');
        $jumlah_kamar = $this->input->post('jumlah_kamar');
        $sumber_air_minum = $this->input->post('sumber_air_minum');
        $peroleh_air_minum = $this->input->post('peroleh_air_minum');
        $ketersediaan_air = $this->input->post('ketersediaan_air');
        $sumber_penerangan = $this->input->post('sumber_penerangan');
        $energi_memasak = $this->input->post('energi_memasak');
        $daya_pln = $this->input->post('daya_pln');
        $fasilitas_buang_air = $this->input->post('fasilitas_buang_air');
        $penggunaan_jamban = $this->input->post('penggunaan_jamban');
        $pembuangan_air = $this->input->post('pembuangan_air');

        $data = array(
            'id_distrik'    => $id_distrik,
            'id_kampung'    => $id_kampung,
            'nama_kk'       => $nama_kk,
            'nomor_kartu_keluarga' => $nomor_kartu_keluarga,
            'nomor_rumah'   => $nomor_rumah,
            'nomor_telfon'  => $nomor_telfon,
            'suku'          => $suku,
            'rt'            => $rw,
            'rw'            => $rt,
            'penguasaan_bangunan' => $penguasaan_bangunan,
            'status_lahan'  => $status_lahan,
            'luas_lantai'   => $luas_lantai,
            'jenis_lantai'  => $jenis_lantai,
            'kondisi_lantai'=> $kondisi_lantai,
            'jenis_dinding' => $jenis_dinding,
            'kondisi_dinding' => $kondisi_dinding,
            'jenis_atap'    => $jenis_atap,
            'kondisi_atap'  => $kondisi_atap,
            'jumlah_kamar'  => $jumlah_kamar,
            'sumber_air_minum' => $sumber_air_minum,
            'peroleh_air_minum'=> $peroleh_air_minum,
            'ketersediaan_air' => $ketersediaan_air,
            'sumber_penerangan'=> $sumber_penerangan,
            'energi_memasak'=> $energi_memasak,
            'daya_pln'      => $daya_pln,
            'fasilitas_buang_air' => $fasilitas_buang_air,
            'penggunaan_jamban'=> $penggunaan_jamban,
            'pembuangan_air'=> $pembuangan_air
        );

        if ($data) {
            $this->M_penduduk->save_family($data);
            $this->session->set_flashdata(
                "create_success",
                "<div class='ui positive message'>
                    <i class='close icon'></i>
                    <div class='header'>
                        Success,  Data Telah Disimpan !!
                    </div>
                </div>"
              );
    
            redirect('Penduduk/family');
        } else {
            $this->session->set_flashdata(
                "create_fail",
                "<div class='ui negative message'>
                    <i class='close icon'></i>
                    <div class='header'>
                        Gagal !! Cek Data Inputan !!
                    </div>
                </div>"
              );
    
            redirect('Penduduk/family');
        }
    }

    public function edit_family($id){
        $data['title'] = 'Edit Family';
        $data['fam'] = $this->db->get_where('tb_familiy', ['id_fam' => $id])->row_array();
        $data['kampung'] = $this->db->query("SELECT * FROM tb_kampung WHERE id_distrik = 4 ")->result();
        $this->template->load('base_site','page/u-family',$data);
    }

    function sava_family_edit(){
        $id_fam = $this->input->post('id_fam');
        $id_distrik = $this->input->post('id_distrik');
        $id_kampung = $this->input->post('id_kampung');
        $nama_kk = $this->input->post('nama_kk');
        $nomor_kartu_keluarga = $this->input->post('nomor_kartu_keluarga');
        $nomor_rumah = $this->input->post('nomor_rumah');
        $nomor_telfon = $this->input->post('nomor_telfon');
        $suku = $this->input->post('suku');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $penguasaan_bangunan = $this->input->post('penguasaan_bangunan');
        $status_lahan = $this->input->post('status_lahan');
        $luas_lantai = $this->input->post('luas_lantai');
        $jenis_lantai = $this->input->post('jenis_lantai');
        $kondisi_lantai = $this->input->post('kondisi_lantai');
        $jenis_dinding = $this->input->post('jenis_dinding');
        $kondisi_dinding = $this->input->post('kondisi_dinding');
        $jenis_atap = $this->input->post('jenis_atap');
        $kondisi_atap = $this->input->post('kondisi_atap');
        $jumlah_kamar = $this->input->post('jumlah_kamar');
        $sumber_air_minum = $this->input->post('sumber_air_minum');
        $peroleh_air_minum = $this->input->post('peroleh_air_minum');
        $ketersediaan_air = $this->input->post('ketersediaan_air');
        $sumber_penerangan = $this->input->post('sumber_penerangan');
        $energi_memasak = $this->input->post('energi_memasak');
        $daya_pln = $this->input->post('daya_pln');
        $fasilitas_buang_air = $this->input->post('fasilitas_buang_air');
        $penggunaan_jamban = $this->input->post('penggunaan_jamban');
        $pembuangan_air = $this->input->post('pembuangan_air');

        $data = array(
            'id_distrik'    => $id_distrik,
            'id_kampung'    => $id_kampung,
            'nama_kk'       => $nama_kk,
            'nomor_kartu_keluarga' => $nomor_kartu_keluarga,
            'nomor_rumah'   => $nomor_rumah,
            'nomor_telfon'  => $nomor_telfon,
            'suku'          => $suku,
            'rt'            => $rw,
            'rw'            => $rt,
            'penguasaan_bangunan' => $penguasaan_bangunan,
            'status_lahan'  => $status_lahan,
            'luas_lantai'   => $luas_lantai,
            'jenis_lantai'  => $jenis_lantai,
            'kondisi_lantai'=> $kondisi_lantai,
            'jenis_dinding' => $jenis_dinding,
            'kondisi_dinding' => $kondisi_dinding,
            'jenis_atap'    => $jenis_atap,
            'kondisi_atap'  => $kondisi_atap,
            'jumlah_kamar'  => $jumlah_kamar,
            'sumber_air_minum' => $sumber_air_minum,
            'peroleh_air_minum'=> $peroleh_air_minum,
            'ketersediaan_air' => $ketersediaan_air,
            'sumber_penerangan'=> $sumber_penerangan,
            'energi_memasak'=> $energi_memasak,
            'daya_pln'      => $daya_pln,
            'fasilitas_buang_air' => $fasilitas_buang_air,
            'penggunaan_jamban'=> $penggunaan_jamban,
            'pembuangan_air'=> $pembuangan_air
        );

        $where = array('id_fam' => $id_fam);

        if ($data) {
            $this->M_penduduk->edit_family($where,$data,'tb_familiy');
            $this->session->set_flashdata(
                "edit_success",
                "<div class='ui positive message'>
                    <i class='close icon'></i>
                    <div class='header'>
                        Success,  Data Telah Disimpan !!
                    </div>
                </div>"
              );
    
            redirect('Penduduk/family');
        } else {
            $this->session->set_flashdata(
                "edit_fail",
                "<div class='ui negative message'>
                    <i class='close icon'></i>
                    <div class='header'>
                        Gagal !! Cek Data Inputan !!
                    </div>
                </div>"
              );
    
            redirect('Penduduk/family');
        }
    }

    public function delete_family($id){
        $data['title'] = 'Hapus data Kepala Keluarga';
        $data['fam'] = $this->db->get_where('tb_familiy', ['id_fam' => $id])->row_array();

        $this->template->load('base_site','page/d-family', $data);
    }

    function delete_family_post(){
        $id_fam = $this->input->post('id_fam');

        $this->M_penduduk->delete_family($id_fam);
        $this->session->set_flashdata(
            "delete_success",
            "<div class='ui positive message'>
                <i class='close icon'></i>
                <div class='header'>
                    Success,  Data Telah Dihapus !!
                </div>
            </div>"
          );
        redirect('Penduduk/family');
    }

    function detail_family($id){
        $data['title'] = 'Detail Kepala Keluarga';
        $data['fam'] = $this->db->get_where('tb_familiy', ['id_fam' => $id])->row_array();

        $this->template->load('base_site','page/detail-fam', $data);
    }

    public function member($id){
        $data['title'] = 'Data Member Keluarga';
        $data['member'] = $this->M_penduduk->get_member($id);
        $data['fam'] = $this->db->get_where('tb_familiy', ['id_fam' => $id])->row_array();

        $this->template->load('base_site','page/r-member', $data);
    }

    public function create_member($id){
        $data['title'] = 'Tambah Data Member';
        $data['fam'] = $this->db->get_where('tb_familiy', ['id_fam' => $id])->row_array();

        $this->template->load('base_site','page/c-member', $data);
    }

    function save_member()
    {
        $id_fam = $this->input->post('id_fam');
        $id_kampung = $this->input->post('id_kampung');
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $suku = $this->input->post('suku');
        $golongan_darah = $this->input->post('golongan_darah');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $nama_ayah = $this->input->post('nama_ayah');
        $status_perkawinan = $this->input->post('status_perkawinan');
        $adminduk_ktp = $this->input->post('adminduk_ktp');
        $adminduk_akta_lahir = $this->input->post('adminduk_akta_lahir');
        $pekerjaan = $this->input->post('pekerjaan');
        $ijazah_terahir = $this->input->post('ijazah_terahir');
        $partisipasi_sekolah = $this->input->post('partisipasi_sekolah');
        $agama = $this->input->post('agama');
        $hub_kk = $this->input->post('hub_kk');
        $id_distrik = $this->input->post('id_distrik');

        $data = array(
            'id_fam'       => $id_fam,
            'id_kampung'   => $id_kampung,
            'nama'         => $nama,
            'nik'          => $nik,
            'suku'         => $suku,
            'golongan_darah'=> $golongan_darah,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir'    => $tgl_lahir,
            'nama_ayah'    => $nama_ayah,
            'status_perkawinan' => $status_perkawinan,
            'adminduk_ktp' => $adminduk_ktp,
            'adminduk_akta_lahir' => $adminduk_akta_lahir,
            'pekerjaan'    => $pekerjaan,
            'ijazah_terahir' => $ijazah_terahir,
            'partisipasi_sekolah' => $partisipasi_sekolah,
            'agama'        => $agama,
            'hub_kk'       => $hub_kk,
            'id_distrik'   => $id_distrik
        );

        if ($data) {
            $this->M_penduduk->save_member($data);
            $this->session->set_flashdata(
                "create_success",
                "<div class='ui positive message'>
                    <i class='close icon'></i>
                    <div class='header'>
                        Success,  Data Telah Disimpan !!
                    </div>
                </div>"
              );
            $id = $id_fam;
            redirect('Penduduk/member/'.$id.'');
        } else {
            $this->session->set_flashdata(
                "create_fail",
                "<div class='ui negative message'>
                    <i class='close icon'></i>
                    <div class='header'>
                        Gagal !! Cek Data Inputan !!
                    </div>
                </div>"
              );
    
              $id = $id_fam;
              redirect('Penduduk/member/'.$id.'');
        }
    }

    public function edit_member($id){
        $data['title'] = 'Edit Data Member';
        $data['member'] = $this->db->get_where('tb_member', ['id_member' => $id])->row_array();
        
        $this->template->load('base_site','page/u-member', $data);
    }

    function save_member_edit(){
        $id_member = $this->input->post('id_member');
        $id_fam = $this->input->post('id_fam');
        $id_kampung = $this->input->post('id_kampung');
        $nama = $this->input->post('nama');
        $nik = $this->input->post('nik');
        $suku = $this->input->post('suku');
        $golongan_darah = $this->input->post('golongan_darah');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $nama_ayah = $this->input->post('nama_ayah');
        $status_perkawinan = $this->input->post('status_perkawinan');
        $adminduk_ktp = $this->input->post('adminduk_ktp');
        $adminduk_akta_lahir = $this->input->post('adminduk_akta_lahir');
        $pekerjaan = $this->input->post('pekerjaan');
        $ijazah_terahir = $this->input->post('ijazah_terahir');
        $partisipasi_sekolah = $this->input->post('partisipasi_sekolah');
        $agama = $this->input->post('agama');
        $hub_kk = $this->input->post('hub_kk');
        $id_distrik = $this->input->post('id_distrik');

        $data = array(
            'id_fam'       => $id_fam,
            'id_kampung'   => $id_kampung,
            'nama'         => $nama,
            'nik'          => $nik,
            'suku'         => $suku,
            'golongan_darah'=> $golongan_darah,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir'    => $tgl_lahir,
            'nama_ayah'    => $nama_ayah,
            'status_perkawinan' => $status_perkawinan,
            'adminduk_ktp' => $adminduk_ktp,
            'adminduk_akta_lahir' => $adminduk_akta_lahir,
            'pekerjaan'    => $pekerjaan,
            'ijazah_terahir' => $ijazah_terahir,
            'partisipasi_sekolah' => $partisipasi_sekolah,
            'agama'        => $agama,
            'hub_kk'       => $hub_kk,
            'id_distrik'   => $id_distrik
        );

        $where = array('id_member' => $id_member);

        if ($data) {
            $this->M_penduduk->edit_member($where,$data,'tb_member');
            $this->session->set_flashdata(
                "edit_success",
                "<div class='ui positive message'>
                    <i class='close icon'></i>
                    <div class='header'>
                        Success,  Data Telah Disimpan !!
                    </div>
                </div>"
              );
            $id = $id_fam;
            redirect('Penduduk/member/'.$id.'');
        } else {
            $this->session->set_flashdata(
                "edit_fail",
                "<div class='ui negative message'>
                    <i class='close icon'></i>
                    <div class='header'>
                        Gagal !! Cek Data Inputan !!
                    </div>
                </div>"
              );
    
              $id = $id_fam;
              redirect('Penduduk/member/'.$id.'');
        }
    }
}
