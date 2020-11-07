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
            <div class="active section">Detail / <?php echo $fam['nomor_kartu_keluarga'] ?></div>
        </div>
    </div>
    <div class="ui segment">
        <h4 class="ui dividing header"> <i class="icon clipboard list"></i> DATA DETAIL KEPALA KELUARGA</h4>
        <br />
        <table class="ui column table">
            <tr>
                <td style="background-color:#7FFFD4;" colspan="3"> <i class="icon user"></i> <strong> KETERANGAN KEPALA KELUARGA</strong> </td>
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>:</td>
                <td><?php echo $fam['nomor_kartu_keluarga'] ?></td>
            </tr>
            <tr>
                <td>Nama Kepala Keluarga</td>
                <td>:</td>
                <td><?php echo $fam['nama_kk'] ?></td>
            </tr>
            <tr>
                <td>Nomor Telfon</td>
                <td>:</td>
                <td><?php echo $fam['nomor_telfon'] ?></td>
            </tr>
            <tr>
                <td>Suku </td>
                <td>:</td>
                <td><?php echo $fam['suku'] ?></td>
            </tr>
            <tr>
                <td style="background-color:#7FFFD4;" colspan="3"> <i class="icon map"></i> <strong> KETERANGAN TEMPAT TINGGAL</strong> </td>
            </tr>
            <tr>
                <td>RT / RW </td>
                <td>:</td>
                <td><?php echo $fam['rt'] ?> / <?php echo $fam['rw'] ?></td>
            </tr>
            
            <tr>
                <td>Penguasaan Bangunan </td>
                <td>:</td>
                <td><?php echo $fam['penguasaan_bangunan'] ?></td>
            </tr>
            <tr>
                <td>Status Lahan </td>
                <td>:</td>
                <td><?php echo $fam['penguasaan_bangunan'] ?></td>
            </tr>
            <tr>
                <td style="background-color:#7FFFD4;" colspan="3"> <i class="icon home"></i> <strong> KETERANGAN RUMAH</strong> </td>
            </tr>
            <tr>
                <td>Luas Lantai </td>
                <td>:</td>
                <td><?php echo $fam['luas_lantai'] ?> m2</td>
            </tr>
            <tr>
                <td>Jenis Lantai </td>
                <td>:</td>
                <td><?php echo $fam['jenis_lantai'] ?></td>
            </tr>
            <tr>
                <td>Kondisi Lantai </td>
                <td>:</td>
                <td><?php echo $fam['kondisi_lantai'] ?></td>
            </tr>
            <tr>
                <td>Jenis Dinding </td>
                <td>:</td>
                <td><?php echo $fam['jenis_dinding'] ?></td>
            </tr>
            <tr>
                <td>kondisi Dinding </td>
                <td>:</td>
                <td><?php echo $fam['kondisi_dinding'] ?></td>
            </tr>
            <tr>
                <td>Jenis Atap </td>
                <td>:</td>
                <td><?php echo $fam['jenis_atap'] ?></td>
            </tr>
            <tr>
                <td>Kondisi Atap </td>
                <td>:</td>
                <td><?php echo $fam['kondisi_atap'] ?></td>
            </tr>
            <tr>
                <td>Jumlah Kamar </td>
                <td>:</td>
                <td><?php echo $fam['jumlah_kamar'] ?> Kamar</td>
            </tr>
            <tr>
                <td style="background-color:#7FFFD4;" colspan="3"> <i class="icon shower"></i> <strong> KETERANGAN SUMBER AIR, MCK, DAN SANITASI</strong> </td>
            </tr>
            <tr>
                <td>Sumber Air Minum </td>
                <td>:</td>
                <td><?php echo $fam['sumber_air_minum'] ?></td>
            </tr>
            <tr>
                <td>Peroleh Air Minum </td>
                <td>:</td>
                <td><?php echo $fam['peroleh_air_minum'] ?></td>
            </tr>
            <tr>
                <td>Ketersediaan Air </td>
                <td>:</td>
                <td><?php echo $fam['ketersediaan_air'] ?></td>
            </tr>
            <tr>
                <td>Fasilitas Buang air </td>
                <td>:</td>
                <td><?php echo $fam['fasilitas_buang_air'] ?></td>
            </tr>
            <tr>
                <td>Penggunaan Jamban </td>
                <td>:</td>
                <td><?php echo $fam['penggunaan_jamban'] ?></td>
            </tr>
            <tr>
                <td>Pembuangan Air </td>
                <td>:</td>
                <td><?php echo $fam['pembuangan_air'] ?></td>
            </tr>
            <tr>
                <td style="background-color:#7FFFD4;" colspan="3"> <i class="icon lightbulb outline"></i> <strong> KETERANGAN SUMBER DAYA PENERANGAN & ENERGI MEMASAK</strong> </td>
            </tr>
            <tr>
                <td>Sumber Penerangan </td>
                <td>:</td>
                <td><?php echo $fam['sumber_penerangan'] ?></td>
            </tr>
            <tr>
                <td>Daya PLN </td>
                <td>:</td>
                <td><?php echo $fam['daya_pln'] ?> Watt</td>
            </tr>
            <tr>
                <td>Energi Memasak </td>
                <td>:</td>
                <td><?php echo $fam['energi_memasak'] ?></td>
            </tr>
        </table>
    </div>
</div>

<br />