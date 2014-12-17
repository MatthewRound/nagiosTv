<?php
/**
 * Holds the class ./commands/CommandProblem.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./commands/CommandProblem.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


/**
 * CommandProblem 
 * 
 * @uses Command
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
class CommandProblem extends Command
{


    /**
     * execute 
     * 
     * @param CommandContext $context The context to use.
     * 
     * @access public
     * @return void
     */
    public function execute(CommandContext $context)
    {
        $error = $context->get("error")==null? "":$context->get("error");
        $this->display($error);
    }


    /**
     * display 
     * 
     * @param mixed $xml The xml to pass to the view.
     * 
     * @access public
     * @return void
     */
    public function display($xml)
    {
        include_once DIR_VIEWS."problem.php";
    }


}
