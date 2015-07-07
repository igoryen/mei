<?php

class Application_Model_PieceWithType extends Application_Model_Piece {

  protected $_typeName;
  
  # typeName

  public function setTypeName($typeName) {
    $this->_typeName = (string) $typeName;
    return $this;
  }

  public function getTypeName() {
    return $this->_typeName;
  }

}
