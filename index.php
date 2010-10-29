<?php
//Phurl V3
//Started Development on October 29th
require_once 'includes/config.php';
include('themes/' . $CONFIG['theme'] . '/header.php');

if (empty($_GET['function'])) {
	//Show home page
	include 'includes/home.php';
	
} elseif ($_GET['function'] == 'short') {
	//Show shortned link page
	
} elseif ($_GET['function'] == 'redirect') {
	//Redirect to long url
	
} elseif ($_GET['function'] == 'stats') {
	//Show stats for link
	
}




include('themes/' . $CONFIG['theme'] . '/footer.php');
?>