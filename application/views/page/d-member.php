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
            <a href="<?php echo base_url()?>Penduduk/member/<?php echo $member['id_fam'] ?>" class="section">Member / <?php echo $fam['nomor_kartu_keluarga'] ?></a>
            <i class="right arrow icon divider"></i>
            <div class="active section">Hapus / <?php echo $member['nik'] ?></div>
        </div>
    </div>
    <div class="ui segment">
        <div class='ui negative message'>
            <div class='header'>
                Anda Akan Menghapus Anggota ini ? <br />
            </div>
        </div>
        <br />
        <table>
            <tr>
                <td>Nama Anggota</td>
                <td>:</td>
                <td><?php echo $member['nama'] ?></td>
            </tr>
            <tr>
                <td>Nomor Induk Kependudukan</td>
                <td>:</td>
                <td><?php echo $member['nik'] ?></td>
            </tr>
        </table>
        <br />
        <form method="post" class="ui form" action="<?php echo base_url()?>Penduduk/delete_member_post">
            <input type="hidden" value="<?php echo $member['id_member'] ?>" name="id_member">
            <input type="hidden" value="<?php echo $fam['id_fam'] ?>" name="id_fam">

            <input type="submit" value="Hapus" class="ui red button" tabindex="0" />
            <a class="ui green button" href="<?php echo base_url()?>Penduduk/member/<?php echo $fam['id_fam'] ?>">Batal</a>
        </form>
    </div>
</div>