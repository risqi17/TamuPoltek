<?php if(isset($_SESSION['user_adm'])==0){
		$this->session->set_flashdata("pesan", "<div class='alert alert-danger text-center'>
					<span class='glyphicon glyphicon-warning-sign'></span> &nbsp; anda harus login dulu</div>");
		redirect('admin/login_admin');
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/admin/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Tamu Poltek - Administration</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>/assets/admin/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url();?>/assets/admin/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>/assets/admin/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="<?php echo base_url();?>/assets/admin/css/font-awesome.min.css" rel="stylesheet">
    <link href='<?php echo base_url();?>/assets/admin/material/material-icons.css' rel='stylesheet' type='text/css'>
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="blue" data-image="<?php echo base_url();?>/assets/admin/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="http://www.tamu.com" class="simple-text">
					Tamu
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li <?php if($_GET['aksi']=='beranda') {?> class="active" <?php }?>>
	                    <a href="<?php echo base_url()?>index.php/admin/admin">
	                        <i class="material-icons">dashboard</i>
	                        <p>Home</p>
	                    </a>
	                </li>
	                <li <?php if($_GET['aksi']=='penjual') {?> class="active" <?php }?>>
	                    <a href="<?php echo base_url()?>index.php/admin/admin/data_penjual">
	                        <i class="material-icons">store</i>
	                        <p>Data Penjual</p>
	                    </a>
	                </li>
	                <li <?php if($_GET['aksi']=='pembeli') {?> class="active" <?php }?>>
	                    <a href="<?php echo base_url()?>index.php/admin/admin/data_pembeli">
	                        <i class="material-icons">person</i>
	                        <p>Data Pembeli</p>
	                    </a>
	                </li>
	                <li <?php if($_GET['aksi']=='produk') {?> class="active" <?php }?>>
	                    <a href="<?php echo base_url()?>index.php/admin/admin/data_produk">
	                        <i class="material-icons">markunread_mailbox</i>
	                        <p>Data Produk</p>
	                    </a>
	                </li>
	                <li <?php if($_GET['aksi']=='transaksi') {?> class="active" <?php }?>>
	                    <a href="<?php echo base_url()?>index.php/admin/admin/data_transaksi">
	                        <i class="material-icons">shopping_cart</i>
	                        <p>Data Transaksi</p>
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
						<a class="navbar-brand" href="#">Taman Usaha <i style="font-size: 12px">
						<?php 
						$time=date('Y-m-d');
						function tanggal_indo($tanggal, $cetak_hari = false)
							{
								$hari = array ( 1 =>    'Senin',
									'Selasa',
									'Rabu',
									'Kamis',
									'Jumat',
									'Sabtu',
									'Minggu'
								);
								$bulan = array (1 =>   'Januari',
											'Februari',
											'Maret',
											'April',
											'Mei',
											'Juni',
											'Juli',
											'Agustus',
											'September',
											'Oktober',
											'November',
											'Desember'
										);
								$split = explode('-', $tanggal);
								$tgl_indo= $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
								if ($cetak_hari) {
									$num = date('N', strtotime($tanggal));
									return $hari[$num] . ', ' . $tgl_indo;
								}
								return $tgl_indo;
							}

							echo tanggal_indo($time, true);?></i></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Home</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">------------</a></li>
									<li><a href="#">------------</a></li>
									<li><a href="#">------------</a></li>
									<li><a href="#">------------</a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md">Profile</p>
		 						</a>
		 						<ul class="dropdown-menu">
									<li><a href="#">Hi, <?php echo $_SESSION['user_adm']?>!</a></li>
									<li><a href="<?php echo base_url()?>/index.php/admin/login_admin/logout">Sign Out</a></li>
								</ul>
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