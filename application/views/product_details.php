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
		  <div class="thumbnail">
			<img src="<?php echo base_url(); ?>assets/themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5>Panasonic</h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rp 222K</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="<?php echo base_url(); ?>assets/themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rp 222K</a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Pembayaran</h5>
				</div>
			  </div>
	</div>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>	
	<div class="row">
	<?php foreach ($product as $p) {
	 ?>
			<div id="gallery" class="span3">
            <a href="" title="Fujifilm FinePix S2950 Digital Camera">
				<img src="<?php echo base_url(); ?>assets/product/<?php echo $p->PROD_IMAGE ?>" style="width:100%" alt="Fujifilm FinePix S2950 Digital Camera"/>
            </a>
			<div id="differentview" class="moreOptopm carousel slide">
                <div class="carousel-inner">
                  <div class="item active">
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                  </div>
                  <div class="item">
                   <a href="themes/images/products/large/f3.jpg" > <img style="width:29%" src="themes/images/products/large/f3.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f1.jpg"> <img style="width:29%" src="themes/images/products/large/f1.jpg" alt=""/></a>
                   <a href="themes/images/products/large/f2.jpg"> <img style="width:29%" src="themes/images/products/large/f2.jpg" alt=""/></a>
                  </div>
                </div>
              <!--  
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a> 
			  -->
              </div>
			  
			 <div class="btn-toolbar">
			  
			</div>
			</div>
			<div class="span6">
				<h3><?php echo $p->PROD_NAME ?></h3>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span>Rp <?php echo $p->PROD_PRICE ?></span></label>
				  </div>
				</form>
				
				<hr class="soft"/>
				<h4><?php echo $p->PROD_STOCK ?> Stock Item</h4>
				<form class="form-horizontal qtyFrm pull-right">
				  
				</form>
				<hr class="soft clr"/>
				<p>
				<?php echo $p->PROD_DESCRIPTION ?>
                <p>&nbsp;</p>
                Pembelian dan pemesanan bisa juga menghubungi kontak dibawah ini:<p>&nbsp;</p>
                sms/tlp : 0890xxxx <p>&nbsp;</p>
                whatsapp : 0890xxx <p>&nbsp;</p>
                BBM     : bb89vv <p>&nbsp;</p>
                Line : ini_tokoku
				<?php } ?>
				</p>
			<hr class="soft"/>
			</div>
		</div>
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>
</div>