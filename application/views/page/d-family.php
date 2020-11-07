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
            <div class="active section">Hapus / <?php echo $fam['nomor_kartu_keluarga'] ?></div>
        </div>
    </div>
    <div class="ui segment">
        <div class='ui negative message'>
            <div class='header'>
                Anda Akan Menghapus Data Kepala Keluarga ini ? <br />
                Dengan Menghapus Data Kepala Keluarga ini anda juga menghapus seluruh Data anggota keluarga !!
            </div>
        </div>
        <br />
        <table>
            <tr>
                <td>Kepala Keluarga</td>
                <td>:</td>
                <td><?php echo $fam['nama_kk'] ?></td>
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>:</td>
                <td><?php echo $fam['nomor_kartu_keluarga'] ?></td>
            </tr>
        </table>
        <br />
        <form method="post" class="ui form" action="<?php echo base_url()?>Penduduk/delete_family_post">
            <input type="hidden" value="<?php echo $fam['id_fam'] ?>" name="id_fam">

            <input type="submit" value="Hapus" class="ui red button" tabindex="0" />
            <a class="ui green button" href="<?php echo base_url()?>Penduduk/family">Batal</a>
        </form>
    </div>
</div>