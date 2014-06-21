<?php
/**
 * Gets the services that are in a problem state.
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


require_once "Status.php";
$status = new Status();
$configurationProperties = parse_ini_file("properties.ini");
$statusFileLocation = $configurationProperties['location'];
$status->setStatusFileLocation($statusFileLocation);
$parseResult = $status->parseStatusFile();
$parseResultOk = is_bool($parseResult) && $parseResult == true;

if ($parseResultOk) {
    $serviceList = $status->getServiceList(); 
    $jsonString = $serviceList->getBreachingStates();
    print $jsonString;
} else {
    print '<p class="problem">'.$parseResult.' File='.$statusFileLocation.'</p>';
}
