<?php
/**                                                                             
 * Holds the Test Class SqlCredsTest
 *                                                                              
 * PHP version 5                                                                
 *                                                                              
 * @category Tests
 * @package  Core.miniFrameWork.tests
 * @author   <roundyz32@gmail.com>                            
 * @license  roundyz.kicks-ass.net/work private                                 
 * @link   github.com/MatthewRound/nagiosTv                                         
 *                                                                              
 */                                                                             


require_once DIR_MODEL."SqlCreds.php";


/** 
 * SqlCredsTest
 *
 * Tests the class SqlCreds
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
class SqlCredsTest extends PHPUnit_Framework_TestCase
{


    /**
     * testGetAndSetUsername
     *
     * Tests the methods getUsername() and setUsername()
     *
     * @access public
     * @return void
     */
    public function testGetAndSetUsername()
    {
        $sqlcreds = new SqlCreds(); 
        $varToSet = "TESTSTRING";
        $setResult = $sqlcreds->setUsername($varToSet);
        $getResult = $sqlcreds->getUsername();
        $setOK = $setResult == true;
        $getOK = $getResult == $varToSet;
        $typeOK = $getResult === $varToSet;
        $success = $getOK && $setOK && $typeOK;
        $this->assertTrue($success, true);
    }
    

    /**
     * testGetAndSetPassword
     *
     * Tests the methods getPassword() and setPassword()
     *
     * @access public
     * @return void
     */
    public function testGetAndSetPassword()
    {
        $sqlcreds = new SqlCreds(); 
        $varToSet = "TESTSTRING";
        $setResult = $sqlcreds->setPassword($varToSet);
        $getResult = $sqlcreds->getPassword();
        $setOK = $setResult == true;
        $getOK = $getResult == $varToSet;
        $typeOK = $getResult === $varToSet;
        $success = $getOK && $setOK && $typeOK;
        $this->assertTrue($success, true);
    }
    

    /**
     * testGetAndSetServer
     *
     * Tests the methods getServer() and setServer()
     *
     * @access public
     * @return void
     */
    public function testGetAndSetServer()
    {
        $sqlcreds = new SqlCreds(); 
        $varToSet = "TESTSTRING";
        $setResult = $sqlcreds->setServer($varToSet);
        $getResult = $sqlcreds->getServer();
        $setOK = $setResult == true;
        $getOK = $getResult == $varToSet;
        $typeOK = $getResult === $varToSet;
        $success = $getOK && $setOK && $typeOK;
        $this->assertTrue($success, true);
    }
    

    /**
     * testGetAndSetDatabase
     *
     * Tests the methods getDatabase() and setDatabase()
     *
     * @access public
     * @return void
     */
    public function testGetAndSetDatabase()
    {
        $sqlcreds = new SqlCreds(); 
        $varToSet = "TESTSTRING";
        $setResult = $sqlcreds->setDatabase($varToSet);
        $getResult = $sqlcreds->getDatabase();
        $setOK = $setResult == true;
        $getOK = $getResult == $varToSet;
        $typeOK = $getResult === $varToSet;
        $success = $getOK && $setOK && $typeOK;
        $this->assertTrue($success, true);
    }
    

    /**
     * testconstructor 
     * 
     * Tests the contrutor 
     * 
     * @access public
     * @return void
     */
    public function testconstructor()
    {
        $sqlcreds = new SqlCreds(); 
        $expectedUserName = "cswebapp";
        $expectedPassword = "w388App!";
        $expectedServer = "localhost";
        $expectedDatabase = "cs";
        $actualUserName = $sqlcreds->getUsername();
        $actualPassword = $sqlcreds->getPassword();
        $actualServer = $sqlcreds->getServer();
        $actualDatabase = $sqlcreds->getDatabase();
        $usernameOK= $actualUserName == $expectedUserName;
        $passwordOK= $actualPassword == $expectedPassword;
        $serverOK= $actualServer == $expectedServer;
        $databaseOK= $actualDatabase == $expectedDatabase;
        $success = $usernameOK && $passwordOK && $serverOK && $databaseOK;
        $this->assertTrue($success, true);
    }


}
