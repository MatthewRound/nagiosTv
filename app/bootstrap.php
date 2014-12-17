<?php
/**
 * Holds the class bootstrap.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  bootstrap
 * @author   <roundyz32@gmail.com>
 * @license   All rights and ownership reserved
 * @link     
 *
 */

set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. '/commands/');
set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. './commands/');

set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. '/exceptions/');
set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. './exceptions/');

set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. '/interfaces/');
set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. './interfaces/');

set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. '/models/');
set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. './models/');


set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. '/views/');
set_include_path (get_include_path() . PATH_SEPARATOR. __DIR__. './views/');

require_once "configs/dirLocations.php";
require_once DIR_MODEL."Errors.php";
date_default_timezone_set('UTC');


function __autoload($class)
{
	$file = $class.".php";
	include_once $file;
}
