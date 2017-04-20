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

    public static function insertUser($arrInsertData){

      //print_r($arrInsertData);
      //echo "Demo from model";die();
        $userfirstname = $arrInsertData['hpuserfirstname'];
        $userlastname = $arrInsertData['hpuserlastname'];
        $useremail = $arrInsertData['hpuseremail'];
        //$userpass = $arrInsertData['hpuserpass'];
        $userphone = $arrInsertData['hpuserphone'];  
        
      $db = Db::getInstance();
      $req = $db->prepare('insert into hp_adminusers ( user_firstname,user_lastname,user_email,user_phone ) values ( :fname,:lname,:uemail,:uphone )');
      
      $req->execute(array('fname' => $userfirstname,'lname' => $userlastname,'uemail' => $useremail,'uphone' => $userphone));
      return $req;
    }
      public static function adduser($arrInsertData){
        $userfirstname = $arrInsertData['hpnonadminfname'];
        $userlastname = $arrInsertData['hpnonadminlname'];
        $useremail = $arrInsertData['hpnonadminemail'];
      //print_r($arrInsertData);
      //echo "Demo from model";
      $db = Db::getInstance();
      $req = $db->prepare('insert into hp_nonadmin ( firstname,lastname,email_id ) values ( :firstn,:lastn,:useremail )');
      
      $req->execute(array('firstn' => $userfirstname ,'lastn' => $userlastname,'useremail' => $useremail));
      return $req;
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
//       public static function updateuser($updateID) {
//      $db = Db::getInstance();
//          //echo $updateID;
//           
//      $updateID = intval($updateID);
//      $req = $db->prepare('UPDATE hp_adminusers SET user_firstname = :fname,user_lastname = :lname,user_email = :uemail WHERE id = :id');
//          //echo $req;
//      $req->execute(array('fname' => $firstname,'lname' => $lastname,'uemail' => $email,'id' => $updateID));
//      return $req;
//         
//    }
//      
      public static function edituser($editID){
        //echo $editID; die();
    	$db = Db::getInstance();
        $editID = intval($editID);
    	$req = $db->prepare('SELECT * FROM hp_adminusers WHERE id = :id');
        $req->execute(array('id' => $editID));
        //$row = $req->fetchAll();
          
//       foreach($req->fetchAll() as $row)  {
//           echo $row['id'];
//       }
          echo $req;
        return $req ;
     }
      
  }
?>