<?php
$this->load->view('header');
 ?>

 <div class="wrapper">
   <?php
   $isactive = ['suser'=>'true'];
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
                                  <h4 class="card-title">User Terdaftar<a href="" class="btn btn-primary btn-simple">Tambah Data</a></h4>
                                  <div class="toolbar">
                                      <!--        Here you can write extra buttons/actions for the toolbar              -->
                                  </div>
                                  <div class="material-datatables">
                                      <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                          <thead>
                                              <tr>
                                                <th>No</th>
                                                  <th>Nama</th>
                                                  <th>Email</th>
                                                  <th>Nomor</th>
                                                  <th class="disabled-sorting text-right">Actions</th>
                                              </tr>
                                          </thead>
                                          <tfoot>
                                              <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Nomor</th>
                                                  <th class="text-right">Actions</th>
                                              </tr>
                                          </tfoot>
                                          <tbody>
                                            <?php
                                            $hitung=0;
                                             foreach ($datauser as $data) {
                                               $hitung++;
                                             ?>
                                              <tr>
                                                  <td><?php echo $hitung; ?></td>
                                                  <td><?php echo $data->nama;?></td>
                                                  <td><?php echo $data->email;?></td>
                                                  <td><?php echo $data->no_telp;?></td>
                                                  <td class="text-right">
                                                      <a href="<?php echo base_url('index.php/itschilli/menuMUserEdit/'.$data->id); ?>" class="btn btn-simple btn-warning btn-icon edit"><i class="material-icons">dvr</i></a>
                                                      <a href="<?php echo base_url('index.php/itschilli/delete/'.$data->id); ?>" class="btn btn-simple btn-danger btn-icon remove"><i class="material-icons">close</i></a>
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
