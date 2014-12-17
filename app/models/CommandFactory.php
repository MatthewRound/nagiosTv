<?php
/**
 * Holds the class ./models/CommandFactory.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./models/CommandFactory.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


/**
 * CommandFactory 
 * 
 * @uses CommandFactoryInterface
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
class CommandFactory implements CommandFactoryInterface
{


    /**
     * getCommand 
     * 
     * Gets the command. 
     * 
     * @param String $action The command to get
     * 
     * @static
     * @access public
     * @return mixed The command.
     */
    static function getCommand($action)
    {
        $className = "Command".UCFirst($action);
        $commandNamePrefix = "Command";
        $file = DIR_COMMANDS.$className.".php";
        if ($action != null && !is_bool($action)) {
            if (preg_match('/\W/', $action)) {
                //this is dumb, should return the default page
                //throw new Exception("illegal chars in action");
                $action = "Default";
                $className = $commandNamePrefix.UCFirst($action);
                $file = DIR_COMMANDS.$className.".php";
            }
            if (!file_exists($file)) {
                $action = "Default";
                $className = $commandNamePrefix.UCFirst($action);
                $file = DIR_COMMANDS.$className.".php";
            }
            if (!class_exists($className)) { 
                $action = "Default";
                $className = $commandNamePrefix.UCFirst($action);
                $file = DIR_COMMANDS.$className.".php";
            }
            $cmd = new $className();
        } else {
            $action = "Default";
            $className = $commandNamePrefix.UCFirst($action);
            $file = DIR_COMMANDS.$className.".php";
            include_once $file;
            $cmd = new $className();
        }
        return $cmd;
    }   


}
