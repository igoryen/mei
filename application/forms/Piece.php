<?php

class Application_Form_Piece extends Zend_Form {

  public function init() {
    // Set the method for the display form to POST
    $this->setMethod('post');
    
    #===========================================================
    # $this->addElement('<fieldType>', '<fieldName>', array(~));
    # Because <fieldName> will be converted into a setter name
    # if your field name is 'first_name'
    # the setter name to find will be 'setFirst_name'
    # in order for it to be 'setFirstName' your field name should be like 'firstName'
    #---------------------------------------
    
    // Add a week element
    $this->addElement('text', 'week', array(
      'label' => 'Week:',
      'required' => true,
      'filters' => array('StringTrim'),
      //'validators' => array('EmailAddress', )
    ));
    
    // Add a name element
    $this->addElement('text', 'name', array(
      'label' => 'Name:',
      'required' => true,
      'filters' => array('StringTrim'),
      //'validators' => array('EmailAddress', )
    ));
    
    // Add a type element
    $this->addElement('text', 'type', array(
      'label' => 'Type:',
      'required' => true,
      'filters' => array('StringTrim'),
      //'validators' => array('EmailAddress', )
    ));
    
    // Add a dev_url element
    $this->addElement('text', 'devUrl', array(
      'label' => 'Dev URL:',
      'required' => true,
      //'filters' => array('StringTrim'),
      //'validators' => array('EmailAddress', )
    ));
    
    // Add a git_url element
    $this->addElement('text', 'gitUrl', array(
      'label' => 'Git URL:',
      'required' => true,
      'filters' => array('StringTrim'),
      //'validators' => array('EmailAddress', )
    ));
    
    // Add a live_url element
    $this->addElement('text', 'liveUrl', array(
      'label' => 'Live URL:',
      'required' => true,
      'filters' => array('StringTrim'),
      //'validators' => array('EmailAddress', )
    ));
    
    // Add a design_url element
    $this->addElement('text', 'designUrl', array(
      'label' => 'Design URL:',
      'required' => true,
      'filters' => array('StringTrim'),
      //'validators' => array('EmailAddress', )
    ));
    
    // Add the comment element
    $this->addElement('textarea', 'comment', array(
      'label' => 'Please Comment:',
      'required' => true,
//      'validators' => array(
//        array('validator' => 'StringLength', 'options' => array(0, 20))
//      )
    ));
    #===========================================================
    // Add a captcha
//    $this->addElement('captcha', 'captcha', array(
//      'label' => 'Please enter the 5 letters displayed below:',
//      'required' => true,
//      'captcha' => array(
//        'captcha' => 'Figlet',
//        'wordLen' => 5,
//        'timeout' => 300
//      )
//    ));
    
    // Add the submit button
    $this->addElement('submit', 'submit', array(
      'ignore' => true,
      'label' => 'Create a piece',
    ));
    
    // And finally add some CSRF protection
    $this->addElement('hash', 'csrf', array(
      'ignore' => true,
    ));
  }

}
