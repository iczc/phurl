<?php
/* 	You adjusting anything in here 
	can break the entire website,
	you should do so at your own risk 
*/

// MySQL Setup
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'user');
define('DB_PASSWORD', 'password');
define('DB_NAME',  'user_db');
define('DB_PREFIX', 'phurl_');

// Site Settings
define('SITE_URL', 'http://example.org');
define('SITE_TITLE', 'example.org');
define('SITE_SLOGAN', 'URLs made shorter, URLs made simpler.');

// Phurl Theme Setup
define('THEME_PATH', 'includes/themes/default/');

// Do *not* mess with anything below
define('URL_PROTOCOLS', 'http|https|ftp|ftps|mailto|news|mms|rtmp|rtmpt|e2dk');
define('PHURL_VERSION', '3.0');
error_reporting(E_ALL);
$_ERROR = array();

?>
