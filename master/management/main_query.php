<?php 

$admin_id = $_SESSION["id"];


/*Add AGent */


if($config->if_submit("add_agent")){
  //get inputs
  $company_name = $config->post_value("company_name");
  $email = $config->post_value("email");
  $company_address = $config->post_value("company_address");
  $contact_person = $config->post_value("contact_person");
  $mobile = $config->post_value("mobile_number");
  
  //Check for Duplicate Value
  if($config->check_agent($email, $mobile) == true){

    $msg  = $config->error_message("Duplicate Record, please check and try again.");

  }
    else if($company_name == ""){
      $msg  = $config->error_message("Company Name is Required");
    }
    else if($email == ""){
      $msg  = $config->error_message("Email Address is Required");
    }

    else if($contact_person == ""){
      $msg  = $config->error_message("Contact Person is Required");
    }
    else if($company_address == ""){
      $msg  = $config->error_message("Company Address is Required");
    }
    else if($mobile == ""){
      $msg  = $config->error_message("Mobile Number is Required");
    }


    else{
      //Save into db
      $SaveAgent = $config->AddAgent($company_name, $email, $company_address, $contact_person, $mobile);
      if($SaveAgent == true){
        $msg  = $config->success_message("Shipping Agent <em>$company_name</em> Added Successfully ");
      }
      else{
        $msg  = $config->error_message("Error Adding Shipping Agent <em>$company_name</em> ");
      }
    }
  }



/* Add Product*/

if($config->if_submit("add_product")){
  //get inputs
  $product_name = $config->post_value("product_name");
  $hs_code = $config->post_value("product_hscode");
  $import_duty = $config->post_value("import_duty");
  $description = $config->post_value("product_description");
  
  //Check for Duplicate Value
  if($config->check_product($product_name, $hs_code, $import_duty) == true){

    $msg  = $config->error_message("Duplicate Product, please check and try again.");

  }
    else if($product_name == ""){
      $msg  = $config->error_message("Product Name is Required");
    }
    else if($hs_code == ""){
      $msg  = $config->error_message("HS Code can not be Empty");
    }

    else if($description == ""){
      $msg  = $config->error_message("Description is Required");
    }


    else{
      //Save into db
      $SaveProduct = $config->AddProduct($product_name, $hs_code, $import_duty, $description);
      if($SaveProduct == true){
        $msg  = $config->success_message("Product <em>$product_name</em> Added Successfully ");
      }
      else{
        $msg  = $config->error_message("Error Adding Product <em>$product_name</em> ");
      }
    }
  }




/*Add AGent */


if($config->if_submit("add_supplier")){
  //get inputs
  $supplier_name = $config->post_value("supplier_name");
  $email = $config->post_value("supplier_email");
  $address = $config->post_value("supplier_address");
  $contact_person = $config->post_value("supplier_contact_person");
  $mobile = $config->post_value("supplier_mobile_number");
  
  //Check for Duplicate Value
  if($config->check_supplier($email, $mobile) == true){

    $msg  = $config->error_message("Duplicate Record, please check and try again.");

  }
    else if($supplier_name == ""){
      $msg  = $config->error_message("Supplier Name is Required");
    }
    else if($email == ""){
      $msg  = $config->error_message("Supplier Email Address is Required");
    }

    else if($contact_person == ""){
      $msg  = $config->error_message("Contact Person is Required");
    }
    else if($address == ""){
      $msg  = $config->error_message("Supplier Address is Required");
    }
    else if($mobile == ""){
      $msg  = $config->error_message("Supplier Mobile Number is Required");
    }


    else{
      //Save into db
      $SaveSupplier = $config->AddSupplier($supplier_name, $email, $address, $contact_person, $mobile);
      if($SaveSupplier == true){
        $msg  = $config->success_message("Supplier <em>$supplier_name</em> Added Successfully ");
      }
      else{
        $msg  = $config->error_message("Error Adding Supplier <em>$supplier_name</em> ");
      }
    }
  }




/*Add Pro-Formal Invoice */


if($config->if_submit("add_pfi")){
  //get inputs
  $supplier_name = $config->post_value("supplier_name");
  $email = $config->post_value("supplier_email");
  $address = $config->post_value("supplier_address");
  $contact_person = $config->post_value("supplier_contact_person");
  $mobile = $config->post_value("supplier_mobile_number");
  
  //Check for Duplicate Value
  if($config->check_supplier($email, $mobile) == true){

    $msg  = $config->error_message("Duplicate Record, please check and try again.");

  }
    else if($supplier_name == ""){
      $msg  = $config->error_message("Supplier Name is Required");
    }
    else if($email == ""){
      $msg  = $config->error_message("Supplier Email Address is Required");
    }

    else if($contact_person == ""){
      $msg  = $config->error_message("Contact Person is Required");
    }
    else if($address == ""){
      $msg  = $config->error_message("Supplier Address is Required");
    }
    else if($mobile == ""){
      $msg  = $config->error_message("Supplier Mobile Number is Required");
    }


    else{
      //Save into db
      $SaveSupplier = $config->AddSupplier($supplier_name, $email, $address, $contact_person, $mobile);
      if($SaveSupplier == true){
        $msg  = $config->success_message("Supplier <em>$supplier_name</em> Added Successfully ");
      }
      else{
        $msg  = $config->error_message("Error Adding Supplier <em>$supplier_name</em> ");
      }
    }
  }



//Adding PFI

if($config->if_submit("add_pfi")){

  $rand = rand(0000001, 9999999);


  $pfi_no = $config->post_value("pfi_no");
  $supply_id = $config->post_value("supply_id");
  $shipping_country = $config->post_value("shipping_country");
  $shipping_destination = $config->post_value("shipping_destination");
  $vat = $config->post_value("vat");

  $pfi_doc = $_FILES['pfi_doc']['name'];
  $size = $_FILES['pfi_doc']['size'];
  $fileTmpLoc = $_FILES["pfi_doc"]["tmp_name"];

 if($config->check_pfi($pfi_no, $supply_id) == true){

    $msg = $config->error_message("Record exist!, please try again later");

  }

  else if($pfi_doc==''){
    $msg = $config->error_message("Please, select a file to upload");
  }
  else if($pfi_no==''){
    $msg = $config->error_message("PFI Number cannot be empty");
  }
  else if($vat==''){
    $msg = $config->error_message("VAT cannot be empty");
  }

   

  else{

    $upload = 'pfi/';
    $temp = explode(".", $_FILES["pfi_doc"]["name"]);
    $uploadfile = $rand. '.' . end($temp);
    $db_upload_file ='pfi/'.$rand . '.' . end($temp);
    $type = $_FILES['pfi']['type'];


    if (!preg_match("/.(pdf)$/i", $pfi_doc) ) {    
      $msg = $config->error_message("File extension is not allowed");

    }

   

   else if($size > 300000000){
     $msg = $config->error_message("The PFI file you are trying to upload is too large, the default size is 300kb");
   }
   else if(move_uploaded_file($_FILES['pfi_doc']['tmp_name'], 'pfi/'.$uploadfile)){

//Add PFI

    $SavePfi = $config->AddPFI( $db_upload_file, $pfi_no, $supply_id, $shipping_country, $shipping_destination, $vat);

    if($SavePfi == true){
      $msg = $config->success_message("PFI <em> $pfi_no </em> Saved successfully!");
    }

    else{
      $msg = $config->error_message("Error uploading PFI  <em>$pfi_no</em>");
    }

  }
  else{
    $msg = $config->error_message("Error uploading PFI File <em>$pfi_no</em>");
  }

}
}




?>