<?php
/**                                                                             
 * Holds the Class Controller
 *                                                                              
 * PHP version 5                                                                
 *                                                                              
 * @catagory Core                                                               
 * @package  Core.miniFrameWork                                               
 * @author   roundyz <roundyz@roundyz.kicks-ass.net>                          
 * @license  roundyz.kicks-ass.net/work private                                
 * @link     roundyz.kicks-ass.net/work                                        
 *                                                                              
 */


/**                                                                           
 * Controller
 *
 * Represents the main controller 
 *                                                                            
 * @category  Core              
 * @package   Core.miniFrameWork                                              
 * @author    roundyz <roundyz@roundyz.kicks-ass.net>                         
 * @copyright 2013 roundyz.kicks-ass.net/work                                 
 * @license   roundyz.kicks-ass.net/work private                              
 * @version   Release:1.0                                                     
 * @link      roundyz.kicks-ass.net/work                                      
 * @use       ControllerInterface                                            
 */   
class Controller implements ControllerInterface
{


    /**
     * context
     *
     * @var    CommandContext
     * @access private
     */
    private $_context;


    /**
     * getContext
     *
     * Attempts to return the member context.
     *
     * @access public
     * @return mixed bool on failure, else CommandContext
     */
    public function getContext()
    {
        $return = false;
        $contextIsSet = isset($this->_context);
        if ($contextIsSet) {
            $return = $this->_context;
        }
        return $return;
    }


    /**
     * setContext
     *
     * Attempts to set the member context
     *
     * @param CommandContext $context to set.
     *
     * @access public
     * @return bool on success
     */
    public function setContext(CommandContext $context)
    {
        $contextIsOK = isset($context) && $context != null ;
        $return = false;
        if ($contextIsOK) {
            $this->_context = $context;
            $return = true;
        }
        return $return;
    }


    /**
     * toString
     *
     * Attempts to represent this as a string.
     *
     * @return String This as a string
     */
    public function __toString()
    {
        $out='';
        $out.=$this->getContext();
        return $out;
    }


    /**
     * toArray
     *
     * Attempts to represent this as a array.
     *
     * @return Array This as a array
     */
    public function toArray()
    {
        $out=array();
        $out['context']=$this->getContext();
        return $out;
    }


    /**
     * __construct
     *
     * Default constructor.
     */
    public function __construct()
    {
        $this->_context = new CommandContext();
    }


    /**
     * process 
     * 
     * Processes the control.
     * 
     * @access public
     * @return void
     */
    public function process()
    {
        $return = false;
        $cmd = CommandFactory::getCommand($this->_context->get('command'));
        if (!$cmd->execute($this->_context)) {
            // Maybe strip of this pointless else statement
            Errors::logError(
                "Failed to execute command from context "
                .$this->_context->get('command')
            );
        } else {
            $return = true;
        }   
        return $return;
    }  


}
