<br />
<br />
<br />
<div class="ui container">
    <div class="ui segment">
        <h4 class="ui dividing header"> <i class="icon clipboard list"></i> Session Saat ini :</h4>
        <form class="ui form" method="post" action="<?php echo base_url()?>Section/update_section">
            <div class="field">
                <div class="four wide field">
                    <input type="hidden" name="id_dis_index" value="1">
                    <select name="id_distrik">
                        <option value="">--- Distrik ---</option>
                        <?php
                        foreach($all_distrik as $j => $val)
                        {?>
                        <option value="<?php echo $val->id_distrik;?>"><?php echo $val->distrik; ?></option>
                        <?php
                        }?>
                    </select>
                </div>
                <div class="four wide field">
                    <input type="submit" value="update" class="ui green button" tabindex="0" />
                </div>
            </div>
        </form>

        <h4 class="ui dividing header"> <i class="icon clipboard list"></i> Session Saat ini :</h4>
        <table class="ui called table">
            <tr>
                <td>Distrik</td>
                <td>:</td>
                <td><?php echo $distrik['distrik'] ?></td>
            </tr>
        </table>
    </div>
</div>