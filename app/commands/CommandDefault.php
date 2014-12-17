<?php
/**
 * Holds the class ./commands/CommandDefault.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./commands/CommandDefault.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


/**
 * CommandDefault 
 * 
 * @uses Command
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
class CommandDefault extends Command
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
        $this->display("");
        return true;
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
        include_once DIR_VIEWS."frontend.php";
    }


    /**
     * stripOfCommandPrefix 
     * 
     * @param mixed $name The name to have prefix removed from.
     * 
     * @static
     * @access public
     * @return String The correct classname without the command prefix.
     */
    public static function stripOfCommandPrefix($name)
    {
        $classname = get_class($name);
        $classnameIsPrefixedWithCommand 
            = preg_match('/[Cc]ommand/', $classname);
        if ($classnameIsPrefixedWithCommand) {
            $classname=lcfirst(substr($classname, 7, strlen($classname)-7));    
        }
        return $classname;
    }


}
