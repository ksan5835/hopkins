<?php
  class UserController {
    
	public function manageuser() {
      // we store all the posts in a variable
    // echo "welcome to dashboard";
      require_once('views/user/manageuser.php');
    }
	public function addnewuser() {
      // we store all the posts in a variable
    // echo "welcome to dashboard";
      require_once('views/user/addnewuser.php');
    }
    public function managereport() {
      // we store all the posts in a variable
    // echo "welcome to dashboard";
      require_once('views/user/managereport.php');
    }
      public function nonadminuser() {
    
      require_once('views/user/nonadminuser.php');
    }
      public function nonadminmange() {
    
      require_once('views/user/nonadminmange.php');
    }
      public function nonadminreport() {
 ;
      require_once('views/user/nonadminreport.php');
    }
    public function registeruser(){

      //print_r($_POST);
      UserModel::insertUser($_POST);

    }
 public function registernonadminuser(){

      UserModel::Adduser($_POST);

    }


  }
?>