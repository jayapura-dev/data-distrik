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
            <div class="active section">Member / <?php echo $fam['nomor_kartu_keluarga'] ?></div>
        </div>
    </div>
    <div class="ui segment">  
        <table class="ui column table">
            <tr>
                <td>NAMA KEPALA KELUARGA</td>
                <td>:</td>
                <td class="uppercase"><?php echo $fam['nama_kk'] ?></td>
            </tr>
            <tr>
                <td>NOMOR KARTU KELUARGA</td>
                <td>:</td>
                <td class="uppercase"><?php echo $fam['nomor_kartu_keluarga'] ?></td>
            </tr>
        </table>

        <?php echo $this->session->flashdata('create_success');?>
        <?php echo $this->session->flashdata('create_fail');?>
        <?php echo $this->session->flashdata('edit_success');?>
        <?php echo $this->session->flashdata('edit_fail');?>
        <?php echo $this->session->flashdata('delete');?>

        <h4 class="ui dividing header"><i class="icon users"></i> DATA MEMBER KELUARGA</h4>
        <a href="<?php echo base_url()?>Penduduk/create_member/<?php echo $fam['id_fam'] ?>" class="ui button primary"><i class="icon plus circle"></i>Tambah Data</a>
        <table class="small ui red celled table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Suku</th>
                    <th>Golongan Darah</th>
                    <th>Tgl Lagir</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; 
                foreach($member as $item){
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $item->nama ?></td>
                    <td><?php echo $item->nik ?></td>
                    <td><?php echo $item->suku ?></td>
                    <td><?php echo $item->golongan_darah ?></td>
                    <td><?php echo $item->tgl_lahir ?></td>
                    <td class="ui center aligned">
                        <a href="<?php echo base_url()?>Penduduk/detail_member/<?php echo $item->id_member ?>" class="ui success label" title="Detail"><i class="icon file alternate"></i></a>
                        <a href="<?php echo base_url()?>Penduduk/edit_member/<?php echo $item->id_member ?>" class="ui blue label" title="Edit"><i class="icon edit"></i></a>
                        <a href="<?php echo base_url()?>Penduduk/delete_member/<?php echo $item->id_member ?>" class="ui red label" title="Hapus"><i class="icon trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>