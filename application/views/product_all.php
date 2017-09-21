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
		<li><a href="index.html">Seller</a> <span class="divider">/</span></li>
		<li class="active"> Product</li>
    </ul>		
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Gambar</th>
                  <th>Nama</th>
                  <th>Deskripsi</th>
				  <th>Harga</th>
                  <th>Stok</th>
                  <th>Aksi</th>
                  
				</tr>
              </thead>
              <tbody>
              <?php
		foreach($product as $p){
			?>
                <tr>
                 
                 <td><img src="<?php echo base_url(); ?>assets/product/<?php echo $p->PROD_IMAGE ?>" width="100px" height="60"></td>
                  <td><?php echo $p->PROD_NAME ?></td>
									
                  <td><?php echo $p->PROD_DESCRIPTION ?></td>
                  <td><?php echo $p->PROD_PRICE ?></td>
                  <td><?php echo $p->PROD_STOCK ?></td>
                    <td>
					<div class="input-append"><button class="btn btn-warning" type="button"><i class="icon-pencil"></i></button><a href="<?php echo base_url(); ?>index.php/product/add_product"><button class="btn btn-info" type="button"><i class="icon-plus icon-white"></i></button></a><a href="<?php echo base_url(); ?>index.php/product/delete/<?php echo $p->PROD_ID ?>"><button class="btn btn-danger" type="button"><i class="icon-remove icon-white"></i></button></a>			
					</div>
				  </td>
                </tr>
                <?php } ?>
				
				</tbody>
            </table>
	
</div>
</div></div>
</div>
<br><br><br><br><br><br><br><br><br><br>
<!-- MainBody End ============================= -->
