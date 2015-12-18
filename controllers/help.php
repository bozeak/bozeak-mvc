<?php

class Help extends Controller {

  public function __construct() {
    parent::__construct();
    echo "This is help!<br>";
  }

  public function other($args = FALSE) {
    echo "we are inside other.<br>";
    echo "Optional: " . $args;

    require 'models/help_model.php';
    $model = new Help_Model();
  }
}
