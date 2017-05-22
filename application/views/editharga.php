<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>/../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>/../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>List Harga Cabai</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url() ?>/../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url() ?>/../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url() ?>/../assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="<?php echo base_url() ?>/../assets/img/sidebar-1.jpg">

			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="" class="simple-text">
					ITS CHILI
				</a>
			</div>

	    	<div class="sidebar-wrapper">
				<ul class="nav">
	                <li>
	                    <a href="dashboard.html">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="user.html">
	                        <i class="material-icons">person</i>
	                        <p>User Profile</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="table.html">
	                        <i class="material-icons">content_paste</i>
	                        <p>Harga Pasar</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="<?php echo base_url() ?>index.php/perbandingan/">
	                        <i class="material-icons">library_books</i>
	                        <p>Perbandingan</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="<?php echo base_url() ?>index.php/berita/">
	                        <i class="material-icons">bubble_chart</i>
	                        <p>Berita</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Artikel</a>
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
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
	 						   </a>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
	                        	<input type="text" class="form-control" placeholder="Search">
	                        	<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
	                    </form>
					</div>
				</div>
			</nav>

	        <div class="content">
                <div class="container-fluid">
                    <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Edit Harga Cabai</h4>
	                                <p class="category">Harga Cabai di Berbagai Daerah</p>
	                            </div>
	                            <div class="col-md-12">
                            <div class="card">
								<?php foreach($post as $u){ ?>
                                <form action="<?php echo base_url().'index.php/harga/update'; ?>" method="post" class="form-horizontal">
									<input type="hidden" name="id_harga" value="<?php echo $h->id_harga ?>">
									<input type="hidden" name="id_cabai" value="<?php echo $h->id_cabai ?>">
									
                                    <div class="card-content">
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Harga</label>
                                            <div class="col-sm-10">
                                                <div class="form-group label-floating is-empty" style="margin: 15px 0 0 0">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="harga" class="form-control" value="<?php echo $h->harga ?>">
                                                    <span class="help-block">Silahkan isi harga</span>
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Tanggal</label>
                                            <div class="col-sm-10">
                                                <div class="form-group label-floating is-empty" style="margin: 15px 0 0 0">
                                                    <label class="control-label"></label>
                                                    <input type = "date" class="form-control" rows="10" name="isi"><?php echo $h->harga ?>
													<span class="help-block">Silahkan pilih tanggal</span>
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-2 label-on-left">Lokasi</label>
                                            <div class="col-sm-10">
                                                <div class="form-group label-floating is-empty" style="margin: 15px 0 0 0">
                                                    <label class="control-label"></label>
                                                    <input type="text" name="lokasi" class="form-control" value="<?php echo $h->lokasi ?>">
													<span class="help-block">Silahkan isi lokasi</span>
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
										<div class='clearfix'>
											<div class='pull-right'>
												<input type="reset" value="Clear" class="btn btn-primary btn-fill">
												<input type="submit" value="Edit" class="btn btn-primary btn-fill">
											</div>
										</div>
                                    </div>
                                </form>
								<?php } ?>
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
	                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
	                </p>
	            </div>
	        </footer>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="<?php echo base_url() ?>/../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>/../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>/../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url() ?>/../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="<?php echo base_url() ?>/../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="<?php echo base_url() ?>/../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url() ?>/../assets/js/demo.js"></script>

</html>
