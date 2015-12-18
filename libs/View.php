<?php

class View {

  function __construct() {
    echo "This is from the View controller!<br>";
  }

  public function render($name) {
    require 'views/' .$name .'.php';
  }

}
