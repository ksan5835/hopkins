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
      public function nonadminmanage() {
    
      require_once('views/user/nonadminmanage.php');
    }
      public function nonadminreport() {

      require_once('views/user/nonadminreport.php');
    }
    public function registeruser($arrInsertData){

      //print_r($_POST);
     $arrInsertData = UserModel::insertUser($_POST);
     if($arrInsertData){
       echo 'sucessfully inserted data';
      }
       else
      {
         echo 'not inserted';
      } 
    }
 public function registernonadminuser($arrInsertData){
     //print_r($_POST);echo 'test';die();
     $arrInsertData = UserModel::adduser($_POST);
     if($arrInsertData){
       echo 'sucessfully inserted data';
      }
       else
      {
         echo 'not inserted';
      } 
    }

public function deletemanageuser() {
    $deleteID = $_GET['delid'];
    //echo  $deleteID;
    if(isset($_GET['delid'])){
    // we use the given id to get the right post
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
    $editID =  UserModel::edituser($_GET['editid']);
        echo "got one record";
    }
    else
    {
        echo "not get data";
    }
}
  }
?>