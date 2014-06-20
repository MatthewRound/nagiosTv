<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php
$configurationProperties = parse_ini_file("properties.ini");
$title = $configurationProperties['title'];
?>
<title><?php echo $title; ?> - Infrastructure Monitoring</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
</script>
<script type="text/javascript" src="script.js">
</script>
</head>
<body>
<script type="text/javascript">
//<![CDATA[
	window.setInterval(
		function(){
			update();
		}, 15000);
	window.onload(update());
//]]>
</script>
<div id="summary"></div>
<div id="results">Please Wait...</div>
</body>
</html>
