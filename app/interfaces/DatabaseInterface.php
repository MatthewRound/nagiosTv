<?php
/**                                                                             
 * Holds the Interface for Database
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


require_once DIR_MODEL.'SqlCreds.php';


/**
 * DatabaseInterface
 *
 * The interface for the class Database
 *                                                                            
 * @category  Core
 * @package   Core.miniFrameWork                                              
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                         
 * @copyright 2013 roundyz.kicks-ass.net/work                                 
 * @license   roundyz.kicks-ass.net/work private                                
 * @version   Release:1.0                                                       
 * @link      roundyz.kicks-ass.net/work                                    
 */ 
interface DatabaseInterface
{


    /**
     * setSqlCreds 
     * 
     * @param SqlCreds $creds The Credentials to set
     * 
     * @access public
     * @return void
     */
    public function setSqlCreds(SqlCreds $creds);


    /**
     * connect 
     * 
     * @access public
     * @return void
     */
    public function connect();


    /**
     * query 
     * 
     * @param mixed $sql The sql to send
     * 
     * @access public
     * @return void
     */
    public function query($sql);


    /**
     * insert 
     * 
     * @param mixed $sql The sql to send
     * 
     * @access public
     * @return void
     */
    public function insert($sql);


    /**
     * update 
     * 
     * @param mixed $sql The sql to send
     * 
     * @access public
     * @return void
     */
    public function update($sql);


}
