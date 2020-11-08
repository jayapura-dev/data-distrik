<br />
<br />
<br />

<div class="ui container">
    <form class="ui big form" method="GET" action="<?php echo base_url()?>Penduduk/result">
        <div class="field">
            <label></label>
            <div class="fields">
                <div class="eleven wide field">
                    <input type="text" name="nama" autocomplete="off" value="<?php echo $nama ?>">
                </div>
                <div class="four wide column">
                    <button class="ui big green button" type="submit" tabindex="0"><i class="icon search"></i>Search</button>
                </div>
            </div>
        </div>
    </form>

    <h3 class="ui dividing header"> <i class="icon clipboard outline"></i> Result Data Pencarian </h3>
    <div class="ui segment">
        <div class="ui relaxed divided list">
            <?php foreach($result as $item){?>
            <div class="item">
                <img src="<?php echo base_url()?>assets/images/find-user.png" class="ui avatar image"></img>
                <div class="content">
                <a href="<?php echo base_url()?>Penduduk/detail_member/<?php echo $item->id_member ?>" target="_blank" class="header"><?php echo $item->nama ?></a>
                <div class="description"><?php echo $item->nik ?></div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>