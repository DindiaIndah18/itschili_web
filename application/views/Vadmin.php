<?php
$this->load->view('header');
 ?>

 <div class="wrapper">
   <?php
   $isactive = ['shome'=>'true'];
   $this->load->view('sidebar', $isactive);
    ?>
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
                          <!-- <div class="col-md-12">
                         <div class="card card-chart">
                             <div class="card-header" data-background-color="rose" data-header-animation="true">
                                 <div class="ct-chart" id="websiteViewsChart"></div>
                             </div>
                             <div class="card-content">
                                 <div class="card-actions">
                                     <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                         <i class="material-icons">build</i> Fix Header!
                                     </button>
                                     <button type="button" class="btn btn-info btn-simple" rel="tooltip" data-placement="bottom" title="Refresh">
                                         <i class="material-icons">refresh</i>
                                     </button>
                                     <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Change Date">
                                         <i class="material-icons">edit</i>
                                     </button>
                                 </div>
                                 <h4 class="card-title">Website Views</h4>
                                 <p class="category">Last Campaign Performance</p>
                             </div>
                             <div class="card-footer">
                                 <div class="stats">
                                     <i class="material-icons">access_time</i> campaign sent 2 days ago
                                 </div>
                             </div>
                         </div>
                 </div> -->
                 </div>
                 <div class="row">
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card card-stats">
                             <div class="card-header" data-background-color="orange">
                                 <i class="material-icons">art_track</i>
                             </div>
                             <div class="card-content">
                                 <p class="category">Jenis Cabai</p>
                                 <h3 class="card-title"><?php echo $jenis->banyak ?></h3>
                             </div>
                             <div class="card-footer">
                                 <div class="stats">
                                     <i class="material-icons text-danger">art_track</i>
                                     <a href="#pablo"> Lihat data...</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card card-stats">
                             <div class="card-header" data-background-color="rose">
                                 <i class="material-icons">location_on</i>
                             </div>
                             <div class="card-content">
                                 <p class="category">Berita</p>
                                 <h3 class="card-title"><?php echo $berita->banyak ?></h3>
                             </div>
                             <div class="card-footer">
                                 <div class="stats">
                                     <i class="material-icons">location_on</i>
                                     <a href="#pablo"> Lihat data...</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card card-stats">
                             <div class="card-header" data-background-color="green">
                                 <i class="material-icons">store</i>
                             </div>
                             <div class="card-content">
                                 <p class="category">Pasar</p>
                                 <h3 class="card-title"><?php echo $pasar->banyak ?></h3>
                             </div>
                             <div class="card-footer">
                                 <div class="stats">
                                     <i class="material-icons">store</i>
                                     <a href="#pablo"> Lihat data...</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card card-stats">
                             <div class="card-header" data-background-color="blue">
                                 <i class="material-icons">account_box</i>
                             </div>
                             <div class="card-content">
                                 <p class="category">User Terdaftar</p>
                                 <h3 class="card-title"><?php echo $customer->banyak ?></h3>
                             </div>
                             <div class="card-footer">
                                 <div class="stats">
                                     <i class="material-icons">account_box</i>
                                     <a href="#pablo"> Lihat data...</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

<?php
     $this->load->view('footer');
?>
