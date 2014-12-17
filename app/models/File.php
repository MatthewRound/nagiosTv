<?php
/**
 * Holds the class ./models/File.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./models/File.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


/**
 * File 
 * 
 * Represents a file on the file system
 * Holds information about the path,name, etc. 
 * Performs basic checks to the file.
 * 
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
class File
{


    /**
     * location 
     * 
     * The full location of the file 
     * This should include the file itself e.g /bin/bash
     * 
     * @var String 
     * @access public
     */
    public $location;


    /**
     * name 
     * 
     * The name of the file
     * Not really important, just an alias...
     * 
     * @var String 
     * @access public
     */
    public $name;


    /**
     * constructWithLocation 
     * 
     * Construct with location
     *
     * @param String $location The location of the file
     *
     * @return File An instance of file with the location set 
     * @static
     * @access public
     */
    public static function constructWithLocation($location)
    {
        $file = new self();
        if (is_string($location)) {
            $file->setLocation($location);
        }
        return $file;
    }


    /**
     * __construct 
     * 
     * Default constructor
     * Sets up the default location (/tmp) and name.
     * 
     * @access protected
     * @return void
     */
    public function __construct()
    {
        $this->location = "/tmp"; //seems like a safe default...
        $this->name = "unspecified name";
    }


    /**
     * isPresent 
     * 
     * Checks to see if the file  is present
     * Uses the location var
     * 
     * @access public
     * @return Boolean true if present
     */
    public function isPresent()
    {
        $ret = false;
        $fileIsPresent = file_exists($this->getLocation());
        if ($fileIsPresent) {
            $ret=true;
        }
        return $ret;
    }


    /**
     * isZeroLength 
     * 
     * Checks to see if the file is of zero length
     * Uses the $this->getLocation() 
     * 
     * @access public
     * @return Boolean true if size = 0
     */
    public function isZeroLength()
    {
        $ret = false;
        $fileSizeInBytes = filesize($this->getLocation());
        $fileSizeIsZero = $fileSizeInBytes==0;
        if ($fileSizeIsZero) {
            $ret=true;
        }
        return $ret;
    }


    /**
     * canRead 
     * 
     * Checks to see if the file can be read
     * Uses the location var
     * 
     * @access public
     * @return Boolean true if file is readable
     */
    public function canRead()
    {
        $ret = false;
        $locationIsReadable = is_readable($this->getLocation()); 
        if ($locationIsReadable) {
            $ret=true;
        }
        return $ret;
    }


    /**
     * isExecutable 
     * 
     * Checks to see if the file  is executable
     * Uses the $this->getLocation() 
     * 
     * @access public
     * @return Boolean true if file can be executed
     */
    public function isExecutable()
    {
        $ret = false;
        if ($this->isPresent()) {
            $fileIsExecutable = is_executable($this->getLocation());
            if ($fileIsExecutable) {
                $ret=true;
            }
        }
        return $ret;
    }


    /**
     * checkFile 
     * 
     * General check that aggregates the other checks in this class
     * Uses the location var, performs isPresent(), canRead() 
     * and isZeroLength() in that order.
     * 
     * @access public
     * @return Boolean true if file meets the criteria of existing, 
     *         being readable and greater that 0 bytes.
     */
    public function checkFile()
    {
        $ret = false;
        $isPresent= $this->isPresent()==true?true:false;
        if ($isPresent) {
            $canRead=$this->canRead()==true?true:false;
            if ($canRead) {
                $isEmpty=$this->isZeroLength()==true?true:false;
                if ($isPresent && !$isEmpty ) {
                    $ret = true;
                }
            }
        }
        return $ret;    
    }


    /**
     * getLocation 
     * 
     * Gets the location var
     * Uses the location var
     * 
     * @access public
     * @return String The location var
     */
    public function getLocation()
    {
        return $this->location;
    }


    /**
     * getName 
     * 
     * Gets the name var
     * Uses the name var
     * 
     * @access public
     * @return String The name var
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * setLocation 
     * 
     * Sets the location var
     * Uses the location var
     * 
     * @param String $location The full location on the file system of the file
     * 
     * @access public
     * @return void
     */
    public function setLocation($location)
    {
        if (is_string($location)) {
            $this->location=$location;
        }
    }


    /**
     * setName 
     * 
     * Sets the $name var
     * Uses the $name var
     * 
     * @param String $name The name of the file
     * 
     * @access public
     * @return void
     */
    public function setName($name)
    {
        if (is_string($name)) {
            $this->name = $name;
        } else {
            $this->name = "No name specified";
        }
    }


}
