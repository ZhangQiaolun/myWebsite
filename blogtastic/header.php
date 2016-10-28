<?php 
require("config.php");
 
 $db = mysql_connect($dbhost, $dbuser, $dbpassword);
 mysql_select_db($dbdatabase, $db);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $config_blogname; ?></title>
 </head>
 <body>
 <div id="header">
 	<h1><?php echo $config_blogname; ?></h1>
 	<a href="index.php">home</a>
 </div>
 