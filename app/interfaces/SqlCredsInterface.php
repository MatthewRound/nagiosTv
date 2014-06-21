<?php
/**                                                                             
 * Holds the Interface SqlCredsInterface
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
 * SqlCredsInterface 
 *
 * The interface to SqlCreds
 *                                                                            
 * @category  Core
 * @package   Core.miniFrameWork                                             
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                         
 * @copyright 2013 roundyz.kicks-ass.net/work                                
 * @license   roundyz.kicks-ass.net/work private                                
 * @version   Release:1.0                                                       
 * @link      roundyz.kicks-ass.net/work                                    
 */ 
interface SqlCredsInterface
{


    /**
     * setUserName 
     * 
     * @param string $username The username to set.
     * 
     * @access public
     * @return void
     */
    public function setUserName($username);


    /**
     * setPassword 
     * 
     * @param string $password The password to set.
     * 
     * @access public
     * @return void
     */
    public function setPassword($password);


    /**
     * setServer 
     * 
     * @param string $server The server to set
     * 
     * @access public
     * @return void
     */
    public function setServer($server);


    /**
     * setDatabase 
     * 
     * @param string $database The database to set.
     * 
     * @access public
     * @return void
     */
    public function setDatabase($database);


    /**
     * getDatabase 
     *
     * @return string Database name.
     */
    public function getDatabase(); 


    /**
     * getServer 
     *
     * @return string server name.
     */
    public function getServer(); 


    /**
     * getPassword 
     *
     * @return string The password
     */
    public function getPassword(); 


    /**
     * getUserName
     *
     * @return string The username
     */
    public function getUserName(); 


}
