<br />
<br />
<br />
<div class="ui container">
    <div class="ui segment">
        <div class="ui breadcrumb">
            <a href="<?php echo base_url()?>" class="section">Home</a>
            <i class="right chevron icon divider"></i>
            <div class="active section">Kepala Keluarga</div>
        </div>
    </div>
    
    <?php echo $this->session->flashdata('create_success');?>
    <?php echo $this->session->flashdata('create_fail');?>
    <?php echo $this->session->flashdata('edit_success');?>
    <?php echo $this->session->flashdata('edit_fail');?>
    <?php echo $this->session->flashdata('delete_success');?>
    <div class="ui segment">
        <div class="header">
            <h4><i class="icon user"></i> DATA KEPALA KELUARGA</h4>
        </div>
        <hr />
        
        <form class="ui form" method="GET" action="<?php echo base_url()?>Penduduk/family">
            <div class="field">
                <div class="fields">
                    <div class="six wide field">
                        <a href="<?php echo base_url()?>Penduduk/create_family" class="ui button primary"><i class="icon plus circle"></i> Tambah Data Baru</a>
                    </div>
                    <div class="ten wide field">
                        <input type="text" name="nama_kk" autocomplete="off" placeholder="Cari Data Berdasarkan Nama">
                    </div>
                    <div class="two wide field">
                        <input type="submit" class="ui button success" value="Temukan">
                    </div>
                </div>
            </div>  
        </form>

        <table class="small ui yellow celled table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Kartu Keluarga</th>
                    <th>Nama Kepala Keluarga</th>
                    <th>Suku</th>
                    <th>RT / RW</th>
                    <th>Kampung</th>
                    <th>Jumlah Anggota Keluarga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; 
                foreach($kk as $item){?>
                <tr>
                    <td class="ui center aligned"><?php echo $no++ ?></td>
                    <td> <a href="<?php echo base_url()?>Penduduk/member/<?php echo $item->id_fam ?>"> <?php echo $item->nomor_kartu_keluarga ?></a></td>
                    <td class="text-uppercase"><?php echo $item->nama_kk ?></td>
                    <td class="ui center aligned"><?php echo $item->suku ?></td>
                    <td class="ui center aligned"><?php echo $item->rt ?> / <?php echo $item->rw ?></td>
                    <td><?php echo $item->kampung ?></td>
                    <td><text class="ui green label"><i class="icon users"></i><?php echo $item->jumlah_anggota ?> Anggota</text></td>
                    <td class="ui center aligned">
                        <a href="<?php echo base_url()?>Penduduk/detail_family/<?php echo $item->id_fam ?>" class="ui success label" title="Detail"><i class="icon file alternate"></i></a>
                        <a href="<?php echo base_url()?>Penduduk/edit_family/<?php echo $item->id_fam ?>" class="ui blue label" title="Edit"><i class="icon edit"></i></a>
                        <a href="<?php echo base_url()?>Penduduk/delete_family/<?php echo $item->id_fam ?>" class="ui red label" title="Hapus"><i class="icon trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<br />