<!-- Modal Start -->


<!-- Bank Permits: form m, LC and Insurance finanicial documents-->
<div class="modal fade add-form-m"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="color:black;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Financial Documents</h2>
            </div>
            <div class="modal-header">
                <h3 class="modal-title">Form M</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-pencil"></span></div>
                        <input type="text" class="form-control" name="form_m_no" placeholder="Form M No">
                    </div>

                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-pencil"></span></div>
                        <input type="text" class="col-md-5 form-control" name="prefix" placeholder="Prefix">
                        <input type="text" class="col-md-5 form-control" name="bank" placeholder="Bank">
                        <input type="text" class="col-md-3 form-control" name="year" placeholder="Year">
                        <input type="text" class="col-md-3 form-control" name="numbering" placeholder="Numbering">
                    </div>

                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-cart-plus"></span></div>
                        <input type="text" class="form-control" name="transaction_id" readonly="readonly" value="Transaction Id">
                    </div>

                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span></div>
                        <input type="file" class="form-control" accept="application/pdf" name="form_m_doc" placeholder="Upload Form M">
                    </div>
                </div>
            </div>
            <hr>
            <div class="modal-header">
                <h3 class="modal-title">Letter of Credit</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-pencil"></span></div>
                        <input type="text" class="form-control" name="lc_no" placeholder="LC No">
                    </div>

                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span>
                        </div>
                        <input type="file" class="form-control" accept="application/pdf" name="lc_doc" placeholder="Upload LC">
                    </div>
                </div>
            </div>
            <hr>
            <div class="modal-header">
                <h3 class="modal-title">Insurance Certificate</h3>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-pencil"></span></div>
                        <input type="text" class="form-control" name="insurance_no" placeholder="Insurance Number">
                    </div>

                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span>
                        </div>
                        <input type="file" class="form-control" accept="application/pdf" name="insurance_doc" placeholder="Upload Insurance Certificate">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                <input type="submit" class="btn btn-warning" name="add_form_m" value="Done">
            </div>
        </div>
    </div>
</div>
<!-- bank permit ends -->

<!-- required documents after shipping begins -->
<div class="modal fade add-required-docs"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="color:black;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title"> Add All Required Documents</h2>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <table class="table" border="0">
                        <tr>
                            <td> Bill of Lading </td>
                            <td>
                                <div class="form-group input-group has-feedback">
                                    <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span></div>
                                    <input type="file" class="form-control" accept="application/pdf" name="bill_of_lading_doc" placeholder="Upload Bill of Lading">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td> Commercial Invoice </td>
                            <td>
                                <div class="form-group input-group has-feedback">
                                    <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span></div>
                                    <input type="file" class="form-control" accept="application/pdf" name="commercial_invoice_doc" placeholder="Upload Commercial Invoice">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td> Combined Certificate of Value and Origin</td>
                            <td>
                                <div class="form-group input-group has-feedback">
                                    <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span></div>
                                    <input type="file" class="form-control" accept="application/pdf" name="ccvo_doc" placeholder="Upload CCVO">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td> Certificate of Analysis </td>
                            <td>
                                <div class="form-group input-group has-feedback">
                                    <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span></div>
                                    <input type="file" class="form-control" accept="application/pdf" name="coa_doc" placeholder="Upload COA">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td> Packing List </td>
                            <td>
                                <div class="form-group input-group has-feedback">
                                    <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span></div>
                                    <input type="file" class="form-control" accept="application/pdf" name="packing_list_doc" placeholder="Upload Packing List">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td> Manufacturer's Certificate </td>
                            <td>
                                <div class="form-group input-group has-feedback">
                                    <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span></div>
                                    <input type="file" class="form-control" accept="application/pdf" name="manufacturer_certificate_doc" placeholder="Upload Manufacturer's Certificate">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td> CRIA (where applicable) </td>
                            <td>
                                <div class="form-group input-group has-feedback">
                                    <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span></div>
                                    <input type="file" class="form-control" accept="application/pdf" name="cria_doc" placeholder="Upload CRIA">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td> Invoice </td>
                            <td>
                                <div class="form-group input-group has-feedback">
                                    <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span></div>
                                    <input type="file" class="form-control" accept="application/pdf" name="commercial_invoice_doc" placeholder="Upload Commercial Invoice">
                                </div>
                            </td>
                        </tr>

                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                    <input type="submit" class="btn btn-warning" name="add_required_docs" value="Save Uploaded Documents">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- required documents after shipping ends -->


<!-- Add Admin Modal -->

<div class="modal fade add-admin"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="color:black;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title"> Add Admin </h2>

            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <table class="table" border="0">

                        <tr>
                            <td> Full Name </td>
                            <td> <input required type="text" class="form-control" name="fname" value="<?php echo $fname; ?>" placeholder=" Full Name" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <td>Email </td>
                            <td> <input required type="email" class="form-control" name="email" value="<?php echo $username; ?>" placeholder="Email" autocomplete="off">
                            </td>
                        </tr>


                        <tr>
                            <td>Mobile Number </td>
                            <td> <input required type="number" class="form-control" name="mobile" value="<?php echo $mobile; ?>" placeholder="Mobile Number" autocomplete="off">
                            </td>
                        </tr>

                        <tr>
                            <td> Password </td>
                            <td> <input required type="text" class="form-control" name="password" placeholder=" Password" autocomplete="off">
                            </td>
                        </tr>

                        <tr>
                            <td> Confirm Password </td>
                            <td> <input required type="text" class="form-control" name="cpassword" placeholder=" Confirm Password" autocomplete="off">
                            </td>
                        </tr>




                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <input type="submit" class="btn btn-warning" name="add_admin" value="Add Admin">
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<!--agent onboarding begins -->
<div class="modal fade add-agent"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="color:black;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Onboard Shipping Agent</h2>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="fa fa-home"></span></div>
                            <input type="text" class="form-control" placeholder="Company Name" name="company_name" required>
                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required >
                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="fa fa-map-marker"></span></div>
                            <textarea type="text" class="form-control" name="company_address" placeholder="Company Address" required ></textarea>
                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                            <input type="text" class="form-control" name="contact_person" placeholder="Contact Person" >
                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                            <input type="text" class="form-control" name="mobile_number" placeholder="Contact Number" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <input type="submit" class="btn btn-warning" name="add_agent" value="Add Agent">
                </div>
            </form>
        </div>
    </div>
</div>
<!--agent onboarding end -->

<!-- supplier onboarding begins -->
<div class="modal fade add-supplier"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="color:black;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Onboard Supplier</h2>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                            <input type="text" class="form-control" placeholder="Supplier Name" name="supplier_name" required>
                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                            <input type="email" class="form-control" name="supplier_email" placeholder="Email" required >
                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="fa fa-map-marker"></span></div>
                            <textarea class="form-control" name="supplier_address" placeholder="Supplier Address" required></textarea>
                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                            <input type="text" class="form-control" name="supplier_contact_person" placeholder="Contact Person" >
                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                            <input type="text" class="form-control" name="supplier_mobile_number" placeholder="Contact Number" >
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <input type="submit" class="btn btn-warning" name="add_supplier" value="Add Supplier">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- supplier onboarding ends -->






<!-- add product begins -->
<div class="modal fade add-product"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="color:black;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Add Product</h2>
            </div>
            <form method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="fa fa-cart-plus"></span></div>
                            <input type="text" class="form-control" placeholder="Product Name" name="product_name" required>
                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="fa fa-list"></span></div>
                            <textarea class="form-control" name="product_description" placeholder="Product Description" required ></textarea>
                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                            <input list="hscodes" class="form-control" name="product_hscode" id="product_hscode" placeholder="HS Code" required>
                            <datalist id="hscodes">
                                <option value="goodsOne" id="1"> Goods One </option>
                                <option value="goodsTwo" id="2"> Goods Two </option>
                                <option value="goodsThree" id="3"> Goods Three </option>
                                <option value="goodsFour" id="4"> Goods Four </option>
                            </datalist>

                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                            <input type="text" id="result" class="form-control" name="import_duty" placeholder="Import Duty" >

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <input type="submit" class="btn btn-warning" name="add_product" value="Add Product">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- add product ends -->


<!-- add shipment details modal start -->
<div class="modal fade add-shipment"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="color:black;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Shipment Details</h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-cart-plus"></span></div>
                        <input type="text" class="form-control" name="transaction_id" readonly="readonly" value="Transaction Id">
                    </div>

                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                        <input type="date" class="form-control" name="edd" placeholder="Expected Departure Date" required >
                    </div>

                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-calendar"></span></div>
                        <input type="date" format="dd/mm/yy" class="form-control" name="ead" placeholder="Expected Arrival Date" required >
                    </div>

                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                        <datalist id="shippingAgents" >
                            <option value="Agent One"/>
                            <option value="Agent Two"/>
                            <option value="Agent Three"/>
                            <option value="Agent Four"/>
                        </datalist>
                        <input list="shippingAgents" class="form-control" name="shipping_agent" id="shipping_agent" placeholder="Shipping Agent" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                <input type="submit" class="btn btn-warning" name="add_shipment" value="Save Shipment Details">
            </div>
        </div>
    </div>
</div>
<!-- shipment details modal ends -->





<div class="modal fade add-pfi"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="color:black;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Pro Forma Invoice</h2>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">

                            <div class="input-group-addon"><span class="fa fa-pencil"></span></div>

                            <input type="text" class="form-control" name="pfi_no" placeholder="PFI No">

                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                            <datalist id="suppliers" >
                                <?php echo $config->ShowSupplier(); ?>
                            </datalist>

                            <input list="suppliers" class="form-control" name="supplier" id="shipping_agent" placeholder="Supplier" required>
                        </div>
                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">

                            <div class="input-group-addon"><span class="fa fa-flag"></span></div>

                            <datalist id="shipping_countries" >
                                <?php include("countries-list.php"); ?>

                            </datalist>
                            <input list="shipping_countries" class="form-control" name="shipping_country" id="shipping_country" placeholder="Shipping From" required>
                        </div>
                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                            <div class="input-group-addon"><span class="fa fa-flag"></span></div>

                            <datalist id="shipping_countries" >

                                <?php include("countries-list.php"); ?>

                            </datalist>
                            <input list="shipping_countries" class="form-control" name="shipping_destination" id="shipping_destination" placeholder="Shipping To" required>

                        </div>
                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">

                            <div class="input-group-addon"><span class="fa fa-money"></span></div>

                            <input type="text" class="form-control" name="vat" placeholder="VAT">

                        </div>

                        <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">

                            <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span></div>

                            <input type="file" class="form-control" accept="application/pdf" name="pfi_doc">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-warning" name="add_pfi" value="Save Details">
                </div>
            </form>
        </div>
    </div>
</div>



<!-- clearance begins -->
<div class="modal fade add-clearance"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="color:black;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Clear Imported Goods</h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                        <input type="text" class="form-control" placeholder="Form M Number" name="frorm_m_no" readonly="readonly">
                    </div>

                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                        <input type="text" class="form-control" name="invoice_no" placeholder="Invoice Number" required >
                    </div>

                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                        <input type="text" class="form-control" name="container_no" placeholder="Container Number" required >
                    </div>

                    <div class="form-group input-group col-xs-offset-1 col-md-10 has-feedback">
                        <div class="input-group-addon"><span class="fa fa-file-pdf-o"></span></div>
                        <input type="file" class="form-control" accept="application/pdf" name="clearance_doc" placeholder="Upload Customs Clearance">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    <input type="submit" class="btn btn-warning" name="clear_goods" value="Clear Goods">
                </div>
            </div>
        </div>
    </div>
    <!-- clearance ends -->







    <!-- Modal ENd -->