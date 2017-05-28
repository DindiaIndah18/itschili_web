<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>/../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>/../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Grafik Harga Cabai</title>

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
	                <li class="active">
	                    <a href="<?php echo base_url() ?>index.php/perbandingan/">
	                        <i class="material-icons">library_books</i>
	                        <p>Perbandingan</p>
	                    </a>
	                </li>
	                <li>
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
						<a class="navbar-brand" href="#">Grafik</a>
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
	                                <h4 class="title">Grafik Harga Cabai</h4>
	                                <p class="category">Per Hari</p>
	                            </div>
	                            <div class="card-content">
								<form>
									<select name="lokasi">
										<option value="Bondowoso">Bondowoso</option>
										<option value="Jember">Jember</option>
										<option value="Solo">Solo</option>
									</select>
									<button>Filter</button>
								</form>
								
									<div id="container" style="width: 100%; height: 400px; margin: 0 auto"></div>
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
	<script src="<?php echo base_url() ?>/../assets/js/highcharts.js"></script>
	<script>
	Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Grafik Harga Cabai Per Hari'
    },
    subtitle: {
        text: 'Source:Survei Pasar'
    },
    xAxis: {
        categories: <?php echo $tgl ?>
    },
    yAxis: {
        title: {
            text: 'Harga (Rp)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: <?php echo $datas ?>
});
	</script>

</html>
