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

    public static function insertUpdateUser($arrInsertData){
        
        $reValue = 0;
 
        $saveFlag = $arrInsertData['saveflag'];
        if($saveFlag == "addnew"){           
         
        
        //echo "Demo from model";die();
            $userfirstname = $arrInsertData['hpuserfirstname'];
            $userlastname = $arrInsertData['hpuserlastname'];
            $useremail = $arrInsertData['hpuseremail'];
            $userphone = $arrInsertData['hpuserphone'];  
        
            $db = Db::getInstance();
            $req = $db->prepare('insert into hp_adminusers ( user_firstname,user_lastname,user_email,user_phone ) values ( :fname,:lname,:uemail,:uphone)');
      
            $reValue = $req->execute(array('fname' => $userfirstname,'lname' => $userlastname,'uemail' => $useremail,'uphone' => $userphone));
            
        }
       // print_r($arrInsertData);
        
       
    }
      public static function manageUser(){
        $userlist = [];
    	$db = Db::getInstance(); 	 
    	$req = $db->query('SELECT * FROM hp_adminusers');  
        foreach($req->fetchAll() as $row) {
        $userlist[] = $row;
            }
      return $userlist ;
        
     }
      public static function deleteuser($deleteID) {
      $db = Db::getInstance();
          echo $deleteID;
      $deleteID = intval($deleteID);
      $req = $db->prepare('DELETE FROM hp_adminusers WHERE id = :id');
      $req->execute(array('id' => $deleteID));
      return $req;
         
    }
      public static function edituser($editID){
        $userlist = [];
    	$db = Db::getInstance(); 
        $editID = intval($editID);
    	$req = $db->prepare('SELECT * FROM hp_adminusers WHERE id = :id'); 
        $req->execute(array('id' => $editID));
        $userlist = $req->fetch();
        return $userlist;
        
     }
//      public static function updateuser(){
//          $reValue = 0;
//     $updateFlag = $arrInsertData['updateuserid'];
//           if($updateFlag == "updateuser"){           
//       
//            $userfirstname = $arrInsertData['hpuserfirstname'];
//            $userlastname = $arrInsertData['hpuserlastname'];
//            $useremail = $arrInsertData['hpuseremail'];
//            $userphone = $arrInsertData['hpuserphone'];  
//            $updateuserid = $arrInsertData['updateuserid'];
//             //echo $updateuserid;exit;
//            $db = Db::getInstance();
//            $req = $db->prepare('UPDATE hp_adminusers SET user_firstname = :fname,user_lastname = :lname,user_email = :uemail,user_phone = : uphone WHERE id = :id');
//            //echo $req;
//            $reValue = $req->execute(array('fname' => $userfirstname,'lname' => $userlastname,'uemail' => $useremail,'uphone' => $userphone,'id' => $updateuserid ));
//        }
       
  
     // return $reValue;
  //}
  
  }
  
?>