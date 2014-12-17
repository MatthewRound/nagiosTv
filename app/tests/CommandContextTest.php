<?php
/**
 * Holds the class ./tests/CommandContextTest.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./tests/CommandContextTest.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


require_once DIR_MODEL.'CommandContext.php';


 
/**
 * CommandContextTest 
 * 
 * Tests the class CommandContext
 *                                     
 * @uses PHPUnit
 * @uses _Framework_TestCase
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
class CommandContextTest extends PHPUnit_Framework_TestCase
{


    /**
     * testGetAndSetParams
     *
     * Tests the methods getParams() and setParams()
     *
     * @access public
     * @return void
     */
    public function testGetAndSetParams()
    {
        $commandcontext = new CommandContext(); 
        $varToSet = array();
        $varToSet[] = "test";
        $setResult = $commandcontext->setParams($varToSet);
        $getResult = $commandcontext->getParams();
        $setOK = $setResult == true;
        $getOK = $getResult == $varToSet;
        $typeOK = $getResult === $varToSet;
        $success = $getOK && $setOK && $typeOK;
        $this->assertTrue($success, true);
    }
    

    /**
     * testGetAndSetError
     *
     * Tests the methods getError() and setError()
     *
     * @access public
     * @return void
     */
    public function testGetAndSetError()
    {
        $commandcontext = new CommandContext(); 
        $varToSet = "TESTSTRING";
        $setResult = $commandcontext->setError($varToSet);
        $getResult = $commandcontext->getError();
        $setOK = $setResult == true;
        $getOK = $getResult == $varToSet;
        $typeOK = $getResult === $varToSet;
        $success = $getOK && $setOK && $typeOK;
        $this->assertTrue($success, true);
    }
    

    /**
     * testConstructor 
     * 
     * Tests the constructor 
     * 
     * @access public
     * @return void
     */
    public function testConstructor()
    {
        $_SERVER['REMOTE_ADDR'] = "127.0.0.1";
        $commandcontext = new CommandContext(); 
        $returnedParam = $commandcontext->get("ip");
        $returnedParamOK = $returnedParam == $_SERVER['REMOTE_ADDR'];
        $success = $returnedParamOK;
        $this->assertTrue($success, true);
    }


    /**
     * testaddParam 
     * 
     * Tests the function addParam()
     * 
     * @access public
     * @return void
     */
    public function testaddParam()
    {
        $commandcontext = new CommandContext(); 
        $paramKey = "key";
        $paramVal = "value";
        $commandcontext->addParam($paramKey, $paramVal);
        $gotParams=$commandcontext->getParams();
        $keyMatches = array_key_exists($paramKey, $gotParams);
        $valMatches = $gotParams[$paramKey] == $paramVal;
        $success = $keyMatches && $valMatches;
        $this->assertTrue($success, true);
    }

    
    /**
     * testget 
     * 
     * Tests the function get() 
     * 
     * @access public
     * @return void
     */
    public function testget()
    {
        $commandcontext = new CommandContext(); 
        $paramKey = "key";
        $paramVal = "value";
        $commandcontext->addParam($paramKey, $paramVal);
        $getResult = $commandcontext->get($paramKey);
        $getResultOk = $getResult != null && $getResult != false 
            && is_string($getResult) && $getResult == $paramVal;
        $success = $getResultOk;
        $this->assertTrue($success, true);
    }


    /**
     * testparamsToDB 
     * 
     * Tests the function paramsToDB() 
     * 
     * @access public
     * @return void
     */
    public function testparamsToDB()
    {
        $commandcontext = new CommandContextMock(); 
        $paramKey = "key";
        $paramVal = "value";
        $commandcontext->addParam($paramKey, $paramVal);
        $result = $commandcontext->paramsToDB();
        $resultOK = $result == true;
        $success = $resultOK;
        $this->assertTrue($success, true);
    }


}





/**
 * CommandContextMock
 *
 * Used for mocking the method sendToDB
 *
 * @category  Tests                                                             
 * @package   Core.miniFrameWork.tests                                   
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                        
 * @copyright 2013 roundyz.kicks-ass.net/work                                   
 * @license   roundyz.kicks-ass.net/work private                                
 * @version   Release:1.0                                                      
 * @link      roundyz.kicks-ass.net/work                                        
 * @use       CommandContext
 */    
class CommandContextMock extends CommandContext
{


    /**
     * getSessionId 
     * 
     * @access protected
     * @return int 1 every time
     */
    protected function getSessionId()
    {
        return 1;
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
        $expectedValue = "insert into httprequestparameters "
            ."(sessionid,parameterkey,parametervalue) values ('".
            $this->getSessionId()."','key','value')";
        $sqlIsExpected = $sql == $expectedValue;
        if ($sqlIsExpected) {
            $return = true;
        }
        return $return;
    }


}
