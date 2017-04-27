<?php
session_start();

  class LoginController {
    
public function login() {
      // we store all the posts in a variable
      require_once('views/login/login.php');
    } 
public function error() {
      require_once('views/login/error.php');
    }

public function processlogin(){
    //print_r($_SESSION);
     $error = "Enter valid username and password";
     $_SESSION['hpusername'] = '$loUsername';
      $getLoggedData = LoginModel::adminLogin($_POST);
      if($getLoggedData){
          echo "logged in";
          header("location: ".SITE_ROOT.'index.php?controller=home&action=dashboard');
      }
    else{
        //echo $error;
        require_once('views/login/login.php');
      }
  }
  }
?>