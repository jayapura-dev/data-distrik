<br />
<br />
<br />
<div class="ui container">
    <?php if($status == true){?>
        <div class="ui segment" id="segment_internet">
            <div class="ui list">
                <div class="item">
                    <img class="ui avatar image" src="<?php echo base_url()?>assets/images/icon-online.png" alt="online">
                    <div class="content">
                        <label class="ui green label">INTERNET SEDANG AKTIF</label>
                        <a class="ui olive label"><i class="icon database"></i> Sync data</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <img class="ui centered huge image" src="<?php echo base_url()?>assets/images/tools-logo.png" alt="">
    <br />
    
    <form class="ui massive form" method="GET" action="<?php echo base_url()?>Penduduk/result">
        <div class="field">
            <label></label>
            <div class="one fields">
                <input type="text" name="nama" autocomplete="off" placeholder="Cari Data Dengan Nama">
            </div>
            <div class="fields">
                <button class="massive ui green button" type="submit" tabindex="0"><i class="icon search"></i>Search</button>
            </div>
        </div>
    </form>
</div>

<script src="<?php echo base_url()?>assets/js/jquery-1.11.3.min.js"></script>

<script>
    
    function internet(status)
    {
        var status = $('#status_internet').val(status);
        $('#segment_internet').prop('hidden', status != false);
    }
    
</script>