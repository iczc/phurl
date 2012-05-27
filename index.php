<?php
// (C) Phurl Project 2012

// include the config file
include "includes/config.php";

// check if config file says phurl is installed
if (!$phurl_config['installed']) {	
	header("Location: install/index.php");
}

include "includes/mysql.php";

if (file_exists($phurl_config['theme_path'] . "header.php")) {
	include ($phurl_config['theme_path'] . "header.php");
} else {
	die ("<h2>Could not load theme</h2>");
}

if (@$error['no_mysql_server']) { 
	echo "<div class=\"notice\">This url shortener is currently operating in limited functionality mode due to a problem with the database. You will not be able to shorten urls until this problem is resolved. Please contact the site administrator.</div>";
}




include ($phurl_config['theme_path'] . "forms/shorten.php");



if (file_exists($phurl_config['theme_path'] . "footer.php")) {
	include ($phurl_config['theme_path'] . "footer.php");
} else {
	die ("<h2>Could not load theme</h2>");
}
?>
