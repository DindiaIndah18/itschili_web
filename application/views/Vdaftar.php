<?php
$this->load->view('header');
 ?>

 <body>
   <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
       <div class="container">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="<?php echo base_url() ?>">Its Chilli Web Admin</a>
           </div>
           <!-- <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                   <li>
                       <a href="../dashboard.html">
                           <i class="material-icons">dashboard</i> Dashboard
                       </a>
                   </li>
                   <li class="">
                       <a href="register.html">
                           <i class="material-icons">person_add</i> Register
                       </a>
                   </li>
                   <li class=" active ">
                       <a href="login.html">
                           <i class="material-icons">fingerprint</i> Login
                       </a>
                   </li>
                   <li class="">
                       <a href="lock.html">
                           <i class="material-icons">lock_open</i> Lock
                       </a>
                   </li>
               </ul>
           </div>
       </div>-->
   </nav>
 <div class="wrapper wrapper-full-page">
     <div class="full-page register-page" filter-color="black" data-image="<?php echo base_url() ?>assets/img/login.jpeg">
         <div class="container">
             <div class="row">
                 <div class="col-md-10 col-md-offset-1">
                     <div class="card card-signup">
                         <h2 class="card-title text-center">SIGN UP</h2>
                         <div class="row">
                             <div class="col-md-5 col-md-offset-1">
                                 <div class="card-content">
                                     <div class="info info-horizontal">
                                         <div class="icon icon-rose">
                                             <i class="material-icons">timeline</i>
                                         </div>
                                         <div class="description">
                                             <h4 class="info-title">Marketing</h4>
                                             <p class="description">
                                                 We've created the marketing campaign of the website. It was a very interesting collaboration.
                                             </p>
                                         </div>
                                     </div>
                                     <div class="info info-horizontal">
                                         <div class="icon icon-primary">
                                             <i class="material-icons">code</i>
                                         </div>
                                         <div class="description">
                                             <h4 class="info-title">Fully Coded in HTML5</h4>
                                             <p class="description">
                                                 We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                             </p>
                                         </div>
                                     </div>
                                     <div class="info info-horizontal">
                                         <div class="icon icon-info">
                                             <i class="material-icons">group</i>
                                         </div>
                                         <div class="description">
                                             <h4 class="info-title">Built Audience</h4>
                                             <p class="description">
                                                 There is also a Fully Customizable CMS Admin Dashboard for this product.
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-5">
                                 <div class="social text-center">
                                     <h4> Sudah Terdaftar! <a href="<?php echo base_url() ?>">Login.</a> </h4>
                                 </div>
                                 <form class="form" method="post" action="<?php echo base_url('index.php/itschilli/daftar'); ?>">
                                     <div class="card-content">
                                         <div class="input-group">
                                             <span class="input-group-addon">
                                                 <i class="material-icons">face</i>
                                             </span>
                                             <input type="text" class="form-control" placeholder="Nama Lengkap..." name="nama">
                                         </div>
                                         <div class="input-group">
                                             <span class="input-group-addon">
                                                 <i class="material-icons">call</i>
                                             </span>
                                             <input type="number" class="form-control" placeholder="No Telepon..." name="telp">
                                         </div>
                                         <div class="input-group">
                                             <span class="input-group-addon">
                                                 <i class="material-icons">email</i>
                                             </span>
                                             <input type="email" class="form-control" placeholder="Email..." name="email">
                                         </div>
                                         <div class="input-group">
                                             <span class="input-group-addon">
                                                 <i class="material-icons">lock_outline</i>
                                             </span>
                                             <input type="password" placeholder="Password..." class="form-control" name="password" />
                                         </div>
                                         <!-- If you want to add a checkbox to this form, uncomment this code -->
                                         <div class="checkbox">
                                             <label>
                                                 <input type="checkbox" name="optionsCheckboxes" checked> Saya setuju dengan
                                                 <a href="#something">syarat dan ketentuan</a>.
                                             </label>
                                         </div>
                                     </div>
                                     <div class="footer text-center">
                                       <button type="submit" class="btn btn-primary btn-round" name="simpan">MENDAFTAR</button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <footer class="footer">
             <div class="container">
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
