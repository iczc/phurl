<?php
//Phurl V3
//Started Development on October 29th
include 'includes/config.php';
include 'includes/functions.php';
include('themes/' . $CONFIG['theme'] . '/header.php');

if (empty($_GET['function'])) {
	//Show home page
	include 'includes/home.php';
	
} elseif ($_GET['function'] == 'short') {
	//Show shortned link page
	echo nextAlias(1);
} elseif ($_GET['function'] == 'redirect') {
	//Redirect to long url
	
} elseif ($_GET['function'] == 'stats') {
	//Show stats for link
	
}




include('themes/' . $CONFIG['theme'] . '/footer.php');
?>