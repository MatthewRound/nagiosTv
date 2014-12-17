<?php
/**
 * Holds the paths and constants for the framework
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./configs/dirLocations.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


/**
 * Values
 */
define("APP_NAME", "miniFrameWork");
define("APP_COPYRIGHT", "All rights reserved");
define("APP_COPYRIGHT_LINK", "http://github.com/MatthewRound");


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

