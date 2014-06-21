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

class CommandGetSummary extends Command
{

    public function execute(CommandContext $context)
	{
		$this->display($this->getServiceList()->getSummary());
	}

    public function display($xml)
	{
		print $xml;
	}
}
