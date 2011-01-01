<?php
//Phurl V3
//Started Development on October 29th
define('PHURL', true);
include 'phurl-includes/config.php'; //Include config file
include 'phurl-includes/functions.php'; //Include functions file
include 'phurl-includes/lang/'. $config['language'] . '.lang.php'; //Include phurl language file
include 'phurl-themes/' . $config['theme'] . '/header.php';

if (empty($_GET['f'])) {
	//Show home page
	include 'phurl-includes/home.php';

} elseif ($_GET['f'] == 'short') {
	//Show shortened link page

} elseif ($_GET['f'] == 'redirect') {
	//Redirect to long url

} elseif ($_GET['f'] == 'stats') {
	//Show stats for link

} elseif ($_GET['f'] == 'error') {
	echo "<h1>{$p_lang[1]}</h1>";
	echo "<h2>{$p_lang[2]} {$config['site_name']} {$p_lang[3]}</h2>";
	echo "<h4>{$p_lang[4]}: ";
	if ($_GET['q'] == 'mysql_con') {
		echo $p_lang[5];
	} elseif ($_GET['q'] == 'mysql_db') {
		echo $p_lang[6];
	} else {
		echo $p_lang[7];
	}
}




include('phurl-themes/' . $config['theme'] . '/footer.php');
?>