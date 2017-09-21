
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">3 Barang di keranjang  <span class="badge badge-warning pull-right">Rp 150K</span></a></div>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> Elektronik [230]</a>
				<ul>
				<li><a class="active" href="products.html"><i class="icon-chevron-right"></i>Kamera (100) </a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Komputer, Tablet & laptop (30)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Smartphone (80)</a></li>
				</ul>
			</li>
			<li class="subMenu"><a> Pakaian [840] </a>
			<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Pakaian Wanita (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Sepatu Wanita (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Hand Bag (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Pakaian Laki-laki  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Sepatu Laki-laki (6)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Pakaian Anak (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Sepatu Anak (3)</a></li>												
			</ul>
			</li>
			<li class="subMenu"><a>Makanan dan Minuman [1000]</a>
				<ul style="display:none">
				<li><a href="products.html"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>	
				<li><a href="products.html"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="products.html"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Garden (3)</a></li>												
				<li><a href="products.html"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>												
			</ul>
			</li>
			<li><a href="products.html">Kesehatan dan Kecantikan [18]</a></li>
			<li><a href="products.html">Olahraga [58]</a></li>
			<li><a href="products.html">Buku dan Hiburan [14]</a></li>
		</ul>
		<br/>
		 
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Mendaftar</h3>	
	<div class="well">
	<form class="form-horizontal" action="<?php echo base_url();?>index.php/register/register" method="post">
		<h4>Informasi Data Diri Anda</h4>
	
		<div class="control-group">
			<label class="control-label" for="inputFname1">Nama <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname1" placeholder="Masukkan Nama Lengkap" name="nama" required="required">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="input_email">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="email" id="input_email" placeholder="Masukkan Email" required="required" name="email">
		</div>
	  </div>	  
	
	<div class="control-group">
		<label class="control-label" for="inputPassword1">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" id="inputPassword1" placeholder="Masukkan Password" name="pass" required="required">
		</div>
	  </div>
	  <div class="control-group">
		<label class="control-label" for="inputPassword1">No. Telp/HP <sup>*</sup></label>
		<div class="controls">
		  <input type="text" id="inputPassword1" placeholder="Masukkan No Telephone atau HP" name="telp" required="required" maxlength="13" pattern="[0-9]+.{10,13}" oninvalid="setCustomValidity('Input Hanya Boleh Angka!')" oninput="setCustomValidity('')">
		</div>
	  </div>	  
	
	<div class="control-group">
			<div class="controls">
				<input type="hidden" name="email_create" value="1">
				<input type="hidden" name="is_new_customer" value="1">
				<input class="btn btn-large btn-success" type="submit" name="submit" value="Daftar" />
			</div>
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
