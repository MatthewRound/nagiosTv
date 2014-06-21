<?php
/**
 * Gets the services that are in a problem state.
 *
 * PHP version 5
 *
 *   @category Nagios
 *   @package  Com.example.nagios
 *   @author   Matthew Round <mround@example.com>
 *   @license  http://example.com example
 *   @link     example.com
 *
 */

/**
 * CommandGetProblemServices 
 * 
 * @uses Command
 * @package none
 * @version 1.0
 * @copyright 2014 
 * @author roundyz <roundyz@roundyz.kicks-ass.net> 
 * @license All rights and ownership reserved
 */
class CommandGetProblemServices extends Command
{


    /**
     * execute 
     * 
     * @param CommandContext $context 
     * @access public
     * @return void
     */
    public function execute(CommandContext $context)
	{
		$this->display($this->getServiceList()->getBreachingStates());
	}


    /**
     * display 
     * 
     * @param mixed $xml 
     * @access public
     * @return void
     */
    public function display($xml)
	{
		print $xml;
	}


}
