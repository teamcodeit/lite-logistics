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
          <h3 class="box-title"> Daily Report</h3>
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
            <div id="map" style="width: 100%; height: 500px;"></div>
        </div>
      </div>



</section>
<!-- /.content -->
</div>
  <!-- /.content-wrapper -->