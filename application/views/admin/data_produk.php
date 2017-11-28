<div class="content">
				<div class="container-fluid">
				
					<div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="red">
	                                <h4 class="title">Data Produk<button class="btn btn-danger btn-md pull-right"><i class="fa fa-print"></i></button></h4>

	                                <p class="category">Semua data produk dapat dilihat dalam tabel di bawah</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-danger">
	                                        <th>Nama Produk</th>
	                                    	<th>Stok</th>
	                                    	<th>Harga</th>
	                                    	<th>Kategori</th>
	                                    	<th>Penjual</th>
	                                    	<th>Kondisi</th>
	                                    	<th>Gambar</th>
	                                    </thead>
	                                    <tbody>
										<?php foreach ($produk as $p){?>
	                                        <tr>
	                                        	<td><?php echo $p->PROD_NAME?></td>
	                                        	<td><?php echo $p->PROD_STOCK?></td>
	                                        	<td><?php echo $p->PROD_PRICE?></td>
	                                        	<td><?php echo $p->CAT_NAME?></td>
												<td><?php echo $p->SELL_NAME?></td>
												<td><?php echo $p->PROD_CONDITION?></td>
												<td><a onclick="event.preventDefault();$('.modal img').attr('src', $(this).attr('href'));$('.modal').modal('show');" id="popupimg" href="<?php echo base_url()?>assets/product/<?php echo $p->PROD_IMAGE?>">
													lihat gambar</a>
												<!--<img src="<?php echo base_url()?>/assets/product/<?php echo $p->PROD_IMAGE?>" class="img-rounded">--></td>
	                                        </tr>
										<?php }?>
	                                    </tbody>
	                                </table>
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
								<a href="index.html">
									Home
								</a>
							</li>
							<li>
								<a href="index.html">
									E-Commerce
								</a>
							</li>
							<li>
								<a href="index.html">
									Blog
								</a>
							</li>
						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.tamanusaha.com">Taman Usaha</a>, Muda Berkarya
					</p>
				</div>
			</footer>
		</div>
</div>
<div  class="modal fade" role="dialog">
	<div class="modal-dialog">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons" style="font-size:36px">clear</i>
				</button>
			<img id="my_image" width="100%">
		
		
	</div>
</div>
</body>
<script>
	/*$(document).ready(function(){
		$('#popupimg').click(function(event){
			event.preventDefault();
			$('.modal img').attr('src', $(this).attr('href'));
			$('.modal').modal('show');
		});
	});*/
</script>
<style>
.modal {
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}
</style>