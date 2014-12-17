<?php
/**
 * Holds the class ./models/Errors.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./models/Errors.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


/**
 * Errors 
 * 
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
class Errors
{


    /**
     * logError 
     * 
     * @param mixed $string The error description to log.
     * 
     * @static
     * @access public
     * @return void
     */
    static public function logError($string)
    {
        $ret = false;
        if (is_string($string)) {
			$ret = Errors::doLog("Error", $string, "\033[0;31m"); 
        }
        return $ret;
    }


    /**
     * logInfo 
     * 
     * @param mixed $string The info description to log.
     * 
     * @static
     * @access public
     * @return void
     */
    static public function logInfo($string)
    {
        $ret = false;
        if (is_string($string)) {
			$ret = Errors::doLog("Info", $string, "\033[0;32m"); 
        }
        return $ret;
    }
	

    /**
     * logWarn 
     * 
     * @param mixed $string The warn description to log.
     * 
     * @static
     * @access public
     * @return void
     */
    static public function logWarn($string)
    {
        $ret = false;
        if (is_string($string)) {
			$ret = Errors::doLog("Warn", $string, "\033[1;33m"); 
        }
        return $ret;
    }


	/**
	 * doLog 
	 * 
	 * @param string $prefix The Prefix for the log, error, warn, crit
	 * @param string $string The message to print out
	 * @param string $colour Terminal colour to use.
	 * 
	 * @static
	 * @access public
	 * @return void
	 */
	static public function doLog($prefix = "General", $string = 'Nothing to log', $colour = "\033[0m")
	{
		$stringToPrint = sprintf("%s %s: %s", APP_NAME, $prefix, $string);
		$ret = error_log($stringToPrint);
		if (ERROR_STDOUT_TOO) {
			$firstColor = '';
			$defaultColor = '';
			if (ERROR_USE_COLOUR_FOR_STDOUT) {
				$firstColor = $colour; 
				$defaultColor = "\033[0m";
			}
			printf("%s%s%s\n", $firstColor, $stringToPrint, $defaultColor);
		}

	}


}
