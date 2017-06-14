<?php
class UserController {
    
public function logoutuser() {
        UserModel::logout($_GET);
    }
    
public function addnewuser() {
      $actflag = "addnew"; 
      $arrGetRole = UserModel::manageRole($_GET);
            //print_r($arrGetPlace);
      require_once('views/user/addnewuser.php');
    }
    
public function manageuser() {
      // echo "welcome to dashboard";
      $arrGetRole = UserModel::manageRole($_GET);
      //print_r($arrGetRole);
      $arrGetDept = UserModel::userdept($_GET);
      $arrGetData = UserModel::manageUser($_GET);
      require_once('views/user/manageuser.php');
    }
    
public function addnewrole() {
      // we store all the posts in a variable
      // echo "welcome to dashboard";
      $actflag = "addnewrole";
      require_once('views/user/addnewrole.php');
    }
    
public function managerole() {
      $arrGetRole = UserModel::manageRole($_GET);
      $arrGetData =  UserModel::manageUser($_GET);
      require_once('views/user/managerole.php');
    }
    
public function addnewdepartment() {
      $actflag = "addnewdept";
      require_once('views/user/addnewdepartment.php');
    }
    
public function managedepartment() {
      $arrGetAllDept = UserModel::userdepartment($_GET);
      require_once('views/user/managedepartment.php');
    }
    
public function registeruser(){
    
      $arrInsertData = UserModel::insertUpdateUser($_POST);
      if($arrInsertData){
         echo 'sucessfully inserted data';
        header("location: ".SITE_ROOT.'index.php?controller=user&action=manageuser');
      }
    }
    
public function deletemanageuser() {
      if(isset($_GET['delid'])){
      }
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
    $arrGetRole = UserModel::manageRole($_GET);
    $arrGetDept = UserModel::userdept($_GET);
    if(isset($_GET['editid'])){
    $editUserDetails =  UserModel::edituser($_GET['editid']);
        //echo "got one record";
    }
    else
    {
        echo "not get data";
    } 
    $reUserDetails  = array("username" => $editUserDetails['user_name'],"gender" => $editUserDetails['gender'],"dob" => $editUserDetails['date_of_birth'],"updateuserid" => $editID,"userrole" => $editUserDetails['role_id'],"userphone" => $editUserDetails['user_ph'],"useraddress" => $editUserDetails['address'],"useremail" => $editUserDetails['user_email']);
      $actflag = "updateuser";    
      require_once('views/user/addnewuser.php');
    }
    
    
    
    
    
public function Insertrole() {
    $arrInsertRole =  UserModel::insertUpdateRole($_POST);
//print_r($_POST);
    if($arrInsertRole){
    echo 'sucessfully inserted data';
    header("location: ".SITE_ROOT.'index.php?controller=user&action=managerole');
         }
    }
    
public function edituserrole() {
    $editID = $_GET['editid'];
    if(isset($_GET['editid'])){
    $editRoleDetails =  UserModel::editrole($_GET['editid']);
    //echo "got one record";
    }
    else
    {
        echo "not get data";
    } 
    $roleDetails  = array("rolename" => $editRoleDetails['roles'],"roledesc" => $editRoleDetails['role_desc'],"chkbox" => (explode(',',$editRoleDetails['staff_role'])),"updateroleid" => $editID);
   
   // print_r($roleDetails['chkbox']);
    
    $actflag = "updaterole";    
    require_once('views/user/addnewrole.php');
    }
    
    
    
    
    
public function deleteuserrole() {
    if(isset($_GET['delid'])){
    echo $_GET['delid'];
    }
    $deleteID = $_GET['delid'];
    if(isset($_GET['delid'])){
    $deleteID = UserModel::deleteuserrole($_GET['delid']);
    header("location: ".SITE_ROOT.'index.php?controller=user&action=managerole'); 
     //echo "deleted";
    }
     else
     {
        echo "not deleted";
     }
    }
    
public function registerdept(){
     $arrInsertDept = UserModel::insertUpdateDept($_POST);
     if($arrInsertDept){
     echo 'sucessfully inserted data';
     header("location: ".SITE_ROOT.'index.php?controller=user&action=managedepartment');
      }
    }
    
public function edituserdept() {
    $editID = $_GET['editid'];
    // fetch All roles,dept
    if(isset($_GET['editid'])){
    $editDeptDetails =  UserModel::editdept($_GET['editid']);
    //echo "got one record of user dapartment";
    //print_r($editDeptDetails);
    }
    else
    {
        echo "not get data";
    } 
    $deptDetails  = array("deptname" => $editDeptDetails['dept_name'],"deptdesc" => $editDeptDetails['dept_desc'],"updatedeptid" => $editID);
    $actflag = "updateDept";    
    require_once('views/user/addnewdepartment.php');
    }
    
public function deleteuserdept() {
    if(isset($_GET['delid'])){
    //echo $_GET['delid'];
    }
    $deleteID = $_GET['delid'];
    if(isset($_GET['delid'])){
     $deleteID = UserModel::deleteuserdept($_GET['delid']);
    header("location: ".SITE_ROOT.'index.php?controller=user&action=managedepartment'); 
     //echo "deleted";
     }
    else
    {
        echo "not deleted";
    }
    }
    
public function getrole() {
    //echo "ok";
    $roleID = $_GET['id'];
    if(isset($_GET['id'])){
    $getroles =  UserModel::selectrole($_GET['id']);
      if($getroles){
      $count = count($getroles);
          echo "<b>Count:</b> $count";
      }
     else{echo "<b>Count:</b> 0";}

        $strBuildTable = "<table class='table'>
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>";
        
        for($i=0;$i<count($getroles);$i++){

            $userData = $getroles[$i];

            $strBuildTable .= "<tr>";
            $strBuildTable .= "<td>".($i+1)."</td>";
            $strBuildTable .= "<td>".$userData['user_name']."</td>";            
            $strBuildTable .= "<td>".$userData['user_email']."</td>";
                       
            $strBuildTable .= "<td align=center width=100><a href='".SITE_ROOT."index.php?controller=user&action=editmanageuser&editid=".$userData['user_id']."' class='btn btn-sm hover-blue-alt tooltip-button'><i class='glyph-icon icon-edit'></i></a>
            <a href='".SITE_ROOT."index.php?controller=user&action=deletemanageuser&delid=".$userData['user_id']."' class='btn btn-sm hover-red tooltip-button'><i class='glyph-icon icon-remove'></i></a>
            </td>";
            
            $strBuildTable .= "</tr>";
        }
            $strBuildTable .= "</tbody></table>";
            echo $strBuildTable;
        
    }
       
        }

}
?>