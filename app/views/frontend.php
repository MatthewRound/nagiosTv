<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php
            $configurationProperties = parse_ini_file("properties.ini");
            $title = $configurationProperties['title'];
        ?>
        <title><?php echo $title; ?> - Infrastructure Monitoring</title>
        <link href="views/css/style.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="views/scripts/jquery.min.js">
            </script>
        <script type="text/javascript" src="views/scripts/nagiosTv.js"></script>
        <script type="text/javascript">
            //<![CDATA[
                window.setInterval( 
                    function(){ 
                        nagiosTv.update(); 
                    }, 15000); 
                window.onload = function(){
                    nagiosTv.update();
                };
            //]]>
        </script>
    </head>
    <body>
        <div id="summary"></div>
        <div id="results">Please Wait...</div>
    </body>
</html>
