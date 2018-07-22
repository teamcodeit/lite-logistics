<?php 

require_once("header.php"); 
require_once("navbar.php"); 

if(isset($_GET["User"])){
   $user_get = $config->decrypt_url($_GET["User"]);
  //get User Details

  $useDetails = $DB_con->prepare("SELECT * FROM user WHERE user.user_id = :user_id");
  $useDetails->bindValue(":user_id", $user_get);
  $useDetails->execute();

  while($sm = $useDetails->fetch(PDO::FETCH_ASSOC)){

    $mobile_db = $sm["mobile"];
    $fname_db = $sm["fname"];
    $lname_db = $sm["lname"];
    $email_db = $sm["email"];
    $gender_db = $sm["gender"];
   
  }
}
else{
  header("Location: index");
} 



if($config->if_submit("update_user")){
  //get inputs
  $skills = $config->post_value("skills");
  $mobile = $config->post_value("mobile");
  $fname = $config->post_value("fname");
  $lname = $config->post_value("lname");
  $email = $config->post_value("email");
  $gender = $config->post_value("gender");


if($mobile==''){
    $msg = $config->error_message("Mobile Number cannot be empty");
  }
  else if($fname==''){
    $msg = $config->error_message("First Name cannot be empty");
  }
  else if($lname==''){
    $msg = $config->error_message("Last Name cannot be empty");
  }


  else if($gender=='----'){
    $msg = $config->error_message("Please select Gender!");
  }
  
  else if(!is_numeric($mobile)){
    $msg = $config->error_message("Mobile Number cannot contain Alphabet or Character");
  }

  else{
      //Save into db
    $saveUser = $config->update_user( $mobile,$fname, $lname, $gender, $user_get);
    if($saveUser == true){
      $msg  = $config->success_message("User Updated!");
    }
    else{
      $msg  = $config->error_message("Error Updating User");
    }
  }
}



?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     Admin Dashboard
     <small></small>
   </h1>
 </section>

 <!-- Main content -->
 <section class="content">

  <?php require_once("dashboard-stat.php"); ?>
  <!-- Your Page Content Here -->
  <br>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Update User Profile </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
         <form method="post">

          <div class="item form-group">
            <label  for="name">First Name <span class="required">*</span>
            </label>
            <div >
              <input class="form-control " name="fname" placeholder="First Name" value="<?php echo $fname_db; ?>" required type="text">
            </div>
          </div>

          <div class="item form-group">
            <label  for="name">Last Name <span class="required">*</span>
            </label>
            <div >
              <input class="form-control " name="lname" placeholder="Last Name" value="<?php echo $lname_db; ?>" required type="text">
            </div>
          </div>

          <div class="item form-group">
            <label  for="name">Gender <span class="required">*</span>
            </label>
            <div >
              <select class="form-control" name="gender">
                <option value="<?php echo $gender_db; ?>"><?php echo $gender_db; ?></option>
                <option value="----">----</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>

          <div class="item form-group">
            <label  for="name">Mobile Number <span class="required">*</span>
            </label>
            <div >
              <input class="form-control " name="mobile" placeholder="Mobile number" required type="number" value="<?php echo $mobile_db; ?>">
            </div>
          </div>
          <br><br>
          <div align="center"><input type="submit" class="btn btn-info" name="update_user" value="Update"></div>

        </form>
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php
require_once("footer.php"); 

?>