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

<span class="style2">Installation<hr />

<p>Please fill in all of the following fields so we can write an accurate config for your new URL shortener.</p>

<form action="5.php" class="style2" method="post" style="height: 132px">
	<table style="width: 100%">
		<tr>
			<td>MySQL Server:</td>
			<td><input name="server" style="width: 150px" type="text" value="<?php echo $_POST['server']; ?>" /></td>
			<td rowspan="4">You&#39;ve already filled these in, but we&#39;ve repeated 
			the info here just for confirmation purposes.</td>
		</tr>
		<tr>
			<td>MySQL Username:</td>
			<td>
			<input name="user" style="width: 150px" type="text" value="<?php echo $_POST['user']; ?>" /></td>
		</tr>
		<tr>
			<td style="height: 24px">MySQL Password:</td>
			<td style="height: 24px">
			<input name="pass" style="width: 150px" type="password" value="<?php echo $_POST['pass']; ?>" /></td>
		</tr>
		<tr>
			<td>MySQL Database:</td>
			<td>
			<input name="db" style="width: 150px" type="text" value="<?php echo $_POST['db']; ?>" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>Site Title:</td>
			<td>
			<input name="sitetitle" style="width: 150px" type="text" /></td>
			<td>The name of your URL shortener to be displayed throughout the 
			site.</td>
		</tr>
		<tr>
			<td>Site URL:</td>
			<td>
			<input name="siteurl" style="width: 150px" type="text" /></td>
			<td>The URL of your site. DO NOT add a trailing slash.</td>
		</tr>
		<tr>
			<td>Admin Username:</td>
			<td>
			<input name="adminuser" style="width: 150px" type="text" value="admin" /></td>
			<td>The username you want to login with.</td>
		</tr>
		<tr>
			<td>Admin Password:</td>
			<td>
			<input name="adminpass" style="width: 150px" type="password" /></td>
			<td>The password you want to login with.</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	&nbsp;<input name="Submit1" type="submit" value="Next -&gt;"></form>