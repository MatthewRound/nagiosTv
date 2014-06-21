<?php
/**                                                                             
 * Holds the Abstract Class Command
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


require_once DIR_MODEL."CommandContext.php";


/**                                                                     
 * Command                                                                
 *                                                                            
 * @abstract                                                                  
 * @category  Core                                                            
 * @package   Core.miniFrameWork                                         
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                      
 * @copyright 2013 roundyz.kicks-ass.net/work                           
 * @license   roundyz.kicks-ass.net/work private                        
 * @version   Release:1.0                                               
 * @link      roundyz.kicks-ass.net/work                               
 */  
abstract class Command
{


    /**
     * execute 
     * 
     * @param CommandContext $context The context to execute
     * 
     * @abstract
     * @access public
     * @return void
     */
    abstract function execute(CommandContext $context);


    /**
     * display 
     * 
     * @param mixed $xml The xml to display
     * 
     * @abstract
     * @access public
     * @return void
     */
    abstract function display($xml);

}
