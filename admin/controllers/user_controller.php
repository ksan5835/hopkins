<?php
  class UserController {
    
	public function manageuser() {
      // we store all the posts in a variable
    // echo "welcome to dashboard";
      $arrGetData =  UserModel::manageUser($_GET);
      require_once('views/user/manageuser.php');
    }
	public function addnewuser() {
      // we store all the posts in a variable
     //echo "welcome to dashboard";
      $actflag = "addnew"; 
         //$reUserDetails  = array("fname" => '',"lname" => '',"uemail" => '',"uphone" => '');
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
      public function nonadminmanage() {
    
      require_once('views/user/nonadminmanage.php');
    }
      public function nonadminreport() {

      require_once('views/user/nonadminreport.php');
    }
    public function registeruser(){

     $arrInsertData = UserModel::insertUpdateUser($_POST);
     if($arrInsertData){
       echo 'sucessfully inserted data';
         header("location: ".SITE_ROOT.'index.php?controller=user&action=manageuser');
      }
    }
 public function registernonadminuser($arrInsertData){
     //print_r($_POST);echo 'test';die();
     $arrInsertData = UserModel::adduser($_POST);
     if($arrInsertData){
       echo 'sucessfully inserted data';
      }
      {
         echo 'not inserted';
      } 
    }

public function deletemanageuser() {
    $deleteID = $_GET['delid'];
    if(isset($_GET['delid'])){
     $deleteID = UserModel::deleteuser($_GET['delid']);
    header("location: ".SITE_ROOT.'index.php?controller=user&action=manageuser'); 
     //echo "deleted";
     }
    else
    {
        echo "not deleted";
    }
    }

public function editmanageuser() {
    $editID = $_GET['editid'];
    echo $editID;
    if(isset($_GET['editid'])){
    $editUserDetails =  UserModel::edituser($_GET['editid']);
        echo "got one record";
    }
    else
    {
        echo "not get data";
    } 
    $reUserDetails  = array("fname" => $editUserDetails['user_firstname'],"lname" => $editUserDetails['user_lastname'],"uemail" => $editUserDetails['user_email'],"uphone" => $editUserDetails['user_phone'],"uid" => $editID );
    echo $editUserDetails['user_lastname'];

    $actflag = "updateuser";    
    require_once('views/user/addnewuser.php');
}   
  }
?>