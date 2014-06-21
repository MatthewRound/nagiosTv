<?php
/**
 * Holds the ServiceList class
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
 * ServiceList 
 * 
 * Simple collection class that holds Servicestatuses
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
class ServiceList
{


    /**
     * _list 
     * 
     * The list of ServiceStatuses 
     * 
     * @var String[]
     * @access private
     */
    private $_list;


    /**
     * getList 
     * 
     * @access public
     * @return mixed String[] on success else bool
     */
    public function getList()
    {
        $return = false;
        $listIsSet = isset($this->_list);
        if ($listIsSet) {
            $return = $this->_list;
        }
        return $return;
    }


    /**
     * setList 
     * 
     * @param String[] $list The list to set.
     * 
     * @access public
     * @return void
     */
    public function setList($list)
    {
        $return = false;
        $listIsOK = isset($list) && $list != null && is_array($list);
        if ($listIsOK) {
            $this->_list = $list;
            $return = true;
        }
        return $return;
    }


    /**
     * addToList 
     * 
     * Attempts to add an item to the list. 
     * 
     * @param Servicestatus $item The item to add.
     * 
     * @access public
     * @return Bool
     */
    public function addToList(Servicestatus $item)
    {
        $return = false;
        $itemIsOK = isset($item) && $item != null;
        if ($itemIsOK) {
            $this->_list[] = $item;
            $return = true;
        }
        return $return;
    }


    /**
     * get 
     * 
     * Attempts to get the indexed item from the list. 
     * 
     * @param Int $i The index to retrieve.
     * 
     * @access public
     * @return bool on failure, else Servicestatus.
     */
    public function get($i)
    {
        $return = false;
        $listIsValid = isset($this->_list) && $this->_list != null 
            && is_array($this->_list) && is_int($i) && $i <= count($this->_list);
        if ($listIsValid) {
            $return = $this->_list[$i];
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
        $out.=$this->_list;
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
        $out['list']=$this->getList();
        return $out;
    }


    /**
     * toJson 
     * 
     * @access public
     * @return String
     */
    public function toJson()
    {
        $allArray = array();
        foreach ($this->getList() as $servicestatus) {
            $allArray[] = $servicestatus->toArray();
        }
        return json_encode($allArray);
    }


    /**
     * __construct 
     * 
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->_list = array();
    }


    /**
     * getBreachingStates 
     * 
     * Gets the breaching states of all the services in the list, sorts by severity. 
     * 
     * @access public
     * @return String The breaching objects as Json.
     */
    public function getBreachingStates()
    {
        $servicesNotOK = new serviceList();
        $servicesCrit = new serviceList();
        $servicesWarn = new serviceList();
        $servicesUnknown = new serviceList();
        foreach ($this->getList() as $serviceStatus) {
            $serviceStatusNotOK = $serviceStatus->getCurrentstate() 
                != Servicestatus::CURRENT_STATE_OK;
            if ($serviceStatusNotOK) {
                $serviceIsCrit = $serviceStatus->getCurrentstate()        
                    == Servicestatus::CURRENT_STATE_CRIT;
                $serviceIsWarn = $serviceStatus->getCurrentstate()        
                    == Servicestatus::CURRENT_STATE_WARN;
                $serviceIsUnknown = $serviceStatus->getCurrentstate()        
                    == Servicestatus::CURRENT_STATE_UNKNOWN;
                if ($serviceIsCrit) {   
                    $servicesCrit->addToList($serviceStatus);
                }
                if ($serviceIsWarn) {   
                    $servicesWarn->addToList($serviceStatus);
                }
                if ($serviceIsUnknown) {     
                    $servicesUnknown->addToList($serviceStatus);
                }
            }
        }
        $servicesNotOK->setList(
            array_merge(
                $servicesCrit->getList(), 
                $servicesWarn->getList(),
                $servicesUnknown->getList()
            )
        );
        return $servicesNotOK->toJson();
    }


    /**
     * getSummary 
     * 
     * Returns a Summary of all the services 
     * 
     * @access public
     * @return void
     */
    public function getSummary()
    {
        $ret = array();
        $critCount = 0;    
        $warnCount = 0;    
        $okCount = 0;    
        $unknownCount = 0;    
        foreach ($this->getList() as $serviceStatus) {
            $stateIsCrit = $serviceStatus->getCurrentstate() 
                == Servicestatus::CURRENT_STATE_CRIT;
            $stateIsWarn = $serviceStatus->getCurrentstate() 
                == Servicestatus::CURRENT_STATE_WARN;
            $stateIsOk = $serviceStatus->getCurrentstate() 
                == Servicestatus::CURRENT_STATE_OK;
            $stateIsUnknown = $serviceStatus->getCurrentstate() 
                == Servicestatus::CURRENT_STATE_UNKNOWN;
            if ($stateIsUnknown) {
                $unknownCount++;
            }
            if ($stateIsWarn) {
                $warnCount++;
            }
            if ($stateIsCrit) {
                $critCount++;
            }
            if ($stateIsOk) {
                $okCount++;
            }
        }
        $ret['crit'] = $critCount;
        $ret['warn'] = $warnCount;
        $ret['ok'] = $okCount;
        $ret['unknown'] = $unknownCount;
        return json_encode($ret);
    }


}
