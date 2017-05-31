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
                      <div class="col-md-12">
                          <div class="card">
                              <div class="card-header card-header-icon" data-background-color="purple">
                                  <i class="material-icons">assignment</i>
                              </div>
                              <div class="card-content">
                                  <h4 class="card-title">Jenis Cabai<a href="<?php echo base_url('index.php/itschilli/menuTambahJenis/'); ?>" class="btn btn-primary btn-simple">Tambah Data</a></h4>
                                  <div class="toolbar">
                                      <!--        Here you can write extra buttons/actions for the toolbar              -->
                                  </div>
                                  <div class="material-datatables">
                                      <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                          <thead>
                                              <tr>
                                                <th>ID Jenis Cabai</th>
                                                  <th>Nama Jenis Cabai</th>
                                                  <th class="disabled-sorting text-right">Actions</th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                <th>ID Jenis Cabai</th>
                                                <th>Nama Jenis Cabai</th>
                                                  <th class="text-right">Actions</th>
                                              </tr>
                                          </tfoot>
                                          <tbody>
                                            <?php
                                             foreach ($datajenis as $data) {
                                             ?>
                                              <tr>
                                                  <td><?php echo $data->id_jenis;?></td>
                                                  <td><?php echo $data->nama_jenis;?></td>
                                                  <td class="text-right">
                                                      <a href="<?php echo base_url('index.php/itschilli/menuJenisCabaiEdit/'.$data->id_jenis); ?>" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                                      <a href="<?php echo base_url('index.php/itschilli/deletejenis/'.$data->id_jenis); ?>" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
                                                      
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
<?php
     $this->load->view('footer');
?>