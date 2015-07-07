<?php

class Application_Model_Piece {

  protected $_id;
  protected $_week;
  protected $_name;
  protected $_type;
  protected $_devUrl;
  protected $_gitUrl;
  protected $_liveUrl;
  protected $_designUrl;
  protected $_comment;

  public function __construct(array $options = null) {
    if (is_array($options)) {
      $this->setOptions($options);
    }
  }

  public function __set($name, $value) {
    $method = 'set' . $name;
    if (('mapper' == $name) || !method_exists($this, $method)) {
      throw new Exception('Invalid piece property');
    }
    $this->$method($value);
  }

  public function __get($name) {
    $method = 'get' . $name;
    if (('mapper' == $name) || !method_exists($this, $method)) {
      throw new Exception('Invalid piece property');
    }
    return $this->$method();
  }

  public function setOptions(array $options) {
    $methods = get_class_methods($this);
    foreach ($options as $key => $value) {
      $method = 'set' . ucfirst($key);
      if (in_array($method, $methods)) {
        $this->$method($value);
      }
    }
    return $this;
  }

  # id

  public function setId($id) {
    $this->_id = (int) $id;
    return $this;
  }

  public function getId() {
    return $this->_id;
  }

  # week

  public function setWeek($week) {
    $this->_week = (int) $week;
    return $this;
  }

  public function getWeek() {
    return $this->_week;
  }

  # name

  public function setName($name) {
    $this->_name = (string) $name;
    return $this;
  }

  public function getName() {
    return $this->_name;
  }
  
  # type

  public function setType($type) {
    $this->_type = (int) $type;
    return $this;
  }

  public function getType() {
    return $this->_type;
  }

  # dev_url

  public function setDevUrl($devUrl) {
    $this->_devUrl = $devUrl;
    return $this;
  }

  public function getDevUrl() {
    return $this->_devUrl;
  }

  # git_url

  public function setGitUrl($gitUrl) {
    $this->_gitUrl = $gitUrl;
    return $this;
  }

  public function getGitUrl() {
    return $this->_gitUrl;
  }

  # live_url

  public function setLiveUrl($liveUrl) {
    $this->_liveUrl = $liveUrl;
    return $this;
  }

  public function getLiveUrl() {
    return $this->_liveUrl;
  }

  # design_url

  public function setDesignUrl($designUrl) {
    $this->_designUrl = $designUrl;
    return $this;
  }

  public function getDesignUrl() {
    return $this->_designUrl;
  }

  # comment
  public function setComment($comment) {
    $this->_comment = $comment;
    return $this;
  }

  public function getComment() {
    return $this->_comment;
  }
}
