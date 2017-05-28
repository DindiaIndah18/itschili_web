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
                 <li>
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
                 <li class="active">
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

             </div>
         </nav>
         <div class="content">
             <div class="container-fluid">
               <div class="row">
                 <div class="col-md-6">
                       <div class="card">
                           <div class="card-header card-header-icon" data-background-color="rose">
                               <i class="material-icons">mail_outline</i>
                           </div>
                           <div class="card-content">
                               <h4 class="card-title">Edit Berita</h4>
                               <form method="post" action="<?php echo base_url('index.php/itschilli/menuBeritaedit/'.$databerita->idberita); ?>">

                                 <div class="form-group label-floating">
                                     <label class="control-label">Id Berita</label>
                                     <input type="text" class="form-control" disabled="" value="<?php echo $databerita->idberita; ?>">
                                 </div>
                                 <div class="form-group label-floating">
                                     <label class="control-label">Judul</label>
                                     <input type="text" class="form-control" value="<?php echo $databerita->judulBerita; ?>" name="judulBerita">
                                 </div>
                                 <div class="form-group label-floating">
                                     <label class="control-label">Deskripsi</label>
                                     <input type="text" class="form-control" value="<?php echo $databerita->deskBerita; ?>" name="deskBerita">
                                 </div>
                                   <div class="form-group label-floating">
                                       <label class="control-label">Tanggal Terbit</label>
                                       <input type="text" class="form-control" value="<?php echo $databerita->date; ?>" name="date">
                                   </div>
                                   <div class="form-group label-floating">
                                       <label class="control-label">Link</label>
                                       <input type="text" class="form-control" value="<?php echo $databerita->link; ?>" name="link">
                                   </div>
                                   <div class="form-group label-floating">
                                       <label class="control-label">Gambar</label>
                                       <input type="text" class="form-control" value="<?php echo $databerita->image; ?>" name="image">
                                   </div>
                                   <button type="submit" class="btn btn-fill btn-success" name="edit">Update</button>
                                   <a class="btn btn-fill btn-rose" onclick="window.history.go(-1); return false;">Batal</a>
                               </form>
                           </div>
                       </div>
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
