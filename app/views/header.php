<?php
/**
 * Holds the class app/views/header.php
 *
 * PHP version 5
 *
 * @catagory Core
 * @package  com.kicks-ass
 * @author   roundyz <roundyz@roundyz.kicks-ass.net>
 * @license  none
 * @link     none
 *
 */

?>
<!DOCTYPE html>
<?php 
$copyrightFormat = '%s (%d) <a href="%s">%s</a>';
$copyrightString 
    = sprintf(
        $copyrightFormat, 
        APP_NAME, 
        date('Y'), 
        APP_COPYRIGHT_LINK, APP_COPYRIGHT
    );
$subtitle = isset($subtitle)?$subtitle." - ":"";
?>
<html>
    <head>
        <link href="<?php echo DIR_CSS;?>style.css" type="text/css" 
            rel="stylesheet" />
        <link href="<?php echo DIR_SCRIPTS;?>script.js" 
            type="text/javascript" />
        <title><?php echo APP_NAME.$subtitle ?></title>
    </head>
    <body>
        <h1 class="corporateLogo"></h1>
