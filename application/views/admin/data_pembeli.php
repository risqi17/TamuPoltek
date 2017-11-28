
			<div class="content">
				<div class="container-fluid">
				
					<div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Data Pembeli<button class="btn btn-primary btn-md pull-right"><i class="fa fa-print"></i></button></h4>

	                                <p class="category">Pembeli baru terdaftar pada 12 september 2017</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-primary">
	                                        <th>Nama Pembeli</th>
	                                    	<th>Email Pembeli</th>
	                                    	<th>Nomor Telepon</th>
	                                    	<th>Status</th>
	                                    </thead>
	                                    <tbody>
										<?php foreach($pembeli as $p){?>
	                                        <tr>
	                                        	<td><?php echo $p->BUY_NAME;?></td>
	                                        	<td><?php echo $p->BUY_EMAIL;?></td>
	                                        	<td><?php echo $p->BUY_PHONE;?></td>
	                                        	<td><?php echo $p->BUY_STATUS;?></td>
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
</body>