<?php 



include("../../config/dbconfig.php");

include("../../config/auth.php");



session_destroy();

unset($_SESSION['id']);

unset($_SESSION['username']);

unset($_SESSION['password']);

unset($_SESSION['token']);



$config->redirect("../index.php");