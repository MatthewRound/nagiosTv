<?php
/**
 * Holds the class ./tests/SqlCredsTest.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./tests/SqlCredsTest.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


require_once DIR_MODEL."SqlCreds.php";


/**
 * SqlCredsTest 
 * 
 * Tests the class SqlCreds
 *  
 * @uses PHPUnit_Framework_TestCase
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
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
