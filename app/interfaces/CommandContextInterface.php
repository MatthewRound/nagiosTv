<?php
/**                                                                             
 * Holds the Interface for CommandContext
 *                                                                              
 * PHP version 5                                                                
 *                                                                              
 * @catagory Core                                                               
 * @package  Core.miniFrameWork                                         
 * @author   <roundyz32@gmail.com>                           
 * @license  roundyz.kicks-ass.net/work private                                
 * @link   github.com/MatthewRound/nagiosTv                                        
 *                                                                             
 */  


/**                                                                          
 * CommandContext
 *
 * The interface for the Command Context.
 *
 * @category  Core
 * @package   Core.miniFrameWork                                        
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                     
 * @copyright 2013 roundyz.kicks-ass.net/work                            
 * @license   roundyz.kicks-ass.net/work private                          
 * @version   Release:1.0                                               
 * @link      roundyz.kicks-ass.net/work                                
 */ 
interface CommandContextInterface
{


    /**
     * addParam 
     * 
     * @param mixed $key The key to index the value.
     * @param mixed $val The value to be indexed by key.
     * 
     * @access public
     * @return void
     */
    public function addParam($key, $val);


    /**
     * get 
     * 
     * @param mixed $key The key to get the value for
     * 
     * @access public
     * @return void
     */
    public function get($key);


}
