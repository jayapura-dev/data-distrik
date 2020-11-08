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
            <div class="active section">Detail / <?php echo $member['nik'] ?></div>
        </div>
    </div>
    <div class="ui segment">
        <h4 class="ui dividing header"> <i class="icon clipboard list"></i> DATA DETAIL ANGGOTA KELUARGA</h4>
        <br />
        <table class="ui column table">
            <tr>
                <td style="background-color:#7FFFD4;" colspan="3"> <i class="icon user"></i> <strong> KETERANGAN ANGGOTA KELUARGA</strong> </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $member['nama'] ?></td>
            </tr>
            <tr>
                <td>Nomor Induk Kependudukan</td>
                <td>:</td>
                <td><?php echo $member['nik'] ?></td>
            </tr>
            <tr>
                <td>Suku</td>
                <td>:</td>
                <td><?php echo $member['suku'] ?></td>
            </tr>
            <tr>
                <td>Golongan Darah </td>
                <td>:</td>
                <td><?php echo $member['golongan_darah'] ?></td>
            </tr>
            <tr>
                <td>Tempat, Tgl Lahir</td>
                <td>:</td>
                <td><?php echo $member['tempat_lahir'] ?> / <?php echo $member['tgl_lahir'] ?></td>
            </tr>
            
            <tr>
                <td>Nama Ayah </td>
                <td>:</td>
                <td><?php echo $member['nama_ayah'] ?></td>
            </tr>
            <tr>
                <td>Status Perkawinan </td>
                <td>:</td>
                <td><?php echo $member['status_perkawinan'] ?></td>
            </tr>
            <tr>
                <td>Memiliki KTP </td>
                <td>:</td>
                <td><?php echo $member['adminduk_ktp'] ?> </td>
            </tr>
            <tr>
                <td>Memiliki Akta Lahir</td>
                <td>:</td>
                <td><?php echo $member['adminduk_akta_lahir'] ?></td>
            </tr>
            <tr>
                <td>Pekerjaan </td>
                <td>:</td>
                <td><?php echo $member['pekerjaan'] ?></td>
            </tr>
            <tr>
                <td>Ijazah Terahir</td>
                <td>:</td>
                <td><?php echo $member['ijazah_terahir'] ?></td>
            </tr>
            <tr>
                <td>Partisipasi Sekolah </td>
                <td>:</td>
                <td><?php echo $member['partisipasi_sekolah'] ?></td>
            </tr>
            <tr>
                <td>Agama </td>
                <td>:</td>
                <td><?php echo $member['agama'] ?></td>
            </tr>
            <tr>
                <td>Hubungan dengan Kepala Keluarga </td>
                <td>:</td>
                <td><?php echo $member['hub_kk'] ?></td>
            </tr>
        </table>
    </div>
</div>

<br />