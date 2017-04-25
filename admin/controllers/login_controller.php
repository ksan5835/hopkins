<?php
session_start();

  class LoginController {
    
public function login() {
      // we store all the posts in a variable
     $error = "username/password incorrect";
      require_once('views/login/login.php');
    } 
public function error() {
      require_once('views/login/error.php');
    }

public function processlogin(){
    //print_r($_SESSION);
     $_SESSION['hpusername'] = '$loUsername';
      $getLoggedData = LoginModel::adminLogin($_POST);
      if($getLoggedData){
          header("location: ".SITE_ROOT.'index.php?controller=home&action=dashboard');
      }
    else{
        echo $error;
        header("location: ".SITE_ROOT.'index.php?controller=login&processlogin');
      }
   

   
//       if(isset($_POST['login']) && !empty($_POST['hpusername']) 
//               && !empty($_POST['hppassword'])) {   
//           if ($_POST['hpusername'] == '$loUsername' && 
//                  $_POST['hppassword'] == '$lopassword') {
//                
//                  $_SESSION['hpusername'] = '$loUsername';
//                       //print_r($_SESSION);
//              header("location: ".SITE_ROOT.'index.php?controller=home&action=dashboard');
//                }
//              header("location: ".SITE_ROOT.'index.php?controller=login&processlogin');
//            }
  }
  }
?>