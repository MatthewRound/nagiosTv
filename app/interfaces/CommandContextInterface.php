<?php
/**
 * Holds the class ./interfaces/CommandContextInterface.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./interfaces/CommandContextInterface.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


/**
 * CommandContextInterface 
 * 
 * The interface for the Command Context.
 *
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
interface CommandContextInterface
{


    /**
     * addParam 
     * 
     * @param mixed $key The key to index the value.
     * @param mixed $val The value to be indexed by key.
     * 
     * @access public
     * @return void
     */
    public function addParam($key, $val);


    /**
     * get 
     * 
     * @param mixed $key The key to get the value for
     * 
     * @access public
     * @return void
     */
    public function get($key);


}
