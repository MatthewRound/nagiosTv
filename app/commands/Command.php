<?php
/**                                                                             
 * Holds the Abstract Class Command
 *                                                                              
 * PHP version 5                                                                
 *                                                                              
 * @catagory Core                                                               
 * @package  Core.miniFrameWork
 * @author   <roundyz32@gmail.com>                            
 * @license  as is.                                                             
 * @link   github.com/MatthewRound/nagiosTv                                         
 *                                                                              
 */ 


require_once DIR_MODEL."CommandContext.php";


/**                                                                     
 * Command                                                                
 *                                                                            
 * @abstract                                                                  
 * @category  Core                                                            
 * @package   Core.miniFrameWork                                         
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                      
 * @copyright 2013 roundyz.kicks-ass.net/work                           
 * @license   roundyz.kicks-ass.net/work private                        
 * @version   Release:1.0                                               
 * @link      roundyz.kicks-ass.net/work                               
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
