<?php
/**                                                                             
 * Holds the Test Class ControllerTest
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


require_once DIR_MODEL."Controller.php";


/** 
 * ControllerTest
 *
 * Tests the class Controller
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
class ControllerTest extends PHPUnit_Framework_TestCase
{


    /**
     * testGetAndSetContext
     *
     * Tests the methods getContext() and setContext()
     *
     * @access public
     * @return void
     */
    public function testGetAndSetContext()
    {
        $controller = new Controller(); 
        $varToSet = new CommandContext();
        $setResult = $controller->setContext($varToSet);
        $getResult = $controller->getContext();
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
        $success = false;
        $constructor = new Controller();
        $context = $constructor->getContext();
        $contextOK = $context!=null;
        $success = $contextOK;
        $this->assertTrue($success, true);
    }


    /**
     * testProcess 
     * 
     * Tests the function process()
     * 
     * @access public
     * @return void
     */
    public function testProcess()
    {
        $success = false;
        $controller = new Controller();
        $returnedValue = $controller->process();
        $returnedValueAsExpected = $returnedValue == false;
        $success = $returnedValueAsExpected;
        $this->assertTrue($success, true);
    }


}
