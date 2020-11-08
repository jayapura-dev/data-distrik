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
            <div class="active section">Tambah data</div>
        </div>
    </div>
    <div class="ui segment">
        <form method="post" class="ui form" action="<?php echo base_url()?>Penduduk/save_family">
            <h4 class="ui dividing header"><i class="icon clipboard outline"></i> FORM DATA KEPALA KELUARGA</h4>
            <br />
            <div class="field">
                <label>Nama Kepala Keluarga</label>
                <div class="three fields">
                    <div class="field">
                        <input type="hidden" name="id_distrik" value="<?php echo $id_distrik ?>">
                        <input type="text" name="nama_kk" placeholder="Nama Lengkap Kepala Keluarga" required="true">  
                    </div>
                    <div class="field">
                        <input type="text" name="nomor_kartu_keluarga" placeholder="Nomor Kartu Keluarga" required="true">
                    </div>
                    <div class="Kampung">
                        <select class="ui fluid dropdown" name="id_kampung" required="true">
                            <option value="">--- Kampung ---</option>
                            <?php
                            foreach($kampung as $j => $val)
                            {?>
                            <option value="<?php echo $val->id_kampung;?>"><?php echo $val->kampung; ?></option>
                            <?php
                            }?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Suku / RT / RW</label>
                <div class="fields">
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="suku" required="true">
                            <option value="">--- Suku ---</option>
                            <option value="OAP">OAP</option>
                            <option value="Non-OAP">Non OAP</option>
                        </select>
                    </div>
                    <div class="six wide field">
                        <input type="text" name="rt" placeholder="RT, diisi dengan angka (Contoh : 001)" required="true">
                    </div>
                    <div class="six wide field">
                        <input type="text" name="rw" placeholder="RW, diisi dengan angka (Contoh : 001)" required="true">
                    </div>
                </div>
            </div>
            <br />
            <div class="field">
                <label>No Rumah / No Telfon / Penguasaan Bangunan / Status Lahan</label>
                <div class="fields">
                    <div class="four wide field">
                        <input type="Number" name="nomor_rumah" placeholder="Nomor Rumah">
                    </div>
                    <div class="four wide field">
                        <input type="text" name="nomor_telfon" placeholder="Nomor Telfon">
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="penguasaan_bangunan" required="true">
                            <option value="Milik Sendiri">Milik Sendiri</option>
                            <option value="Milik Pemerintah">Milik Pemerintah</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="status_lahan" required="true">
                            <option value="Milik Sendiri">Milik Sendiri</option>
                        </select>
                    </div>
                </div>
            </div>

            <br />
            <h4 class="ui dividing header">KETERANGAN RUMAH</h4>
            <div class="field">
                <label>Luas Lantai / Jenis Lantai / Kondisi Lantai</label>
                <div class="fields">
                    <div class="six wide field">
                        <input type="text" name="luas_lantai" placeholder="Luas Lantai (Dalam Satuan m2)">
                    </div>
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="jenis_lantai" required="true">
                            <option value="">--- Jenis Lantai ---</option>
                            <option value="semen">Semen</option>
                            <option value="tanah">Tanah</option>
                            <option value="keramik">Keramik</option>
                        </select>
                    </div>
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="kondisi_lantai" required="true">
                            <option value="">--- Kondisi Lantai ---</option>
                            <option value="bagus, kualitas tinggi">Bagus, Kualitas Tinggi</option>
                            <option value="jelek, kualitas rendah">Jelek, Kualitas Rendah</option>
                            <option value="bagus, kualitas rendah">Bagus, Kulitas Rendah</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label>Jenis Dinding / Kondisi Dinding</label>
                <div class="fields">
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="jenis_dinding" required="true">
                            <option value="">--- Jenis Dinding ---</option>
                            <option value="tembok">Tembok</option>
                            <option value="gabah">Gabah</option>
                        </select>
                    </div>
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="kondisi_dinding" required="true">
                            <option value="">--- Kondisi Dinding ---</option>
                            <option value="Bagus, kualitas tinggi">Bagus, Kualitas Tinggi</option>
                            <option value="Jelek, kualitas rendah">Jelek, Kualitas Rendah</option>
                            <option value="Bagus, kualitas rendah">Bagus, Kulitas Rendah</option>
                        </select>
                    </div>
                </div>
            </div>

            <br />
            <h4 class="ui dividing header">KETERANGAN ATAP RUMAH / KAMAR</h4>
            <div class="field">
                <label>Jenis Atap / Kondisi Atap / Jumlah Kamar</label>
                <div class="fields">
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="jenis_atap" required="true">
                            <option value="">--- Jenis Atap ---</option>
                            <option value="Seng">Seng</option>
                            <option value="Genteng">Genteng</option>
                            <option value="Gabah">Gabah</option>
                        </select>
                    </div>
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="kondisi_atap" required="true">
                            <option value="">--- Kondisi Atap ---</option>
                            <option value="Bagus, kualitas tinggi">Bagus, Kualitas Tinggi</option>
                            <option value="Jelek, kualitas rendah">Jelek, Kualitas Rendah</option>
                            <option value="Bagus, kualitas rendah">Bagus, Kulitas Rendah</option>
                        </select>
                    </div>
                    <div class="four wide field">
                        <input type="number" name="jumlah_kamar" placeholder="Jumlah Kamar">
                    </div>
                </div>
            </div>

            <br />
            <h4 class="ui dividing header">KETERANGAN SANITASI (KETERSEDIAAN AIR)</h4>
            <div class="field">
                <label>Sumber Air Minum / Perolehan Air Minum / Ketersediaan Air</label>
                <div class="fields">
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="sumber_air_minum" required="true">
                            <option value="">--- Sumber Air Minum ---</option>
                            <option value="Air Isi ulang">Air isi ulang</option>
                            <option value="Sumur bor">Sumur Bor</option>
                            <option value="Danau">Danau</option>
                            <option value="Kali">Kali</option>
                        </select>
                    </div>
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="peroleh_air_minum" required="true">
                            <option value="">--- Peroleh Air Minum ---</option>
                            <option value="Membeli">Membeli</option>
                            <option value="Tidak Membeli">Tidak Membeli</option>
                        </select>
                    </div>
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="ketersediaan_air" required="true">
                            <option value="">--- Ketersediaan Air ---</option>
                            <option value="Sepanjang tahun">Sepanjang Tahun</option>
                            <option value="Beberapa bulan">Beberapa Bulan</option>
                        </select>
                    </div>
                </div>
            </div>

            <br />
            <h4 class="ui dividing header">KETERANGAN SUMBER PENERANGAN (Listrik) DAN ENERGI MEMASAK</h4>
            <div class="field">
                <label>Sumber Penerangan / Daya PLN / Energi Memasak </label>
                <div class="fields">
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="sumber_penerangan" required="true">
                            <option value="">--- Sumber Penerangan ---</option>
                            <option value="Listrik PLN">Listrik PLN</option>
                            <option value="Tidak ada Listrik">Tidak ada Listrik</option>
                            <option value="Generator">Generator</option>
                            <option value="Genset">Genset</option>
                        </select>
                    </div>
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="daya_pln" required="true">
                            <option value="">--- Daya PLN ---</option>
                            <option value="Tidak ada">Tidak ada</option>
                            <option value="450">450 Watt</option>
                            <option value="1300">1300 Watt</option>
                            <option value="1800">1800 Watt</option>
                            <option value="2200">2200 Watt</option>
                            <option value="Diatas">Diatas</option>
                        </select>
                    </div>
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="energi_memasak" required="true">
                            <option value="">--- Energi Memasak ---</option>
                            <option value="Minyak tanah">Minyak tanah</option>
                            <option value="Kayu bakar">Kayu bakar</option>
                        </select>
                    </div>
                </div>
            </div>

            <br />
            <h4 class="ui dividing header">KETERANGAN MCK DAN PEMBUANGAN AIR</h4>
            <div class="field">
                <label>Fasilitas Buang Air</label>
                <div class="fields">
                    <div class="four wide field">
                        <select class="ui fluid dropdown" name="fasilitas_buang_air" required="true">
                            <option value="">--- Fasilitas Buang Air ---</option>
                            <option value="Sendiri">Sendiri</option>
                            <option value="Bersama">Bersama</option>
                            <option value="Generator">Generator</option>
                            <option value="Genset">Genset</option>
                        </select>
                    </div>
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="penggunaan_jamban" required="true">
                            <option value="">--- Penggunaan Jamban ---</option>
                            <option value="Dipakai seluruh anggota keluarga">Dipakai Seluruh Anggota Keluarga</option>
                            <option value="Tidak dipakai">Tidak dipakai</option>
                        </select>
                    </div>
                    <div class="six wide field">
                        <select class="ui fluid dropdown" name="pembuangan_air" required="true">
                            <option value="">--- Pembuangan Air ---</option>
                            <option value="Drainase">Drainase</option>
                            <option value="Selokan">Selokan</option>
                            <option value="Sungai">Sungai</option>
                            <option value="Kali">Kali</option>
                            <option value="Laut">Laut</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <input type="submit" value="Simpan" class="ui button" tabindex="0" />
        </form>
    </div>
    <br />
</div>
