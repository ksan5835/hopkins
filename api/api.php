<?php
	
	require_once("Rest.inc.php");
	
	class API extends REST {
	
		public $data = "";
		
		const DB_SERVER = "localhost";
		const DB_USER = "root";
		const DB_PASSWORD = "";
		const DB = "hopkinsschool";
		
		private $db = NULL;
	
		public function __construct(){
			parent::__construct();				// Init parent contructor
			$this->dbConnect();					// Initiate Database connection
		}
		
		/*
		 *  Database connection 
		*/
		private function dbConnect(){
			$this->db = mysqli_connect(self::DB_SERVER,self::DB_USER,self::DB_PASSWORD);
			if($this->db)
				mysqli_select_db($this->db,self::DB);
		}
		
		/*
		 * Public method for access api.
		 * This method dynmically call the method based on the query string
		 *
		 */
		public function processApi(){
			$func = strtolower(trim(str_replace("/","",@$_REQUEST['rquest'])));
			if((int)method_exists($this,$func) > 0)
				$this->$func();
			else
				$this->response('',404);				// If the method not exist with in this class, response would be "Page not found".
		}
		
		/* 
		 *	Simple login API
		 *  Login must be POST method
		 *  email : <USER EMAIL>
		 *  pwd : <USER PASSWORD>
		 */
		
		/*private function login(){
			// Cross validation if the request method is POST else it will return "Not Acceptable" status
			if($this->get_request_method() != "POST"){
				$this->response('',406);
			}
			
			$email = $this->_request['email'];		
			$password = $this->_request['pwd'];
			
			// Input validations
			if(!empty($email) and !empty($password)){
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					$sql = mysql_query("SELECT user_id, user_fullname, user_email FROM users WHERE user_email = '$email' AND user_password = '".md5($password)."' LIMIT 1", $this->db);
					if(mysql_num_rows($sql) > 0){
						$result = mysql_fetch_array($sql,MYSQL_ASSOC);
						
						// If success everythig is good send header as "OK" and user details
						$this->response($this->json($result), 200);
					}
					$this->response('', 204);	// If no records "No Content" status
				}
			}
			
			// If invalid inputs "Bad Request" status message and reason
			$error = array('status' => "Failed", "msg" => "Invalid Email address or Password");
			$this->response($this->json($error), 400);
		}*/
		
		private function users(){
				
			// Cross validation if the request method is GET else it will return "Not Acceptable" status
			if($this->get_request_method() != "GET"){
				$this->response('',406);
			}
			$sql = mysqli_query($this->db, "SELECT user_id, user_fullname, user_email FROM users WHERE user_status = 1");
			if(mysqli_num_rows($sql) > 0){
				$result = array();
				while($rlt = mysqli_fetch_array($sql,MYSQL_ASSOC)){
					$result[] = $rlt;
				}
				// If success everythig is good send header as "OK" and return list of users in JSON format
				$this->response($this->json($result), 200);
			}
			$this->response('',204);	// If no records "No Content" status
		}
		
		/*private function deleteUser(){
			// Cross validation if the request method is DELETE else it will return "Not Acceptable" status
			if($this->get_request_method() != "DELETE"){
				$this->response('',406);
			}
			$id = (int)$this->_request['id'];
			if($id > 0){				
				mysql_query("DELETE FROM users WHERE user_id = $id");
				$success = array('status' => "Success", "msg" => "Successfully one record deleted.");
				$this->response($this->json($success),200);
			}else
				$this->response('',204);	// If no records "No Content" status
		}*/
		
		/*
		 *	Encode array into JSON
		*/
		private function json($data){
			if(is_array($data)){
				return json_encode($data);
			}
		}
	}
	
	// Initiiate Library
	
	$api = new API;
	$api->processApi();
?>