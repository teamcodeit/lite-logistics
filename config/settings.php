<?php

error_reporting(0);

class crm{

 private $db;

    //Connection to the database

 public function __construct($DB_con) {

  $this->db = $DB_con;
}

    //check if a button is clicked
public function if_submit($data){
  return isset($_POST[$data]) ? true: false;

}

public function if_get($data){
  return isset($_GET[$data]) ? true: false;

}

    //collecting form values via post
public function post_value($post_data){
  return $_POST[$post_data];
}

    //collecting form values via get
public function get_value($get_data){
  return $_GET[$get_data];
}

public function success_message($msg){
  return "<div class='alert alert-success' align='center'><h4><strong><span class='fa fa-check'></span> ".$msg."<button type='button' class='close' data-dismiss='alert'>x</button> </strong></h4></div>";
}


public function error_message($msg){
  return "<div class='alert alert-danger' align='center'><h4><strong><span class='fa fa-exclamation-circle'> ".$msg." </strong></h4></div>";
}

public function info_message($msg){
  return "<div class='alert alert-info' align='center'><h4><strong><span class='fa fa-exclamation-circle'> ".$msg."<button type='button' class='close' data-dismiss='alert'>x</button> </strong></h4></div>";
}


public function login($email,$pass)
{
 try
 {
  $stmt = $this->db->prepare("SELECT * FROM admin WHERE email =:email LIMIT 1");
  $stmt->execute(array(':email'=>$email));
  $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
  if($stmt->rowCount() > 0)
  {
   if(password_verify($pass, $userRow['password']))
   {
    $_SESSION['email'] = $userRow['email'];
    $_SESSION['id'] = $userRow['id'];
    $_SESSION['fullname'] = $userRow['fullname'];

    return true;
  }
  else
  {
    return false;
  }
}
}
catch(PDOException $e)
{
  echo $e->getMessage();
}
}

public function user_login($staff_id,$pass)
{
 try
 {
  $stmt = $this->db->prepare("SELECT * FROM staff WHERE staff_id =:staff_id AND status = 1 LIMIT 1");
  $stmt->execute(array(':staff_id'=>$staff_id));
  $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
  if($stmt->rowCount() > 0)
  {
   if(password_verify($pass, $userRow['password']))
   {
    $_SESSION['staff_id'] = $userRow['staff_id'];
    $_SESSION['id'] = $userRow['id'];
    $_SESSION['fullname'] = $userRow['fullname'];
    $_SESSION['address'] = $userRow['address'];
    $_SESSION['gender'] = $userRow['gender'];
    $_SESSION['email'] = $userRow['email'];
    $_SESSION['mobile'] = $userRow['mobile'];
    $_SESSION['status'] = $userRow['status'];
    $_SESSION['date_registered'] = $userRow['date_registered'];

    return true;
  }
  else
  {
    return false;
  }
}
}
catch(PDOException $e)
{
  echo $e->getMessage();
}
}


public function AddProduct($product_name,$hs_code,$import_duty, $description)
{
  try
  {

   $stmt = $this->db->prepare("INSERT INTO product(product_name, hs_code, import_duty, description) 
    VALUES(:product_name, :hs_code, :import_duty, :description)");

   $stmt->bindValue(":product_name", $product_name);
   $stmt->bindValue(":hs_code", $hs_code);
   $stmt->bindValue(":import_duty", $import_duty);  
   $stmt->bindValue(":description", $description);                       

   if($stmt->execute()){

     return true;
   }

   else{

    return false;
  }

}
catch(PDOException $e)
{
  echo $e->getMessage();
}               
}

public function register($fname,$email,$pass, $mobile,  $admin_id)
{
  try
  {

   $random_digits = rand(00000000000012, 232424242949248248248);
   $token = md5($random_digits);

   $new_password = password_hash($pass, PASSWORD_DEFAULT);

   $stmt = $this->db->prepare("INSERT INTO admin(email, password, fullname, mobile) 
    VALUES(:user, :pass, :fname, :mobile)");

   $stmt->bindValue(":user", $email);
   $stmt->bindValue(":pass", $new_password);
   $stmt->bindValue(":fname", $fname);  
   $stmt->bindValue(":mobile", $mobile);                       

   if($stmt->execute()){

     return true;
   }

   else{

    return false;
  }

}
catch(PDOException $e)
{
  echo $e->getMessage();
}               
}



function encrypt_url($string) {

  $se = "Sendroid_ultimate_2018";
  $key = $se; //key to encrypt and decrypts.
  $result = '';
  $test = "";
  for($i=0; $i<strlen($string); $i++) {
   $char = substr($string, $i, 1);
   $keychar = substr($key, ($i % strlen($key))-1, 1);
   $char = chr(ord($char)+ord($keychar));

   $test[$char]= ord($char)+ord($keychar);
   $result.=$char;
 }

 return urlencode(base64_encode(base64_encode(base64_encode($result))));
}

function decrypt_url($string) {

 $se = "Sendroid_ultimate_2018";
    $key = $se; //key to encrypt and decrypts.
    $result = '';
    $string = base64_decode(base64_decode(base64_decode(urldecode($string))));
    for($i=0; $i<strlen($string); $i++) {
     $char = substr($string, $i, 1);
     $keychar = substr($key, ($i % strlen($key))-1, 1);
     $char = chr(ord($char)-ord($keychar));
     $result.=$char;
   }
   return $result;
 }




 public function ViewAdmin(){
   try{

    $counter = 1;
    $conf = $this->db->prepare("SELECT * FROM admin ");
    $conf->execute();

    while($sm = $conf->fetch(PDO::FETCH_ASSOC)){
      $fname = $sm["fullname"];
      $email = $sm["email"];
      $mobile = $sm["mobile"];
      $id = $sm["id"];

      echo "<tr>";

      echo "<td>".$counter++."</td>";
      echo "<td>".ucfirst($fname)."</td>";
      echo "<td>".ucfirst($email)." </td>";
      echo "<td>".$mobile." </td>";
      echo "<td><a class='btn btn-info' href='edit-admin?token=".md5('SendroidTheejhay').md5('SendroidTheejhay')."&&Administrator=".$this->encrypt_url($id)."'> <span class='fa fa-edit'></span>Edit </a> 
      <a class='btn btn-danger' href='delete-admin?Administrator=".$this->encrypt_url($id)."'> <span class='fa fa-trash'></span>Delete </a>

      <a class='btn btn-warning' href='reset-password?Administrator=".$id."'> <span class='fa fa-key'></span>Reset Password </a>
      </td>";

      echo "</tr>";



    }

  }
  catch(PDOException $e){
    return $e->getMessage();
  }
}


/*Check Admin For Duplicate Record */
public function check_admin($email, $mobile){
 try{
  $ck = $this->db->prepare("SELECT email, mobile FROM admin WHERE email = :email AND mobile = :mobile");
  $ck->bindValue(":email", $email);
  $ck->bindValue(":mobile", $mobile);
  $ck->execute();
  $tot = $ck->rowCount();

  if($tot >= 1){
   return true;
 }
 else{
   return false;
 }
}
catch(PDOException $e){
  return $e->getMessage();
}
}


/*Check Product For Duplicate Record */
public function check_product($product_name, $hs_code, $import_duty){
 try{
  $ck = $this->db->prepare("SELECT product_name, hs_code, import_duty FROM product WHERE product_name = :product_name AND hs_code = :hs_code AND import_duty = :import_duty");
  $ck->bindValue(":product_name", $product_name);
  $ck->bindValue(":hs_code", $hs_code);
  $ck->bindValue(":import_duty", $import_duty);
  $ck->execute();
  $tot = $ck->rowCount();

  if($tot >= 1){
   return true;
 }
 else{
   return false;
 }
}
catch(PDOException $e){
  return $e->getMessage();
}
}





/*Check Shipping Agent For Duplicate Record */
public function check_agent($email, $mobile){
 try{
  $ck = $this->db->prepare("SELECT email, mobile FROM shipping_agent WHERE email = :email AND mobile = :mobile ");
  $ck->bindValue(":email", $email);
  $ck->bindValue(":mobile", $mobile);
  $ck->execute();
  $tot = $ck->rowCount();

  if($tot >= 1){
   return true;
 }
 else{
   return false;
 }
}
catch(PDOException $e){
  return $e->getMessage();
}

}


/*Check Pro Formal Invoice For Duplicate Record */
public function check_pfi($pfi_no, $supply_id){
 try{
  $ck = $this->db->prepare("SELECT pfi_no, supply_id FROM transaction WHERE pfi_no = :pfi_no AND supply_id = :supply_id ");
  $ck->bindValue(":pfi_no", $pfi_no);
  $ck->bindValue(":supply_id", $supply_id);
  $ck->execute();
  $tot = $ck->rowCount();

  if($tot >= 1){
   return true;
 }
 else{
   return false;
 }
}
catch(PDOException $e){
  return $e->getMessage();
}

}




/*Check Supplier For Duplicate Record */
public function check_supplier($email, $mobile){
 try{
  $ck = $this->db->prepare("SELECT email, mobile FROM supplier WHERE email = :email AND mobile = :mobile ");
  $ck->bindValue(":email", $email);
  $ck->bindValue(":mobile", $mobile);
  $ck->execute();
  $tot = $ck->rowCount();

  if($tot >= 1){
   return true;
 }
 else{
   return false;
 }
}
catch(PDOException $e){
  return $e->getMessage();
}

}



public function AddAgent($company_name,$email, $company_address, $contact_person, $mobile)
{
  try
  {

   $stmt = $this->db->prepare("INSERT INTO shipping_agent(company_name, email, address, contact_person, mobile) 
    VALUES(:company_name, :email, :company_address, :contact_person, :mobile)");

   $stmt->bindValue(":company_name", $company_name);
   $stmt->bindValue(":email", $email);
   $stmt->bindValue(":company_address", $company_address);  
   $stmt->bindValue(":contact_person", $contact_person);                       
   $stmt->bindValue(":mobile", $mobile);                       

   if($stmt->execute()){

     return true;
   }

   else{

    return false;
  }

}
catch(PDOException $e)
{
  echo $e->getMessage();
}               
}



/*ADd SUpplier*/

public function AddSupplier($company_name,$email, $company_address, $contact_person, $mobile)
{
  try
  {

   $stmt = $this->db->prepare("INSERT INTO supplier(company_name, email, address, contact_person, mobile) 
    VALUES(:company_name, :email, :company_address, :contact_person, :mobile)");

   $stmt->bindValue(":company_name", $company_name);
   $stmt->bindValue(":email", $email);
   $stmt->bindValue(":company_address", $company_address);  
   $stmt->bindValue(":contact_person", $contact_person);                       
   $stmt->bindValue(":mobile", $mobile);                       

   if($stmt->execute()){

     return true;
   }

   else{

    return false;
  }

}
catch(PDOException $e)
{
  echo $e->getMessage();
}               
}



public function ShowSupplier(){
 try{

  $conf = $this->db->prepare("SELECT supplier.company_name, supplier.id FROM supplier");
  $conf->execute();

  while($sm = $conf->fetch(PDO::FETCH_ASSOC)){
    $company_name = $sm["company_name"];
    $id = $sm["id"];
    
    echo "<option value='$company_name'>".$company_name."</option>";

    echo "<input type='text' name='supply_id' hidden value='$id'>";

  }

}
catch(PDOException $e){
  return $e->getMessage();
}
}




/*Add PFI Record*/

public function AddPFI($doc_link,$pfi_no, $supplier, $shipping_country, $shipping_destination, $vat)
{
  try
  {

   $stmt = $this->db->prepare("INSERT INTO transaction(doc_link, pfi_no, shipping_origin, shipping_destination, vat, supply_id) 
    VALUES(:doc_link, :pfi_no, :shipping_country, :shipping_destination, :vat, :supplier)");

   $stmt->bindValue(":doc_link", $doc_link);
   $stmt->bindValue(":pfi_no", $pfi_no);
   $stmt->bindValue(":shipping_country", $shipping_country);  
   $stmt->bindValue(":shipping_destination", $shipping_destination);                   
   $stmt->bindValue(":vat", $vat);                       
   $stmt->bindValue(":supplier", $supplier);                       

   if($stmt->execute()){

     return true;
   }

   else{

    return false;
  }

}
catch(PDOException $e)
{
  echo $e->getMessage();
}               
}




function getShippingStatus($id)
{
  $status = 0;
  $stm = $this->db->prepare("SELECT status FROM transaction WHERE id = :id");
  $stm->bindValue(":id", $id);

  if ($stm->execute()) {
    if ($result = $stm->fetch(PDO::FETCH_ASSOC)) {
      $status = $result['status'];
    }
  }
  return $status;
}

function getBankShippingStatus($id)
{
  $total = 0;
  $stm = $this->db->prepare("SELECT COUNT(form_m.id) + COUNT(lc.code) + COUNT(insurance.id) as total FROM form_m LEFT JOIN lc ON form_m.trans_id = lc.trans_id 
    LEFT JOIN insurance ON insurance.trans_id = form_m.trans_id WHERE form_m.trans_id = :id");
  $stm->bindValue(":id", $id);

  if ($stm->execute()) {
    if ($result = $stm->fetch(PDO::FETCH_ASSOC)) {
      $total = $result['total'];
    }
  }
  return $total;
}

function getShippingDocCount($id)
{
  $total = 0;
  $stm = $this->db->prepare("SELECT COUNT(*) FROM `shipping_doc` WHERE trans_id = :id");
  $stm->bindValue(":id", $id);

  if ($stm->execute()) {
    while ($result = $stm->fetch()) {
      $total = is_null($result[0]) ? 0 : $result[0];
    }
  }
  return $total;
}

function viewShippings()
{
  try {

    $counter = 1;
    $conf = $this->db->prepare("SELECT supplier.company_name, transaction.* FROM transaction LEFT JOIN supplier ON supplier.id = transaction.supply_id ORDER by transaction.status ASC");
    $conf->execute();

    while ($sm = $conf->fetch(PDO::FETCH_ASSOC)) {
      $pfi = $sm["pfi_no"];
      $supplier = $sm["company_name"];
      $origin = $sm["shipping_origin"];
      $destination = $sm["shipping_destination"];
      $status = $sm['status'];
      $link = $sm["doc_link"];
      $id = $this->encrypt_url($sm['id']);

      $action = " <a class='btn btn-danger' href='" . $link . "'> Download PFI <span class='fa fa-download'></span></a> ";
      $action .=" <a class='btn btn-success' href='view-shipping-details?id=" . $id . "'> Activities Track <span class='fa fa-eye'></span></a> ";

      if($status == 0){
        $status = "Add Product Invoice";
      }elseif ($status == 1){
        $status = "Add Financial Document";
      }elseif ($status == 2){
        $status = "Add Regulatory Permit";
      }elseif ($status == 3){
        $status = "Input Shipping Schedule";
      }elseif ($status == 4){
        $status = "On Transit";
      }elseif ($status == 6){
        $status = "Process Clearing Doc.";
      }else{
        $status = "Completed";
      }

      echo "<tr>";
      echo "<td>" . $counter++ . "</td>";
      echo "<td>" . $pfi . "</td>";
      echo "<td>" . $supplier . "</td>";
      echo "<td>" . $origin . "</td>";
      echo "<td>" . $destination . "</td>";
      echo "<td>" . $status . "</td>";
      echo "<td>" . $action . "</td>";
      echo "</tr>";


    }

  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewSuppliers()
{
  try {

    $counter = 1;
    $conf = $this->db->prepare("SELECT supplier.*, COUNT(transaction.id) as nos FROM `supplier` LEFT JOIN transaction ON transaction.supply_id = supplier.id ORDER BY nos DESC");
    $conf->execute();

    while ($sm = $conf->fetch(PDO::FETCH_ASSOC)) {
      $name = $sm["company_name"];
      $email = $sm["email"];
      $contact_person = $sm["contact_person"];
      $mobile = $sm['mobile'];
      $nos = $sm["nos"];
      $id = $this->encrypt_url($sm['id']);

      $action =" <a class='btn btn-warning' href='edit?id=" . $id . "'> <span class='fa fa-edit'></span></a> ";


      echo "<tr>";
      echo "<td>" . $counter++ . "</td>";
      echo "<td>" . $name . "</td>";
      echo "<td>" . $email . "</td>";
      echo "<td>" . $contact_person . "</td>";
      echo "<td>" . $mobile . "</td>";
      echo "<td>" . $nos . "</td>";
      echo "<td>" . $action . "</td>";
      echo "</tr>";


    }

  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function viewShippingAgents()
{
  try {

    $counter = 1;
    $conf = $this->db->prepare("SELECT shipping_agent.*, COUNT(shipment.id) AS nos FROM `shipping_agent` LEFT JOIN shipment ON shipping_agent.id = shipment.shipping_agent  ORDER BY nos DESC");
    $conf->execute();

    while ($sm = $conf->fetch(PDO::FETCH_ASSOC)) {
      $name = $sm["company_name"];
      $email = $sm["email"];
      $contact_person = $sm["contact_person"];
      $mobile = $sm['mobile'];
      $nos = $sm["nos"];
      $id = $this->encrypt_url($sm['id']);

      $action =" <a class='btn btn-warning' href='edit?id=" . $id . "'> <span class='fa fa-edit'></span></a> ";


      echo "<tr>";
      echo "<td>" . $counter++ . "</td>";
      echo "<td>" . $name . "</td>";
      echo "<td>" . $email . "</td>";
      echo "<td>" . $contact_person . "</td>";
      echo "<td>" . $mobile . "</td>";
      echo "<td>" . $nos . "</td>";
      echo "<td>" . $action . "</td>";
      echo "</tr>";


    }

  } catch (PDOException $e) {
    return $e->getMessage();
  }
}

function getTotalShipment()
{
  $count = 0;
  $stm = $this->db->prepare("SELECT COUNT(*) FROM transaction");

  if($stm->execute())
  {
    while ($result = $stm->fetch()) {
      $count = is_null($result[0]) ? 0 : $result[0];
    }
  }
  return $count;
}

function getTotalShipOnTransit()
{
  $count = 0;
  $stm = $this->db->prepare("SELECT COUNT(*) FROM transaction WHERE  status >=4 AND status <= 7");

  if($stm->execute())
  {
    while ($result = $stm->fetch()) {
      $count = is_null($result[0]) ? 0 : $result[0];
    }
  }
  return $count;
}

function getTotalCompleteShipment()
{
  $count = 0;
  $stm = $this->db->prepare("SELECT COUNT(*) FROM transaction WHERE  status >=7");

  if($stm->execute())
  {
    while ($result = $stm->fetch()) {
      $count = is_null($result[0]) ? 0 : $result[0];
    }
  }
  return $count;
}


function viewProducts()

{

  try {     
    $counter = 1;

   $conf = $this->db->prepare("SELECT product.* FROM `product`");

   $conf->execute();            while ($sm = $conf->fetch(PDO::FETCH_ASSOC)) {

     $name = $sm["product_name"];

     $hs_code = $sm["hs_code"];

     $duty = $sm["import_duty"];

     $noo = 0;

     $id = $this->encrypt_url($sm['id']);                $action =" <a class='btn btn-warning' href='edit?id=" . $id . "'> <span class='fa fa-edit'></span></a> ";                echo "<tr>";

     echo "<td>" . $counter++ . "</td>";

     echo "<td>" . $name . "</td>";

     echo "<td>" . $hs_code . "</td>";

     echo "<td>" . $duty . "</td>";

     echo "<td>" . $noo . "</td>";

     echo "<td>" . $action . "</td>";

     echo "</tr>";            }        } catch (PDOException $e) {

       return $e->getMessage();

     }

   }


 }

 ?>