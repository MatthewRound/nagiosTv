<?php
/**
 * Holds the Entry point into the application
 *
 * PHP version 5
 *
 * @catagory Core
 * @package  com.miniFrameWork
 * @author   roundyz <roundyz@roundyz.kicks-ass.net>
 * @license  as is.
 * @link     roundyz.kicks-ass.net/work
 *
 */

set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. '/');
require_once 'bootstrap.php';


// go 
$mainController = DIR_MODEL."Controller.php";
require_once $mainController;
$c = new Controller();
$c->process();
