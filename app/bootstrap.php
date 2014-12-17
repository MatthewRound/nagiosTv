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


/**
 * Bootstrap 
 * 
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
class Bootstrap
{


    /**
     * __construct 
     * 
     * @access public
     * @return void
     */
    public function __construct()    
    {
        self::run();
    }


    /**
     * run 
     * 
     * @static
     * @access public
     * @return void
     */
    static public function run()
    {
        Bootstrap::setupAutoload();
        Bootstrap::setupIncludePaths();
        Bootstrap::setupTimeZone();
        Bootstrap::setupFrameworkConstants();
        Bootstrap::setupLogging();
        Bootstrap::route();
    }


    /**
     * setupAutoload 
     * 
     * @static
     * @access public
     * @return void
     */
    static public function setupAutoload()
    {
        function __autoload($class)
        {
            $file = $class.".php";
            include_once $file;
        }
    }


    /**
     * setupIncludePaths 
     * 
     * @static
     * @access public
     * @return void
     */
    static public function setupIncludePaths()
    {
        $paths = array(
                '/commands/',
                './commands/',
                '/exceptions/',
                './exceptions/',
                '/interfaces/',
                './interfaces/',
                '/models/',
                './models/',
                '/views/',
                './views/'
                );
        foreach ($paths as $path) {
            $base = get_include_path() . PATH_SEPARATOR. __DIR__;
            set_include_path($base . $path);
        }
    }


    /**
     * setupTimeZone 
     * 
     * @static
     * @access public
     * @return void
     */
    static public function setupTimeZone()
    {
        date_default_timezone_set('UTC');
    }


    /**
     * setupFrameworkConstants 
     * 
     * @static
     * @access public
     * @return void
     */
    static public function setupFrameworkConstants()
    {
        define("APP_NAME"                    , "miniFrameWork");
        define("APP_COPYRIGHT"               , "All rights reserved");
        define("APP_COPYRIGHT_LINK"          , "http://github.com/MatthewRound");
        define("CONFIG_DIR"                  , "configs");
        define("ERROR_STDOUT_TOO"            , false);
        define("ERROR_USE_COLOUR_FOR_STDOUT" , true);
        define("DIR_INTERFACES"              , __DIR__."/../interfaces/");
        define("DIR_MODEL"                   , __DIR__."/../models/");
        define("DIR_TESTS"                   , __DIR__."/../tests/");
        define("DIR_COMMANDS"                , __DIR__."/../commands/");
        define("DIR_VIEWS"                   , __DIR__."/../views/");
        define("DIR_EXCEPTIONS"              , __DIR__."/../exceptions/");
        define("DIR_CSS"                     , __DIR__."/../views/css/");
        define("DIR_SCRIPTS"                 , __DIR__."/../views/scripts/");
        define("DIR_LOGS"                    , __DIR__."../../logs/". APP_NAME. ".log");
    }


    /**
     * setupLogging 
     * 
     * @static
     * @access public
     * @return void
     */
    static public function setupLogging()
    {
        require_once DIR_MODEL."Errors.php";
    }


    /**
     * route 
     * 
     * @static
     * @access public
     * @return void
     */
    static public function route()
    {
        $mainController = DIR_MODEL."Controller.php";
        require_once $mainController;
        $c = new Controller();
        $c->process();
    }


}
