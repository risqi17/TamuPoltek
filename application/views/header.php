<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tamu Poltek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
	<script src="themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?php echo base_url()?>assets/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?php echo base_url()?>assets/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?php echo base_url()?>assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?php echo base_url()?>assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="<?php echo base_url()?>assets/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">
<?php echo $this->session->flashdata("pesan");?>
<div id="welcomeLine" class="row">
	<div class="span6"><?php if(isset($_SESSION['email_sess'])){?>Selamat datang!<strong> <?php echo $_SESSION['email_sess']?></strong><?php }?></div>
	<div class="span6">
	<div class="pull-right">
		
	</div>
	</div>
</div>
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="<?php echo base_url()?>">TAMU</a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <select class="srchTxt">
			<option>Semua</option>
			<option>Elektronik </option>
			<option>Baju </option>
			<option>Minuman dan Makanan </option>
			<option>Kesehatan dan Kecantikan </option>
			<option>Olahraga </option>
			<option>Buku dan Hiburan </option>
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	<?php if(isset($_SESSION['email_sess'])){?>
	<li>
		<a href="<?php echo base_url(); ?>index.php/product"><?php echo $_SESSION['email_sess'];?></a>
	</li>
	<li class=""><a href="<?php echo base_url();?>index.php/login/logout"><i class="icon-signout icon-white" title="Log out"></i></a></li>
	<?php }else{?>
	 <li class=""><a href="<?php echo base_url();?>index.php/register">Daftar</a></li>
        
	 <li class="">
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Masuk</span></a>
	<div id="login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm" action="<?php echo base_url();?>/index.php/login" method="post">
			  <div class="control-group">								
				<input type="email" id="inputEmail" placeholder="Email" required="required" name="email" autofocus>
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password" required="required" name="pass">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
					
			<button type="submit" class="btn btn-success" name="submit">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			</form>
		  </div>
	</div>
	</li>
	<?php }?>
    </ul>
  </div>
</div>
</div>
</div>