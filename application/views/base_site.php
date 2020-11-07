<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/images/logo-jdev.png" />
</head>
<body>
    <div class="inverted">
        <div class="ui container">
            <div class="ui teal fixed inverted menu">
                <div class="item">
                    <img src="<?php echo base_url()?>assets/images/logo-jdev.png" alt="logo" />
                </div>
                <li class="active item">
                    <a href="<?php echo base_url()?>">Beranda</a>
                </li>
                <li class="item">
                    <a href="<?php echo base_url()?>Penduduk/family">Data</a>
                </li>
            
                <div class="ui simple dropdown item">
                    API <i class="dropdown icon"></i>
                    <div class="menu">
                        <a class="item"><i class="icon user"></i> Kepala Keluarga</a>
                        <a class="item"><i class="icon users"></i> Member Keluarga</a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $contents ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</body>
</html>
