<?php
  require_once('connection.php');
  require_once('config/config.php');

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
  } else {
    $controller = 'login';
    $action     = 'login';
  }

  require_once('views/layout.php');
?>