<?php
/**
 * Holds the class ./bootstrap.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./bootstrap.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


$base 
= 
get_include_path() . PATH_SEPARATOR. __DIR__

set_include_path($base . '/commands/');
set_include_path($base . './commands/');
set_include_path($base . '/exceptions/');
set_include_path($base . './exceptions/');
set_include_path($base . '/interfaces/');
set_include_path($base . './interfaces/');
set_include_path($base . '/models/');
set_include_path($base . './models/');
set_include_path($base . '/views/');
set_include_path($base . './views/');

require_once "configs/dirLocations.php";
require_once DIR_MODEL."Errors.php";
date_default_timezone_set('UTC');


function __autoload($class)
{
    $file = $class.".php";
    include_once $file;
}
