<?php
/* 	You adjusting anything in here 
	can break the entire website,
	you should do so at your own risk 
*/

// MySQL Setup
$phurl_config['mysql_server'] = "localhost";
$phurl_config['mysql_port'] = 3306;
$phurl_config['mysql_username'] = "root";
$phurl_config['mysql_password'] = "password";

$phurl_config['mysql_database'] = "phurl_database";
$phurl_config['mysql_prefix'] = "phurl_";

// Phurl Theme Setup
$phurl_config['theme_path'] = "includes/themes/default/";
$phurl_config['site_name']	=	"Lorem Ipsum URL Shortener";
$phurl_config['site_slogan']	=	"URLs made shorter, URLs made simpler.";




// Do *not* mess with anything below
$phurl_config['installed'] = true;
$phurl_config['loaded'] = true;

?>
