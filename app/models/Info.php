<?php
/**
 * Holds the class ./models/Info.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./models/Info.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


/**
 * Info 
 * 
 * Represents the general information about the Nagios status file
 * Most properties within this class are for completion. For further definitions see
 * http://www.nagios.org/documentation/
 * 
 * @uses StatusPopulator
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
class Info extends StatusPopulator
{


    /**
     * _created 
     * 
     * @var String
     * @access private
     */
    private $_created;


    /**
     * _version 
     * 
     * @var String
     * @access private
     */
    private $_version;


    /**
     * _last_update_check 
     * 
     * @var String
     * @access private
     */
    private $_last_update_check;


    /**
     * _update_available 
     * 
     * @var String
     * @access private
     */
    private $_update_available;

 
    /**
     * _last_version 
     * 
     * @var String
     * @access private
     */
    private $_last_version;


    /**
     * _new_version 
     * 
     * @var String
     * @access private
     */
    private $_new_version;



    /**
     * getCreated 
     * 
     * @access public
     * @return Mixed, bool on failure.
     */
    public function getCreated()
    {
        $return = false;
        $createdIsSet = isset($this->_created);
        if ($createdIsSet) {
            $return = $this->_created;
        }
        return $return;
    }


    /**
     * getVersion 
     * 
     * @access public
     * @return Mixed, bool on failure.
     */
    public function getVersion()
    {
        $return = false;
        $versionIsSet = isset($this->_version);
        if ($versionIsSet) {
            $return = $this->_version;
        }
        return $return;
    }


    /**
     * getLastupdatecheck 
     * 
     * @access public
     * @return Mixed, bool on failure.
     */
    public function getLastupdatecheck()
    {
        $return = false;
        $last_update_checkIsSet = isset($this->_last_update_check);
        if ($last_update_checkIsSet) {
            $return = $this->_last_update_check;
        }
        return $return;
    }


    /**
     * getUpdateavailable 
     * 
     * @access public
     * @return Mixed, bool on failure.
     */
    public function getUpdateavailable()
    {
        $return = false;
        $update_availableIsSet = isset($this->_update_available);
        if ($update_availableIsSet) {
            $return = $this->_update_available;
        }
        return $return;
    }


    /**
     * getLastversion 
     * 
     * @access public
     * @return Mixed, bool on failure.
     */
    public function getLastversion()
    {
        $return = false;
        $last_versionIsSet = isset($this->_last_version);
        if ($last_versionIsSet) {
            $return = $this->_last_version;
        }
        return $return;
    }


    /**
     * getNewversion 
     * 
     * @access public
     * @return Mixed, bool on failure.
     */
    public function getNewversion()
    {
        $return = false;
        $new_versionIsSet = isset($this->_new_version);
        if ($new_versionIsSet) {
            $return = $this->_new_version;
        }
        return $return;
    }


    /**
     * setCreated 
     * 
     * @param mixed $created To set.
     * 
     * @access public
     * @return bool On success
     */
    public function setCreated($created)
    {
        $return = false;
        $createdIsOK 
            = isset($created) && $created != null && is_int($created);
        if ($createdIsOK) {
            $this->_created = $created;
            $return = true;
        }
        return $return;
    }


    /**
     * setVersion 
     * 
     * @param mixed $version To set.
     * 
     * @access public
     * @return bool On success
     */
    public function setVersion($version)
    {
        $return = false;
        $versionIsOK = isset($version) && $version != null;
        if ($versionIsOK) {
            $this->_version = $version;
            $return = true;
        }
        return $return;
    }


    /**
     * setLastupdatecheck 
     * 
     * @param mixed $last_update_check To set.
     * 
     * @access public
     * @return bool On success
     */
    public function setLastupdatecheck($last_update_check)
    {
        $return = false;
        $last_update_checkIsOK 
            = isset($last_update_check) && $last_update_check != null;
        if ($last_update_checkIsOK) {
            $this->_last_update_check = $last_update_check;
            $return = true;
        }
        return $return;
    }


    /**
     * setUpdateavailable 
     * 
     * @param mixed $update_available To set.
     * 
     * @access public
     * @return bool On success
     */
    public function setUpdateavailable($update_available)
    {
        $return = false;
        $update_availableIsOK 
            = isset($update_available) && $update_available != null;
        if ($update_availableIsOK) {
            $this->_update_available = $update_available;
            $return = true;
        }
        return $return;
    }


    /**
     * setLastversion 
     * 
     * @param mixed $last_version To set.
     * 
     * @access public
     * @return bool On success
     */
    public function setLastversion($last_version)
    {
        $return = false;
        $last_versionIsOK = isset($last_version) && $last_version != null;
        if ($last_versionIsOK) {
            $this->_last_version = $last_version;
            $return = true;
        }
        return $return;
    }


    /**
     * setNewversion 
     * 
     * @param mixed $new_version To set.
     * 
     * @access public
     * @return bool On success
     */
    public function setNewversion($new_version)
    {
        $return = false;
        $new_versionIsOK = isset($new_version) && $new_version != null;
        if ($new_versionIsOK) {
            $this->_new_version = $new_version;
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
        $out.=$this->_created;
        $out.=$this->_version;
        $out.=$this->_last_update_check;
        $out.=$this->_update_available;
        $out.=$this->_last_version;
        $out.=$this->_new_version;
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
        $out['created']=$this->_created;
        $out['version']=$this->_version;
        $out['last_update_check']=$this->_last_update_check;
        $out['update_available']=$this->_update_available;
        $out['last_version']=$this->_last_version;
        $out['new_version']=$this->_new_version;
        return $out;
    }


    /**
     * __construct 
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
    }


}
