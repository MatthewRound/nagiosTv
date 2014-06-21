<?php
/**
 * Holds the Hoststatus class
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
 * Hoststatus 
 * 
 * Holds information about the status of a host taken from the status.dat file.
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
class Hoststatus extends StatusPopulator
{


    /**
     * The current up state of a host 
     */
    const CURRENT_STATE_UP=0;


    /**
     * The current down state of a host 
     */
    const CURRENT_STATE_DOWN=1;


    /**
     * The current unreachable state of a host 
     */
    const CURRENT_STATE_UNREACHABLE=2;


    /**
     * _host_name 
     * 
     * @var mixed
     * @access private
     */
    private $_host_name;


    /**
     * _modified_attributes 
     * 
     * @var mixed
     * @access private
     */
    private $_modified_attributes;


    /**
     * _check_command 
     * 
     * @var mixed
     * @access private
     */
    private $_check_command;


    /**
     * _check_period 
     * 
     * @var mixed
     * @access private
     */
    private $_check_period;


    /**
     * _notification_period 
     * 
     * @var mixed
     * @access private
     */
    private $_notification_period;


    /**
     * _check_interval 
     * 
     * @var mixed
     * @access private
     */
    private $_check_interval;


    /**
     * _retry_interval 
     * 
     * @var mixed
     * @access private
     */
    private $_retry_interval;


    /**
     * _event_handler 
     * 
     * @var mixed
     * @access private
     */
    private $_event_handler;


    /**
     * _has_been_checked 
     * 
     * @var mixed
     * @access private
     */
    private $_has_been_checked;


    /**
     * _should_be_scheduled 
     * 
     * @var mixed
     * @access private
     */
    private $_should_be_scheduled;


    /**
     * _check_execution_time 
     * 
     * @var mixed
     * @access private
     */
    private $_check_execution_time;


    /**
     * _check_latency 
     * 
     * @var mixed
     * @access private
     */
    private $_check_latency;


    /**
     * _check_type 
     * 
     * @var mixed
     * @access private
     */
    private $_check_type;


    /**
     * _current_state 
     * 
     * @var mixed
     * @access private
     */
    private $_current_state;


    /**
     * _last_hard_state 
     * 
     * @var mixed
     * @access private
     */
    private $_last_hard_state;


    /**
     * _last_event_id 
     * 
     * @var mixed
     * @access private
     */
    private $_last_event_id;


    /**
     * _current_event_id 
     * 
     * @var mixed
     * @access private
     */
    private $_current_event_id;


    /**
     * _current_problem_id 
     * 
     * @var mixed
     * @access private
     */
    private $_current_problem_id;


    /**
     * _last_problem_id 
     * 
     * @var mixed
     * @access private
     */
    private $_last_problem_id;


    /**
     * _plugin_output 
     * 
     * @var mixed
     * @access private
     */
    private $_plugin_output;


    /**
     * _long_plugin_output 
     * 
     * @var mixed
     * @access private
     */
    private $_long_plugin_output;


    /**
     * _performance_data 
     * 
     * @var mixed
     * @access private
     */
    private $_performance_data;


    /**
     * _last_check 
     * 
     * @var mixed
     * @access private
     */
    private $_last_check;


    /**
     * _next_check 
     * 
     * @var mixed
     * @access private
     */
    private $_next_check;


    /**
     * _check_options 
     * 
     * @var mixed
     * @access private
     */
    private $_check_options;


    /**
     * _current_attempt 
     * 
     * @var mixed
     * @access private
     */
    private $_current_attempt;


    /**
     * _max_attempts 
     * 
     * @var mixed
     * @access private
     */
    private $_max_attempts;


    /**
     * _state_type 
     * 
     * @var mixed
     * @access private
     */
    private $_state_type;


    /**
     * _last_state_change 
     * 
     * @var mixed
     * @access private
     */
    private $_last_state_change;


    /**
     * _last_hard_state_change 
     * 
     * @var mixed
     * @access private
     */
    private $_last_hard_state_change;


    /**
     * _last_time_up 
     * 
     * @var mixed
     * @access private
     */
    private $_last_time_up;


    /**
     * _last_time_down 
     * 
     * @var mixed
     * @access private
     */
    private $_last_time_down;


    /**
     * _last_time_unreachable 
     * 
     * @var mixed
     * @access private
     */
    private $_last_time_unreachable;


    /**
     * _last_notification 
     * 
     * @var mixed
     * @access private
     */
    private $_last_notification;


    /**
     * _next_notification 
     * 
     * @var mixed
     * @access private
     */
    private $_next_notification;


    /**
     * _no_more_notifications 
     * 
     * @var mixed
     * @access private
     */
    private $_no_more_notifications;


    /**
     * _current_notification_number 
     * 
     * @var mixed
     * @access private
     */
    private $_current_notification_number;


    /**
     * _current_notification_id 
     * 
     * @var mixed
     * @access private
     */
    private $_current_notification_id;


    /**
     * _notifications_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_notifications_enabled;


    /**
     * _problem_has_been_acknowledged 
     * 
     * @var mixed
     * @access private
     */
    private $_problem_has_been_acknowledged;


    /**
     * _acknowledgement_type 
     * 
     * @var mixed
     * @access private
     */
    private $_acknowledgement_type;


    /**
     * _active_checks_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_active_checks_enabled;


    /**
     * _passive_checks_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_passive_checks_enabled;


    /**
     * _event_handler_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_event_handler_enabled;


    /**
     * _flap_detection_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_flap_detection_enabled;


    /**
     * _failure_prediction_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_failure_prediction_enabled;


    /**
     * _process_performance_data 
     * 
     * @var mixed
     * @access private
     */
    private $_process_performance_data;


    /**
     * _obsess_over_host 
     * 
     * @var mixed
     * @access private
     */
    private $_obsess_over_host;


    /**
     * _last_update 
     * 
     * @var mixed
     * @access private
     */
    private $_last_update;


    /**
     * _is_flapping 
     * 
     * @var mixed
     * @access private
     */
    private $_is_flapping;


    /**
     * _percent_state_change 
     * 
     * @var mixed
     * @access private
     */
    private $_percent_state_change;


    /**
     * _scheduled_downtime_depth 
     * 
     * @var mixed
     * @access private
     */
    private $_scheduled_downtime_depth;


    /**
     * _TAGS 
     * 
     * @var mixed
     * @access private
     */
    private $_TAGS;


    /**
     * SNMP
     *
     * @var    String
     * @access private
     */
    private $_SNMP;


    /**
     * getSNMP
     *
     * Attempts to return the member SNMP.
     *
     * @access public
     * @return mixed bool on failure, else String
     */
    public function getSNMP()
    {
        $return = false;
        $SNMPIsSet = isset($this->_SNMP);
        if ($SNMPIsSet) {
            $return = $this->_SNMP;
        }
        return $return;
    }


    /**
     * getTAGS 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getTAGS()
    {
        $return = false;
        $TAGSIsSet = isset($this->_TAGS);
        if ($TAGSIsSet) {
            $return = $this->_TAGS;
        }
        return $return;
    }


    /**
     * getHostname 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getHostname()
    {
        $return = false;
        $host_nameIsSet = isset($this->_host_name);
        if ($host_nameIsSet) {
            $return = $this->_host_name;
        }
        return $return;
    }


    /**
     * getModifiedattributes 
     * 
     * @access public
     * @return String on success else bool.
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
     * getCheckcommand 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getCheckcommand()
    {
        $return = false;
        $check_commandIsSet = isset($this->_check_command);
        if ($check_commandIsSet) {
            $return = $this->_check_command;
        }
        return $return;
    }


    /**
     * getCheckperiod 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getCheckperiod()
    {
        $return = false;
        $check_periodIsSet = isset($this->_check_period);
        if ($check_periodIsSet) {
            $return = $this->_check_period;
        }
        return $return;
    }


    /**
     * getNotificationperiod 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getNotificationperiod()
    {
        $return = false;
        $notification_periodIsSet = isset($this->_notification_period);
        if ($notification_periodIsSet) {
            $return = $this->_notification_period;
        }
        return $return;
    }


    /**
     * getCheckinterval 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getCheckinterval()
    {
        $return = false;
        $check_intervalIsSet = isset($this->_check_interval);
        if ($check_intervalIsSet) {
            $return = $this->_check_interval;
        }
        return $return;
    }


    /**
     * getRetryinterval 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getRetryinterval()
    {
        $return = false;
        $retry_intervalIsSet = isset($this->_retry_interval);
        if ($retry_intervalIsSet) {
            $return = $this->_retry_interval;
        }
        return $return;
    }


    /**
     * getEventhandler 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getEventhandler()
    {
        $return = false;
        $event_handlerIsSet = isset($this->_event_handler);
        if ($event_handlerIsSet) {
            $return = $this->_event_handler;
        }
        return $return;
    }


    /**
     * getHasbeenchecked 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getHasbeenchecked()
    {
        $return = false;
        $has_been_checkedIsSet = isset($this->_has_been_checked);
        if ($has_been_checkedIsSet) {
            $return = $this->_has_been_checked;
        }
        return $return;
    }


    /**
     * getShouldbescheduled 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getShouldbescheduled()
    {
        $return = false;
        $should_be_scheduledIsSet = isset($this->_should_be_scheduled);
        if ($should_be_scheduledIsSet) {
            $return = $this->_should_be_scheduled;
        }
        return $return;
    }


    /**
     * getCheckexecutiontime 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getCheckexecutiontime()
    {
        $return = false;
        $check_execution_timeIsSet = isset($this->_check_execution_time);
        if ($check_execution_timeIsSet) {
            $return = $this->_check_execution_time;
        }
        return $return;
    }


    /**
     * getChecklatency 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getChecklatency()
    {
        $return = false;
        $check_latencyIsSet = isset($this->_check_latency);
        if ($check_latencyIsSet) {
            $return = $this->_check_latency;
        }
        return $return;
    }


    /**
     * getChecktype 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getChecktype()
    {
        $return = false;
        $check_typeIsSet = isset($this->_check_type);
        if ($check_typeIsSet) {
            $return = $this->_check_type;
        }
        return $return;
    }


    /**
     * getCurrentstate 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getCurrentstate()
    {
        $return = false;
        $current_stateIsSet = isset($this->_current_state);
        if ($current_stateIsSet) {
            $return = $this->_current_state;
        }
        return $return;
    }


    /**
     * getLasthardstate 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLasthardstate()
    {
        $return = false;
        $last_hard_stateIsSet = isset($this->_last_hard_state);
        if ($last_hard_stateIsSet) {
            $return = $this->_last_hard_state;
        }
        return $return;
    }


    /**
     * getLasteventid 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLasteventid()
    {
        $return = false;
        $last_event_idIsSet = isset($this->_last_event_id);
        if ($last_event_idIsSet) {
            $return = $this->_last_event_id;
        }
        return $return;
    }


    /**
     * getCurrenteventid 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getCurrenteventid()
    {
        $return = false;
        $current_event_idIsSet = isset($this->_current_event_id);
        if ($current_event_idIsSet) {
            $return = $this->_current_event_id;
        }
        return $return;
    }


    /**
     * getCurrentproblemid 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getCurrentproblemid()
    {
        $return = false;
        $current_problem_idIsSet = isset($this->_current_problem_id);
        if ($current_problem_idIsSet) {
            $return = $this->_current_problem_id;
        }
        return $return;
    }


    /**
     * getLastproblemid 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLastproblemid()
    {
        $return = false;
        $last_problem_idIsSet = isset($this->_last_problem_id);
        if ($last_problem_idIsSet) {
            $return = $this->_last_problem_id;
        }
        return $return;
    }


    /**
     * getPluginoutput 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getPluginoutput()
    {
        $return = false;
        $plugin_outputIsSet = isset($this->_plugin_output);
        if ($plugin_outputIsSet) {
            $return = $this->_plugin_output;
        }
        return $return;
    }


    /**
     * getLongpluginoutput 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLongpluginoutput()
    {
        $return = false;
        $long_plugin_outputIsSet = isset($this->_long_plugin_output);
        if ($long_plugin_outputIsSet) {
            $return = $this->_long_plugin_output;
        }
        return $return;
    }


    /**
     * getPerformancedata 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getPerformancedata()
    {
        $return = false;
        $performance_dataIsSet = isset($this->_performance_data);
        if ($performance_dataIsSet) {
            $return = $this->_performance_data;
        }
        return $return;
    }


    /**
     * getLastcheck 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLastcheck()
    {
        $return = false;
        $last_checkIsSet = isset($this->_last_check);
        if ($last_checkIsSet) {
            $return = $this->_last_check;
        }
        return $return;
    }


    /**
     * getNextcheck 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getNextcheck()
    {
        $return = false;
        $next_checkIsSet = isset($this->_next_check);
        if ($next_checkIsSet) {
            $return = $this->_next_check;
        }
        return $return;
    }


    /**
     * getCheckoptions 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getCheckoptions()
    {
        $return = false;
        $check_optionsIsSet = isset($this->_check_options);
        if ($check_optionsIsSet) {
            $return = $this->_check_options;
        }
        return $return;
    }


    /**
     * getCurrentattempt 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getCurrentattempt()
    {
        $return = false;
        $current_attemptIsSet = isset($this->_current_attempt);
        if ($current_attemptIsSet) {
            $return = $this->_current_attempt;
        }
        return $return;
    }


    /**
     * getMaxattempts 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getMaxattempts()
    {
        $return = false;
        $max_attemptsIsSet = isset($this->_max_attempts);
        if ($max_attemptsIsSet) {
            $return = $this->_max_attempts;
        }
        return $return;
    }


    /**
     * getStatetype 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getStatetype()
    {
        $return = false;
        $state_typeIsSet = isset($this->_state_type);
        if ($state_typeIsSet) {
            $return = $this->_state_type;
        }
        return $return;
    }


    /**
     * getLaststatechange 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLaststatechange()
    {
        $return = false;
        $last_state_changeIsSet = isset($this->_last_state_change);
        if ($last_state_changeIsSet) {
            $return = $this->_last_state_change;
        }
        return $return;
    }


    /**
     * getLasthardstatechange 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLasthardstatechange()
    {
        $return = false;
        $last_hard_state_changeIsSet = isset($this->_last_hard_state_change);
        if ($last_hard_state_changeIsSet) {
            $return = $this->_last_hard_state_change;
        }
        return $return;
    }


    /**
     * getLasttimeup 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLasttimeup()
    {
        $return = false;
        $last_time_upIsSet = isset($this->_last_time_up);
        if ($last_time_upIsSet) {
            $return = $this->_last_time_up;
        }
        return $return;
    }


    /**
     * getLasttimedown 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLasttimedown()
    {
        $return = false;
        $last_time_downIsSet = isset($this->_last_time_down);
        if ($last_time_downIsSet) {
            $return = $this->_last_time_down;
        }
        return $return;
    }


    /**
     * getLasttimeunreachable 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLasttimeunreachable()
    {
        $return = false;
        $last_time_unreachableIsSet = isset($this->_last_time_unreachable);
        if ($last_time_unreachableIsSet) {
            $return = $this->_last_time_unreachable;
        }
        return $return;
    }


    /**
     * getLastnotification 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLastnotification()
    {
        $return = false;
        $last_notificationIsSet = isset($this->_last_notification);
        if ($last_notificationIsSet) {
            $return = $this->_last_notification;
        }
        return $return;
    }


    /**
     * getNextnotification 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getNextnotification()
    {
        $return = false;
        $next_notificationIsSet = isset($this->_next_notification);
        if ($next_notificationIsSet) {
            $return = $this->_next_notification;
        }
        return $return;
    }


    /**
     * getNomorenotifications 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getNomorenotifications()
    {
        $return = false;
        $no_more_notificationsIsSet = isset($this->_no_more_notifications);
        if ($no_more_notificationsIsSet) {
            $return = $this->_no_more_notifications;
        }
        return $return;
    }


    /**
     * getCurrentnotificationnumber 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getCurrentnotificationnumber()
    {
        $return = false;
        $current_notification_numberIsSet 
            = isset($this->_current_notification_number);
        if ($current_notification_numberIsSet) {
            $return = $this->_current_notification_number;
        }
        return $return;
    }


    /**
     * getCurrentnotificationid 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getCurrentnotificationid()
    {
        $return = false;
        $current_notification_idIsSet = isset($this->_current_notification_id);
        if ($current_notification_idIsSet) {
            $return = $this->_current_notification_id;
        }
        return $return;
    }


    /**
     * getNotificationsenabled 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getNotificationsenabled()
    {
        $return = false;
        $notifications_enabledIsSet = isset($this->_notifications_enabled);
        if ($notifications_enabledIsSet) {
            $return = $this->_notifications_enabled;
        }
        return $return;
    }


    /**
     * getProblemhasbeenacknowledged 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getProblemhasbeenacknowledged()
    {
        $return = false;
        $problem_has_been_acknowledgedIsSet 
            = isset($this->_problem_has_been_acknowledged);
        if ($problem_has_been_acknowledgedIsSet) {
            $return = $this->_problem_has_been_acknowledged;
        }
        return $return;
    }


    /**
     * getAcknowledgementtype 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getAcknowledgementtype()
    {
        $return = false;
        $acknowledgement_typeIsSet = isset($this->_acknowledgement_type);
        if ($acknowledgement_typeIsSet) {
            $return = $this->_acknowledgement_type;
        }
        return $return;
    }


    /**
     * getActivechecksenabled 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getActivechecksenabled()
    {
        $return = false;
        $active_checks_enabledIsSet = isset($this->_active_checks_enabled);
        if ($active_checks_enabledIsSet) {
            $return = $this->_active_checks_enabled;
        }
        return $return;
    }


    /**
     * getPassivechecksenabled 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getPassivechecksenabled()
    {
        $return = false;
        $passive_checks_enabledIsSet = isset($this->_passive_checks_enabled);
        if ($passive_checks_enabledIsSet) {
            $return = $this->_passive_checks_enabled;
        }
        return $return;
    }


    /**
     * getEventhandlerenabled 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getEventhandlerenabled()
    {
        $return = false;
        $event_handler_enabledIsSet = isset($this->_event_handler_enabled);
        if ($event_handler_enabledIsSet) {
            $return = $this->_event_handler_enabled;
        }
        return $return;
    }


    /**
     * getFlapdetectionenabled 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getFlapdetectionenabled()
    {
        $return = false;
        $flap_detection_enabledIsSet = isset($this->_flap_detection_enabled);
        if ($flap_detection_enabledIsSet) {
            $return = $this->_flap_detection_enabled;
        }
        return $return;
    }


    /**
     * getFailurepredictionenabled 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getFailurepredictionenabled()
    {
        $return = false;
        $failure_prediction_enabledIsSet = isset($this->_failure_prediction_enabled);
        if ($failure_prediction_enabledIsSet) {
            $return = $this->_failure_prediction_enabled;
        }
        return $return;
    }


    /**
     * getProcessperformancedata 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getProcessperformancedata()
    {
        $return = false;
        $process_performance_dataIsSet = isset($this->_process_performance_data);
        if ($process_performance_dataIsSet) {
            $return = $this->_process_performance_data;
        }
        return $return;
    }


    /**
     * getObsessoverhost 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getObsessoverhost()
    {
        $return = false;
        $obsess_over_hostIsSet = isset($this->_obsess_over_host);
        if ($obsess_over_hostIsSet) {
            $return = $this->_obsess_over_host;
        }
        return $return;
    }


    /**
     * getLastupdate 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getLastupdate()
    {
        $return = false;
        $last_updateIsSet = isset($this->_last_update);
        if ($last_updateIsSet) {
            $return = $this->_last_update;
        }
        return $return;
    }


    /**
     * getIsflapping 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getIsflapping()
    {
        $return = false;
        $is_flappingIsSet = isset($this->_is_flapping);
        if ($is_flappingIsSet) {
            $return = $this->_is_flapping;
        }
        return $return;
    }


    /**
     * getPercentstatechange 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getPercentstatechange()
    {
        $return = false;
        $percent_state_changeIsSet = isset($this->_percent_state_change);
        if ($percent_state_changeIsSet) {
            $return = $this->_percent_state_change;
        }
        return $return;
    }


    /**
     * getScheduleddowntimedepth 
     * 
     * @access public
     * @return String on success else bool.
     */
    public function getScheduleddowntimedepth()
    {
        $return = false;
        $scheduled_downtime_depthIsSet = isset($this->_scheduled_downtime_depth);
        if ($scheduled_downtime_depthIsSet) {
            $return = $this->_scheduled_downtime_depth;
        }
        return $return;
    }


    /**
     * setTAGS 
     * 
     * @param mixed $TAGS To set.
     * 
     * @access public
     * @return bool
     */
    public function setTAGS($TAGS)
    {
        $return = false;
        $TAGSIsSet = isset($this->_TAGS);
        $TAGSIsOK = isset($TAGS) && $TAGS != null;
        if ($TAGSIsOK) {
            $this->_TAGS = $TAGS;
            $return = true;
        }
        return $return;
    }


    /**
     * setHostname 
     * 
     * @param mixed $host_name To set.
     * 
     * @access public
     * @return bool
     */
    public function setHostname($host_name)
    {
        $return = false;
        $host_nameIsOK = isset($host_name) && $host_name != null;
        if ($host_nameIsOK) {
            $this->_host_name = $host_name;
            $return = true;
        }
        return $return;
    }


    /**
     * setModifiedattributes 
     * 
     * @param mixed $modified_attributes To set.
     * 
     * @access public
     * @return bool
     */
    public function setModifiedattributes($modified_attributes)
    {
        $return = false;
        $modified_attributesIsOK = isset($modified_attributes) 
            && $modified_attributes != null;
        if ($modified_attributesIsOK) {
            $this->_modified_attributes = $modified_attributes;
            $return = true;
        }
        return $return;
    }


    /**
     * setCheckcommand 
     * 
     * @param mixed $check_command To set.
     * 
     * @access public
     * @return bool
     */
    public function setCheckcommand($check_command)
    {
        $return = false;
        $check_commandIsOK = isset($check_command) && $check_command != null;
        if ($check_commandIsOK) {
            $this->_check_command = $check_command;
            $return = true;
        }
        return $return;
    }


    /**
     * setCheckperiod 
     * 
     * @param mixed $check_period To set.
     * 
     * @access public
     * @return bool
     */
    public function setCheckperiod($check_period)
    {
        $return = false;
        $check_periodIsOK = isset($check_period) && $check_period != null;
        if ($check_periodIsOK) {
            $this->_check_period = $check_period;
            $return = true;
        }
        return $return;
    }


    /**
     * setNotificationperiod 
     * 
     * @param mixed $notification_period To set.
     * 
     * @access public
     * @return bool
     */
    public function setNotificationperiod($notification_period)
    {
        $return = false;
        $notification_periodIsOK = isset($notification_period) 
            && $notification_period != null;
        if ($notification_periodIsOK) {
            $this->_notification_period = $notification_period;
            $return = true;
        }
        return $return;
    }


    /**
     * setCheckinterval 
     * 
     * @param mixed $check_interval To set.
     * 
     * @access public
     * @return bool
     */
    public function setCheckinterval($check_interval)
    {
        $return = false;
        $check_intervalIsOK = isset($check_interval) && $check_interval != null;
        if ($check_intervalIsOK) {
            $this->_check_interval = $check_interval;
            $return = true;
        }
        return $return;
    }


    /**
     * setRetryinterval 
     * 
     * @param mixed $retry_interval To set.
     * 
     * @access public
     * @return bool
     */
    public function setRetryinterval($retry_interval)
    {
        $return = false;
        $retry_intervalIsOK = isset($retry_interval) && $retry_interval != null;
        if ($retry_intervalIsOK) {
            $this->_retry_interval = $retry_interval;
            $return = true;
        }
        return $return;
    }


    /**
     * setEventhandler 
     * 
     * @param mixed $event_handler To set.
     * 
     * @access public
     * @return bool
     */
    public function setEventhandler($event_handler)
    {
        $return = false;
        $event_handlerIsOK = isset($event_handler) && $event_handler != null;
        if ($event_handlerIsOK) {
            $this->_event_handler = $event_handler;
            $return = true;
        }
        return $return;
    }


    /**
     * setHasbeenchecked 
     * 
     * @param mixed $has_been_checked To set.
     * 
     * @access public
     * @return bool
     */
    public function setHasbeenchecked($has_been_checked)
    {
        $return = false;
        $has_been_checkedIsOK = isset($has_been_checked) 
            && $has_been_checked != null;
        if ($has_been_checkedIsOK) {
            $this->_has_been_checked = $has_been_checked;
            $return = true;
        }
        return $return;
    }


    /**
     * setShouldbescheduled 
     * 
     * @param mixed $should_be_scheduled To set.
     * 
     * @access public
     * @return bool
     */
    public function setShouldbescheduled($should_be_scheduled)
    {
        $return = false;
        $should_be_scheduledIsOK = isset($should_be_scheduled) 
            && $should_be_scheduled != null;
        if ($should_be_scheduledIsOK) {
            $this->_should_be_scheduled = $should_be_scheduled;
            $return = true;
        }
        return $return;
    }


    /**
     * setCheckexecutiontime 
     * 
     * @param mixed $check_execution_time To set.
     * 
     * @access public
     * @return bool
     */
    public function setCheckexecutiontime($check_execution_time)
    {
        $return = false;
        $check_execution_timeIsOK = isset($check_execution_time) 
            && $check_execution_time != null;
        if ($check_execution_timeIsOK) {
            $this->_check_execution_time = $check_execution_time;
            $return = true;
        }
        return $return;
    }


    /**
     * setChecklatency 
     * 
     * @param mixed $check_latency To set.
     * 
     * @access public
     * @return bool
     */
    public function setChecklatency($check_latency)
    {
        $return = false;
        $check_latencyIsOK = isset($check_latency) && $check_latency != null;
        if ($check_latencyIsOK) {
            $this->_check_latency = $check_latency;
            $return = true;
        }
        return $return;
    }


    /**
     * setSNMP
     *
     * Attempts to set the member SNMP
     *
     * @param String $SNMP to set.
     *
     * @access public
     * @return bool on success
     */
    public function setSNMP($SNMP)
    {
        $SNMPIsOK = isset($SNMP) && $SNMP != null && is_string($SNMP);
        $return = false;
        if ($SNMPIsOK) {
            $this->_SNMP = $SNMP;
            $return = true;
        }
        return $return;
    }


    /**
     * setChecktype 
     * 
     * @param mixed $check_type To set.
     * 
     * @access public
     * @return bool
     */
    public function setChecktype($check_type)
    {
        $return = false;
        $check_typeIsOK = isset($check_type) && $check_type != null;
        if ($check_typeIsOK) {
            $this->_check_type = $check_type;
            $return = true;
        }
        return $return;
    }


    /**
     * setCurrentstate 
     * 
     * @param mixed $current_state To set.
     * 
     * @access public
     * @return bool
     */
    public function setCurrentstate($current_state)
    {
        $return = false;
        $current_stateIsOK = isset($current_state) && $current_state != null;
        if ($current_stateIsOK) {
            $this->_current_state = $current_state;
            $return = true;
        }
        return $return;
    }


    /**
     * setLasthardstate 
     * 
     * @param mixed $last_hard_state To set.
     * 
     * @access public
     * @return bool
     */
    public function setLasthardstate($last_hard_state)
    {
        $return = false;
        $last_hard_stateIsOK 
            = isset($last_hard_state) && $last_hard_state != null;
        if ($last_hard_stateIsOK) {
            $this->_last_hard_state = $last_hard_state;
            $return = true;
        }
        return $return;
    }


    /**
     * setLasteventid 
     * 
     * @param mixed $last_event_id To set.
     * 
     * @access public
     * @return bool
     */
    public function setLasteventid($last_event_id)
    {
        $return = false;
        $last_event_idIsOK 
            = isset($last_event_id) && $last_event_id != null;
        if ($last_event_idIsOK) {
            $this->_last_event_id = $last_event_id;
            $return = true;
        }
        return $return;
    }


    /**
     * setCurrenteventid 
     * 
     * @param mixed $current_event_id To set.
     * 
     * @access public
     * @return bool
     */
    public function setCurrenteventid($current_event_id)
    {
        $return = false;
        $current_event_idIsOK = isset($current_event_id) 
            && $current_event_id != null;
        if ($current_event_idIsOK) {
            $this->_current_event_id = $current_event_id;
            $return = true;
        }
        return $return;
    }


    /**
     * setCurrentproblemid 
     * 
     * @param mixed $current_problem_id To set.
     * 
     * @access public
     * @return bool
     */
    public function setCurrentproblemid($current_problem_id)
    {
        $return = false;
        $current_problem_idIsOK = isset($current_problem_id) 
            && $current_problem_id != null;
        if ($current_problem_idIsOK) {
            $this->_current_problem_id = $current_problem_id;
            $return = true;
        }
        return $return;
    }


    /**
     * setLastproblemid 
     * 
     * @param mixed $last_problem_id To set.
     * 
     * @access public
     * @return bool
     */
    public function setLastproblemid($last_problem_id)
    {
        $return = false;
        $last_problem_idIsOK = isset($last_problem_id) && $last_problem_id != null;
        if ($last_problem_idIsOK) {
            $this->_last_problem_id = $last_problem_id;
            $return = true;
        }
        return $return;
    }


    /**
     * setPluginoutput 
     * 
     * @param mixed $plugin_output To set.
     * 
     * @access public
     * @return bool
     */
    public function setPluginoutput($plugin_output)
    {
        $return = false;
        $plugin_outputIsOK = isset($plugin_output) && $plugin_output != null;
        if ($plugin_outputIsOK) {
            $this->_plugin_output = $plugin_output;
            $return = true;
        }
        return $return;
    }


    /**
     * setLongpluginoutput 
     * 
     * @param mixed $long_plugin_output To set.
     * 
     * @access public
     * @return bool
     */
    public function setLongpluginoutput($long_plugin_output)
    {
        $return = false;
        $long_plugin_outputIsOK = isset($long_plugin_output) && 
            $long_plugin_output != null;
        if ($long_plugin_outputIsOK) {
            $this->_long_plugin_output = $long_plugin_output;
            $return = true;
        }
        return $return;
    }


    /**
     * setPerformancedata 
     * 
     * @param mixed $performance_data To set.
     * 
     * @access public
     * @return bool
     */
    public function setPerformancedata($performance_data)
    {
        $return = false;
        $performance_dataIsOK 
            = isset($performance_data) && $performance_data != null;
        if ($performance_dataIsOK) {
            $this->_performance_data = $performance_data;
            $return = true;
        }
        return $return;
    }


    /**
     * setLastcheck 
     * 
     * @param mixed $last_check To set.
     * 
     * @access public
     * @return bool
     */
    public function setLastcheck($last_check)
    {
        $return = false;
        $last_checkIsOK = isset($last_check) && $last_check != null;
        if ($last_checkIsOK) {
            $this->_last_check = $last_check;
            $return = true;
        }
        return $return;
    }


    /**
     * setNextcheck 
     * 
     * @param mixed $next_check To set.
     * 
     * @access public
     * @return bool
     */
    public function setNextcheck($next_check)
    {
        $return = false;
        $next_checkIsOK = isset($next_check) && $next_check != null;
        if ($next_checkIsOK) {
            $this->_next_check = $next_check;
            $return = true;
        }
        return $return;
    }


    /**
     * setCheckoptions 
     * 
     * @param mixed $check_options To set.
     * 
     * @access public
     * @return bool
     */
    public function setCheckoptions($check_options)
    {
        $return = false;
        $check_optionsIsOK = isset($check_options) && $check_options != null;
        if ($check_optionsIsOK) {
            $this->_check_options = $check_options;
            $return = true;
        }
        return $return;
    }


    /**
     * setCurrentattempt 
     * 
     * @param mixed $current_attempt To set.
     * 
     * @access public
     * @return bool
     */
    public function setCurrentattempt($current_attempt)
    {
        $return = false;
        $current_attemptIsOK = isset($current_attempt) && $current_attempt != null;
        if ($current_attemptIsOK) {
            $this->_current_attempt = $current_attempt;
            $return = true;
        }
        return $return;
    }


    /**
     * setMaxattempts 
     * 
     * @param mixed $max_attempts To set.
     * 
     * @access public
     * @return bool
     */
    public function setMaxattempts($max_attempts)
    {
        $return = false;
        $max_attemptsIsOK = isset($max_attempts) && $max_attempts != null;
        if ($max_attemptsIsOK) {
            $this->_max_attempts = $max_attempts;
            $return = true;
        }
        return $return;
    }


    /**
     * setStatetype 
     * 
     * @param mixed $state_type To set.
     * 
     * @access public
     * @return bool
     */
    public function setStatetype($state_type)
    {
        $return = false;
        $state_typeIsOK = isset($state_type) && $state_type != null;
        if ($state_typeIsOK) {
            $this->_state_type = $state_type;
            $return = true;
        }
        return $return;
    }


    /**
     * setLaststatechange 
     * 
     * @param mixed $last_state_change To set.
     * 
     * @access public
     * @return bool
     */
    public function setLaststatechange($last_state_change)
    {
        $return = false;
        $last_state_changeIsOK = isset($last_state_change) 
            && $last_state_change != null;
        if ($last_state_changeIsOK) {
            $this->_last_state_change = $last_state_change;
            $return = true;
        }
        return $return;
    }


    /**
     * setLasthardstatechange 
     * 
     * @param mixed $last_hard_state_change To set.
     * 
     * @access public
     * @return bool
     */
    public function setLasthardstatechange($last_hard_state_change)
    {
        $return = false;
        $last_hard_state_changeIsOK = isset($last_hard_state_change) 
            && $last_hard_state_change != null;
        if ($last_hard_state_changeIsOK) {
            $this->_last_hard_state_change = $last_hard_state_change;
            $return = true;
        }
        return $return;
    }


    /**
     * setLasttimeup 
     * 
     * @param mixed $last_time_up To set.
     * 
     * @access public
     * @return bool
     */
    public function setLasttimeup($last_time_up)
    {
        $return = false;
        $last_time_upIsOK = isset($last_time_up) && $last_time_up != null;
        if ($last_time_upIsOK) {
            $this->_last_time_up = $last_time_up;
            $return = true;
        }
        return $return;
    }


    /**
     * setLasttimedown 
     * 
     * @param mixed $last_time_down To set.
     * 
     * @access public
     * @return bool
     */
    public function setLasttimedown($last_time_down)
    {
        $return = false;
        $last_time_downIsOK = isset($last_time_down) && $last_time_down != null;
        if ($last_time_downIsOK) {
            $this->_last_time_down = $last_time_down;
            $return = true;
        }
        return $return;
    }


    /**
     * setLasttimeunreachable 
     * 
     * @param mixed $last_time_unreachable To set.
     * 
     * @access public
     * @return bool
     */
    public function setLasttimeunreachable($last_time_unreachable)
    {
        $return = false;
        $last_time_unreachableIsOK = isset($last_time_unreachable) 
            && $last_time_unreachable != null;
        if ($last_time_unreachableIsOK) {
            $this->_last_time_unreachable = $last_time_unreachable;
            $return = true;
        }
        return $return;
    }


    /**
     * setLastnotification 
     * 
     * @param mixed $last_notification To set.
     * 
     * @access public
     * @return bool
     */
    public function setLastnotification($last_notification)
    {
        $return = false;
        $last_notificationIsOK 
            = isset($last_notification) && $last_notification != null;
        if ($last_notificationIsOK) {
            $this->_last_notification = $last_notification;
            $return = true;
        }
        return $return;
    }


    /**
     * setNextnotification 
     * 
     * @param mixed $next_notification To set.
     * 
     * @access public
     * @return bool
     */
    public function setNextnotification($next_notification)
    {
        $return = false;
        $next_notificationIsOK 
            = isset($next_notification) && $next_notification != null;
        if ($next_notificationIsOK) {
            $this->_next_notification = $next_notification;
            $return = true;
        }
        return $return;
    }


    /**
     * setNomorenotifications 
     * 
     * @param mixed $no_more_notifications To set.
     * 
     * @access public
     * @return bool
     */
    public function setNomorenotifications($no_more_notifications)
    {
        $return = false;
        $no_more_notificationsIsOK 
            = isset($no_more_notifications) && $no_more_notifications != null;
        if ($no_more_notificationsIsOK) {
            $this->_no_more_notifications = $no_more_notifications;
            $return = true;
        }
        return $return;
    }


    /**
     * setCurrentnotificationnumber 
     * 
     * @param mixed $current_notification_number To set.
     * 
     * @access public
     * @return bool
     */
    public function setCurrentnotificationnumber($current_notification_number)
    {
        $return = false;
        $current_notification_numberIsOK = isset($current_notification_number) 
            && $current_notification_number != null;
        if ($current_notification_numberIsOK) {
            $this->_current_notification_number = $current_notification_number;
            $return = true;
        }
        return $return;
    }


    /**
     * setCurrentnotificationid 
     * 
     * @param mixed $current_notification_id To set.
     * 
     * @access public
     * @return bool
     */
    public function setCurrentnotificationid($current_notification_id)
    {
        $return = false;
        $current_notification_idIsOK 
            = isset($current_notification_id) && $current_notification_id != null;
        if ($current_notification_idIsOK) {
            $this->_current_notification_id = $current_notification_id;
            $return = true;
        }
        return $return;
    }


    /**
     * setNotificationsenabled 
     * 
     * @param mixed $notifications_enabled To set.
     * 
     * @access public
     * @return bool
     */
    public function setNotificationsenabled($notifications_enabled)
    {
        $return = false;
        $notifications_enabledIsOK 
            = isset($notifications_enabled) && $notifications_enabled != null;
        if ($notifications_enabledIsOK) {
            $this->_notifications_enabled = $notifications_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * setProblemhasbeenacknowledged 
     * 
     * @param mixed $problem_has_been_acknowledged To set.
     * 
     * @access public
     * @return bool
     */
    public function setProblemhasbeenacknowledged($problem_has_been_acknowledged)
    {
        $return = false;
        $problem_has_been_acknowledgedIsOK = isset($problem_has_been_acknowledged) 
            && $problem_has_been_acknowledged != null;
        if ($problem_has_been_acknowledgedIsOK) {
            $this->_problem_has_been_acknowledged = $problem_has_been_acknowledged;
            $return = true;
        }
        return $return;
    }


    /**
     * setAcknowledgementtype 
     * 
     * @param mixed $acknowledgement_type To set.
     * 
     * @access public
     * @return bool
     */
    public function setAcknowledgementtype($acknowledgement_type)
    {
        $return = false;
        $acknowledgement_typeIsOK 
            = isset($acknowledgement_type) && $acknowledgement_type != null;
        if ($acknowledgement_typeIsOK) {
            $this->_acknowledgement_type = $acknowledgement_type;
            $return = true;
        }
        return $return;
    }


    /**
     * setActivechecksenabled 
     * 
     * @param mixed $active_checks_enabled To set.
     * 
     * @access public
     * @return bool
     */
    public function setActivechecksenabled($active_checks_enabled)
    {
        $return = false;
        $active_checks_enabledIsOK = isset($active_checks_enabled) 
            && $active_checks_enabled != null;
        if ($active_checks_enabledIsOK) {
            $this->_active_checks_enabled = $active_checks_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * setPassivechecksenabled 
     * 
     * @param mixed $passive_checks_enabled To set.
     * 
     * @access public
     * @return bool
     */
    public function setPassivechecksenabled($passive_checks_enabled)
    {
        $return = false;
        $passive_checks_enabledIsOK 
            = isset($passive_checks_enabled) && $passive_checks_enabled != null;
        if ($passive_checks_enabledIsOK) {
            $this->_passive_checks_enabled = $passive_checks_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * setEventhandlerenabled 
     * 
     * @param mixed $event_handler_enabled To set.
     * 
     * @access public
     * @return bool
     */
    public function setEventhandlerenabled($event_handler_enabled)
    {
        $return = false;
        $event_handler_enabledIsOK 
            = isset($event_handler_enabled) && $event_handler_enabled != null;
        if ($event_handler_enabledIsOK) {
            $this->_event_handler_enabled = $event_handler_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * setFlapdetectionenabled 
     * 
     * @param mixed $flap_detection_enabled To set.
     * 
     * @access public
     * @return bool
     */
    public function setFlapdetectionenabled($flap_detection_enabled)
    {
        $return = false;
        $flap_detection_enabledIsOK 
            = isset($flap_detection_enabled) && $flap_detection_enabled != null;
        if ($flap_detection_enabledIsOK) {
            $this->_flap_detection_enabled = $flap_detection_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * setFailurepredictionenabled 
     * 
     * @param mixed $failure_prediction_enabled To set.
     * 
     * @access public
     * @return bool
     */
    public function setFailurepredictionenabled($failure_prediction_enabled)
    {
        $return = false;
        $failure_prediction_enabledIsOK = isset($failure_prediction_enabled) 
            && $failure_prediction_enabled != null;
        if ($failure_prediction_enabledIsOK) {
            $this->_failure_prediction_enabled = $failure_prediction_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * setProcessperformancedata 
     * 
     * @param mixed $process_performance_data To set.
     * 
     * @access public
     * @return bool
     */
    public function setProcessperformancedata($process_performance_data)
    {
        $return = false;
        $process_performance_dataIsOK 
            = isset($process_performance_data) && $process_performance_data != null;
        if ($process_performance_dataIsOK) {
            $this->_process_performance_data = $process_performance_data;
            $return = true;
        }
        return $return;
    }


    /**
     * setObsessoverhost 
     * 
     * @param mixed $obsess_over_host To set.
     * 
     * @access public
     * @return bool
     */
    public function setObsessoverhost($obsess_over_host)
    {
        $return = false;
        $obsess_over_hostIsOK 
            = isset($obsess_over_host) && $obsess_over_host != null;
        if ($obsess_over_hostIsOK) {
            $this->_obsess_over_host = $obsess_over_host;
            $return = true;
        }
        return $return;
    }


    /**
     * setLastupdate 
     * 
     * @param mixed $last_update To set.
     * 
     * @access public
     * @return bool
     */
    public function setLastupdate($last_update)
    {
        $return = false;
        $last_updateIsOK = isset($last_update) && $last_update != null;
        if ($last_updateIsOK) {
            $this->_last_update = $last_update;
            $return = true;
        }
        return $return;
    }


    /**
     * setIsflapping 
     * 
     * @param mixed $is_flapping To set.
     * 
     * @access public
     * @return bool
     */
    public function setIsflapping($is_flapping)
    {
        $return = false;
        $is_flappingIsOK = isset($is_flapping) && $is_flapping != null;
        if ($is_flappingIsOK) {
            $this->_is_flapping = $is_flapping;
            $return = true;
        }
        return $return;
    }


    /**
     * setPercentstatechange 
     * 
     * @param mixed $percent_state_change To set.
     * 
     * @access public
     * @return bool
     */
    public function setPercentstatechange($percent_state_change)
    {
        $return = false;
        $percent_state_changeIsOK 
            = isset($percent_state_change) && $percent_state_change != null;
        if ($percent_state_changeIsOK) {
            $this->_percent_state_change = $percent_state_change;
            $return = true;
        }
        return $return;
    }


    /**
     * setScheduleddowntimedepth 
     * 
     * @param mixed $scheduled_downtime_depth To set.
     * 
     * @access public
     * @return bool
     */
    public function setScheduleddowntimedepth($scheduled_downtime_depth)
    {
        $return = false;
        $scheduled_downtime_depthIsOK 
            = isset($scheduled_downtime_depth) && $scheduled_downtime_depth != null;
        if ($scheduled_downtime_depthIsOK) {
            $this->_scheduled_downtime_depth = $scheduled_downtime_depth;
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
        $out.=$this->_SNMP;
        $out.=$this->_host_name;
        $out.=$this->_modified_attributes;
        $out.=$this->_check_command;
        $out.=$this->_check_period;
        $out.=$this->_notification_period;
        $out.=$this->_check_interval;
        $out.=$this->_retry_interval;
        $out.=$this->_event_handler;
        $out.=$this->_has_been_checked;
        $out.=$this->_should_be_scheduled;
        $out.=$this->_check_execution_time;
        $out.=$this->_check_latency;
        $out.=$this->_check_type;
        $out.=$this->_current_state;
        $out.=$this->_last_hard_state;
        $out.=$this->_last_event_id;
        $out.=$this->_current_event_id;
        $out.=$this->_current_problem_id;
        $out.=$this->_last_problem_id;
        $out.=$this->_plugin_output;
        $out.=$this->_long_plugin_output;
        $out.=$this->_performance_data;
        $out.=$this->_last_check;
        $out.=$this->_next_check;
        $out.=$this->_check_options;
        $out.=$this->_current_attempt;
        $out.=$this->_max_attempts;
        $out.=$this->_state_type;
        $out.=$this->_last_state_change;
        $out.=$this->_last_hard_state_change;
        $out.=$this->_last_time_up;
        $out.=$this->_last_time_down;
        $out.=$this->_last_time_unreachable;
        $out.=$this->_last_notification;
        $out.=$this->_next_notification;
        $out.=$this->_no_more_notifications;
        $out.=$this->_current_notification_number;
        $out.=$this->_current_notification_id;
        $out.=$this->_notifications_enabled;
        $out.=$this->_problem_has_been_acknowledged;
        $out.=$this->_acknowledgement_type;
        $out.=$this->_active_checks_enabled;
        $out.=$this->_passive_checks_enabled;
        $out.=$this->_event_handler_enabled;
        $out.=$this->_flap_detection_enabled;
        $out.=$this->_failure_prediction_enabled;
        $out.=$this->_process_performance_data;
        $out.=$this->_obsess_over_host;
        $out.=$this->_last_update;
        $out.=$this->_is_flapping;
        $out.=$this->_percent_state_change;
        $out.=$this->_scheduled_downtime_depth;
        $out.=$this->_TAGS;
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
        $out['SNMP']=$this->_SNMP;
        $out['host_name']=$this->_host_name;
        $out['modified_attributes']=$this->_modified_attributes;
        $out['check_command']=$this->_check_command;
        $out['check_period']=$this->_check_period;
        $out['notification_period']=$this->_notification_period;
        $out['check_interval']=$this->_check_interval;
        $out['retry_interval']=$this->_retry_interval;
        $out['event_handler']=$this->_event_handler;
        $out['has_been_checked']=$this->_has_been_checked;
        $out['should_be_scheduled']=$this->_should_be_scheduled;
        $out['check_execution_time']=$this->_check_execution_time;
        $out['check_latency']=$this->_check_latency;
        $out['check_type']=$this->_check_type;
        $out['current_state']=$this->_current_state;
        $out['last_hard_state']=$this->_last_hard_state;
        $out['last_event_id']=$this->_last_event_id;
        $out['current_event_id']=$this->_current_event_id;
        $out['current_problem_id']=$this->_current_problem_id;
        $out['last_problem_id']=$this->_last_problem_id;
        $out['plugin_output']=$this->_plugin_output;
        $out['long_plugin_output']=$this->_long_plugin_output;
        $out['performance_data']=$this->_performance_data;
        $out['last_check']=$this->_last_check;
        $out['next_check']=$this->_next_check;
        $out['check_options']=$this->_check_options;
        $out['current_attempt']=$this->_current_attempt;
        $out['max_attempts']=$this->_max_attempts;
        $out['state_type']=$this->_state_type;
        $out['last_state_change']=$this->_last_state_change;
        $out['last_hard_state_change']=$this->_last_hard_state_change;
        $out['last_time_up']=$this->_last_time_up;
        $out['last_time_down']=$this->_last_time_down;
        $out['last_time_unreachable']=$this->_last_time_unreachable;
        $out['last_notification']=$this->_last_notification;
        $out['next_notification']=$this->_next_notification;
        $out['no_more_notifications']=$this->_no_more_notifications;
        $out['current_notification_number']=$this->_current_notification_number;
        $out['current_notification_id']=$this->_current_notification_id;
        $out['notifications_enabled']=$this->_notifications_enabled;
        $out['problem_has_been_acknowledged']=$this->_problem_has_been_acknowledged;
        $out['acknowledgement_type']=$this->_acknowledgement_type;
        $out['active_checks_enabled']=$this->_active_checks_enabled;
        $out['passive_checks_enabled']=$this->_passive_checks_enabled;
        $out['event_handler_enabled']=$this->_event_handler_enabled;
        $out['flap_detection_enabled']=$this->_flap_detection_enabled;
        $out['failure_prediction_enabled']=$this->_failure_prediction_enabled;
        $out['process_performance_data']=$this->_process_performance_data;
        $out['obsess_over_host']=$this->_obsess_over_host;
        $out['last_update']=$this->_last_update;
        $out['is_flapping']=$this->_is_flapping;
        $out['percent_state_change']=$this->_percent_state_change;
        $out['scheduled_downtime_depth']=$this->_scheduled_downtime_depth;
        $out['TAGS']=$this->_TAGS;
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
