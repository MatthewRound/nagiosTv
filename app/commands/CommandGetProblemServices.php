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
/* require_once "Status.php"; */

class CommandGetProblemServices extends Command
{

    public function execute(CommandContext $context)
	{
		$this->display($this->getServiceList()->getBreachingStates());
	}

    public function display($xml)
	{
		print $xml;
	}
}

