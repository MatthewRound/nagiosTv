<?php
/**
 * Gets the summary of all the services.
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
 * CommandGetSummary 
 * 
 * @uses Command
 * @package none
 * @version 1.0
 * @copyright 2014 
 * @author roundyz <roundyz@roundyz.kicks-ass.net> 
 * @license All rights and ownership reserved
 */
class CommandGetSummary extends Command
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
		$this->display($this->getServiceList()->getSummary());
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
