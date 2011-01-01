<?php
//Phurl V3 Config File
//Not directly compatible with v2 Config Files
$config = array();

//MySQL Config
$config['mysql_server'] = 'localhost'; //Mysql Server Hostname/IP
$config['mysql_user']   = 'root'; //Mysql Username
$config['mysql_pass']   = ''; //MySQL Password
$config['mysql_db']     = 'phurl'; //MySQL Database
$config['mysql_prefix'] = 'ph_'; //MySQL Table prefix

//Site Config
$config['site_name']    = 'Phurl Version 3'; //Site name
$config['site_slogan']	= 'Make your long urls into shorter ones!'; //Site Slogan
$config['site_url']		= 'http://locahost'; //URL without trailing slash
$config['theme']		= 'default';
$config['language']		= 'en';

//Extra
$config['debug']		= true;
$config['version']		= '3.0.0';


?>