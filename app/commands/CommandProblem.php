<?php
/**                                                                             
 * Holds the CommandProblem class
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


/**                                                                            
 * CommandProblem 
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
class CommandProblem extends Command
{


    /**
     * execute 
     * 
     * @param CommandContext $context The context to use.
     * 
     * @access public
     * @return void
     */
    public function execute(CommandContext $context)
    {
        $error = $context->get("error")==null? "":$context->get("error");
        $this->display($error);
    }


    /**
     * display 
     * 
     * @param mixed $xml The xml to pass to the view.
     * 
     * @access public
     * @return void
     */
    public function display($xml)
    {
        include_once DIR_VIEWS."problem.php";
    }


}
