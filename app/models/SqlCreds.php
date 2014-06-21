<?php
/**                                                                             
 * Holds the Class SqlCreds
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


require_once DIR_INTERFACES."SqlCredsInterface.php";


/**                                                                            
 * SqlCreds
 *
 * Holds credentials to connect to a database.
 *                                                                            
 * @category  Core
 * @package   Core.miniFrameWork                                               
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                         
 * @copyright 2013 roundyz.kicks-ass.net/work                                  
 * @license   roundyz.kicks-ass.net/work private                               
 * @version   Release:1.0                                                      
 * @link      roundyz.kicks-ass.net/work                                      
 * @use       SqlCredsInterface                        
 */  
class SqlCreds implements SqlCredsInterface
{


    /**
     * username
     *
     * @var    String
     * @access private
     */
    private $_username;


    /**
     * password
     *
     * @var    String
     * @access private
     */
    private $_password;


    /**
     * server
     *
     * @var    String
     * @access private
     */
    private $_server;


    /**
     * database
     *
     * @var    String
     * @access private
     */
    private $_database;


    /**
     * getUsername
     *
     * Attempts to return the member username.
     *
     * @access public
     * @return mixed bool on failure, else String
     */
    public function getUsername()
    {
        $return = false;
        $usernameIsSet = isset($this->_username);
        if ($usernameIsSet) {
            $return = $this->_username;
        }
        return $return;
    }


    /**
     * getPassword
     *
     * Attempts to return the member password.
     *
     * @access public
     * @return mixed bool on failure, else String
     */
    public function getPassword()
    {
        $return = false;
        $passwordIsSet = isset($this->_password);
        if ($passwordIsSet) {
            $return = $this->_password;
        }
        return $return;
    }


    /**
     * getServer
     *
     * Attempts to return the member server.
     *
     * @access public
     * @return mixed bool on failure, else String
     */
    public function getServer()
    {
        $return = false;
        $serverIsSet = isset($this->_server);
        if ($serverIsSet) {
            $return = $this->_server;
        }
        return $return;
    }


    /**
     * getDatabase
     *
     * Attempts to return the member database.
     *
     * @access public
     * @return mixed bool on failure, else String
     */
    public function getDatabase()
    {
        $return = false;
        $databaseIsSet = isset($this->_database);
        if ($databaseIsSet) {
            $return = $this->_database;
        }
        return $return;
    }


    /**
     * setUsername
     *
     * Attempts to set the member username
     *
     * @param string $username to set.
     *
     * @access public
     * @return bool on success
     */
    public function setUsername( $username)
    {
        $usernameIsOK 
            = isset($username) && $username != null && is_string($username);
        $return = false;
        if ($usernameIsOK) {
            $this->_username = $username;
            $return = true;
        }
        return $return;
    }


    /**
     * setPassword
     *
     * Attempts to set the member password
     *
     * @param string $password to set.
     *
     * @access public
     * @return bool on success
     */
    public function setPassword( $password)
    {
        $passwordIsOK 
            = isset($password) && $password != null && is_string($password);
        $return = false;
        if ($passwordIsOK) {
            $this->_password = $password;
            $return = true;
        }
        return $return;
    }


    /**
     * setServer
     *
     * Attempts to set the member server
     *
     * @param string $server to set.
     *
     * @access public
     * @return bool on success
     */
    public function setServer( $server)
    {
        $serverIsOK = isset($server) && $server != null && is_string($server);
        $return = false;
        if ($serverIsOK) {
            $this->_server = $server;
            $return = true;
        }
        return $return;
    }


    /**
     * setDatabase
     *
     * Attempts to set the member database
     *
     * @param string $database to set.
     *
     * @access public
     * @return bool on success
     */
    public function setDatabase( $database)
    {
        $databaseIsOK 
            = isset($database) && $database != null && is_string($database);
        $return = false;
        if ($databaseIsOK) {
            $this->_database = $database;
            $return = true;
        }
        return $return;
    }


    /**
     * toString
     *
     * Attempts to represent this as a string.
     *
     * @return String This as a string
     */
    public function __toString()
    {
        $out='';
        $out.=$this->getUsername();
        $out.=$this->getPassword();
        $out.=$this->getServer();
        $out.=$this->getDatabase();
        return $out;
    }


    /**
     * toArray
     *
     * Attempts to represent this as a array.
     *
     * @return Array This as a array
     */
    public function toArray()
    {
        $out=array();
        $out['username']=$this->getUsername();
        $out['password']=$this->getPassword();
        $out['server']=$this->getServer();
        $out['database']=$this->getDatabase();
        return $out;
    }


    /**
     * __construct
     *
     * Default constructor.
     */
    public function __construct()
    {
        $this->setUserName("cswebapp");
        $this->setPassword("w388App!");
        $this->setServer("localhost");
        $this->setDatabase("cs");
    }


}
