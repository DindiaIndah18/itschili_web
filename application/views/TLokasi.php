<?php
$this->load->view('header');
 ?>

 <div class="wrapper">
   <?php
   $isactive = ['sdatamaster'=>'true'];
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
                 <div class="col-md-6">
                       <div class="card">
                           <div class="card-header card-header-icon" data-background-color="rose">
                               <i class="material-icons">mail_outline</i>
                           </div>
                           <div class="card-content">
                               <h4 class="card-title">Tambah Lokasi</h4>
                               <form method="post" action="<?php echo base_url('index.php/itschilli/menuTambahLokasi'); ?>">


                                 <div class="form-group label-floating">
                                     <label class="control-label">Nama Pasar</label>
                                     <input type="text" class="form-control" name="nama_pasar">
                                 </div>
                                 <div class="form-group label-floating">
                                     <label class="control-label">Nama Lokasi</label>
                                     <input type="text" class="form-control" name="nama_lokasi">
                                 </div>

                                   <button type="submit" class="btn btn-fill btn-success" name="simpan">Tambah</button>
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

<?php
     $this->load->view('footer');
?>
