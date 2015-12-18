<?php
error_reporting(0);

class Bootstrap {


  function __construct() {
    $url = $_GET['url'];
    $url = rtrim($url, '/');

    $url = explode('/', $_GET['url']);
    //print_r($url);

    $file = 'controllers/' . $url[0] . '.php';
    if (file_exists($file)) {
      require $file;
    }
    else {
      require 'controllers/error.php';
      //throw new Exception('The file ' . $file . ' doesn\'t exist!');
      $controller = new Error();
      return FALSE;
    }
    //require 'controllers/' . ucfirst($url[0]) . '.php';
    $controller = new $url[0];

    if (isset($url[2])) {
      $controller->{$url[1]}($url[2]);
    }
    else {
      if (isset($url[1])) {
        $controller->{$url[1]}();
      }
    }
  }

}
