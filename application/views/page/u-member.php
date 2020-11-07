<div class="ui container">
    <br />
    <br />
    <br />
    <div class="ui segment">
        <form method="post" class="ui form" action="<?php echo base_url()?>Penduduk/save_member_edit">
            <h4 class="ui dividing header">FORM DATA MEMBER KELUARGA</h4>
            <br />
            <div class="field">
                <label>Nama / NIK</label>
                <div class="two fields">
                    <div class="field">
                        <input type="hidden" name="id_member" value="<?php echo $member['id_member'] ?>">
                        <input type="hidden" name="id_fam" value="<?php echo $member['id_fam'] ?>">
                        <input type="hidden" name="id_kampung" value="<?php echo $member['id_kampung'] ?>">
                        <input type="hidden" name="id_distrik" value="<?php echo $member['id_distrik'] ?>">
                        <input type="text" name="nama" value="<?php echo $member['nama'] ?>" placeholder="Nama Anggota Keluarga">  
                    </div>
                    <div class="field">
                        <input type="text" name="nik" value="<?php echo $member['nik'] ?>" placeholder="Nik Anggota Keluarga">  
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Suku / Golongan Darah / Tempat Lahir / Tgl Lahir</label>
                <div class="fields">
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="suku">
                            <option value="<?php echo $member['suku'] ?>"><?php echo $member['suku'] ?></option>
                            <option value="">--- Suku ---</option>
                            <option value="OAP">OAP</option>
                            <option value="Non-OAP">Non OAP</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="golongan_darah">
                            <option value="<?php echo $member['golongan_darah'] ?>"><?php echo $member['golongan_darah'] ?></option>
                            <option value="">--- Golongan Darah ---</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="O">O</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <input type="text" name="tempat_lahir" value="<?php echo $member['tempat_lahir'] ?>" placeholder="Tempat Lagir (Contoh : Jayapura)" >
                    </div>
                    <div class="four wide field">
                        <input type="date" name="tgl_lahir" value="<?php echo $member['tgl_lahir'] ?>" >
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Nama Ayah / Status Perkawinan / Adminduk KTP / Adminduk Akta Lahir</label>
                <div class="fields">
                    <div class="four wide field">
                        <input type="text" name="nama_ayah" value="<?php echo $member['nama_ayah'] ?>" placeholder="Nama Ayah" >
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="status_perkawinan">
                            <option value="<?php echo $member['status_perkawinan'] ?>"><?php echo $member['status_perkawinan'] ?></option>
                            <option value="">--- Status Perkawainan ---</option>
                            <option value="Belum kawin">Belum Kawin</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Cerai">Cerai</option>
                            <option value="Cerai meninggal">Cerai Meninggal</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="adminduk_ktp">
                            <option value="<?php echo $member['adminduk_ktp'] ?>"><?php echo $member['adminduk_ktp'] ?></option>
                            <option value="">--- Adminduk KTP ---</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="adminduk_akta_lahir">
                            <option value="<?php echo $member['adminduk_akta_lahir'] ?>"><?php echo $member['adminduk_akta_lahir'] ?></option>
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
                        <select class="ui fluid dropdown" name="pekerjaan">
                            <option value="<?php echo $member['pekerjaan'] ?>"><?php echo $member['pekerjaan'] ?></option>
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
                        <select class="ui fluid dropdown" name="ijazah_terahir">
                            <option value="<?php echo $member['ijazah_terahir'] ?>"><?php echo $member['ijazah_terahir'] ?></option>
                            <option value="">--- Ijazah Terahir ---</option>
                            <option value="Tidak punya ijazah">Tidak Punya ijazah</option>
                            <option value="SD/sederajat">SD/Sederajat</option>
                            <option value="SMP/sederajat">SMP/Sederajat</option>
                            <option value="SMA/sederajat">SMA/Sederajat</option>
                            <option value="Perguruan tinggi">Perguruan Tinggi</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="partisipasi_sekolah">
                            <option value="<?php echo $member['partisipasi_sekolah'] ?>"><?php echo $member['partisipasi_sekolah'] ?></option>
                            <option value="">--- Partisipasi Sekolah ---</option>
                            <option value="Masih bersekolah">Masih Bersekolah</option>
                            <option value="Tidak bersekolah lagi">Tidak bersekolah lagi</option>
                        </select>
                        
                    </div>
                </div>
                <div class="field">
                <label>Hubungan dengan Kepala Keluarga / Agama </label>
                <div class="fields">
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="hub_kk">
                            <option value="<?php echo $member['hub_kk'] ?>"><?php echo $member['hub_kk'] ?></option>
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
                        <select class="ui fluid dropdown" name="agama">
                            <option value="<?php echo $member['agama'] ?>"><?php echo $member['agama'] ?></option>
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
                <a href="<?php echo base_url()?>Penduduk/family" class="ui button" >Batal</a>
            </div>
        </form>
    </div>
</div>