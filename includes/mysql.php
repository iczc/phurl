<?php
// MySQL Connection File

// if config file isnt already loaded (also works if user loads file directly)
if (!$phurl_config['loaded']) { 
	header("../index.php");
}

if (!$phurl_config['mysql_server']) {
	die ("<h2>Error: No MySQL server has been set in the config file, please fix this or reinstall</h2>");
} elseif (!$phurl_config['mysql_port']) {
	die ("<h2>Error: No MySQL port has been set in the config file, please fix this or reinstall</h2>");
} elseif (!$phurl_config['mysql_username']) {
	die ("<h2>Error: No MySQL username has been set in the config file, please fix this or reinstall</h2>");
} elseif (!$phurl_config['mysql_database']) {
	die ("<h2>Error: No MySQL database has been set in the config file, please fix this or reinstall</h2>");
} 

$mysql_connection = @mysql_connect($phurl_config['mysql_server'] . ':' .$phurl_config['mysql_port'], $phurl_config['mysql_username'], $phurl_config['mysql_password']);
if (!$mysql_connection) {
	// even though the mysql connection has died, phurl can still forward urls, unless they were made within the past few hours (its clever like that)
	// becuase of that, we shouldnt really put an error that stops the site working, so will the following variable will just stop the main page working
	$error['no_mysql_server'] = true;
} else {
	$mysql_database = @mysql_select_db($phurl_config['mysql_database'], $mysql_connection);
	if (!$mysql_database) {
		// as with server connection, phurl can still forward urls without an active database connection
		$error['no_mysql_server'] = true;
	}
}
?>