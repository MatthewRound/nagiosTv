<?php
/**
 * Holds the Status class
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
 * Status 
 * 
 * Runs and collects all the information from the nagios status file
 * Most properties within this class are for completion. For further definitions see
 * http://www.nagios.org/documentation/
 * 
 *   @category  Nagios
 *   @package   Com.example.nagios
 *   @author    Matthew Round <mround@example.com> 
 *   @copyright 2012 example
 *   @license   http://example.com example
 *   @version   Release:1.0
 *   @link      example.com 
 */
class Status
{


    /**
     * _statusFileLocation 
     * 
     * The status file location on the system 
     * 
     * @var String
     * @access private
     */
    private $_statusFileLocation;


    /**
     * _serviceList 
     *
     * A list of ServiceStatuses.
     *
     * @var ServiceList 
     * @access private
     */
    private $_serviceList;


    /**
     * getServiceList 
     * 
     * @access public
     * @return ServiceList
     */
    public function getServiceList()
    {
        $return = false;
        $serviceListIsSet = isset($this->_serviceList);
        if ($serviceListIsSet) {
            $return = $this->_serviceList;
        }
        return $return;
    }


    /**
     * setServiceList 
     * 
     * @param ServiceList $serviceList The list to set.
     * 
     * @access public
     * @return bool on success
     */
    public function setServiceList(ServiceList $serviceList)
    {
        $return = false;
        $serviceListIsOK = isset($serviceList) && $serviceList != null;
        if ($serviceListIsOK) {
            $this->_serviceList = $serviceList;
            $return = true;
        }
        return $return;
    }


    /**
     * getStatusFileLocation 
     * 
     * @access public
     * @return bool 
     */
    public function getStatusFileLocation()
    {
        $return = false;
        $statusFileLocationIsSet = isset($this->_statusFileLocation);
        if ($statusFileLocationIsSet) {
            $return = $this->_statusFileLocation;
        }
        return $return;

    }


    /**
     * setStatusFileLocation 
     * 
     * @param String $statusFileLocation The location to set.
     * 
     * @access public
     * @return bool
     */
    public function setStatusFileLocation($statusFileLocation)
    {
        $return = false;
        $statusFileLocationIsOK = isset($statusFileLocation) 
            && $statusFileLocation != null && is_string($statusFileLocation);
        if ($statusFileLocationIsOK) {
            $this->_statusFileLocation = $statusFileLocation;
            $return = true;
        }
        return $return;
    }


    /**
     * __toString 
     * 
     * @access public
     * @return String
     */
    public function __toString()
    {
        $out='';
        return $out;
    }

    /**
     * toArray 
     * 
     * @access public
     * @return String[]
     */
    public function toArray()
    {
        $out= array();
        return $out;
    }


    /**
     * parseStatusFile 
     * 
     * Attempts to parse the status file. 
     * 
     * @access public
     * @return Bool on success else String.
     */
    public function parseStatusFile()
    {
        $ret = true;
        $statusFile = File::constructWithLocation($this->getStatusFileLocation());
        $fileIsPresent = $statusFile->isPresent();    
        $fileIsReadable = $statusFile->canRead();
        $fileIsOkToOpen = $fileIsPresent && $fileIsReadable;
        if ($fileIsOkToOpen) {
            $fileContents = file_get_contents($this->getStatusFileLocation());
            $fileContentsOK = false != $fileContents;
            if ($fileContentsOK) {
                $splitParts = explode("\n\n", $fileContents);
                $splitIsOk = false != $splitParts  && 0 != count($splitParts);
                if ($splitIsOk) {
                    $this->_splitRawParts($splitParts);
                }
            } else {
                $ret = "Problem file has no contents.";
            }
        } else {
            $ret = "Problem file is not present or readable.";
        }
        return $ret;
    }


    /**
     * _splitRawParts 
     * 
     * Attempts to idenitfy the blocks ready to assemble into classes. 
     * 
     * @param String[] $splitParts The parts to split
     * 
     * @access private
     * @return void
     */
    private function _splitRawParts($splitParts)
    {
        foreach ($splitParts as $rawObjectAsString) {
            $linesInObject = explode("\n", $rawObjectAsString);
            $linesInObjectSplitOK = false != $linesInObject  
                && 0 != count($linesInObject);
            if ($linesInObjectSplitOK) {
                foreach ($linesInObject as $line) {
                    $lineIsAComment = preg_match("/#/", $line) == 1;
                    if ($lineIsAComment) {
                        continue;
                    }
                    $lineIsStartOfBlock = preg_match("/[a-zA-Z0-9]* \{/", $line);
                    $lineIsEndOfBlock = preg_match("/\}/", $line);
                    if ($lineIsStartOfBlock) {
                        $nameOnly = explode(" ", $line);
                        if ($nameOnly != false) {
                            $class = $this->_getClass($nameOnly[0]);
                            if ($class != false) {
                                $class->setRawLines($linesInObject);
                                $class->populateFromLines();
                                $className = get_class($class);        
                                $classNameIsAServiceStatus 
                                    = $className == "Servicestatus";
                                if ($classNameIsAServiceStatus) {
                                    $addToListResult 
                                        = $this->_serviceList->addToList($class);
                                }
                            } else {
                                //we don't have a class for this yet
                            }
                        }
                    }
                }
            }
        }
    }


    /**
     * _getClass 
     * 
     * Attempts to get the Class based on the line given. 
     * 
     * @param String $line The line. 
     * 
     * @access private
     * @return mixed A class or bool on failure.
     */
    private function _getClass($line) 
    {
        $return = false;
        $classes = $this->_getClassMap();
        $lineIsOk = null !== $line && is_string($line) && $line != "";
        if ($lineIsOk) {
            foreach ($classes as $cmp) {
                $cmpIsMatch = preg_match("/".$cmp[0]."/", $line) == 1;
                if ($cmpIsMatch) {
                    $fileName = $cmp[1];
                    $classname = ucfirst($cmp[0]);
                    try {
                        include_once $fileName;
                        $return = new $classname(); 
                    } catch (Exception $e) {
                        //throw fileNotFoundException    
                    }
                } else {
                    //we just dont match
                }
            }
        } else {
            //throw UnexpectedFormatException();
        }
        return $return;
    }


    /**
     * _getClassMap 
     * 
     * Gets an map of all valid classes. 
     * 
     * @access private
     * @return String[][] The map
     */
    private function _getClassMap() 
    {
        $host = array("hoststatus", "Hoststatus.php");
        $service = array("servicestatus", "Servicestatus.php");
        $info = array("info", "Info.php");
        $program = array("programstatus", "Programstatus.php");
        $contact = array("contactstatus", "Contactstatus.php");
        $classes = array();
        $classes[] = $service;
        $classes[] = $host;
        $classes[] = $info;
        $classes[] = $program;
        $classes[] = $contact;
        return $classes;
    }


    /**
     * __construct 
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->_serviceList = new ServiceList();
    }


}
