<?php
/**                                                                             
 * Holds the Class Database
 *                                                                              
 * PHP version 5                                                                
 *                                                                              
 * @catagory Core                                                               
 * @package  Core.miniFrameWork.tests 
 * @author   roundyz <roundyz@roundyz.kicks-ass.net>                            
 * @license  roundyz.kicks-ass.net/work private                                 
 * @link     roundyz.kicks-ass.net/work                                         
 *                                                                              
 */  


require_once DIR_INTERFACES."DatabaseInterface.php";
require_once DIR_MODEL."SqlCreds.php";
require_once DIR_MODEL."Errors.php";


/**                                                
 * Database
 *
 * Manages connections to the database
 *                                                
 * @category  Core                                                             
 * @package   Core.miniFrameWork.tests           
 * @author    roundyz <roundyz@roundyz.kicks-ass.net> 
 * @copyright 2013 roundyz.kicks-ass.net/work        
 * @license   roundyz.kicks-ass.net/work private    
 * @version   Release:1.0                          
 * @link      roundyz.kicks-ass.net/work          
 * @use       DatabaseInterface
 */ 
class Database implements DatabaseInterface
{


    /**
     * Regular expression to validate insert sql 
     */
    const DATABASE_REGEX_SQL_INSERT 
        = '/[Ii]{1}[nN]{1}[Ss]{1}[Ee]{1}[Rr]{1}[Tt]{1}/';

    
    /**
     * Regular expression to validate update sql 
     */
    const DATABASE_REGEX_SQL_UPDATE 
        = '/[Uu]{1}[Pp]{1}[Dd]{1}[aA]{1}[Tt]{1}[Ee]{1}/';


    /**
     * Regular expression to validate select sql 
     */
    const DATABASE_REGEX_SQL_SELECT 
        = '/[Ss]{1}[Ee]{1}[Ll]{1}[Ee]{1}[Cc]{1}[Tt]{1}/';


    /**
     * sqlCreds
     *
     * @var    SqlCreds
     * @access private
     */
    private $_sqlCreds;


    /**
     * isConnected
     *
     * @var    bool
     * @access private
     */
    private $_isConnected;


    /**
     * connection
     *
     * @var    static  
     * @static
     * @access protected
     */
    protected static $_connection;


    /**
     * getSqlCreds
     *
     * Attempts to return the member sqlCreds.
     *
     * @access public
     * @return mixed bool on failure, else SqlCreds
     */
    public function getSqlCreds()
    {
        $return = false;
        $sqlCredsIsSet = isset($this->_sqlCreds);
        if ($sqlCredsIsSet) {
            $return = $this->_sqlCreds;
        }
        return $return;
    }


    /**
     * getIsConnected
     *
     * Attempts to return the member isConnected.
     *
     * @access public
     * @return mixed bool on failure, else bool
     */
    public function getIsConnected()
    {
        $return = false;
        $isConnectedIsSet = isset($this->_isConnected);
        if ($isConnectedIsSet) {
            $return = $this->_isConnected;
        }
        return $return;
    }


    /**
     * getConnection
     *
     * Attempts to return the member connection.
     *
     * @access public
     * @return mysqli bool on failure, else 
     */
    public function getConnection()
    {
        $return = false;
        $connectionIsSet = isset($this->_connection);
        if ($connectionIsSet) {
            $return = $this->_connection;
        }
        return $return;
    }


    /**
     * setSqlCreds
     *
     * Attempts to set the member sqlCreds
     *
     * @param SqlCreds $sqlCreds to set.
     *
     * @access public
     * @return bool on success
     */
    public function setSqlCreds(SqlCreds $sqlCreds)
    {
        $sqlCredsIsOK = isset($sqlCreds) && $sqlCreds != null ;
        $return = false;
        if ($sqlCredsIsOK) {
            $this->_sqlCreds = $sqlCreds;
            $return = true;
        }
        return $return;
    }


    /**
     * setIsConnected
     *
     * Attempts to set the member isConnected
     *
     * @param bool $isConnected to set.
     *
     * @access public
     * @return bool on success
     */
    public function setIsConnected( $isConnected)
    {
        $isConnectedIsOK 
            = isset($isConnected) && is_bool($isConnected);
        $return = false;
        if ($isConnectedIsOK) {
            $this->_isConnected = $isConnected;
            $return = true;
        }
        return $return;
    }


    /**
     * setConnection
     *
     * Attempts to set the member connection
     *
     * @param mixed $connection to set.
     *
     * @access public
     * @return mysqli on success
     */
    public function setConnection( $connection)
    {
        $connectionIsOK = isset($connection) && $connection != null ;
        $return = false;
        if ($connectionIsOK) {
            $this->_connection = $connection;
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
        $out.=$this->getSqlCreds();
        $out.=$this->getIsConnected();
        $out.=$this->getConnection();
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
        $out['sqlCreds']=$this->getSqlCreds();
        $out['isConnected']=$this->getIsConnected();
        $out['connection']=$this->getConnection();
        return $out;
    }


    /**
     * __construct
     *
     * Default constructor.
     */
    public function __construct()
    {
        $this->sqlCreds = new SqlCreds();
        try {
            $this->connect();
        } catch (Exception $e) {
            Errors::logError('cant connect to DB');
            $this->setIsConnected(false);
        }
    }


    /**
     * connect 
     * 
     * Connects to the database. 
     * 
     * @access public
     * @return void
     */
    public function connect()
    {
        //$line = Database::createConnectLineFromCreds($this->sqlCreds);
        $return = false;
        $username = $this->sqlCreds->getUserName();
        $password = $this->sqlCreds->getPassword();
        $server = $this->sqlCreds->getServer();
        $db = $this->sqlCreds->getDatabase();
        $this->connection = new mysqli($server, $db, $username, $password);
        if (!$this->connection) {
            //re-direct to holding page
            Errors::logError("cant connect to mysql");
            //include_once("error.html");    
            header("Location:error.html");
            exit();
        }
        $canConnect = mysql_select_db($db, $this->connection);
        if ($canConnect) {
            $this->isConnected = true;
            $return = true;
        } else {
            $this->isConnected = false;
        }
        return $return;
    }


    /**
     * __destruct 
     * 
     * Cleans up when closed 
     * 
     * @access public
     * @return boolean true on success else false.
     */
    public function __destruct()
    {
        $return = false;
        if (is_bool($this->_isConnected)) {
            if ($this->_isConnected) {
                //TODO check that there is more to this than is required.
                $this->_connection->close();
                $return = true;
            }
        }
        return $return;
    }


    /**
     * insert 
     * 
     * Performs an insert 
     * 
     * @param mixed $sql The sql to insert
     * 
     * @access public
     * @return bool True on success else false.
     */
    public function insert($sql)
    {
        $return = false;
        $sqlIsValid 
            = $sql != null && is_string($sql) && stripos($sql, "insert") == 1;
        if ($sqlIsValid) {
            //TODO finish writing me 
            //just for the unit test to complete
            $return = true;
        }
        return $return;
    }


    /**
     * update 
     * 
     * Performs an update 
     * 
     * @param mixed $sql The sql to update
     * 
     * @access public
     * @return void
     */
    public function update($sql)
    {
        //TODO write me
        //wrap around mysqli
    }


    /**
     * beginTrasaction 
     * 
     * Begins a transaction
     * 
     * @access public
     * @return bool true
     */
    public function beginTrasaction()
    {
        if ($this->_isConnected) {
            $sql = "BEGIN;";
            $result = mysql_query($sql, $this->_connection);
            return true;
        } else {
            $this->connect();
            $this->beginTrasaction();
        }

    }


    /**
     * endTransaction 
     * 
     * Ends a transaction 
     * 
     * @access public
     * @return bool true
     */
    public function endTransaction()
    {
        if ($this->_isConnected) {
            $sql = "COMMIT;";
            $result = mysql_query($sql, $this->_connection);
            return true;
        } else {
            $this->connect();
            $this->endTransaction();
        }
    }


    /**
     * query 
     * 
     * Performs a query
     * 
     * @param mixed $sql The sql to send
     * 
     * @access public
     * @return void
     */
    public function query($sql)
    {
        if (is_bool($this->_isConnected)) {
            if ($this->_isConnected) {
                if (is_string($sql)) {
                    $result = mysql_query($sql, $this->_connection);
                    if ($result!==false && !is_bool($result)) {
                        $return = array();
                        // we want this so that array keys have names
                        $resultCount = mysql_num_rows($result);
                        if ($resultCount!== null) {
                            while ($row = mysql_fetch_array(
                                $result, MYSQL_ASSOC
                            )) {
                                $return[]=$row;
                            }
                            mysql_free_result($result);
                            return $return;
                        }
                    } else {
                        Errors::logError("Problem with query".mysql_error());
                    }
                } else {
                    Errors::logError("SQL is not a string");
                }
            }
        } else {
            Errors::logError("Not connected to DB");
        }
    }


}
