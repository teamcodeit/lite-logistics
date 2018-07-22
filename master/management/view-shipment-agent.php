<?php 

require_once("header.php"); 
require_once("navbar.php"); 

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Management Dashboard
			<small></small>
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">

		<?php require_once("dashboard-stat.php"); ?>
		<!-- Your Page Content Here -->
		<br><br>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">View Shipping Agents</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<?php if(isset($_GET["errorMessage"])){
							echo urldecode($config->error_message($_GET["errorMessage"]));
						}
						else if(isset($_GET["successMessage"])){
							echo urldecode($config->success_message($_GET["successMessage"]));
						}
						?>
					</div>
					<div class="col-md-2"></div>
				</div>
				<h2> Shipping Agents</h2>
				<div class="table-responsive">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>S/N</th>
								<th>Company Name</th>
								<th>Email</th>
								<th>Contact Person</th>
								<th>Mobile</th>
								<th>No of Shipping</th>
								<th>Manage</th>
							</tr>
						</thead>
						<?php  echo $config->viewShippingAgents(); ?>
					</table>


					
				</div>
			</div>
		</div>


	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php
require_once("footer.php"); 

?>