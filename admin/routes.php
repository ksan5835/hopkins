<?php

  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    $controlInstance = ucfirst($controller).'Controller';
   
    require_once('models/'.$controller.'.php');
    $controller = new $controlInstance();   

/*
    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        $controller = new PostsController();
      break;
	  case 'login':
        $controller = new LoginController();		
      break;
    }
*/

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
  					      'login' => ['login', 'error','processlogin'],
                  'home' => ['dashboard'],
                  'user' => ['addnewuser','manageuser','registeruser','registernonadminuser','managereport','nonadminuser','nonadminmanage','nonadminreport','deletemanageuser','updatemanageuser','editmanageuser'],
                  'posts' => ['index', 'show']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>