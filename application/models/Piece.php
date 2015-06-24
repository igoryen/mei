<?php

class Application_Model_Piece {

  protected $_id;
  protected $_week;
  protected $_name;
  protected $_dev_url;
  protected $_git_url;
  protected $_live_url;
  protected $_design_url;

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

  # dev_url

  public function setDevUrl($dev_url) {
    $this->_dev_url = $dev_url;
    return $this;
  }

  public function getDevUrl() {
    return $this->_dev_url;
  }

  # git_url

  public function setGitUrl($git_url) {
    $this->_git_url = $git_url;
    return $this;
  }

  public function getGitUrl() {
    return $this->_git_url;
  }

  # live_url

  public function setLiveUrl($live_url) {
    $this->_live_url = $live_url;
    return $this;
  }

  public function getLiveUrl() {
    return $this->_live_url;
  }

  # design_url

  public function setDesignUrl($design_url) {
    $this->_design_url = $design_url;
    return $this;
  }

  public function getDesignUrl() {
    return $this->_design_url;
  }

}
