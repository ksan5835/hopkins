<?php

  class LoginModel {
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
       
      public static function adminLogin($arrPostData){

        $loUsername = $arrPostData['hpusername'];
        $lopassword = $arrPostData['hppassword'];  
        $db = Db::getInstance();      
        $req = $db->prepare('SELECT * FROM hp_adminusers WHERE user_email = :adminemail AND user_password = :adminpwd');  
        $req->execute(array('adminemail' => $loUsername,'adminpwd' => $lopassword));
        $reUserData = $req->fetch();  
        return $reUserData;
         
           
   
               }

      
  }
?>