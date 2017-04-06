<?php

class UsersController extends VanillaController {
	
	function beforeAction () {

	}

	function view($id = null) {
		$this->User->id = $id;
		$User = $this->User->search();
		$this->set('user',$User);
	}
	
	function index() {
		$this->User->orderBy('name','ASC');
		$this->User->where('role_id','1');
		$users = $this->User->search();
		$this->set('users',$users);

	}
	
	function login($email = null,$password,$role_id) {
		$this->User->where('user_email',$email);
		$md5_pass = md5($password);
		$this->User->where('user_password',$md5_pass);
		$this->User->where('role_id',$role_id);
		$user_available = $this->User->search();
		$this->set('user_available',$user_available);
		
		if($user_available){
			$status = '200';
		}else{
			$status = '404';
		}
		return $status;
	}


	function afterAction() {

	}
	

}