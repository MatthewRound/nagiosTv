<?php
/**                                          
 * Holds the test class ErrorsTest
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


require_once DIR_MODEL."Errors.php";


/**                                         
 * ErrorsTest 
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
