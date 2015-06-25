<?php

class Application_Model_PieceMapper {

  protected $_dbTable;

  public function setDbTable($dbTable) {
    if (is_string($dbTable)) {
      $dbTable = new $dbTable();
    }
    if (!$dbTable instanceof Zend_Db_Table_Abstract) {
      throw new Exception('Invalid table data gateway provided');
    }
    $this->_dbTable = $dbTable;
    return $this;
  }

  public function getDbTable() {
    if (null === $this->_dbTable) {
      $this->setDbTable('Application_Model_DbTable_Piece');
    }
    return $this->_dbTable;
  }

  /**
   * Save a record into the Piece table
   * @param Application_Model_Piece $piece
   */
  public function save(Application_Model_Piece $piece) {
    $data = array(
      'week' => $piece->getWeek(),
      'name' => $piece->getName(),
      'devUrl' => $piece->getDevUrl(),
      'gitUrl' => $piece->getGitUrl(),
      'liveUrl' => $piece->getLiveUrl(),
      'designUrl' => $piece->getDesignUrl(),
    );
    if (null === ($id = $piece->getId())) {
      unset($data['id']);
      $this->getDbTable()->insert($data);
    }
    else {
      $this->getDbTable()->update($data, array('id = ?' => $id));
    }
  }

  /**
   * Find a piece by id
   * @param type $id
   * @param Application_Model_Piece $piece
   * @return type
   */
  public function find($id, Application_Model_Piece $piece) {
    $result = $this->getDbTable()->find($id);
    if (0 == count($result)) {
      return;
    }
    $row = $result->current();
    $piece->setId($row->id)
      ->setWeek($row->week)
      ->setName($row->name)
      ->setDevUrl($row->dev_url)
      ->setGitUrl($row->git_url)
      ->setLiveUrl($row->live_url)
      ->setDesignUrl($row->design_url);
  }

  public function fetchAll() {
    $resultSet = $this->getDbTable()->fetchAll();
    $pieceSet = array();
    foreach ($resultSet as $row) {
      $piece = new Application_Model_Piece();
      $piece->setId($row->id)
        ->setWeek($row->week)
        ->setName($row->name)
        ->setDevUrl($row->dev_url)
        ->setGitUrl($row->git_url)
        ->setLiveUrl($row->live_url)
        ->setDesignUrl($row->design_url);
      $pieceSet[] = $piece;
    }
    $outbox = $pieceSet;
    return $outbox;
  }

}
