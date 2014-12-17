<?php
/**
 * Holds the class ./commands/Command.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./commands/Command.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


require_once DIR_MODEL."CommandContext.php";


/**
 * Command 
 * 
 * @abstract
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
abstract class Command
{


	/**
	 * getServiceList 
	 * 
	 * @access public
	 * @return void
	 */
	public function getServiceList()
	{
		$status = new Status();
		$configurationProperties = parse_ini_file("properties.ini");
		$statusFileLocation = $configurationProperties['location'];
		$status->setStatusFileLocation($statusFileLocation);
		$parseResult = $status->parseStatusFile();
		$parseResultOk = is_bool($parseResult) && $parseResult == true;
		if ($parseResultOk) {
			$this->serviceList = $status->getServiceList();
		} else {
			print '<p class="problem">'.$parseResult.' File='.$statusFileLocation.'</p>';
			exit;
		}
		return $this->serviceList;
	}


    /**
     * execute 
     * 
     * @param CommandContext $context The context to execute
     * 
     * @abstract
     * @access public
     * @return void
     */
    abstract function execute(CommandContext $context);


    /**
     * display 
     * 
     * @param mixed $xml The xml to display
     * 
     * @abstract
     * @access public
     * @return void
     */
    abstract function display($xml);

}
