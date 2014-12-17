<?php
/**
 * Holds the Entry point into the application
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./index.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */

set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. '/');
require_once 'bootstrap.php';


// go 
$mainController = DIR_MODEL."Controller.php";
require_once $mainController;
$c = new Controller();
$c->process();
