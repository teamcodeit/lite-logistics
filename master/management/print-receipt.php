<?php 

require_once("header.php"); 
require_once("navbar.php"); 

if(isset($_GET["Record"]) && isset($_GET["User"])&& isset($_GET["Date"])&& isset($_GET["Amount"])&& isset($_GET["Loan"])&& isset($_GET["Balance"])){
	$user_record = $config->decrypt_url($_GET["Record"]);
	$fname = $config->decrypt_url($_GET["User"]);
	$date = $config->decrypt_url($_GET["Date"]);
	$amount = $config->decrypt_url($_GET["Amount"]);
	$loan = $config->decrypt_url($_GET["Loan"]);
	$balance = $config->decrypt_url($_GET["Balance"]);

}

else{
	header("Location: view-withdrawal");
} 


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

	<section class="content-header">
		<h1>
			Kingship Heritage Investment Service Limited (<?php echo $fname; ?>'s) Receipt
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Your Page Content Here -->
		<br><br>
		<div class="box">
			<div class="box-header">
				<h3 class="box-title"> <?php echo $fname; ?>'s Receipt </h3>
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
				<div class="table-responsive">
					
					<table id="example1" class="table table-bordered table-striped">	
						
						<thead>
							<tr>
								<th>Customer Name</th>
								<th> Date Withdrawn</th>
								
								<th>  Amount Withdrawn</th>
								<th> Loan Type </th>
								<th> Balance </th>
								<th> Manage</th>
							</tr>
						</thead>
						<?php  


							echo "<tr>";
							echo "<td>".ucfirst($fname) ."</td>";
							echo "<td>".$date."</td>";

							echo "<td>#".number_format($amount)." </td>";
							echo "<td>".$loan." </td>";

							echo "<td>#".$balance." </td>";
							echo "</tr>";
						

						?>

						<table>
							<td><?php echo ucfirst($fname); ?> </td>
						</table>
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