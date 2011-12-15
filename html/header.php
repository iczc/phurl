<?php
if( !defined('PHURL' ) ) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
?>
<html>
<head>
<title><?php echo SITE_TITLE; ?> | <?php echo SITE_SLOGAN; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="<?php echo 'includes/jquery.js'; ?>"></script>
<link rel="stylesheet" type="text/css" href="includes/style.css" />
</head>
<body>
<div id="container">
 <div id="header">
 	<div id="logo"><h1><?php echo SITE_TITLE; ?></h1></div>
 	<span id="slogan">- <?php echo SITE_SLOGAN; ?></span>
 	<div id="menu">
 		<ul>
 			<li><a href="/">Home</a></li>
<li><a href="/api/create.php?url=http://example.org/">API</a></li>

 		</ul>
 	</div>
 	<div class="clear"></div>
 	
 </div>
<div id="content">
