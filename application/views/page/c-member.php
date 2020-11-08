<br />
<br />
<br />
<div class="ui container">
    <div class="ui segment">
        <div class="ui breadcrumb">
            <a href="<?php echo base_url()?>" class="section">Home</a>
            <i class="right chevron icon divider"></i>
            <a href="<?php echo base_url()?>Penduduk/family" class="section">Kepala Keluarga</a>
            <i class="right arrow icon divider"></i>
            <a href="<?php echo base_url()?>Penduduk/member/<?php echo $fam['id_fam'] ?>" class="section">Member / <?php echo $fam['nomor_kartu_keluarga'] ?></a>
            <i class="right arrow icon divider"></i>
            <div class="active section">Tambah Data</div>
        </div>
    </div>
    <div class="ui segment">
        <form method="post" class="ui form" action="<?php echo base_url()?>Penduduk/save_member">
            <h4 class="ui dividing header"> <i class="icon clipboard outline"></i> FORM DATA MEMBER KELUARGA</h4>
            <br />
            <div class="field">
                <label>Nama / NIK</label>
                <div class="two fields">
                    <div class="field">
                        <input type="hidden" name="id_fam" value="<?php echo $fam['id_fam'] ?>">
                        <input type="hidden" name="id_kampung" value="<?php echo $fam['id_kampung'] ?>">
                        <input type="hidden" name="id_distrik" value="<?php echo $fam['id_distrik'] ?>">
                        <input type="text" name="nama" placeholder="Nama Anggota Keluarga" required="true">  
                    </div>
                    <div class="field">
                        <input type="text" name="nik" placeholder="Nik Anggota Keluarga" required="true">  
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Suku / Golongan Darah / Tempat Lahir / Tgl Lahir</label>
                <div class="fields">
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="suku" required="true">
                            <option value="">--- Suku ---</option>
                            <option value="OAP">OAP</option>
                            <option value="Non-OAP">Non OAP</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="golongan_darah" required="true">
                            <option value="">--- Golongan Darah ---</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <input type="text" name="tempat_lahir" placeholder="Tempat Lagir (Contoh : Jayapura)" required="true">
                    </div>
                    <div class="four wide field">
                        <input type="date" name="tgl_lahir" >
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Nama Ayah / Status Perkawinan / Adminduk KTP / Adminduk Akta Lahir</label>
                <div class="fields">
                    <div class="four wide field">
                        <input type="text" name="nama_ayah" placeholder="Nama Ayah" required="true">
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="status_perkawinan" required="true">
                            <option value="">--- Status Perkawainan ---</option>
                            <option value="Belum kawin">Belum Kawin</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Cerai">Cerai</option>
                            <option value="Cerai meninggal">Cerai Meninggal</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="adminduk_ktp" required="true">
                            <option value="">--- Adminduk KTP ---</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="adminduk_akta_lahir" required="true">
                            <option value="">--- Adminduk Akta Lahir ---</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Pekerjaan / Ijazah Terahir / Agama </label>
                <div class="fields">
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="pekerjaan" required="true">
                            <option value="">--- Pekerjaan ---</option>
                            <option value="Tidak bekerja">Tidak Bekerja</option>
                            <option value="Petani">Petani</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Pegawai Negri Sipil">Pegawai Negri Sipil</option>
                            <option value="Polri">Polri</option>
                            <option value="Tni">Tni</option>
                            <option value="Pegawai swasta">Pegawai Swasta</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="ijazah_terahir" required="true">
                            <option value="">--- Ijazah Terahir ---</option>
                            <option value="Tidak punya ijazah">Tidak Punya ijazah</option>
                            <option value="SD/sederajat">SD/Sederajat</option>
                            <option value="SMP/sederajat">SMP/Sederajat</option>
                            <option value="SMA/sederajat">SMA/Sederajat</option>
                            <option value="Perguruan tinggi">Perguruan Tinggi</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="partisipasi_sekolah" required="true">
                            <option value="">--- Partisipasi Sekolah ---</option>
                            <option value="Belum bersekolah">Belum Bersekolah</option>
                            <option value="Masih bersekolah">Masih Bersekolah</option>
                            <option value="Tidak bersekolah lagi">Tidak bersekolah lagi</option>
                        </select>
                        
                    </div>
                </div>
                <div class="field">
                <label>Hubungan dengan Kepala Keluarga / Agama </label>
                <div class="fields">
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="hub_kk" required="true">
                            <option value="">--- Hubungan dengan Kepala Keluarga ---</option>
                            <option value="Ayah">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Anak">Anak</option>
                            <option value="Nenek">Nenek</option>
                            <option value="Kakek">Kakek</option>
                            <option value="Cucuk">Cucuk</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="agama" required="true">
                            <option value="">--- Agama ---</option>
                            <option value="Islam">Islam</option>
                            <option value="Katholik">Khatolik</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                </div>

                <input type="submit" value="Simpan" class="ui button" tabindex="0" />
                <a href="<?php echo base_url()?>Penduduk/member/<?php echo $fam['id_fam'] ?>" class="ui button" >Batal</a>
            </div>
        </form>
    </div>
</div>