<?php
$this->load->view('header');
 ?>

 <div class="wrapper">
        <?php
   $isactive = ['sjenis'=>'true'];
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
                               <h4 class="card-title">Edit User</h4>
                               <form method="post" action="<?php echo base_url('index.php/itschilli/menuJenisCabaiEdit/'.$datajenis->id_jenis); ?>">

                                 <div class="form-group label-floating">
                                     <label class="control-label">Id Jenis Cabai</label>
                                     <input type="text" class="form-control" disabled="" value="<?php echo $datajenis->id_jenis; ?>">
                                 </div>
                                 <div class="form-group label-floating">
                                     <label class="control-label">Nama Jenis Cabai</label>
                                     <input type="text" class="form-control" value="<?php echo $datajenis->nama_jenis; ?>" name="nama_jenis">
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
<?php
     $this->load->view('footer');
?>
