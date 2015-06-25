<?php

class PieceController extends Zend_Controller_Action {

  public function init() {
    /* Initialize action controller here */
  }

  public function indexAction() {
    $pm = new Application_Model_PieceMapper();
    $this->view->inbox = $pm->fetchAll();
  }

}
