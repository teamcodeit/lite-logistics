<?php
/**
 * Created by PhpStorm.
 * User: ismummy
 * Date: 7/21/18
 * Time: 5:34 PM

Updated by : Theejhay
At 5:10am
 */

$status = $config->getShippingStatus($id);
if ($status == 0) {
    $product_status = '<a href=".add-product-invoice" data-toggle="modal" data-target=".add-product-invoice" data-backdrop="static" data-keyboard="false" class="small-box-footer bg-orange"> Add Product <i class="fa fa-plus"></i></a>';
} else {
    $product_status = '<a href="view-pfi-product" class="small-box-footer bg-green"> View Product(s) <i class="fa fa-eye"></i></a>';
}

if ($status < 1) {
    $bank_status = '<a href="#" class="small-box-footer bg-red"> Not Available <i class="fa fa-close"></i></a>';
} else if ($status == 1) {
    if ($config->getShippingStatus($id) == 0) {
        $bank_status = '<a href=".add-form-m" data-toggle="modal" data-target=".add-form-m" data-backdrop="static" data-keyboard="false" class="small-box-footer bg-orange"> Add Form-M <i class="fa fa-plus"></i></a>';
    } else {
        $bank_status = '<a href="view-pfi-banks" class="small-box-footer bg-orange"> Pending Completion<i class="fa fa-info"></i></a>';
    }
} else {
    $bank_status = '<a href="view-pfi-banks" class="small-box-footer bg-green"> View Documents <i class="fa fa-eye"></i></a>';
}

if ($status < 2) {
    $regulatory_status = '<a href="#" class="small-box-footer bg-red"> Not Available <i class="fa fa-close"></i></a>';
} elseif ($status == 2) {
    $regulatory_status = '<a href="view-pfi-regulatory" class="small-box-footer bg-orange"> Add Document(s) <i class="fa fa-plus"></i></a>';
} else {
    $regulatory_status = '<a href="view-pfi-regulatory" class="small-box-footer bg-green"> View Documents <i class="fa fa-eye"></i></a>';
}

if ($status < 3) {
    $shipping_status = '<a href="#" class="small-box-footer bg-red"> Not Available <i class="fa fa-close"></i></a>';
} elseif ($status == 3) {
    $shipping_status = '<a href=".add-shipment" data-toggle="modal" data-target=".add-shipment" data-backdrop="static" data-keyboard="false" class="small-box-footer bg-orange"> Add Schedule <i class="fa fa-info"></i></a>';
} else {
    $shipping_status = '<a href="#" class="small-box-footer bg-green"> View Schedule <i class="fa fa-eye"></i></a>';
}

if ($status < 4) {
    $location_status = '<a href="#" class="small-box-footer bg-red"> Not Available <i class="fa fa-close"></i></a>';
} else {
    $location_status = '<a href="#" class="small-box-footer bg-green"> View Feeds <i class="fa fa-eye"></i></a>';
}

if ($status < 5) {
    $shipping_doc_status = '<a href="#" class="small-box-footer bg-red"> Not Available <i class="fa fa-close"></i></a>';
} elseif ($status == 5) {
    if ($config->getShippingDocCount($id) == 0) {
        $shipping_doc_status = '<a href=".add-required-docs" data-toggle="modal" data-target=".add-required-docs" data-backdrop="static" data-keyboard="false" class="small-box-footer bg-orange"> Add Document <i class="fa fa-plus"></i></a>';
    } else {
        $shipping_doc_status = '<a href="#" class="small-box-footer bg-orange"> Pending Completion <i class="fa fa-info"></i></a>';
    }
} else {
    $shipping_doc_status = '<a href="#" class="small-box-footer bg-green"> View Schedule <i class="fa fa-eye"></i></a>';
}

if ($status < 6) {
    $clearance_status = '<a href="#" class="small-box-footer bg-red"> Not Available <i class="fa fa-close"></i></a>';
} elseif ($status == 6) {
    $clearance_status = '<a href=".add-clearance" data-toggle="modal" data-target=".add-clearance" data-backdrop="static" data-keyboard="false" class="small-box-footer bg-orange"> Update Clearance <i class="fa fa-info"></i></a>';
} else {
    $clearance_status = '<a href="#" class="small-box-footer bg-green"> View Details <i class="fa fa-eye"></i></a>';
}

if ($status < 7) {
    $transhipment_status = '<a href="#" class="small-box-footer bg-red"> Not Available <i class="fa fa-close"></i></a>';
} elseif ($status == 7) {
    $transhipment_status = '<a href="#" class="small-box-footer bg-orange"> Report Transhipment Activity <i class="fa fa-info"></i></a>';
} else {
    $transhipment_status = '<a href="#" class="small-box-footer bg-green"> View Details <i class="fa fa-eye"></i></a>';
}

