<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Phurl Installation Wizard</title>
<style type="text/css">
.style2 {
	font-family: Cambria, Cochin, Georgia, Times, "Times New Roman", serif;
}
</style>
</head>

<body>

<img src="http://code.google.com/p/phurl/logo?cct=1278165547" alt="Phurl" height="52" width="116" />

<span class="style2">Installation</span><hr />
<p class="style2">Welcome to Phurl! This wizard will help you get started with a 
neat little phurl-based URL shortener in a matter of moments.</p>
<p class="style2">Before we begin, you need to make sure that the directory your url shortener lies in is writable by the server (chmodded to 777). If the server cannot write to that directory, the config file will not be written and installation will fail.</p>
<p class="style2">Once the directory is chmodded, the first thing we need to do is install the database 
structure required for phurl to work. You will need to create a database and a 
user that has full permissions over that database. Once done, enter the details 
below:</p>
<form action="2.php" class="style2" method="post" style="height: 132px">
	MySQL Server:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input name="server" style="width: 150px" type="text" value="localhost" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	High chance you won&#39;t need to change this.<br />
	MySQL Username:&nbsp;&nbsp;&nbsp;
	<input name="user" style="width: 150px" type="text" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	The username for logging in to MySQL.<br />
	MySQL Password:&nbsp;&nbsp;&nbsp;
	<input name="pass" style="width: 150px" type="password" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	The passwrd for logging in to MySQL.<br />
	MySQL Database:&nbsp;&nbsp;&nbsp;&nbsp;
	<input name="db" style="width: 150px" type="text" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	The empty database you want phurl to use.<br />
	<input name="Submit1" type="submit" value="Next -&gt;" /></form>

</body>

</html>