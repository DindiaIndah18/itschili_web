<?php
$this->load->view('header');
 ?>

 <div class="wrapper">
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
                 <li class="active">
                     <a href="./dashboard.html">
                         <i class="material-icons">dashboard</i>
                         <p>Dashboard</p>
                     </a>
                 </li>
                 <li>
                     <a data-toggle="collapse" href="#mapsExamples">
                         <i class="material-icons">data_usage</i>
                         <p>Data Master
                             <b class="caret"></b>
                         </p>
                     </a>
                     <div class="collapse" id="mapsExamples">
                         <ul class="nav">
                             <li>
                                 <a href="./maps/google.html">Jenis Cabai</a>
                             </li>
                             <li>
                                 <a href="./maps/fullscreen.html">Lokasi</a>
                             </li>
                             <li>
                                 <a href="./maps/vector.html">Pasar</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li>
                     <a href="./charts.html">
                         <i class="material-icons">update</i>
                         <p>Update Harga</p>
                     </a>
                 </li>
                 <li>
                     <a href="./calendar.html">
                         <i class="material-icons">timeline</i>
                         <p>Grafik Perkembangan</p>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('index.php/itschilli/menuBerita') ?>">
                         <i class="material-icons">insert_drive_file</i>
                         <p>Berita</p>
                     </a>
                 </li>
                 <li>
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
     <div class="main-panel">
         <nav class="navbar navbar-transparent navbar-absolute">
             <div class="container-fluid">
                 <div class="navbar-minimize">
                     <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                         <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                         <i class="material-icons visible-on-sidebar-mini">view_list</i>
                     </button>
                 </div>
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="#"> Dashboard </a>
                 </div>

             </div>
         </nav>
         <div class="content">
             <div class="container-fluid">
               <div class="row">
                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-header card-header-icon" data-background-color="purple">
                                  <i class="material-icons">assignment</i>
                              </div>
                              <div class="card-content">
                                  <h4 class="card-title">Harga Terdaftar<a href="" class="btn btn-primary btn-simple">Update Harga</a></h4>
                                  <div class="toolbar">
                                      <!--        Here you can write extra buttons/actions for the toolbar              -->
                                  </div>
                                  <div class="material-datatables">
                                      <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                          <thead>
                                              <tr>
                                                <th>Tanggal</th>
                                                  <th>Id Jenis</th>
                                                  <th>Id Pasar</th>
                                                  <th>Harga</th>
                                                  <th class="disabled-sorting text-right">Actions</th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                <th>Tanggal</th>
                                                <th>Id Jenis</th>
                                                <th>Id Pasar</th>
                                                <th>Harga</th>
                                                  <th class="text-right">Actions</th>
                                              </tr>
                                          </tfoot>
                                          <tbody>
                                            <?php                                         
                                             foreach ($dataharga as $data) {                                          
                                             ?>
                                              <tr>                                                  
                                                  <td><?php echo $data->tgl;?></td>
                                                  <td><?php echo $data->id_jenis;?></td>
                                                  <td><?php echo $data->id_pasar;?></td>
												  <td><?php echo $data->harga;?></td>
                                                  <td class="text-right">
                                                      <a href="<?php echo base_url('index.php/itschilli/menuHargaEdit/'.$data->idharga); ?>" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                                      <a href="<?php echo base_url('index.php/itschilli/delete/'.$data->idharga); ?>" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                                  </td>
                                              </tr>
                                              <?php } ?>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                              <!-- end content-->
                          </div>
                          <!--  end card  -->
                      </div>
                      <!-- end col-md-12 -->
                  </div>
                  <!-- end row -->
             </div>
         </div>
         <footer class="footer">
             <div class="container-fluid">
                 <nav class="pull-left">
                     <ul>
                         <li>
                             <a href="#">
                                 Home
                             </a>
                         </li>
                         <li>
                             <a href="#">
                                 Company
                             </a>
                         </li>
                         <li>
                             <a href="#">
                                 Portfolio
                             </a>
                         </li>
                         <li>
                             <a href="#">
                                 Blog
                             </a>
                         </li>
                     </ul>
                 </nav>
                 <p class="copyright pull-right">
                     &copy;
                     <script>
                         document.write(new Date().getFullYear())
                     </script>
                     <a href="">Its Chilli Dev</a>, made with love for a better live
                 </p>
             </div>
         </footer>
     </div>
 </div>

<?php
     $this->load->view('footer');
?>
