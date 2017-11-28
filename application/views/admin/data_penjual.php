
			<div class="content">
				<div class="container-fluid">
				
					<div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">Data Penjual<button class="btn btn-warning btn-md pull-right"><i class="fa fa-print"></i></button></h4>

	                                <p class="category">Penjual baru terdaftar pada 12 september 2017</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-warning">
	                                        <th>Nama Penjual</th>
	                                    	<th>Email Penjual</th>
	                                    	<th>Nomor Telpon</th>
	                                    	<th>Status</th>
	                                    	<th>Aksi</th>
	                                    </thead>
	                                    <tbody>
										<?php foreach ($penjual as $p){?>
	                                        <tr>
	                                        	<td><?php echo $p->SELL_NAME;?></td>
	                                        	<td><?php echo $p->SELL_EMAIL;?></td>
	                                        	<td><?php echo $p->SELL_PHONE;?></td>
	                                        	<td><?php echo $p->SELL_STATUS;?></td>
	                                        	<td><?php if($p->SELL_STATUS == 'aktif'){?>
													<a href="#" class="tombol_blok" rel="tooltip" title="Blokir" data-toggle="modal" data-target="#popup1" blok="<?php echo $p->SELL_ID;?>" nama="<?php echo $p->SELL_NAME?>">
													<i class="material-icons" style="color:red" title="block">info</i></a>
												<?php }else{?>
													<a href="#" class="tombolcheck" rel="tooltip" title="Aktifkan" data-toggle="modal" data-target="#popup" check="<?php echo $p->SELL_ID?>" nama2="<?php echo $p->SELL_NAME?>">
													<i class="material-icons" style="color:red" title="aktifkan">check</i></a><!--href="<?php echo base_url();?>index.php/admin/admin/blok?id=<?php echo $p->SELL_ID?>"href="<?php echo base_url();?>index.php/admin/admin/blok?blok=<?php echo $p->SELL_ID?>"-->
												<?php }?>
												</td>
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
<div class="modal fade" id="popup1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Pemblokiran</h4>
			</div>
			<div class="modal-body">
				Apakah anda akan memblokir <p id="nama"></p>
				<form action="<?php echo base_url()?>/index.php/admin/admin/blok" method="post">
                <input type="hidden" name="id" id="id">
			</div>
			<div class="modal-footer">
				<button type="submit" name="submit" class="btn btn-default btn-info">Iya</button>
				<button type="button" class="btn btn-danger btn-danger" data-dismiss="modal">Tidak</button>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Aktifkan</h4>
			</div>
			<div class="modal-body">
				Apakah anda akan mengaktifkan<p id="nama2"></p>
				<form action="<?php echo base_url()?>/index.php/admin/admin/blok" method="post">
                <input type="hidden" name="id2" id="id2">
			</div>
			<div class="modal-footer">
				<button type="submit" name="aktif" class="btn btn-default btn-info">Iya</button>
				<button type="button" class="btn btn-danger btn-danger" data-dismiss="modal">Tidak</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
<script>
	$(function(){
		$('.tombol_blok').click(function(){
			document.getElementById('nama').innerHTML=$(this).attr("nama");	
			document.getElementById('id').value=$(this).attr("blok");
		});
	});
	$(function(){
		$('.tombolcheck').click(function(){
			document.getElementById('nama2').innerHTML=$(this).attr('nama2');
			document.getElementById('id2').value=$(this).attr('check');
		});
	});
</script>