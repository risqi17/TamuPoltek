<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="material-icons">person</i>
								</div>
								<div class="card-content">
									<p class="category">User Tamu </p>
									<h3 class="title"><?php echo $data?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">date_range</i> Total user
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">markunread_mailbox</i>
								</div>
								<div class="card-content">
									<p class="category">Produk Mahasiswa</p>
									<h3 class="title">1000</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">date_range</i> Produk kreatif mahasiswa
									</div>
								</div>
							</div>
						</div>
						
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="material-icons">shopping_cart</i>
								</div>
								<div class="card-content">
									<p class="category">Transaksi Tamu</p>
									<h3 class="title"><?php echo $trans?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> Jumlah total transaksi
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="material-icons">show_chart</i>
								</div>
								<div class="card-content">
									<p class="category">Nominal Transaksi</p>
									<h3 class="title">Rp <?php $total=number_format($nominal,0,'.','.'); echo $total?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Total transaksi
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header card-chart" data-background-color="green">
									<div class="ct-chart" id="dailySalesChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Penjualan Harian</h4>
									<p class="category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 55%  </span> peningkatan penjualan hari ini</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> diperbarui 4 menit yang lalu
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card">
								<div class="card-header card-chart" data-background-color="orange">
									<div class="ct-chart" id="emailsSubscriptionChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Pengunjung Bulanan</h4>
									<p class="category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 10%  </span> peningkatan jumlah pengunjung bulan ini</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> diperbarui 3 menit yang lalu
									</div>
								</div>

							</div>
						</div>	
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header card-chart" data-background-color="red">
									<div class="ct-chart" id="completedTasksChart"></div>
								</div>
								<div class="card-content">
									<h4 class="title">Pengguna Baru</h4>
									<p class="category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 10%  </span> peningkatan jumlah pengguna bulan ini</p>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">access_time</i> diperbarui 10 menit yang lalu
									</div>
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
<script>
		type = ['','info','success','warning','danger'];


demo = {
        initDocumentationCharts: function(){
        /* ----------==========     Daily Sales Chart initialization For Documentation    ==========---------- */

        dataDailySalesChart = {
            labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
            series: [
                [12, 17, 7, 17, 23, 18, 38]
            ]
        };

        optionsDailySalesChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
        }

        var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

        md.startAnimationForLineChart(dailySalesChart);
    },
    initDashboardPageCharts: function(){

        /* ----------==========     Daily Sales Chart initialization    ==========---------- */

        dataDailySalesChart = {
            labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
            series: [
                [<?php echo $l_sep?>, 17, 7, 17, 23, 18, 38]
            ]
        };

        optionsDailySalesChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: 50, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0},
        }

        var dailySalesChart = new Chartist.Line('#dailySalesChart', dataDailySalesChart, optionsDailySalesChart);

        md.startAnimationForLineChart(dailySalesChart);



        /* ----------==========     Completed Tasks Chart initialization    ==========---------- */

        dataCompletedTasksChart = {
            labels: ['jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'des'],
            series: [
                [<?php echo $l_jan?>,
			<?php echo $l_feb?>,
			<?php echo $l_mar?>,
			<?php echo $l_apr?>,
			<?php echo $l_mei?>,
			<?php echo $l_jun?>,
			<?php echo $l_jul?>,
			<?php echo $l_ags?>,
			<?php echo $l_sep?>,
			<?php echo $l_okt?>,
			<?php echo $l_nov?>,
			<?php echo $l_des?>]
            ]
        };

        optionsCompletedTasksChart = {
            lineSmooth: Chartist.Interpolation.cardinal({
                tension: 0
            }),
            low: 0,
            high: 1000, // creative tim: we recommend you to set the high sa the biggest value + something for a better look
            chartPadding: { top: 0, right: 0, bottom: 0, left: 0}
        }

        var completedTasksChart = new Chartist.Line('#completedTasksChart', dataCompletedTasksChart, optionsCompletedTasksChart);

        // start animation for the Completed Tasks Chart - Line Chart
        md.startAnimationForLineChart(completedTasksChart);



        /* ----------==========     Emails Subscription Chart initialization    ==========---------- */

        var dataEmailsSubscriptionChart = {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          series: [
            [<?php echo $l_jan?>,
			<?php echo $l_feb?>,
			<?php echo $l_mar?>,
			<?php echo $l_apr?>,
			<?php echo $l_mei?>,
			<?php echo $l_jun?>,
			<?php echo $l_jul?>,
			<?php echo $l_ags?>,
			<?php echo $l_sep?>,
			<?php echo $l_okt?>,
			<?php echo $l_nov?>,
			<?php echo $l_des?>]

          ]
        };
        var optionsEmailsSubscriptionChart = {
            axisX: {
                showGrid: false
            },
            low: 0,
            high: 1000,
            chartPadding: { top: 0, right: 5, bottom: 0, left: 0}
        };
        var responsiveOptions = [
          ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
              labelInterpolationFnc: function (value) {
                return value[0];
              }
            }
          }]
        ];
        var emailsSubscriptionChart = Chartist.Bar('#emailsSubscriptionChart', dataEmailsSubscriptionChart, optionsEmailsSubscriptionChart, responsiveOptions);

        //start animation for the Emails Subscription Chart
        md.startAnimationForBarChart(emailsSubscriptionChart);

    }
}

	</script>