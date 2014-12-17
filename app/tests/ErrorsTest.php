<?php
/**
 * Holds the class ./tests/ErrorsTest.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./tests/ErrorsTest.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


require_once DIR_MODEL."Errors.php";


/**
 * ErrorsTest 
 * 
 * @uses PHPUnit
 * @uses _Framework_TestCase
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
class ErrorsTest extends PHPUnit_Framework_TestCase
{


    /**
     * testLogError 
     * 
     * @access public
     * @return void
     */
    public function testLogError()
    {
        $errorString = "THERE WAS AN ERROR";
        $ret = Errors::logError($errorString);
        $success = $ret = true;
        $this->assertTrue($success, true);
    }

}
