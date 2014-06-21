<?php
/**                                                                             
 * Holds the CommandFactory class
 *                                                                              
 * PHP version 5                                                                
 *                                                                              
 * @catagory Core                                                               
 * @package  Core.miniFrameWork                                                
 * @author   roundyz <roundyz@roundyz.kicks-ass.net>                            
 * @license  roundyz.kicks-ass.net/work private                                 
 * @link     roundyz.kicks-ass.net/work                                         
 *                                                                              
 */ 


require_once DIR_INTERFACES."CommandFactoryInterface.php";


/**                                                           
 * CommandFactory 
 *                                                                        
 * @category  Core                  
 * @package   Core.miniFrameWork                                          
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                    
 * @copyright 2013 roundyz.kicks-ass.net/work                                  
 * @license   roundyz.kicks-ass.net/work private                              
 * @version   Release:1.0                                                     
 * @link      roundyz.kicks-ass.net/work                                      
 * @use       CommandFactoryInterface                           
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
        if ($action != null) {
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
            //TODO try catch this?
            include_once $file;
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
