<?php

class Error extends Controller {

  public function __construct() {
    parent::__construct();
    //echo 'This is an error!';1
    $this->view->msg = 'This view doesn\'t exist!';
    $this->view->render('error/index');
  }
}
