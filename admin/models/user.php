<?php
  class UserModel {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $author;
    public $content;

    public function __construct($id, $author, $content) {
      $this->id      = $id;
      $this->author  = $author;
      $this->content = $content;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM posts');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $post) {
        $list[] = new Post($post['id'], $post['author'], $post['content']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $post = $req->fetch();

      return new Post($post['id'], $post['author'], $post['content']);
    }
//Add New User
    public static function insertUpdateUser($arrInsertData){
            $reValue = 0;
            $saveFlag = trim($arrInsertData['saveflag']);
            if($saveFlag == "addnew"){  
                
            $username = $arrInsertData['username'];
            $gender = $arrInsertData['gender'];
            $dob = $arrInsertData['dob'];
            $userrole = $arrInsertData['userroleid'];
            $userphone = $arrInsertData['userphone'];  
            $useraddress = $arrInsertData['useraddress'];
            $useremail = $arrInsertData['useremail'];
            $db = Db::getInstance();
            
            $req = $db->prepare('insert into hp_user ( user_name,gender,date_of_birth,role_id,user_ph,address,user_email) values ( :username,:radio,:dob,:userrole,:userphone,:useraddress,:useremail)');

            $reValue = $req->execute(array('username' => $username,'radio' => $gender,'dob' => $dob,'userrole' => $userrole,'userphone' => $userphone,'useraddress' => $useraddress,'useremail' => $useremail));
            
    } else
          if($saveFlag == "updateuser"){           
           
            $username = $arrInsertData['username'];
            $gender = $arrInsertData['gender'];
            $dob = $arrInsertData['dob'];
            $userrole = $arrInsertData['userroleid'];
            $userphone = $arrInsertData['userphone'];  
            $useraddress = $arrInsertData['useraddress']; 
            $useremail = $arrInsertData['useremail'];
            
            $updateuserid = $arrInsertData['updateuserid'];
            $db = Db::getInstance();
            $req = $db->prepare('UPDATE hp_user SET user_name = :username,gender = :radio,date_of_birth = :dob,role_id = :userrole,user_ph = :userphone,address = :useraddress,user_email = :useremail WHERE user_id = :updateuserid');
          
            $reValue = $req->execute(array('username' => $username,'radio' => $gender,'dob' => $dob,'userrole' => $userrole,'userphone' => $userphone,'useraddress' => $useraddress,'useremail' => $useremail,'updateuserid' => $updateuserid ));
         }
  
      return $reValue;
    }
      
      public static function manageUser(){
            $userlist = [];
            $db = Db::getInstance(); 	 
            $req = $db->query('SELECT * FROM hp_user');  
            foreach($req->fetchAll() as $row) {
            $userlist[] = $row;
            }
            return $userlist ;
        
     }
      
      public static function deleteuser($deleteID) {
            $db = Db::getInstance();
            //echo $deleteID;
            $deleteID = intval($deleteID);
            $req = $db->prepare('DELETE FROM hp_user WHERE user_id = :id');
            $req->execute(array('id' => $deleteID));
            return $req;
    }
    
      public static function edituser($editID){
            $userlist = [];
            $db = Db::getInstance(); 
            $editID = intval($editID);
            $req = $db->prepare('SELECT * FROM hp_user WHERE user_id = :id'); 
            $req->execute(array('id' => $editID));
            $userlist = $req->fetch();
            return $userlist;
     }
      
//Add New Role-role dropdown
     public static function manageRole(){
            $rolelist = [];
            $db = Db::getInstance(); 	 
            $req = $db->query('SELECT * FROM hp_role'); 
            foreach($req->fetchAll() as $row) {
            $rolelist[] = $row;
                }
            return $rolelist;
         
     }

//Add New Department dropdown
    public static function userdept(){
            $rolelist = [];
            $db = Db::getInstance(); 	 
            $req = $db->query('SELECT * FROM user_department'); 
            foreach($req->fetchAll() as $row) {
            $rolelist[] = $row;
                }
            return $rolelist;
        
     }
    public static function userdepartment(){
            $rolelist = [];
            $db = Db::getInstance(); 	 
            $req = $db->query('SELECT * FROM hp_dept'); 
            foreach($req->fetchAll() as $row) {
            $rolelist[] = $row;
                }
            return $rolelist;
     }

    public static function editrole($editID){
            $rolelist = [];
            $db = Db::getInstance(); 
            $editID = intval($editID);
        
            $req = $db->prepare('SELECT * FROM hp_role WHERE role_id = :id'); 
            $req->execute(array('id' => $editID));
            $rolelist = $req->fetch();
            return $rolelist;
     }
      
    public static function insertUpdateRole($arrInsertRole){
            $reValue = 0;
            $saveFlag = $arrInsertRole['saveflag'];
        
            if($saveFlag == "addnewrole"){  
            $rolename = $arrInsertRole['rolename'];
            $description = $arrInsertRole['roledesc'];
            $staffrole = $arrInsertRole['chkbox'];
            $checkbox = implode(',',$staffrole);

            $db = Db::getInstance();
            
            $req = $db->prepare('insert into hp_role ( roles,role_desc,staff_role ) values ( :rolename,:description,:staffrole)');

            $reValue = $req->execute(array('rolename' => $rolename,'description' => $description,'staffrole' => $checkbox));
            
    }else
        
         if($saveFlag == "updaterole"){           

            $rolename = $arrInsertRole['rolename'];
            $description = $arrInsertRole['roledesc'];
             
            $staffrole = $arrInsertRole['chkbox'];
            $checkbox = implode(',',$staffrole);
            $updateroleid = $arrInsertRole['updateroleid'];
            $db = Db::getInstance();
            $req = $db->prepare('UPDATE hp_role SET roles = :rolename,role_desc = :description,staff_role = :staffrole WHERE role_id = :updateroleid');
          
            $reValue = $req->execute(array('rolename' => $rolename,'description' => $description,'staffrole' => $checkbox,'updateroleid' => $updateroleid ));
            }
  
            return $reValue;
    }
      
    public static function deleteuserrole($deleteID) {
            $db = Db::getInstance();
            //echo $deleteID;
            $deleteID = intval($deleteID);
            $req = $db->prepare('DELETE FROM hp_role WHERE role_id = :id');
            $req->execute(array('id' => $deleteID));
            return $req;
    }
   // department   
    public static function insertUpdateDept($arrInsertDept){
            $reValue = 0;
            $saveFlag = $arrInsertDept['saveflag'];
        
            if($saveFlag == "addnewdept"){  
            $name = $arrInsertDept['deptname'];
            $description = $arrInsertDept['deptdesc'];
              
            $db = Db::getInstance();
            
            $req = $db->prepare('insert into hp_dept ( dept_name,dept_desc ) values ( :name,:description)');

            $reValue = $req->execute(array('name' => $name,'description' => $description));
            
    } else
        
         if($saveFlag == "updateDept"){           
           
            $name = $arrInsertDept['deptname'];
            $description = $arrInsertDept['deptdesc']; 
            $updatedeptid = $arrInsertDept['updatedeptid'];
            $db = Db::getInstance();
            $req = $db->prepare('UPDATE hp_dept SET dept_name = :name,dept_desc = :description WHERE dept_id = :updatedeptid');
          
            $reValue = $req->execute(array('name' => $name,'description' => $description,'updatedeptid' => $updatedeptid ));
            }
  
            return $reValue;
    }

    public static function editdept($editID){
            $rolelist = [];
            $db = Db::getInstance(); 
            $editID = intval($editID);
            $req = $db->prepare('SELECT * FROM hp_dept WHERE dept_id = :id'); 
            $req->execute(array('id' => $editID));
            $rolelist = $req->fetch();
            return $rolelist;
     }
      
    public static function deleteuserdept($deleteID) {
          
              $db = Db::getInstance();
              //echo $deleteID;
              $deleteID = intval($deleteID);
              $req = $db->prepare('DELETE FROM hp_dept WHERE dept_id = :id');
              $req->execute(array('id' => $deleteID));
              return $req;
     }
//select role id for manage user using ajax.
    public static function selectrole($roleID){
            $userlist = [];
            $db = Db::getInstance(); 
            $roleID = intval($roleID);
            $req = $db->prepare('SELECT * FROM hp_user WHERE role_id = :id'); 
            $req->execute(array('id' => $roleID));
            foreach($req->fetchAll() as $row) {
            $userlist[] = $row;
            }
            return $userlist;
     }
      
 
  }
?>