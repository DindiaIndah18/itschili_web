<?php
$this->load->view('header');
 ?>

 <div class="wrapper">
   <?php
   $isactive = ['sperkembangan'=>'true'];
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
                              <div class="card-header card-header-icon" data-background-color="blue">
                                  <i class="material-icons">timeline</i>
                              </div>
                              <div class="card-content">
                                  <h4 class="card-title">Grafik Perkembangan Harga Cabai
                                  </h4>
                              </div>
                              <form>
                              <div class="col-md-4">
                                <select class="selectpicker" data-style="btn btn-primary btn-round" name="lokasi">
                                  <?php

                                   foreach ($datalokasi as $data) {
                                   ?>
                                    <option value="<?php echo $data->id_pasar; ?>"><?php echo $data->nama_pasar." - ". $data->nama_lokasi; ?></option>
                                    <?php } ?>
                                </select>
                              </div>
                              <button type="submit" class="btn btn-primary">Filter</button>
                            </form>
                              <div class="card-content">
                  						<div id="container" style="width: 100%; height: 400px; margin: 0 auto"></div>
	                            </div>
                          </div>
                      </div>
                  </div>
             </div>
         </div>

<?php
     $this->load->view('footer');
?>
