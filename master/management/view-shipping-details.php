<?php

require_once("header.php");
if (isset($_GET["id"])) {
    $id = $config->decrypt_url($_GET['id']);
} else {
    header("Location: view-shipping");
}
require_once("navbar.php");
require_once("progress_status.php");

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


            <!-- Your Page Content Here -->
            <br><br>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Shipping Activities Track</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <?php if (isset($_GET["errorMessage"])) {
                                echo urldecode($config->error_message($_GET["errorMessage"]));
                            } else if (isset($_GET["successMessage"])) {
                                echo urldecode($config->success_message($_GET["successMessage"]));
                            }
                            ?>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-gray">
                                <div class="inner">
                                    <div style="font-size: 24px; font-weight: bold">Product Invoice</div>

                                    <p>Show cart of products in shipment with pricing</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <?php echo $product_status; ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-gray">
                                <div class="inner">
                                    <div style="font-size: 24px; font-weight: bold">Financial Document</div>

                                    <p>Status of all Pre-ship financial documents(Form-M, LC, Insurance)</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-money"></i>
                                </div>
                                <?php echo $bank_status; ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-gray">
                                <div class="inner">
                                    <div style="font-size: 24px; font-weight: bold">Regulatory Permit</div>

                                    <p>Upload regulatory bodies permit(S.O.N, NAFDAC,...)</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-bars"></i>
                                </div>
                                <?php echo $regulatory_status; ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-gray">
                                <div class="inner">
                                    <div style="font-size: 24px; font-weight: bold">Shipping Schedule</div>

                                    <p>Update details about the consignment shipping(EDD,EAD,shipping agent,..)</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <?php echo $shipping_status; ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-gray">
                                <div class="inner">
                                    <div style="font-size: 24px; font-weight: bold">Geofencing & Location</div>

                                    <p>Realtime feed of consignment location and geofencing report.</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <?php echo $location_status; ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-gray">
                                <div class="inner">
                                    <div style="font-size: 24px; font-weight: bold">Shipping Documents</div>

                                    <p>Upload shipping documents required for clearing consignment.</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-book"></i>
                                </div>
                                <?php echo $shipping_doc_status; ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-gray">
                                <div class="inner">
                                    <div style="font-size: 24px; font-weight: bold">Clearance</div>

                                    <p>Information about the shipment clearance and related documents.</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-book"></i>
                                </div>
                                <?php echo $clearance_status; ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-gray">
                                <div class="inner">
                                    <div style="font-size: 24px; font-weight: bold">Transhipment</div>

                                    <p>View activity timeline of consignment transhipment from badge to truck.</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <?php echo $transhipment_status; ?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-gray">
                                <div class="inner">
                                    <div style="font-size: 24px; font-weight: bold">Shipment Report</div>

                                    <p>Download general shipment report in PDF format</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-download"></i>
                                </div>
                                <a href="#" class="small-box-footer bg-green"> Download Report <i class="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>

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