<?php
  class LoginController {
    
	public function login() {
      // we store all the posts in a variable
     
      require_once('views/login/login.php');
    }

  public function processlogin(){
     //echo "test";
    //print_r($_POST);
    header("location: ".SITE_ROOT.'index.php?controller=home&action=dashboard');
   //require_once('views/home/home.php');
  }


  }
?>