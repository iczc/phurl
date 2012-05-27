<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<title>ur.cx | URLs made shorter, URLs made simpler.</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo $phurl_config['theme_path']; ?>style.css" />
	<script type="text/javascript" src="<?php echo $phurl_config['theme_path']; ?>jquery.js"></script>
	
	<script type="text/javascript"> 
	$(document).ready(function(){
		$("input#url").bind("textchange",showPage);
		$("input#url").focus();
    });
	
	$(document).click(function(){
		showPage();
    });
	
	function showPage() {
		$("#show-options").animate({ opacity: 1}, 2000);
		$("#header").animate({ opacity: 1}, 1000);
		$(".notice").animate({ opacity: 1}, 1000);
		$("#footer").animate({ opacity: 1}, 1000);
	}

	</script>


</head>
<body>
<div id="container">
<div id="header">
	<div id="container">
		<div id="logo"><h1>ur.cx</h1></div>
		<span id="slogan">- URLs made shorter, URLs made simpler.</span>

		<div id="menu">
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/admin/">Admin Login</a></li>
			</ul>
		</div>
		<div class="clear"></div>	
	</div>
</div>

<div id="content">