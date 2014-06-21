<?php
/**
 * Holds the Contactstatus class
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


/* require_once "StatusPopulator.php"; */


/**
 * Info 
 * 
 * Holds information about the status of a contact taken from the status.dat file.
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
 *   @use       StatusPopulator
 */
class Contactstatus extends StatusPopulator
{


    /**
     * _contact_name 
     * 
     * @var mixed
     * @access private
     */
    private $_contact_name;


    /**
     * _modified_attributes 
     * 
     * @var mixed
     * @access private
     */
    private $_modified_attributes;


    /**
     * _modified_host_attributes 
     * 
     * @var mixed
     * @access private
     */
    private $_modified_host_attributes;


    /**
     * _modified_service_attributes 
     * 
     * @var mixed
     * @access private
     */
    private $_modified_service_attributes;


    /**
     * _host_notification_period 
     * 
     * @var mixed
     * @access private
     */
    private $_host_notification_period;


    /**
     * _service_notification_period 
     * 
     * @var mixed
     * @access private
     */
    private $_service_notification_period;


    /**
     * _last_host_notification 
     * 
     * @var mixed
     * @access private
     */
    private $_last_host_notification;


    /**
     * _last_service_notification 
     * 
     * @var mixed
     * @access private
     */
    private $_last_service_notification;


    /**
     * _service_notifications_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_service_notifications_enabled;


    /**
     * _host_notifications_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_host_notifications_enabled;


    /**
     * getContactname 
     * 
     * @access public
     * @return String contactname. Bool on failure.
     */
    public function getContactname()
    {
        $return = false;
        $contact_nameIsSet = isset($this->_contact_name);
        if ($contact_nameIsSet) {
            $return = $this->_contact_name;
        }
        return $return;
    }


    /**
     * getModifiedattributes 
     * 
     * @access public
     * @return String Modifiedattributes. Bool on failure.
     */
    public function getModifiedattributes()
    {
        $return = false;
        $modified_attributesIsSet = isset($this->_modified_attributes);
        if ($modified_attributesIsSet) {
            $return = $this->_modified_attributes;
        }
        return $return;
    }


    /**
     * getModifiedhostattributes 
     * 
     * @access public
     * @return String Modifiedhostattributes. Bool on failure.
     */
    public function getModifiedhostattributes()
    {
        $return = false;
        $modified_host_attributesIsSet = isset($this->_modified_host_attributes);
        if ($modified_host_attributesIsSet) {
            $return = $this->_modified_host_attributes;
        }
        return $return;
    }


    /**
     * getModifiedserviceattributes 
     * 
     * @access public
     * @return String Modifiedserviceattributes. Bool on failure.
     */
    public function getModifiedserviceattributes()
    {
        $return = false;
        $modified_service_attributesIsSet 
            = isset($this->_modified_service_attributes);
        if ($modified_service_attributesIsSet) {
            $return = $this->_modified_service_attributes;
        }
        return $return;
    }


    /**
     * getHostnotificationperiod 
     * 
     * @access public
     * @return String Hostnotificationperiod. Bool on failure.
     */
    public function getHostnotificationperiod()
    {
        $return = false;
        $host_notification_periodIsSet = isset($this->_host_notification_period);
        if ($host_notification_periodIsSet) {
            $return = $this->_host_notification_period;
        }
        return $return;
    }


    /**
     * getServicenotificationperiod 
     * 
     * @access public
     * @return String Servicenotificationperiod. Bool on failure.
     */
    public function getServicenotificationperiod()
    {
        $return = false;
        $service_notification_periodIsSet 
            = isset($this->_service_notification_period);
        if ($service_notification_periodIsSet) {
            $return = $this->_service_notification_period;
        }
        return $return;
    }


    /**
     * getLasthostnotification 
     * 
     * @access public
     * @return String Lasthostnotification. Bool on failure.
     */
    public function getLasthostnotification()
    {
        $return = false;
        $last_host_notificationIsSet = isset($this->_last_host_notification);
        if ($last_host_notificationIsSet) {
            $return = $this->_last_host_notification;
        }
        return $return;
    }


    /**
     * getLastservicenotification 
     * 
     * @access public
     * @return String Lastservicenotification. Bool on failure.
     */
    public function getLastservicenotification()
    {
        $return = false;
        $last_service_notificationIsSet = isset($this->_last_service_notification);
        if ($last_service_notificationIsSet) {
            $return = $this->_last_service_notification;
        }
        return $return;
    }


    /**
     * getServicenotificationsenabled 
     * 
     * @access public
     * @return String Servicenotificationsenabled. Bool on failure.
     */
    public function getServicenotificationsenabled()
    {
        $return = false;
        $service_notifications_enabledIsSet 
            = isset($this->_service_notifications_enabled);
        if ($service_notifications_enabledIsSet) {
            $return = $this->_service_notifications_enabled;
        }
        return $return;

    }


    /**
     * getHostnotificationsenabled 
     * 
     * @access public
     * @return String Hostnotificationsenabled. Bool on failure.
     */
    public function getHostnotificationsenabled()
    {
        $return = false;
        $host_notifications_enabledIsSet 
            = isset($this->_host_notifications_enabled);
        if ($host_notifications_enabledIsSet) {
            $return = $this->_host_notifications_enabled;
        }
        return $return;
    }


    /**
     * setContactname 
     * 
     * @param mixed $contact_name To set
     * 
     * @access public
     * @return bool
     */
    public function setContactname($contact_name)
    {
        $return = false;
        $contact_nameIsOK = isset($contact_name) && $contact_name != null;
        if ($contact_nameIsOK) {
            $this->_contact_name = $contact_name;
            $return = true;
        }
        return $return;
    }


    /**
     * setModifiedattributes 
     * 
     * @param mixed $modified_attributes To set
     * 
     * @access public
     * @return bool
     */
    public function setModifiedattributes($modified_attributes)
    {
        $return = false;
        $modified_attributesIsOK 
            = isset($modified_attributes) && $modified_attributes != null;
        if ($modified_attributesIsOK) {
            $this->_modified_attributes = $modified_attributes;
            $return = true;
        }
        return $return;
    }


    /**
     * setModifiedhostattributes 
     * 
     * @param mixed $modified_host_attributes To set
     * 
     * @access public
     * @return bool
     */
    public function setModifiedhostattributes($modified_host_attributes)
    {
        $return = false;
        $modified_host_attributesIsOK 
            = isset($modified_host_attributes) && 
            $modified_host_attributes != null;
        if ($modified_host_attributesIsOK) {
            $this->_modified_host_attributes = $modified_host_attributes;
            $return = true;
        }
        return $return;
    }


    /**
     * setModifiedserviceattributes 
     * 
     * @param mixed $modified_service_attributes To set
     * 
     * @access public
     * @return bool
     */
    public function setModifiedserviceattributes($modified_service_attributes)
    {
        $return = false;
        $modified_service_attributesIsOK 
            = isset($modified_service_attributes) && 
            $modified_service_attributes != null;
        if ($modified_service_attributesIsOK) {
            $this->_modified_service_attributes = $modified_service_attributes;
            $return = true;
        }
        return $return;
    }


    /**
     * setHostnotificationperiod 
     * 
     * @param mixed $host_notification_period To set
     * 
     * @access public
     * @return bool
     */
    public function setHostnotificationperiod($host_notification_period)
    {
        $return = false;
        $host_notification_periodIsOK 
            = isset($host_notification_period) && $host_notification_period != null;
        if ($host_notification_periodIsOK) {
            $this->_host_notification_period = $host_notification_period;
            $return = true;
        }
        return $return;
    }


    /**
     * setServicenotificationperiod 
     * 
     * @param mixed $service_notification_period To set
     * 
     * @access public
     * @return bool
     */
    public function setServicenotificationperiod($service_notification_period)
    {
        $return = false;
        $service_notification_periodIsOK 
            = isset($service_notification_period) && 
            $service_notification_period != null;
        if ($service_notification_periodIsOK) {
            $this->_service_notification_period = $service_notification_period;
            $return = true;
        }
        return $return;
    }


    /**
     * setLasthostnotification 
     * 
     * @param mixed $last_host_notification To set
     * 
     * @access public
     * @return bool
     */
    public function setLasthostnotification($last_host_notification)
    {
        $return = false;
        $last_host_notificationIsOK 
            = isset($last_host_notification) && $last_host_notification != null;
        if ($last_host_notificationIsOK) {
            $this->_last_host_notification = $last_host_notification;
            $return = true;
        }
        return $return;
    }


    /**
     * setLastservicenotification 
     * 
     * @param mixed $last_service_notification To set
     * 
     * @access public
     * @return bool
     */
    public function setLastservicenotification($last_service_notification)
    {
        $return = false;
        $last_service_notificationIsOK 
            = isset($last_service_notification) && 
            $last_service_notification != null;
        if ($last_service_notificationIsOK) {
            $this->_last_service_notification = $last_service_notification;
            $return = true;
        }
        return $return;
    }


    /**
     * setServicenotificationsenabled 
     * 
     * @param mixed $service_notifications_enabled To set
     * 
     * @access public
     * @return bool
     */
    public function setServicenotificationsenabled($service_notifications_enabled)
    {
        $return = false;
        $service_notifications_enabledIsOK 
            = isset($service_notifications_enabled) 
            && $service_notifications_enabled != null;
        if ($service_notifications_enabledIsOK) {
            $this->_service_notifications_enabled = $service_notifications_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * setHostnotificationsenabled 
     * 
     * @param mixed $host_notifications_enabled To set
     * 
     * @access public
     * @return bool
     */
    public function setHostnotificationsenabled($host_notifications_enabled)
    {
        $return = false;
        $host_notifications_enabledIsOK 
            = isset($host_notifications_enabled) && 
            $host_notifications_enabled != null;
        if ($host_notifications_enabledIsOK) {
            $this->_host_notifications_enabled = $host_notifications_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * __toString 
     * 
     * @access public
     * @return String concaternated version of properties.
     */
    public function __toString()
    {
        $out='';
        $out.=$this->_contact_name;
        $out.=$this->_modified_attributes;
        $out.=$this->_modified_host_attributes;
        $out.=$this->_modified_service_attributes;
        $out.=$this->_host_notification_period;
        $out.=$this->_service_notification_period;
        $out.=$this->_last_host_notification;
        $out.=$this->_last_service_notification;
        $out.=$this->_service_notifications_enabled;
        $out.=$this->_host_notifications_enabled;
        return $out;
    }

    /**
     * toArray 
     * 
     * @access public
     * @return String[] Representing this as an array.
     */
    public function toArray()
    {
        $out= array();
        $out['contact_name']=$this->_contact_name;
        $out['modified_attributes']=$this->_modified_attributes;
        $out['modified_host_attributes']=$this->_modified_host_attributes;
        $out['modified_service_attributes']=$this->_modified_service_attributes;
        $out['host_notification_period']=$this->_host_notification_period;
        $out['service_notification_period']=$this->_service_notification_period;
        $out['last_host_notification']=$this->_last_host_notification;
        $out['last_service_notification']=$this->_last_service_notification;
        $out['service_notifications_enabled']=$this->_service_notifications_enabled;
        $out['host_notifications_enabled']=$this->_host_notifications_enabled;
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
