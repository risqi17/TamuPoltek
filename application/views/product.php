<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li><a href="products.html">Dashboard</a></li>
			<li><a href="<?php echo base_url();?>index.php/product">Produk</a></li>
			<li><a href="products.html">Penjualan</a></li>
			<li><a href="products.html">Ulasan</a></li>
		</ul>
		<br/>
		  
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Dashboard</a> <span class="divider">/</span></li>
		<li class="active">Products</li>
    </ul>
	<h3> Produk Baru</h3>	
	<div class="well">
	<form class="form-horizontal" action="<?php echo base_url(); ?>index.php/product/act_add" method="post" enctype="multipart/form-data">


		<h4>Detail Produk</h4>
		<div class="control-group">
			<label class="control-label" for="inputFname">ID Produk <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="idproduk" placeholder="Id Produk">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputLname">ID Seller <sup>*</sup></label>
			<div class="controls">
			  <input type="text" name="idseller" placeholder="Id Seller"/>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="company">Kategori</label>
			<div class="controls">
			  <input type="text" name="kategori" placeholder="Kategori"/>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="company">Nama Produk</label>
			<div class="controls">
			  <input type="text" name="nama" placeholder="Nama Produk"/>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="company">Stok</label>
			<div class="controls">
			  <input type="text" name="stok" placeholder="Jumlah Stok"/>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="aditionalInfo">Deskripsi Produk</label>
			<div class="controls">
			  <textarea name="deskripsi" cols="50" rows="5" placeholder="Deskripsi Produk"></textarea>
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="city">Gambar</label>
			<div class="controls">
			  <input type="file" name="gambar" placeholder="gambar"/> 
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="city">Harga</label>
			<div class="controls">
			  <input type="text" name="harga" placeholder="Harga"/> 
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="country">Kondisi Produk</label>
			<div class="controls">
			<select name="kondisi" >
				<option value="">-</option>
				<option value="baru">Baru</option>
				<option value="baru">Bekas</option>
			</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="city">Berat Produk</label>
			<div class="controls">
			  <input type="text" name="berat" placeholder="Berat Kg"/> 
			</div>
		</div>



		<div class="control-group">
			<label class="control-label" for="aditionalInfo">Deskripsi Tambahan</label>
			<div class="controls">
			  <textarea name="DeskripsiTambah" cols="26" rows="3" placeholder="Deskripsi Produk"></textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="aditionalInfo">Catatan Seller</label>
			<div class="controls">
			  <textarea name="catatan" cols="26" rows="3" placeholder="Catatan"></textarea>
			</div>
		</div>
		
	<p><sup>*</sup>Required field	</p>
	
	<div class="control-group">
			<div class="controls">
				<input class="btn btn-large btn-success" name="submit" type="submit" value="Tambah" />
			</div>
		</div>		
	</form>
</div>

</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="<?php echo base_url(); ?>assets/themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url(); ?>assets/themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="<?php echo base_url(); ?>assets/themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url(); ?>assets/themes/js/jquery.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="<?php echo base_url(); ?>assets/themes/js/bootshop.js"></script>
    <script src="<?php echo base_url(); ?>assets/themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->

</div>
<span id="themesBtn"></span>
</body>
</html>