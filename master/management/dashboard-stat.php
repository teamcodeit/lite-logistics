
<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-4 col-xs-4">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
      <h3><?php echo $config->getTotalShipment(); ?></h3>

        <p style="font-size: 20px; font-weight: bold;">Total Shipment</p>
      </div>
      <div class="icon">
        <i class="fa fa-cart-plus"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  <!-- ./col -->
  <div class="col-lg-4 col-xs-4">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php echo $config->getTotalShipOnTransit(); ?></h3>

        <p style="font-size: 20px; font-weight: bold;">Ship On-Transit</p>
      </div>
      <div class="icon">
        <i class="fa fa-ship"></i>
      </div>
      <a href="view-user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

    <div class="col-lg-4 col-xs-4">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php echo $config->getTotalCompleteShipment(); ?></h3>

       <p style="font-size: 20px; font-weight: bold;">Completed Shipment</p>
      </div>
      <div class="icon">
        <i class="fa fa-briefcase"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>

  





</div>
<!-- /.row -->

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <?php echo $msg; ?>
  </div>
  <div class="col-md-3"></div>
</div>