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
      'type' => $piece->getType(),
      'devUrl' => $piece->getDevUrl(),
      'gitUrl' => $piece->getGitUrl(),
      'liveUrl' => $piece->getLiveUrl(),
      'designUrl' => $piece->getDesignUrl(),
      'comment' => $piece->getComment(),
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
    # $row->bla (bla is the column name in its DB spelling)
    $piece->setId($row->id)
      ->setWeek($row->week)
      ->setName($row->name)
      ->setType($row->type)
      ->setDevUrl($row->dev_url)
      ->setGitUrl($row->git_url)
      ->setLiveUrl($row->live_url)
      ->setDesignUrl($row->design_url)
      ->setComment($row->comment);
  }

  public function fetchAll() {
    $app = Zend_Registry::get('app');
    $bootstrap = $app->getBootstrap();
    $db = $bootstrap->getResource('db');
    $select = $db->select()
      ->from(
        // FROM piece AS p
        array('p' => 'piece'), 
        // SELECT p.id,p.week,p.name,p.dev_url,p.git_url,p.live_url,p.design_url, t.type AS typeName
        array('id','week','name','dev_url', 'git_url', 'live_url','design_url', 'comment'))
      // LEFT JOIN type AS t ON p.type = t.id
      ->joinLeft(
        array('t' => 'type'), 
        'p.type = t.id', 
        array('typeName' => 'name'));
    $select->order('week DESC');
    $resultSet = $db->fetchAll($select);
    
    $pieceSet = array();
    foreach ($resultSet as $row) {
      $piece = new Application_Model_PieceWithType();      
      $piece->setId($row[id])
        ->setWeek($row[week])
        ->setName($row[name])
        ->setTypeName($row[typeName])
        ->setDevUrl($row[dev_url])
        ->setGitUrl($row[git_url])
        ->setLiveUrl($row[live_url])
        ->setDesignUrl($row[design_url])
        ->setComment($row[comment]);
      $pieceSet[] = $piece;
    }
    $outbox = $pieceSet;
    return $outbox;
  }

}
