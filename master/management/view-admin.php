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
      <h3 class="box-title">View Administrator</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php if(isset($_GET["errorMessage"])){
              echo urldecode($config->error_message($_GET["errorMessage"]));
            }
            else if(isset($_GET["successMessage"])){
              echo urldecode($config->success_message($_GET["successMessage"]));
            }
            ?>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Manage</th>
          </tr>
        </thead>
        <?php echo $config->ViewAdmin(); ?>
      </table>
    </div>
  </div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




<?php
 require_once("footer.php"); 

 ?>