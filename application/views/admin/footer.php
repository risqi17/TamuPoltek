


	<!--   Core JS Files   -->
	<script src="<?php echo base_url();?>/assets/admin/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/admin/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>/assets/admin/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url();?>/assets/admin/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="<?php echo base_url();?>/assets/admin/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="<?php echo base_url();?>/assets/admin/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<?php if(isset($_GET['aksi'])=='beranda'){ }else{?><script src="<?php echo base_url();?>/assets/admin/js/demo.js"></script><?php }?>
	

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>
	

</html>
