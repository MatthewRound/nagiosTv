<?php
/**
 * Holds the StatusPopulator class
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
 * StatusPopulator 
 * 
 * Holds a method to populate the correct object from the status file
 * 
 *   @category  Nagios
 *   @package   Com.example.nagios
 *   @author    Matthew Round <mround@example.com> 
 *   @copyright 2012 example
 *   @license   http://example.com example
 *   @version   Release:1.0
 *   @link      example.com 
 *   @use       StatusPopulator
 */
class StatusPopulator
{


    /**
     * _rawLines 
     * 
     * The raw lines from the status.dat file 
     * 
     * @var String[]
     * @access private
     */
    private $_rawLines;


    /**
     * getRawLines 
     * 
     * @access public
     * @return String[] on success else bool
     */
    public function getRawLines()
    {
        $return = false;
        $rawLinesIsSet = isset($this->_rawLines);
        if ($rawLinesIsSet) {
            $return = $this->_rawLines;
        }
        return $return;
    }


    /**
     * setRawLines 
     * 
     * @param String[] $rawLines The lines to set.
     * 
     * @access public
     * @return bool
     */
    public function setRawLines($rawLines)
    {
        $return = false;
        $rawLinesIsOK = isset($rawLines) && $rawLines != null 
            && is_array($rawLines);
        if ($rawLinesIsOK) {
            $this->_rawLines = $rawLines;
            $return = true;
        }
        return $return;
    }


    /**
     * populateFromLines 
     * 
     * @access public
     * @return void
     */
    public function populateFromLines()
    {
        $rawLines = $this->getRawLines();
        $rawLinesIsOK = isset($rawLines) && null !== $rawLines 
            && is_array($rawLines);
        if ($rawLinesIsOK) {
            for ($z=1; $z<count($rawLines)-1; $z++) {
                $line = $rawLines[$z];
                $split = explode("=", $line);
                $rest = $split[1];
                $splitQuantity = count($split);
                for ($i=2; $i<=$splitQuantity; $i++) {
                    if (isset($split[$i])) {
                        if ($i>3) {
                            $rest .= "=".$split[$i];
                        } else {
                            $rest .= $split[$i];
                        }
                    }
                }
                $splitName = ucfirst(str_replace("_", "", trim($split[0])));
                $callBackParams = array($this, 'set'.$splitName);
                try {
                    call_user_func($callBackParams, $rest);
                    //var_dump($callBackParams);
                } catch (Exception $e) {
                    //we dont have this method implemented
                }
            }
        } else {
            //throw unexpected format exception
        }
    }


    /**
     * toJson 
     * 
     * Encodes this to json object. 
     * 
     * @access public
     * @return String formatted json object.
     */
    public function toJson()
    {
        return json_encode($this->toArray());    
    }


}
