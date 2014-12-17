<?php
/**
 * Holds the class ./commands/CommandGetProblemServices.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./commands/CommandGetProblemServices.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


/**
 * CommandGetProblemServices 
 * 
 * @uses Command
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
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
