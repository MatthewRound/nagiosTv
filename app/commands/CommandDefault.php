<?php
/**                                                                           
 * Holds the Class CommandDefault
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


require_once DIR_COMMANDS."CommandAbstract.php";


/**                                                                        
 * CommandDefault                                                        
 *                                                                          
 * @category  Core                                                         
 * @package   Core.miniFrameWork                                         
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                   
 * @copyright 2013 roundyz.kicks-ass.net/work                           
 * @license   roundyz.kicks-ass.net/work private                        
 * @version   Release:1.0                                             
 * @link      roundyz.kicks-ass.net/work                               
 * @use       Command
 */ 
class CommandDefault extends Command
{


    /**
     * execute 
     * 
     * @param CommandContext $context The context to use.
     * 
     * @access public
     * @return void
     */
    function execute(CommandContext $context)
    {
        $this->display("");
    }


    /**
     * display 
     * 
     * @param mixed $xml The xml to pass to the view.
     * 
     * @access public
     * @return void
     */
    function display($xml)
    {
        include_once DIR_VIEWS."frontend.php";
    }


    /**
     * stripOfCommandPrefix 
     * 
     * @param mixed $name The name to have prefix removed from.
     * 
     * @static
     * @access public
     * @return String The correct classname without the command prefix.
     */
    public static function stripOfCommandPrefix($name)
    {
        $classname = get_class($name);
        $classnameIsPrefixedWithCommand 
            = preg_match('/[Cc]ommand/', $classname);
        //print_r($classnameIsPrefixedWithCommand);
        if ($classnameIsPrefixedWithCommand) {
            $classname=lcfirst(substr($classname, 7, strlen($classname)-7));    
        }
        return $classname;
    }


}
