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
      //echo "Demo from model";
      $db = Db::getInstance();
      $req = $db->prepare('insert into hp_adminusers ( user_firstname,user_lastname,user_email,user_password,user_activestatus,user_lastlogin ) values ( :fname,:lname,:uemail,:upass,:uactive,:ulastlog )');
      
      $req->execute(array('fname' => 'test','lname' => 'tester','uemail' => 'demo@user.com','upass' => 'demo','uactive' => '1','ulastlog' => '18-06-12 10:34:09 AM'));
      
    }
      public static function Adduser($arrInsertData){

      //print_r($arrInsertData);
      //echo "Demo from model";
      $db = Db::getInstance();
      $req = $db->prepare('insert into hp_nonadmin ( firstname,lastname,email_id ) values ( :firstn,:lastn,:useremail )');
      
      $req->execute(array('firstn' => 'first','lastn' => 'second','useremail' => 'test@user.com'));
      
    }
  }
?>