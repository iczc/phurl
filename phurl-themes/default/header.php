<?php
if( !defined('PHURL' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

include 'phurl-themes/' . $config['theme'] . '/lang/'. $config['language'] . '.lang.php'; //Include theme language file
?>
<html>
<head>
<title><?php echo $config['site_name']; ?> | <?php echo $config['site_slogan']; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?php echo 'phurl-themes/' . $config['theme'] . '/extra/jquery.js'; ?>"></script>
<link rel="stylesheet" type="text/css" href="phurl-themes/<?php echo $config['theme']; ?>/style.css" />
</head>
<body>
 <div id="header">
 	<div id="logo"><h1><?php echo $config['site_name']; ?></h1></div>
 	<span id="slogan">- <?php echo $config['site_slogan']; ?></span>
 	<div id="menu">
 		<ul>
 			<li><a href="home"><?php echo $lang[1]; ?></a></li>
 			<li><a href="home"><?php echo $lang[2]; ?></a></li>
 			<li><a href="home"><?php echo $lang[3]; ?></a></li>
 		</ul>
 	</div>
 	<div class="clear"></div>
 	
 </div>