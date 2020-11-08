<br />
<br />
<br />
<div class="ui container">
    <img class="ui centered huge image" src="<?php echo base_url()?>assets/images/tools-logo.png" alt="">
    <br />
    <br />
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