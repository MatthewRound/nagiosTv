<?php
/**
 * Holds the class ./tests/ControllerTest.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./tests/ControllerTest.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


require_once DIR_MODEL."Controller.php";


/**
 * ControllerTest 
 * 
 * Tests the class Controller
 *                                     
 * @uses PHPUnit
 * @uses _Framework_TestCase
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
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
