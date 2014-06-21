<?php
/**
 * Holds the paths and constants for the framework
 *
 * PHP version 5
 *
 * @catagory Core
 * @package  Core.miniFrameWork
 * @author   roundyz <roundyz@roundyz.kicks-ass.net>
 * @license  as is.
 * @link     roundyz.kicks-ass.net/work
 *
 */


/**
 * Values
 */
define("APP_NAME", "miniFrameWork");
define("APP_COPYRIGHT", "All rights reserved");
define("APP_COPYRIGHT_LINK", "http://roundyz.kicks-ass.net/work");


/**
 * Locations 
 */
define("DIR_INTERFACES", __DIR__."/../interfaces/");
define("CONFIG_DIR", "configs");
define("DIR_MODEL", __DIR__."/../models/");
define("DIR_TESTS", __DIR__."/../tests/");
define("DIR_COMMANDS", __DIR__."/../commands/");
define("DIR_VIEWS", __DIR__."/../views/");
define("DIR_EXCEPTIONS", __DIR__."/../exceptions/");
define("DIR_CSS", __DIR__."/../views/css/");
define("DIR_SCRIPTS", __DIR__."/../views/scripts/");
define("DIR_LOGS", __DIR__."../../logs/". APP_NAME. ".log");


/**
 * Errors
 */
define("ERROR_STDOUT_TOO", false);
define("ERROR_USE_COLOUR_FOR_STDOUT", true);

