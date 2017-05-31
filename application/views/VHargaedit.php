<?php
$this->load->view('header');
 ?>

 <div class="wrapper">
     <?php
   $isactive = ['sharga'=>'true'];
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
                               <h4 class="card-title">Edit Harga</h4>
                               <form method="post" action="<?php echo base_url('index.php/itschilli/menuHargaEdit/'.$idharga); ?>">

                                 <div class="form-group label-floating">
                                     <label class="control-label">Tanggal</label>
                                     <input type="date" class="form-control" value="<?php echo $datauser->tgl; ?>" name="tgl">
                                 </div>
                                 <div class="form-group label-floating">
                                     <label class="control-label">Id Jenis</label>
                                     <input type="text" class="form-control" value="<?php echo $datauser->id_jenis; ?>" name="id_jenis">
                                 </div>
                                 <div class="form-group label-floating">
                                     <label class="control-label">Id Pasar</label>
                                     <input type="text" class="hidden form-control" value="<?php echo $datauser->id_pasar; ?>" name="id_pasar">
									 <input type="text" disabled="" class="form-control" value="<?php echo $datauser->id_pasar; ?>">
                                 </div>
                                   <div class="form-group label-floating">
                                       <label class="control-label">Harga</label>
                                       <input type="number" class="form-control" value="<?php echo $datauser->harga; ?>" name="harga">
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
