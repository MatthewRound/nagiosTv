<?php
/**                                                                             
 * Holds the Test Class DatabaseTest
 *                                                                              
 * PHP version 5                                                                
 *                                                                              
 * @catagory Tests
 * @package  Core.miniFrameWork.tests
 * @author   roundyz <roundyz@roundyz.kicks-ass.net>                            
 * @license  roundyz.kicks-ass.net/work private                                 
 * @link     roundyz.kicks-ass.net/work                                         
 *                                                                              
 */


require_once DIR_MODEL."Database.php";


/**                                               
 * DatabaseTest
 *
 * Tests the class Database
 *                                               
 * @category  Tests                                                             
 * @package   Core.miniFrameWork.tests          
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>
 * @copyright 2013 roundyz.kicks-ass.net/work       
 * @license   roundyz.kicks-ass.net/work private   
 * @version   Release:1.0                         
 * @link      roundyz.kicks-ass.net/work         
 * @use       PHPUnit_Framework_TestCase
 */     
class DatabaseTest extends PHPUnit_Framework_TestCase
{


    /**
     * testGetAndSetSqlCreds
     *
     * Tests the methods getSqlCreds() and setSqlCreds()
     *
     * @access public
     * @return void
     */
    public function testGetAndSetSqlCreds()
    {
        $database = new Database(); 
        $varToSet = new SqlCreds();
        $setResult = $database->setSqlCreds($varToSet);
        $getResult = $database->getSqlCreds();
        $setOK = $setResult == true;
        $getOK = $getResult == $varToSet;
        $typeOK = $getResult === $varToSet;
        $success = $getOK && $setOK && $typeOK;
        $this->assertTrue($success, true);
    }
    

    /**
     * testGetAndSetIsConnected
     *
     * Tests the methods getIsConnected() and setIsConnected()
     *
     * @access public
     * @return void
     */
    public function testGetAndSetIsConnected()
    {
        $database = new Database(); 
        $varToSet = false;
        $setResult = $database->setIsConnected($varToSet);
        $getResult = $database->getIsConnected();
        $setOK = $setResult == true;
        $getOK = $getResult == $varToSet;
        $typeOK = $getResult === $varToSet;
        $success = $getOK && $setOK && $typeOK;
        $this->assertTrue($success, true);
    }
    

    /**
     * testGetAndSetConnection
     *
     * Tests the methods getConnection() and setConnection()
     *
     * @access public
     * @return void
     */
    public function testGetAndSetConnection()
    {
        $database = new Database(); 
        $varToSet = "aa";
        $setResult = $database->setConnection($varToSet);
        $getResult = $database->getConnection();
        $setOK = $setResult == true;
        $getOK = $getResult == $varToSet;
        $typeOK = $getResult === $varToSet;
        $success = $getOK && $setOK && $typeOK;
        $this->assertTrue($success, true);
    }
    
        
    /**
     * testConstruct 
     * 
     * Tests the default constructor 
     * 
     * @access public
     * @return void
     */
    public function testConstruct()
    {
        $success = false;
        $database = new DatabaseMockContruct(); 
        $creds = $database->getSqlCreds();
        $sqlCredsOK = $creds == false;
        $isConnected = $database->getIsConnected();
        $connectedOK = $isConnected == true;
        $success = $sqlCredsOK && $connectedOK;
        $this->assertTrue($success, true);
    }

        
    /**
     * testConnect 
     * 
     * tests the function connect() 
     * 
     * @access public
     * @return void
     */
    public function testConnect()
    {
        //TODO WRITE ME
        $success = false;
        $this->assertTrue($success, true);
    }
    

    /**
     * testInsert 
     * 
     * tests the function insert() 
     * 
     * @access public
     * @return void
     */
    public function testInsert()
    {
        $success = false;
        $database = new DatabaseMockContruct(); 
        $validSql = "insert into table value value";
        $invalidSql = "select * from table";
        $insertValidSqlOk = $database->insert($validSql) == true;
        $insertInValidSqlOk = $database->insert($invalidSql) == false;
        $success = $insertValidSqlOk && $insertInValidSqlOk;
        $this->assertTrue($success, true);
    }

    
    /**
     * testUpdate 
     * 
     * Tests the function update() 
     * 
     * @access public
     * @return void
     */
    public function testUpdate()
    {
        //TODO WRITE ME
        $success = false;
        $this->assertTrue($success, true);
    }


    
    /**
     * testbeginTrasaction 
     * 
     * tests the function beginTrasaction() 
     * 
     * @access public
     * @return void
     */
    public function testbeginTrasaction()
    {
        //TODO WRITE ME
        $success = false;
        $this->assertTrue($success, true);
    }

    
    /**
     * testEndTrasaction 
     * 
     * tests the function endTrasaction() 
     * 
     * @access public
     * @return void
     */
    public function testEndTrasaction()
    {
        //TODO WRITE ME
        $success = false;
        $this->assertTrue($success, true);
    }

    
    /**
     * testQuery 
     * 
     * tests the function query() 
     * 
     * @access public
     * @return void
     */
    public function testQuery()
    {
        //TODO WRITE ME
        $success = false;
        $this->assertTrue($success, true);
    }


}






/**
 * DatabaseMockContruct
 *
 * Used to test the Database construct method.
 *
 * @category  Tests                                                             
 * @package   Core.miniFrameWork.tests                                     
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                          
 * @copyright 2013 roundyz.kicks-ass.net/work                                   
 * @license   roundyz.kicks-ass.net/work private                                
 * @version   Release:1.0                                                      
 * @link      roundyz.kicks-ass.net/work                                        
 * @use       PHPUnit_Framework_TestCase
 */     
class DatabaseMockContruct extends Database
{


    /**
     * __construct 
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * connect 
     * 
     * Sets  
     * 
     * @access public
     * @return boolean Allways true;
     */
    public function connect()
    {
        $this->setIsConnected(true);
        $return = true;
    }

}
