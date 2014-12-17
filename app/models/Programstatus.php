<?php
/**
 * Holds the class ./models/Programstatus.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./models/Programstatus.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


/**
 * Programstatus 
 * 
 * Holds information about the status of a program taken from the status.dat file.
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
class Programstatus extends StatusPopulator
{


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
     * _nagios_pid 
     * 
     * @var mixed
     * @access private
     */
    private $_nagios_pid;


    /**
     * _daemon_mode 
     * 
     * @var mixed
     * @access private
     */
    private $_daemon_mode;


    /**
     * _program_start 
     * 
     * @var mixed
     * @access private
     */
    private $_program_start;


    /**
     * _last_command_check 
     * 
     * @var mixed
     * @access private
     */
    private $_last_command_check;


    /**
     * _last_log_rotation 
     * 
     * @var mixed
     * @access private
     */
    private $_last_log_rotation;


    /**
     * _enable_notifications 
     * 
     * @var mixed
     * @access private
     */
    private $_enable_notifications;


    /**
     * _active_service_checks_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_active_service_checks_enabled;


    /**
     * _passive_service_checks_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_passive_service_checks_enabled;


    /**
     * _active_host_checks_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_active_host_checks_enabled;


    /**
     * _passive_host_checks_enabled 
     * 
     * @var mixed
     * @access private
     */
    private $_passive_host_checks_enabled;


    /**
     * _enable_event_handlers 
     * 
     * @var mixed
     * @access private
     */
    private $_enable_event_handlers;


    /**
     * _obsess_over_services 
     * 
     * @var mixed
     * @access private
     */
    private $_obsess_over_services;


    /**
     * _obsess_over_hosts 
     * 
     * @var mixed
     * @access private
     */
    private $_obsess_over_hosts;


    /**
     * _check_service_freshness 
     * 
     * @var mixed
     * @access private
     */
    private $_check_service_freshness;


    /**
     * _check_host_freshness 
     * 
     * @var mixed
     * @access private
     */
    private $_check_host_freshness;


    /**
     * _enable_flap_detection 
     * 
     * @var mixed
     * @access private
     */
    private $_enable_flap_detection;


    /**
     * _enable_failure_prediction 
     * 
     * @var mixed
     * @access private
     */
    private $_enable_failure_prediction;


    /**
     * _process_performance_data 
     * 
     * @var mixed
     * @access private
     */
    private $_process_performance_data;


    /**
     * _global_host_event_handler 
     * 
     * @var mixed
     * @access private
     */
    private $_global_host_event_handler;


    /**
     * _global_service_event_handler 
     * 
     * @var mixed
     * @access private
     */
    private $_global_service_event_handler;


    /**
     * _next_comment_id 
     * 
     * @var mixed
     * @access private
     */
    private $_next_comment_id;


    /**
     * _next_downtime_id 
     * 
     * @var mixed
     * @access private
     */
    private $_next_downtime_id;


    /**
     * _next_event_id 
     * 
     * @var mixed
     * @access private
     */
    private $_next_event_id;


    /**
     * _next_problem_id 
     * 
     * @var mixed
     * @access private
     */
    private $_next_problem_id;


    /**
     * _next_notification_id 
     * 
     * @var mixed
     * @access private
     */
    private $_next_notification_id;


    /**
     * _total_external_command_buffer_slots 
     * 
     * @var mixed
     * @access private
     */
    private $_total_external_command_buffer_slots;


    /**
     * _used_external_command_buffer_slots 
     * 
     * @var mixed
     * @access private
     */
    private $_used_external_command_buffer_slots;


    /**
     * _high_external_command_buffer_slots 
     * 
     * @var mixed
     * @access private
     */
    private $_high_external_command_buffer_slots;


    /**
     * _active_scheduled_host_check_stats 
     * 
     * @var mixed
     * @access private
     */
    private $_active_scheduled_host_check_stats;


    /**
     * _active_ondemand_host_check_stats 
     * 
     * @var mixed
     * @access private
     */
    private $_active_ondemand_host_check_stats;


    /**
     * _passive_host_check_stats 
     * 
     * @var mixed
     * @access private
     */
    private $_passive_host_check_stats;


    /**
     * _active_scheduled_service_check_stats 
     * 
     * @var mixed
     * @access private
     */
    private $_active_scheduled_service_check_stats;


    /**
     * _active_ondemand_service_check_stats 
     * 
     * @var mixed
     * @access private
     */
    private $_active_ondemand_service_check_stats;


    /**
     * _passive_service_check_stats 
     * 
     * @var mixed
     * @access private
     */
    private $_passive_service_check_stats;


    /**
     * _cached_host_check_stats 
     * 
     * @var mixed
     * @access private
     */
    private $_cached_host_check_stats;


    /**
     * _cached_service_check_stats 
     * 
     * @var mixed
     * @access private
     */
    private $_cached_service_check_stats;


    /**
     * _external_command_stats 
     * 
     * @var mixed
     * @access private
     */
    private $_external_command_stats;


    /**
     * _parallel_host_check_stats 
     * 
     * @var mixed
     * @access private
     */
    private $_parallel_host_check_stats;


    /**
     * _serial_host_check_stats 
     * 
     * @var mixed
     * @access private
     */
    private $_serial_host_check_stats;


    /**
     * getModifiedhostattributes 
     * 
     * @access public
     * @return mixed String on success else Bool.
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
     * @return mixed String on success else Bool.
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
     * getNagiospid 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getNagiospid()
    {
        $return = false;
        $nagios_pidIsSet = isset($this->_nagios_pid);
        if ($nagios_pidIsSet) {
            $return = $this->_nagios_pid;
        }
        return $return;
    }


    /**
     * getDaemonmode 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getDaemonmode()
    {
        $return = false;
        $daemon_modeIsSet = isset($this->_daemon_mode);
        if ($daemon_modeIsSet) {
            $return = $this->_daemon_mode;
        }
        return $return;
    }


    /**
     * getProgramstart 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getProgramstart()
    {
        $return = false;
        $program_startIsSet = isset($this->_program_start);
        if ($program_startIsSet) {
            $return = $this->_program_start;
        }
        return $return;
    }


    /**
     * getLastcommandcheck 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getLastcommandcheck()
    {
        $return = false;
        $last_command_checkIsSet = isset($this->_last_command_check);
        if ($last_command_checkIsSet) {
            $return = $this->_last_command_check;
        }
        return $return;
    }


    /**
     * getLastlogrotation 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getLastlogrotation()
    {
        $return = false;
        $last_log_rotationIsSet = isset($this->_last_log_rotation);
        if ($last_log_rotationIsSet) {
            $return = $this->_last_log_rotation;
        }
        return $return;
    }


    /**
     * getEnablenotifications 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getEnablenotifications()
    {
        $return = false;
        $enable_notificationsIsSet = isset($this->_enable_notifications);
        if ($enable_notificationsIsSet) {
            $return = $this->_enable_notifications;
        }
        return $return;
    }


    /**
     * getActiveservicechecksenabled 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getActiveservicechecksenabled()
    {
        $return = false;
        $active_service_checks_enabledIsSet 
            = isset($this->_active_service_checks_enabled);
        if ($active_service_checks_enabledIsSet) {
            $return = $this->_active_service_checks_enabled;
        }
        return $return;
    }


    /**
     * getPassiveservicechecksenabled 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getPassiveservicechecksenabled()
    {
        $return = false;
        $passive_service_checks_enabledIsSet 
            = isset($this->_passive_service_checks_enabled);
        if ($passive_service_checks_enabledIsSet) {
            $return = $this->_passive_service_checks_enabled;
        }
        return $return;
    }


    /**
     * getActivehostchecksenabled 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getActivehostchecksenabled()
    {
        $return = false;
        $active_host_checks_enabledIsSet 
            = isset($this->_active_host_checks_enabled);
        if ($active_host_checks_enabledIsSet) {
            $return = $this->_active_host_checks_enabled;
        }
        return $return;
    }


    /**
     * getPassivehostchecksenabled 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getPassivehostchecksenabled()
    {
        $return = false;
        $passive_host_checks_enabledIsSet 
            = isset($this->_passive_host_checks_enabled);
        if ($passive_host_checks_enabledIsSet) {
            $return = $this->_passive_host_checks_enabled;
        }
        return $return;
    }


    /**
     * getEnableeventhandlers 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getEnableeventhandlers()
    {
        $return = false;
        $enable_event_handlersIsSet = isset($this->_enable_event_handlers);
        if ($enable_event_handlersIsSet) {
            $return = $this->_enable_event_handlers;
        }
        return $return;
    }


    /**
     * getObsessoverservices 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getObsessoverservices()
    {
        $return = false;
        $obsess_over_servicesIsSet = isset($this->_obsess_over_services);
        if ($obsess_over_servicesIsSet) {
            $return = $this->_obsess_over_services;
        }
        return $return;
    }


    /**
     * getObsessoverhosts 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getObsessoverhosts()
    {
        $return = false;
        $obsess_over_hostsIsSet = isset($this->_obsess_over_hosts);
        if ($obsess_over_hostsIsSet) {
            $return = $this->_obsess_over_hosts;
        }
        return $return;
    }


    /**
     * getCheckservicefreshness 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getCheckservicefreshness()
    {
        $return = false;
        $check_service_freshnessIsSet = isset($this->_check_service_freshness);
        if ($check_service_freshnessIsSet) {
            $return = $this->_check_service_freshness;
        }
        return $return;
    }


    /**
     * getCheckhostfreshness 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getCheckhostfreshness()
    {
        $return = false;
        $check_host_freshnessIsSet = isset($this->_check_host_freshness);
        if ($check_host_freshnessIsSet) {
            $return = $this->_check_host_freshness;
        }
        return $return;
    }


    /**
     * getEnableflapdetection 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getEnableflapdetection()
    {
        $return = false;
        $enable_flap_detectionIsSet = isset($this->_enable_flap_detection);
        if ($enable_flap_detectionIsSet) {
            $return = $this->_enable_flap_detection;
        }
        return $return;
    }


    /**
     * getEnablefailureprediction 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getEnablefailureprediction()
    {
        $return = false;
        $enable_failure_predictionIsSet = isset($this->_enable_failure_prediction);
        if ($enable_failure_predictionIsSet) {
            $return = $this->_enable_failure_prediction;
        }
        return $return;
    }


    /**
     * getProcessperformancedata 
     * 
     * @access public
     * @return mixed String on success else Bool.
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
     * getGlobalhosteventhandler 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getGlobalhosteventhandler()
    {
        $return = false;
        $global_host_event_handlerIsSet = isset($this->_global_host_event_handler);
        if ($global_host_event_handlerIsSet) {
            $return = $this->_global_host_event_handler;
        }
        return $return;
    }


    /**
     * getGlobalserviceeventhandler 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getGlobalserviceeventhandler()
    {
        $return = false;
        $global_service_event_handlerIsSet 
            = isset($this->_global_service_event_handler);
        if ($global_service_event_handlerIsSet) {
            $return = $this->_global_service_event_handler;
        }
        return $return;
    }


    /**
     * getNextcommentid 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getNextcommentid()
    {
        $return = false;
        $next_comment_idIsSet = isset($this->_next_comment_id);
        if ($next_comment_idIsSet) {
            $return = $this->_next_comment_id;
        }
        return $return;
    }


    /**
     * getNextdowntimeid 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getNextdowntimeid()
    {
        $return = false;
        $next_downtime_idIsSet = isset($this->_next_downtime_id);
        if ($next_downtime_idIsSet) {
            $return = $this->_next_downtime_id;
        }
        return $return;
    }


    /**
     * getNexteventid 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getNexteventid()
    {
        $return = false;
        $next_event_idIsSet = isset($this->_next_event_id);
        if ($next_event_idIsSet) {
            $return = $this->_next_event_id;
        }
        return $return;
    }


    /**
     * getNextproblemid 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getNextproblemid()
    {
        $return = false;
        $next_problem_idIsSet = isset($this->_next_problem_id);
        if ($next_problem_idIsSet) {
            $return = $this->_next_problem_id;
        }
        return $return;
    }


    /**
     * getNextnotificationid 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getNextnotificationid()
    {
        $return = false;
        $next_notification_idIsSet = isset($this->_next_notification_id);
        if ($next_notification_idIsSet) {
            $return = $this->_next_notification_id;
        }
        return $return;
    }


    /**
     * getTotalexternalcommandbufferslots 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getTotalexternalcommandbufferslots()
    {
        $return = false;
        $total_external_command_buffer_slotsIsSet 
            = isset($this->_total_external_command_buffer_slots);
        if ($total_external_command_buffer_slotsIsSet) {
            $return = $this->_total_external_command_buffer_slots;
        }
        return $return;
    }


    /**
     * getUsedexternalcommandbufferslots 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getUsedexternalcommandbufferslots()
    {
        $return = false;
        $used_external_command_buffer_slotsIsSet 
            = isset($this->_used_external_command_buffer_slots);
        if ($used_external_command_buffer_slotsIsSet) {
            $return = $this->_used_external_command_buffer_slots;
        }
        return $return;
    }


    /**
     * getHighexternalcommandbufferslots 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getHighexternalcommandbufferslots()
    {
        $return = false;
        $high_external_command_buffer_slotsIsSet 
            = isset($this->_high_external_command_buffer_slots);
        if ($high_external_command_buffer_slotsIsSet) {
            $return = $this->_high_external_command_buffer_slots;
        }
        return $return;
    }


    /**
     * getActivescheduledhostcheckstats 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getActivescheduledhostcheckstats()
    {
        $return = false;
        $active_scheduled_host_check_statsIsSet 
            = isset($this->_active_scheduled_host_check_stats);
        if ($active_scheduled_host_check_statsIsSet) {
            $return = $this->_active_scheduled_host_check_stats;
        }
        return $return;
    }


    /**
     * getActiveondemandhostcheckstats 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getActiveondemandhostcheckstats()
    {
        $return = false;
        $active_ondemand_host_check_statsIsSet 
            = isset($this->_active_ondemand_host_check_stats);
        if ($active_ondemand_host_check_statsIsSet) {
            $return = $this->_active_ondemand_host_check_stats;
        }
        return $return;
    }


    /**
     * getPassivehostcheckstats 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getPassivehostcheckstats()
    {
        $return = false;
        $passive_host_check_statsIsSet = isset($this->_passive_host_check_stats);
        if ($passive_host_check_statsIsSet) {
            $return = $this->_passive_host_check_stats;
        }
        return $return;
    }


    /**
     * getActivescheduledservicecheckstats 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getActivescheduledservicecheckstats()
    {
        $return = false;
        $active_scheduled_service_check_statsIsSet 
            = isset($this->_active_scheduled_service_check_stats);
        if ($active_scheduled_service_check_statsIsSet) {
            $return = $this->_active_scheduled_service_check_stats;
        }
        return $return;
    }


    /**
     * getActiveondemandservicecheckstats 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getActiveondemandservicecheckstats()
    {
        $return = false;
        $active_ondemand_service_check_statsIsSet 
            = isset($this->_active_ondemand_service_check_stats);
        if ($active_ondemand_service_check_statsIsSet) {
            $return = $this->_active_ondemand_service_check_stats;
        }
        return $return;
    }


    /**
     * getPassiveservicecheckstats 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getPassiveservicecheckstats()
    {
        $return = false;
        $passive_service_check_statsIsSet 
            = isset($this->_passive_service_check_stats);
        if ($passive_service_check_statsIsSet) {
            $return = $this->_passive_service_check_stats;
        }
        return $return;
    }


    /**
     * getCachedhostcheckstats 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getCachedhostcheckstats()
    {
        $return = false;
        $cached_host_check_statsIsSet = isset($this->_cached_host_check_stats);
        if ($cached_host_check_statsIsSet) {
            $return = $this->_cached_host_check_stats;
        }
        return $return;
    }


    /**
     * getCachedservicecheckstats 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getCachedservicecheckstats()
    {
        $return = false;
        $cached_service_check_statsIsSet 
            = isset($this->_cached_service_check_stats);
        if ($cached_service_check_statsIsSet) {
            $return = $this->_cached_service_check_stats;
        }
        return $return;
    }


    /**
     * getExternalcommandstats 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getExternalcommandstats()
    {
        $return = false;
        $external_command_statsIsSet = isset($this->_external_command_stats);
        if ($external_command_statsIsSet) {
            $return = $this->_external_command_stats;
        }
        return $return;
    }


    /**
     * getParallelhostcheckstats 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getParallelhostcheckstats()
    {
        $return = false;
        $parallel_host_check_statsIsSet = isset($this->_parallel_host_check_stats);
        if ($parallel_host_check_statsIsSet) {
            $return = $this->_parallel_host_check_stats;
        }
        return $return;
    }


    /**
     * getSerialhostcheckstats 
     * 
     * @access public
     * @return mixed String on success else Bool.
     */
    public function getSerialhostcheckstats()
    {
        $return = false;
        $serial_host_check_statsIsSet = isset($this->_serial_host_check_stats);
        if ($serial_host_check_statsIsSet) {
            $return = $this->_serial_host_check_stats;
        }
        return $return;
    }


    /**
     * setModifiedhostattributes 
     * 
     * @param mixed $modified_host_attributes To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setModifiedhostattributes($modified_host_attributes)
    {
        $return = false;
        $modified_host_attributesIsOK = isset($modified_host_attributes) 
            && $modified_host_attributes != null;
        if ($modified_host_attributesIsOK) {
            $this->_modified_host_attributes = $modified_host_attributes;
            $return = true;
        }
        return $return;
    }


    /**
     * setModifiedserviceattributes 
     * 
     * @param mixed $modified_service_attributes To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setModifiedserviceattributes($modified_service_attributes)
    {
        $return = false;
        $modified_service_attributesIsOK = isset($modified_service_attributes) 
            && $modified_service_attributes != null;
        if ($modified_service_attributesIsOK) {
            $this->_modified_service_attributes = $modified_service_attributes;
            $return = true;
        }
        return $return;
    }


    /**
     * setNagiospid 
     * 
     * @param mixed $nagios_pid To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setNagiospid($nagios_pid)
    {
        $return = false;
        $nagios_pidIsOK = isset($nagios_pid) && $nagios_pid != null;
        if ($nagios_pidIsOK) {
            $this->_nagios_pid = $nagios_pid;
            $return = true;
        }
        return $return;
    }


    /**
     * setDaemonmode 
     * 
     * @param mixed $daemon_mode To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setDaemonmode($daemon_mode)
    {
        $return = false;
        $daemon_modeIsOK = isset($daemon_mode) && $daemon_mode != null;
        if ($daemon_modeIsOK) {
            $this->_daemon_mode = $daemon_mode;
            $return = true;
        }
        return $return;
    }


    /**
     * setProgramstart 
     * 
     * @param mixed $program_start To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setProgramstart($program_start)
    {
        $return = false;
        $program_startIsOK = isset($program_start) && $program_start != null;
        if ($program_startIsOK) {
            $this->_program_start = $program_start;
            $return = true;
        }
        return $return;
    }


    /**
     * setLastcommandcheck 
     * 
     * @param mixed $last_command_check To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setLastcommandcheck($last_command_check)
    {
        $return = false;
        $last_command_checkIsOK 
            = isset($last_command_check) && $last_command_check != null;
        if ($last_command_checkIsOK) {
            $this->_last_command_check = $last_command_check;
            $return = true;
        }
        return $return;
    }


    /**
     * setLastlogrotation 
     * 
     * @param mixed $last_log_rotation To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setLastlogrotation($last_log_rotation)
    {
        $return = false;
        $last_log_rotationIsOK 
            = isset($last_log_rotation) && $last_log_rotation != null;
        if ($last_log_rotationIsOK) {
            $this->_last_log_rotation = $last_log_rotation;
            $return = true;
        }
        return $return;
    }


    /**
     * setEnablenotifications 
     * 
     * @param mixed $enable_notifications To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setEnablenotifications($enable_notifications)
    {
        $return = false;
        $enable_notificationsIsOK 
            = isset($enable_notifications) && $enable_notifications != null;
        if ($enable_notificationsIsOK) {
            $this->_enable_notifications = $enable_notifications;
            $return = true;
        }
        return $return;
    }


    /**
     * setActiveservicechecksenabled 
     * 
     * @param mixed $active_service_checks_enabled To set.
     * 
     * @access public
     * @return bool 
     */
    public function setActiveservicechecksenabled($active_service_checks_enabled)
    {
        $return = false;
        $active_service_checks_enabledIsOK = isset($active_service_checks_enabled) 
            && $active_service_checks_enabled != null;
        if ($active_service_checks_enabledIsOK) {
            $this->_active_service_checks_enabled = $active_service_checks_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * setPassiveservicechecksenabled 
     * 
     * @param mixed $passive_service_checks_enabled To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setPassiveservicechecksenabled($passive_service_checks_enabled)
    {
        $return = false;
        $passive_service_checks_enabledIsOK 
            = isset($passive_service_checks_enabled) 
            && $passive_service_checks_enabled != null;
        if ($passive_service_checks_enabledIsOK) {
            $this->_passive_service_checks_enabled 
                = $passive_service_checks_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * setActivehostchecksenabled 
     * 
     * @param mixed $active_host_checks_enabled To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setActivehostchecksenabled($active_host_checks_enabled)
    {
        $return = false;
        $active_host_checks_enabledIsOK = isset($active_host_checks_enabled) 
            && $active_host_checks_enabled != null;
        if ($active_host_checks_enabledIsOK) {
            $this->_active_host_checks_enabled = $active_host_checks_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * setPassivehostchecksenabled 
     * 
     * @param mixed $passive_host_checks_enabled To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setPassivehostchecksenabled($passive_host_checks_enabled)
    {
        $return = false;
        $passive_host_checks_enabledIsOK = isset($passive_host_checks_enabled) 
            && $passive_host_checks_enabled != null;
        if ($passive_host_checks_enabledIsOK) {
            $this->_passive_host_checks_enabled = $passive_host_checks_enabled;
            $return = true;
        }
        return $return;
    }


    /**
     * setEnableeventhandlers 
     * 
     * @param mixed $enable_event_handlers To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setEnableeventhandlers($enable_event_handlers)
    {
        $return = false;
        $enable_event_handlersIsOK 
            = isset($enable_event_handlers) && $enable_event_handlers != null;
        if ($enable_event_handlersIsOK) {
            $this->_enable_event_handlers = $enable_event_handlers;
            $return = true;
        }
        return $return;
    }


    /**
     * setObsessoverservices 
     * 
     * @param mixed $obsess_over_services To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setObsessoverservices($obsess_over_services)
    {
        $return = false;
        $obsess_over_servicesIsOK 
            = isset($obsess_over_services) && $obsess_over_services != null;
        if ($obsess_over_servicesIsOK) {
            $this->_obsess_over_services = $obsess_over_services;
            $return = true;
        }
        return $return;
    }


    /**
     * setObsessoverhosts 
     * 
     * @param mixed $obsess_over_hosts To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setObsessoverhosts($obsess_over_hosts)
    {
        $return = false;
        $obsess_over_hostsIsOK 
            = isset($obsess_over_hosts) && $obsess_over_hosts != null;
        if ($obsess_over_hostsIsOK) {
            $this->_obsess_over_hosts = $obsess_over_hosts;
            $return = true;
        }
        return $return;
    }


    /**
     * setCheckservicefreshness 
     * 
     * @param mixed $check_service_freshness To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setCheckservicefreshness($check_service_freshness)
    {
        $return = false;
        $check_service_freshnessIsOK 
            = isset($check_service_freshness) && $check_service_freshness != null;
        if ($check_service_freshnessIsOK) {
            $this->_check_service_freshness = $check_service_freshness;
            $return = true;
        }
        return $return;
    }


    /**
     * setCheckhostfreshness 
     * 
     * @param mixed $check_host_freshness To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setCheckhostfreshness($check_host_freshness)
    {
        $return = false;
        $check_host_freshnessIsOK 
            = isset($check_host_freshness) && $check_host_freshness != null;
        if ($check_host_freshnessIsOK) {
            $this->_check_host_freshness = $check_host_freshness;
            $return = true;
        }
        return $return;
    }


    /**
     * setEnableflapdetection 
     * 
     * @param mixed $enable_flap_detection To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setEnableflapdetection($enable_flap_detection)
    {
        $return = false;
        $enable_flap_detectionIsOK 
            = isset($enable_flap_detection) && $enable_flap_detection != null;
        if ($enable_flap_detectionIsOK) {
            $this->_enable_flap_detection = $enable_flap_detection;
            $return = true;
        }
        return $return;
    }


    /**
     * setEnablefailureprediction 
     * 
     * @param mixed $enable_failure_prediction To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setEnablefailureprediction($enable_failure_prediction)
    {
        $return = false;
        $enable_failure_predictionIsOK = isset($enable_failure_prediction) 
            && $enable_failure_prediction != null;
        if ($enable_failure_predictionIsOK) {
            $this->_enable_failure_prediction = $enable_failure_prediction;
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
     * @return mixed bool on failure, else String.
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
     * setGlobalhosteventhandler 
     * 
     * @param mixed $global_host_event_handler To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setGlobalhosteventhandler($global_host_event_handler)
    {
        $return = false;
        $global_host_event_handlerIsOK = isset($global_host_event_handler) 
            && $global_host_event_handler != null;
        if ($global_host_event_handlerIsOK) {
            $this->_global_host_event_handler = $global_host_event_handler;
            $return = true;
        }
        return $return;
    }


    /**
     * setGlobalserviceeventhandler 
     * 
     * @param mixed $global_service_event_handler To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setGlobalserviceeventhandler($global_service_event_handler)
    {
        $return = false;
        $global_service_event_handlerIsOK = isset($global_service_event_handler) 
            && $global_service_event_handler != null;
        if ($global_service_event_handlerIsOK) {
            $this->_global_service_event_handler = $global_service_event_handler;
            $return = true;
        }
        return $return;
    }


    /**
     * setNextcommentid 
     * 
     * @param mixed $next_comment_id To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setNextcommentid($next_comment_id)
    {
        $return = false;
        $next_comment_idIsOK = isset($next_comment_id) && $next_comment_id != null;
        if ($next_comment_idIsOK) {
            $this->_next_comment_id = $next_comment_id;
            $return = true;
        }
        return $return;
    }


    /**
     * setNextdowntimeid 
     * 
     * @param mixed $next_downtime_id To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setNextdowntimeid($next_downtime_id)
    {
        $return = false;
        $next_downtime_idIsOK 
            = isset($next_downtime_id) && $next_downtime_id != null;
        if ($next_downtime_idIsOK) {
            $this->_next_downtime_id = $next_downtime_id;
            $return = true;
        }
        return $return;
    }


    /**
     * setNexteventid 
     * 
     * @param mixed $next_event_id To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setNexteventid($next_event_id)
    {
        $return = false;
        $next_event_idIsOK = isset($next_event_id) && $next_event_id != null;
        if ($next_event_idIsOK) {
            $this->_next_event_id = $next_event_id;
            $return = true;
        }
        return $return;
    }


    /**
     * setNextproblemid 
     * 
     * @param mixed $next_problem_id To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setNextproblemid($next_problem_id)
    {
        $return = false;
        $next_problem_idIsOK = isset($next_problem_id) && $next_problem_id != null;
        if ($next_problem_idIsOK) {
            $this->_next_problem_id = $next_problem_id;
            $return = true;
        }
        return $return;
    }


    /**
     * setNextnotificationid 
     * 
     * @param mixed $next_notification_id To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setNextnotificationid($next_notification_id)
    {
        $return = false;
        $next_notification_idIsOK = isset($next_notification_id) 
            && $next_notification_id != null;
        if ($next_notification_idIsOK) {
            $this->_next_notification_id = $next_notification_id;
            $return = true;
        }
        return $return;
    }


    /**
     * setTotalexternalcommandbufferslots
     *
     * @param mixed $total_external_command_buffer_slots To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setTotalexternalcommandbufferslots
    ($total_external_command_buffer_slots)
    {
        $return = false;
        $total_external_command_buffer_slotsIsOK 
            = isset($total_external_command_buffer_slots) 
            && $total_external_command_buffer_slots != null;
        if ($total_external_command_buffer_slotsIsOK) {
            $this->_total_external_command_buffer_slots 
                = $total_external_command_buffer_slots;
            $return = true;
        }
        return $return;
    }


    /**
     * setUsedexternalcommandbufferslots 
     * 
     * @param mixed $used_external_command_buffer_slots To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setUsedexternalcommandbufferslots 
    ($used_external_command_buffer_slots) 
    {
        $return = false;
        $used_external_command_buffer_slotsIsOK 
            = isset($used_external_command_buffer_slots) 
            && $used_external_command_buffer_slots != null;
        if ($used_external_command_buffer_slotsIsOK) {
            $this->_used_external_command_buffer_slots 
                = $used_external_command_buffer_slots;
            $return = true;
        }
        return $return;
    }


    /**
     * setHighexternalcommandbufferslots 
     * 
     * @param mixed $high_external_command_buffer_slots To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setHighexternalcommandbufferslots 
    ($high_external_command_buffer_slots) 
    {
        $return = false;
        $high_external_command_buffer_slotsIsOK 
            = isset($high_external_command_buffer_slots) 
            && $high_external_command_buffer_slots != null;
        if ($high_external_command_buffer_slotsIsOK) {
            $this->_high_external_command_buffer_slots 
                = $high_external_command_buffer_slots;
            $return = true;
        }
        return $return;
    }


    /**
     * setActivescheduledhostcheckstats 
     * 
     * @param mixed $active_scheduled_host_check_stats To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setActivescheduledhostcheckstats 
    ($active_scheduled_host_check_stats) 
    {
        $return = false;
        $active_scheduled_host_check_statsIsOK 
            = isset($active_scheduled_host_check_stats) 
            && $active_scheduled_host_check_stats != null;
        if ($active_scheduled_host_check_statsIsOK) {
            $this->_active_scheduled_host_check_stats 
                = $active_scheduled_host_check_stats;
            $return = true;
        }
        return $return;
    }


    /**
     * setActiveondemandhostcheckstats 
     * 
     * @param mixed $active_ondemand_host_check_stats To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setActiveondemandhostcheckstats 
    ($active_ondemand_host_check_stats) 
    {
        $return = false;
        $active_ondemand_host_check_statsIsOK 
            = isset($active_ondemand_host_check_stats) 
            && $active_ondemand_host_check_stats != null;
        if ($active_ondemand_host_check_statsIsOK) {
            $this->_active_ondemand_host_check_stats 
                = $active_ondemand_host_check_stats;
            $return = true;
        }
        return $return;
    }


    /**
     * setPassivehostcheckstats 
     * 
     * @param mixed $passive_host_check_stats To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setPassivehostcheckstats($passive_host_check_stats)
    {
        $return = false;
        $passive_host_check_statsIsOK = isset($passive_host_check_stats) 
            && $passive_host_check_stats != null;
        if ($passive_host_check_statsIsOK) {
            $this->_passive_host_check_stats = $passive_host_check_stats;
            $return = true;
        }
        return $return;
    }


    /**
     * setActivescheduledservicecheckstats 
     * 
     * @param mixed $active_scheduled_service_check_stats To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setActivescheduledservicecheckstats 
    ($active_scheduled_service_check_stats) 
    {
        $return = false;
        $active_scheduled_service_check_statsIsOK 
            = isset($active_scheduled_service_check_stats) 
            && $active_scheduled_service_check_stats != null;
        if ($active_scheduled_service_check_statsIsOK) {
            $this->_active_scheduled_service_check_stats 
                = $active_scheduled_service_check_stats;
            $return = true;
        }
        return $return;
    }


    /**
     * setActiveondemandservicecheckstats 
     * 
     * @param mixed $active_ondemand_service_check_stats To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setActiveondemandservicecheckstats 
    ($active_ondemand_service_check_stats) 
    {
        $return = false;
        $active_ondemand_service_check_statsIsOK 
            = isset($active_ondemand_service_check_stats) 
            && $active_ondemand_service_check_stats != null;
        if ($active_ondemand_service_check_statsIsOK) {
            $this->_active_ondemand_service_check_stats 
                = $active_ondemand_service_check_stats;
            $return = true;
        }
        return $return;
    }


    /**
     * setPassiveservicecheckstats 
     * 
     * @param mixed $passive_service_check_stats To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setPassiveservicecheckstats($passive_service_check_stats)
    {
        $return = false;
        $passive_service_check_statsIsOK = isset($passive_service_check_stats) 
            && $passive_service_check_stats != null;
        if ($passive_service_check_statsIsOK) {
            $this->_passive_service_check_stats = $passive_service_check_stats;
            $return = true;
        }
        return $return;
    }


    /**
     * setCachedhostcheckstats 
     * 
     * @param mixed $cached_host_check_stats To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setCachedhostcheckstats($cached_host_check_stats)
    {
        $return = false;
        $cached_host_check_statsIsOK = isset($cached_host_check_stats) 
            && $cached_host_check_stats != null;
        if ($cached_host_check_statsIsOK) {
            $this->_cached_host_check_stats = $cached_host_check_stats;
            $return = true;
        }
        return $return;
    }


    /**
     * setCachedservicecheckstats 
     * 
     * @param mixed $cached_service_check_stats To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setCachedservicecheckstats($cached_service_check_stats)
    {
        $return = false;
        $cached_service_check_statsIsOK = isset($cached_service_check_stats) 
            && $cached_service_check_stats != null;
        if ($cached_service_check_statsIsOK) {
            $this->_cached_service_check_stats = $cached_service_check_stats;
            $return = true;
        }
        return $return;
    }


    /**
     * setExternalcommandstats 
     * 
     * @param mixed $external_command_stats To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setExternalcommandstats($external_command_stats)
    {
        $return = false;
        $external_command_statsIsOK = isset($external_command_stats) 
            && $external_command_stats != null;
        if ($external_command_statsIsOK) {
            $this->_external_command_stats = $external_command_stats;
            $return = true;
        }
        return $return;
    }


    /**
     * setParallelhostcheckstats 
     * 
     * @param mixed $parallel_host_check_stats To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setParallelhostcheckstats($parallel_host_check_stats)
    {
        $return = false;
        $parallel_host_check_statsIsOK = isset($parallel_host_check_stats) 
            && $parallel_host_check_stats != null;
        if ($parallel_host_check_statsIsOK) {
            $this->_parallel_host_check_stats = $parallel_host_check_stats;
            $return = true;
        }
        return $return;
    }


    /**
     * setSerialhostcheckstats 
     * 
     * @param mixed $serial_host_check_stats To set.
     * 
     * @access public
     * @return mixed bool on failure, else String.
     */
    public function setSerialhostcheckstats($serial_host_check_stats)
    {
        $return = false;
        $serial_host_check_statsIsOK = isset($serial_host_check_stats) 
            && $serial_host_check_stats != null;
        if ($serial_host_check_statsIsOK) {
            $this->_serial_host_check_stats = $serial_host_check_stats;
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
        $out.=$this->_modified_host_attributes;
        $out.=$this->_modified_service_attributes;
        $out.=$this->_nagios_pid;
        $out.=$this->_daemon_mode;
        $out.=$this->_program_start;
        $out.=$this->_last_command_check;
        $out.=$this->_last_log_rotation;
        $out.=$this->_enable_notifications;
        $out.=$this->_active_service_checks_enabled;
        $out.=$this->_passive_service_checks_enabled;
        $out.=$this->_active_host_checks_enabled;
        $out.=$this->_passive_host_checks_enabled;
        $out.=$this->_enable_event_handlers;
        $out.=$this->_obsess_over_services;
        $out.=$this->_obsess_over_hosts;
        $out.=$this->_check_service_freshness;
        $out.=$this->_check_host_freshness;
        $out.=$this->_enable_flap_detection;
        $out.=$this->_enable_failure_prediction;
        $out.=$this->_process_performance_data;
        $out.=$this->_global_host_event_handler;
        $out.=$this->_global_service_event_handler;
        $out.=$this->_next_comment_id;
        $out.=$this->_next_downtime_id;
        $out.=$this->_next_event_id;
        $out.=$this->_next_problem_id;
        $out.=$this->_next_notification_id;
        $out.=$this->_total_external_command_buffer_slots;
        $out.=$this->_used_external_command_buffer_slots;
        $out.=$this->_high_external_command_buffer_slots;
        $out.=$this->_active_scheduled_host_check_stats;
        $out.=$this->_active_ondemand_host_check_stats;
        $out.=$this->_passive_host_check_stats;
        $out.=$this->_active_scheduled_service_check_stats;
        $out.=$this->_active_ondemand_service_check_stats;
        $out.=$this->_passive_service_check_stats;
        $out.=$this->_cached_host_check_stats;
        $out.=$this->_cached_service_check_stats;
        $out.=$this->_external_command_stats;
        $out.=$this->_parallel_host_check_stats;
        $out.=$this->_serial_host_check_stats;
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
        $out['modified_host_attributes']=$this->_modified_host_attributes;
        $out['modified_service_attributes']
            =$this->_modified_service_attributes;
        $out['nagios_pid']=$this->_nagios_pid;
        $out['daemon_mode']=$this->_daemon_mode;
        $out['program_start']=$this->_program_start;
        $out['last_command_check']=$this->_last_command_check;
        $out['last_log_rotation']=$this->_last_log_rotation;
        $out['enable_notifications']=$this->_enable_notifications;
        $out['active_service_checks_enabled']
            =$this->_active_service_checks_enabled;
        $out['passive_service_checks_enabled']
            =$this->_passive_service_checks_enabled;
        $out['active_host_checks_enabled']=$this->_active_host_checks_enabled;
        $out['passive_host_checks_enabled']=$this->_passive_host_checks_enabled;
        $out['enable_event_handlers']=$this->_enable_event_handlers;
        $out['obsess_over_services']=$this->_obsess_over_services;
        $out['obsess_over_hosts']=$this->_obsess_over_hosts;
        $out['check_service_freshness']=$this->_check_service_freshness;
        $out['check_host_freshness']=$this->_check_host_freshness;
        $out['enable_flap_detection']=$this->_enable_flap_detection;
        $out['enable_failure_prediction']=$this->_enable_failure_prediction;
        $out['process_performance_data']=$this->_process_performance_data;
        $out['global_host_event_handler']=$this->_global_host_event_handler;
        $out['global_service_event_handler']=$this->_global_service_event_handler;
        $out['next_comment_id']=$this->_next_comment_id;
        $out['next_downtime_id']=$this->_next_downtime_id;
        $out['next_event_id']=$this->_next_event_id;
        $out['next_problem_id']=$this->_next_problem_id;
        $out['next_notification_id']=$this->_next_notification_id;
        $out['total_external_command_buffer_slots']
            =$this->_total_external_command_buffer_slots;
        $out['used_external_command_buffer_slots']
            =$this->_used_external_command_buffer_slots;
        $out['high_external_command_buffer_slots']
            =$this->_high_external_command_buffer_slots;
        $out['active_scheduled_host_check_stats']
            =$this->_active_scheduled_host_check_stats;
        $out['active_ondemand_host_check_stats']
            =$this->_active_ondemand_host_check_stats;
        $out['passive_host_check_stats']=$this->_passive_host_check_stats;
        $out['active_scheduled_service_check_stats']
            =$this->_active_scheduled_service_check_stats;
        $out['active_ondemand_service_check_stats']
            =$this->_active_ondemand_service_check_stats;
        $out['passive_service_check_stats']=$this->_passive_service_check_stats;
        $out['cached_host_check_stats']=$this->_cached_host_check_stats;
        $out['cached_service_check_stats']=$this->_cached_service_check_stats;
        $out['external_command_stats']=$this->_external_command_stats;
        $out['parallel_host_check_stats']=$this->_parallel_host_check_stats;
        $out['serial_host_check_stats']=$this->_serial_host_check_stats;
        return $out;
    }


    /**
     * __construct 
     * 
     * @access protected
     * @return void
     */
    function __construct()
    {
    }


}
