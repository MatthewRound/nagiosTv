<?php
/**                                                                             
 * Holds the Class CommandContext
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
 * CommandContext
 *
 * Represnts the context of a command.
 *                                                                            
 * @category  Core                  
 * @package   Core.miniFrameWork                                              
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                     
 * @copyright 2013 roundyz.kicks-ass.net/work                              
 * @license   roundyz.kicks-ass.net/work private                               
 * @version   Release:1.0                                                      
 * @link      roundyz.kicks-ass.net/work                                     
 * @use       CommandContextInterface                                   
 */    
class CommandContext implements CommandContextInterface
{


    /**
     * params
     *
     * @var    array
     * @access private
     */
    private $_params = array();


    /**
     * error
     *
     * @var    String
     * @access private
     */
    private $_error = "";


    /**
     * getParams
     *
     * Attempts to return the member params.
     *
     * @access public
     * @return mixed bool on failure, else array
     */
    public function getParams()
    {
        $return = false;
        $paramsIsSet = isset($this->_params);
        if ($paramsIsSet) {
            $return = $this->_params;
        }
        return $return;
    }


    /**
     * getError
     *
     * Attempts to return the member error.
     *
     * @access public
     * @return mixed bool on failure, else String
     */
    public function getError()
    {
        $return = false;
        $errorIsSet = isset($this->_error);
        if ($errorIsSet) {
            $return = $this->_error;
        }
        return $return;
    }


    /**
     * setParams
     *
     * Attempts to set the member params
     *
     * @param array $params to set.
     *
     * @access public
     * @return bool on success
     */
    public function setParams( $params)
    {
        $paramsIsOK = isset($params) && $params != null && is_array($params);
        $return = false;
        if ($paramsIsOK) {
            $this->_params = $params;
            $return = true;
        }
        return $return;
    }


    /**
     * setError
     *
     * Attempts to set the member error
     *
     * @param string $error to set.
     *
     * @access public
     * @return bool on success
     */
    public function setError( $error)
    {
        $errorIsOK = isset($error) && $error != null && is_string($error);
        $return = false;
        if ($errorIsOK) {
            $this->_error = $error;
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
        $out.=$this->getParams();
        $out.=$this->getError();
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
        $out['params']=$this->getParams();
        $out['error']=$this->getError();
        return $out;
    }


    /**
     * __construct
     *
     * Default constructor.
     */
    public function __construct()
    {
        $remoteAddressIsSet = isset($_SERVER['REMOTE_ADDR']);
        $requestIsSet = isset($_REQUEST);
        if ($remoteAddressIsSet) { 
            $this->addParam("ip", $_SERVER['REMOTE_ADDR']);
        }
        if ($requestIsSet) {
            $this->setParams($_REQUEST);
        }
        //        $this->paramsToDB();
    }


    /**
     * addParam 
     * 
     * Adds a parameter.
     * 
     * @param mixed $key The key to access the parameter.
     * @param mixed $val The value to assign to the parameter.
     * 
     * @access public
     * @return true
     */
    public function addParam($key, $val)
    {
        $this->_params[$key]=$val;
        return true;
    }


    /**
     * get 
     * 
     * Gets a parameter via it's key. 
     * 
     * @param mixed $key The key to use.
     * 
     * @access public
     * @return mixed The parameter.
     */
    public function get($key)
    {
        $ret = false;
        if ($this->_params != null) {
            $keyTwo = isset($key) ? $key : null;
            $indexIsSet = isset($this->_params[$keyTwo]);
            if ($indexIsSet) {
                $ret = $this->_params[$keyTwo];
            }
        }
        return $ret; 
    }


    /**
     * paramsToDB 
     * 
     * Logs all parameters to the database. 
     * 
     * @access public
     * @return void
     */
    public function paramsToDB()
    {
        $result = true;
        $sessionId = $this->getSessionId();
        while ($value = current($this->_params)) {
            $key = key($this->_params);
            $addParametersSqlFormat = "insert into httprequestparameters "
                ."(sessionid,parameterkey,parametervalue) "
                ."values ('%s','%s','%s')";
            $addParametersSqlQuery = sprintf(
                $addParametersSqlFormat,
                mysql_real_escape_string($sessionId),
                mysql_real_escape_string($key),
                mysql_real_escape_string($value)
            );
            $result = $this->sendToDB($addParametersSqlQuery);
            $resultBad = $result != true;
            if ($resultBad) {
                Errors::logError(
                    "Bad result when inserting into httprequestparameters sql:"
                    .$addParametersSqlQuery
                );
                $result = false;
            } else {
                next($this->_params);
            }
        }
        return $result;
    }


    /**
     * sendToDB 
     * 
     * @param string $sql The sql to send
     * 
     * @access protected
     * @return boolean
     */
    protected function sendToDB($sql)
    {
        $return = false;
        $sqlOK = isset($sql) && $sql != null && is_string($sql);
        if ($sqlOK) {
            $db = new Database();
            $return = $db->query($sql);
        }
        return $return;
    }


    /**
     * getSessionId 
     * 
     * @access protected
     * @return mixed the session id
     */
    protected function getSessionId()
    {
        return session_id();
    }


}
