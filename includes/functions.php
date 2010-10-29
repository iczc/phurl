<?php
//Main funtions file

function mysqlConnect() {
	$connection = mysql_connect($config['mysql_server'], $config['mysql_user'], $config['mysql_pass']);
	if (!$connection) {
		if ($config['debug']) {
			die("ERROR: MySQL - Could not connect to database!");
		//} else {
			//header("Location: index.php?f=error&q=mysql_con");
		}
	}

$database = mysql_select_db($config['mysql_db'], $connection);

if (!$database){
	if ($config['debug']) {
		die("ERROR: MySQL - Could not select database!");
	//} else {
		//header("Location: index.php?f=error&q=mysql_db");
	}
}
}

function mysqlClose() {
	mysql_close($connection);
}

function compressNumber($n) {
	$codeset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$base = strlen($codeset);
	$converted = "";
	while ($n > 0) {
		$converted = substr($codeset, ($n % $base), 1) . $converted;
		$n = floor($n/$base);
	}
	return $converted;
}

function aliasIsAvailable($alias) {
	mysqlConnect();
	$query = mysql_query("SELECT * FROM `urls` WHERE `alias` = '$alias';");
	$mysql_querys++;
	if (mysql_num_rows($query) == 0) {
		return true;
	} else {
		return false;
	}
}


function insertURL($long, $alias='') {
	if (empty($_SESSION['uid'])) {
		$uid = '0';
	} else {
		$uid = $_SESSION['uid'];
	}
	$ipaddress = $_SERVER['REMOTE_ADDR'];

	mysqlConnect();
	$query = mysql_query("INSERT INTO `urls` (`id`, `alias`, `longurl`, `uid`, `ipaddress`, `time`) VALUES (NULL, '', '$long', '$uid', '$ipaddress', UNIX_TIMESTAMP());");
	$mysql_querys++;
	if (empty($alias)) {
		$lid = mysql_insert_id($query);
	}
}

?>