<div class="sidebar" data-active-color="rose" data-background-color="white" data-image="<?php echo base_url() ?>assets/img/sidebar-1.jpg">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
            Its Chilli
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="<?php echo base_url() ?>assets/img/logo.png" />
            </div>
        </div>
        <ul class="nav">
            <li class="<?php if(isset($shome)){echo "active";}?>">
                <a href="<?php echo base_url() ?>">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="<?php if(isset($sdatamaster)){echo "active";}?>">
                <a data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">data_usage</i>
                    <p>Data Master
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li>
                            <a href="<?php echo base_url('index.php/itschilli/menuJenisCabai') ?>">Jenis Cabai</a>
                        </li>
                        <li>
         <a href="<?php echo base_url('index.php/itschilli/menuTambahLokasi') ?>">Lokasi Pasar </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="<?php if(isset($sharga)){echo "active";}?>">
                <a href="<?php echo base_url('index.php/itschilli/menuHarga') ?>">
                    <i class="material-icons">update</i>
                    <p>Update Harga</p>
                </a>
            </li>
            <li class="<?php if(isset($sperkembangan)){echo "active";}?>">
                <a href="<?php echo base_url('index.php/itschilli/menuPerkembangan') ?>">
                    <i class="material-icons">timeline</i>
                    <p>Grafik Perkembangan</p>
                </a>
            </li>
            <li class="<?php if(isset($sberita)){echo "active";}?>">
                <a href="<?php echo base_url('index.php/itschilli/menuBerita') ?>">
                    <i class="material-icons">insert_drive_file</i>
                    <p>Berita</p>
                </a>
            </li>
            <li class="<?php if(isset($suser)){echo "active";}?>">
                <a href="<?php echo base_url('index.php/itschilli/menuMUser') ?>">
                    <i class="material-icons">account_box</i>
                    <p>Management User</p>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('index.php/itschilli/logout')?>">
                    <i class="material-icons">exit_to_app</i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </div>
</div>
