<?php

class PieceController extends Zend_Controller_Action {

  public function init() {
    /* Initialize action controller here */
  }

  public function indexAction() {
    $pm = new Application_Model_PieceMapper();
    $this->view->inbox = $pm->fetchAll();
  }

  public function addAction() {
    $request = $this->getRequest();
    $form = new Application_Form_Piece();

    if ($this->getRequest()->isPost()) {
      if ($form->isValid($request->getPost())) {
        try {
          # get all the values from the form in bulk into a Piece object
          $p = new Application_Model_Piece($form->getValues());
          $pm = new Application_Model_PieceMapper();
          $pm->save($p);
          return $this->_helper->redirector('index'); # back to PieceController::indexAction
        } catch (Exception $ex) {
          echo 'Caught exception: ',  $ex->getMessage(), "\n";
        }
      }
    }
    $this->view->form = $form;
  }

}
