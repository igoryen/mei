<?php

// Define path to application directory of the project
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

// Define application environment (production, development or testing)
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', (getenv('APPLICATION_ENV') ? getenv('APPLICATION_ENV') : 'production'));

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';


// Create the application object
$app = new Zend_Application(
  APPLICATION_ENV, 
  APPLICATION_PATH . '/configs/application.ini');

// bootstrap the resources
$app->bootstrap();
$bootstrap = $app->getBootstrap();

// store the resources somewhere in registry, so you could access them from everywhere e.g. in controllers, models, etc.
Zend_Registry::set('app', $app);

// bootstrap the application, and run it (must be the last line in this file)
//$app->bootstrap()->run();
$app->run();
