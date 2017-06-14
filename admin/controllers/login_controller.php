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
   //print_r($_POST);
 $error = "Enter valid username and password";
 $getLoggedData = LoginModel::adminLogin($_POST);    
      if($getLoggedData){
          echo "logged in";
          $_SESSION['hpuseremail'] = $getLoggedData['user_email'];
          header("location: ".SITE_ROOT.'index.php?controller=home&action=dashboard');
         }
      else{
         //echo $error;
         require_once('views/login/login.php');
          }
  }
public function logout() {
    // remove all session variables
    session_unset(); 
    // destroy the session 
    session_destroy();
    //echo 'log out';
   
        header("location: ".SITE_ROOT.'index.php');
    }
  }
?>