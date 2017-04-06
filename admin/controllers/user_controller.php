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



  }
?>