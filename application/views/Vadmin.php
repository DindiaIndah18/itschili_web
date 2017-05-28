<?php
$this->load->view('header');
 ?>

 <div class="wrapper">
     <div class="sidebar" data-active-color="rose" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
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
         <div class="logo logo-mini">
             <a href="http://www.creative-tim.com" class="simple-text">
                 IC
             </a>
         </div>
         <div class="sidebar-wrapper">
             <div class="user">
                 <div class="photo">
                     <img src="../assets/img/faces/avatar.jpg" />
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
                         <i class="material-icons">place</i>
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
                         <i class="material-icons">timeline</i>
                         <p>Update Harga</p>
                     </a>
                 </li>
                 <li>
                     <a href="./calendar.html">
                         <i class="material-icons">date_range</i>
                         <p>Grafik Perkembangan</p>
                     </a>
                 </li>
                 <li>
                     <a href="./calendar.html">
                         <i class="material-icons">date_range</i>
                         <p>Berita</p>
                     </a>
                 </li>
                 <li>
                     <a href="./calendar.html">
                         <i class="material-icons">date_range</i>
                         <p>Management User</p>
                     </a>
                 </li>
                 <li>
                     <a href="<?php echo base_url('index.php/itschilli/logout')?>">
                         <i class="material-icons">widgets</i>
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
                 <div class="collapse navbar-collapse">
                     <ul class="nav navbar-nav navbar-right">
                         <li>
                             <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                 <i class="material-icons">dashboard</i>
                                 <p class="hidden-lg hidden-md">Dashboard</p>
                             </a>
                         </li>
                         <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <i class="material-icons">notifications</i>
                                 <span class="notification">5</span>
                                 <p class="hidden-lg hidden-md">
                                     Notifications
                                     <b class="caret"></b>
                                 </p>
                             </a>
                             <ul class="dropdown-menu">
                                 <li>
                                     <a href="#">Mike John responded to your email</a>
                                 </li>
                                 <li>
                                     <a href="#">You have 5 new tasks</a>
                                 </li>
                                 <li>
                                     <a href="#">You're now friend with Andrew</a>
                                 </li>
                                 <li>
                                     <a href="#">Another Notification</a>
                                 </li>
                                 <li>
                                     <a href="#">Another One</a>
                                 </li>
                             </ul>
                         </li>
                         <li>
                             <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                 <i class="material-icons">person</i>
                                 <p class="hidden-lg hidden-md">Profile</p>
                             </a>
                         </li>
                         <li class="separator hidden-lg hidden-md"></li>
                     </ul>
                     <form class="navbar-form navbar-right" role="search">
                         <div class="form-group form-search is-empty">
                             <input type="text" class="form-control" placeholder="Search">
                             <span class="material-input"></span>
                         </div>
                         <button type="submit" class="btn btn-white btn-round btn-just-icon">
                             <i class="material-icons">search</i>
                             <div class="ripple-container"></div>
                         </button>
                     </form>
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
                                 <i class="material-icons">weekend</i>
                             </div>
                             <div class="card-content">
                                 <p class="category">Jenis Cabai</p>
                                 <h3 class="card-title">184</h3>
                             </div>
                             <div class="card-footer">
                                 <div class="stats">
                                     <i class="material-icons text-danger">warning</i>
                                     <a href="#pablo"> Lihat data...</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card card-stats">
                             <div class="card-header" data-background-color="rose">
                                 <i class="material-icons">equalizer</i>
                             </div>
                             <div class="card-content">
                                 <p class="category">Lokasi</p>
                                 <h3 class="card-title">75.521</h3>
                             </div>
                             <div class="card-footer">
                                 <div class="stats">
                                     <i class="material-icons">local_offer</i>
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
                                 <h3 class="card-title">$34,245</h3>
                             </div>
                             <div class="card-footer">
                                 <div class="stats">
                                     <i class="material-icons">date_range</i>
                                     <a href="#pablo"> Lihat data...</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-sm-6">
                         <div class="card card-stats">
                             <div class="card-header" data-background-color="blue">
                                 <i class="fa fa-twitter"></i>
                             </div>
                             <div class="card-content">
                                 <p class="category">User Terdaftar</p>
                                 <h3 class="card-title">+245</h3>
                             </div>
                             <div class="card-footer">
                                 <div class="stats">
                                     <i class="material-icons">update</i>
                                     <a href="#pablo"> Lihat data...</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
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
