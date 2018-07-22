<?php


require_once("../../config/dbconfig.php");

require_once("../../config/auth.php");

require_once("main_query.php");


$bn = basename($_SERVER['SCRIPT_NAME']);

$exp = explode('.', $bn);

$fxname = explode("-", $exp[0]);

$dateReg = explode(" ", $_SESSION["date"]);

$admin_id = $_SESSION["id"];


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Dashboard ::<?php echo ucfirst($_SESSION["fullname"]); ?>::</title>
    <!-- Tell the browser to be responsive to screen width -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"
            type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="dist/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="dist/css/skins/skin-yellow.min.css">
    <link rel="stylesheet" href="plugins/select2/select2.min.css">

    <link rel="stylesheet" href="dist/css/summernote-bs4.css">

    <link href="../../css/owl.carousel.css" rel="stylesheet">

</head>

<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>LL</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><strong>Lite-Logistics</strong></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">


                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="images/avatar.png" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?php echo $_SESSION["fullname"]; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo $_SESSION["fullname"]; ?> - Admin
                                    <strong>
                                        <small class="fa fa-calendar"> Member since: <span
                                                    style="color:#FFF;"><?php echo $dateReg[0]; ?></span></small>
                                    </strong>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="view-admin" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>