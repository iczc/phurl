<?php
require_once("../phurl-includes/config.php");
require_once("../phurl-includes/functions.php");
require_once("includes/header.php");
?>
<table style="width: 100%">
	<tr>
		<td class="txt2" style="width: 250px" valign="top">
<?php
require_once("includes/sidebar.php");
?>
</td>
		<td class="txt2">
<?php
if($page=="") { 
$page= $_GET['go']; 
} 
$complete="includes/pgcontent/".$page.".php";
if(file_exists($complete)) { 
include($complete); 
}
elseif($page=="") include ("includes/pgcontent/dashboard.php");
else { include ("includes/pgcontent/dashboard.php"); }
?>			

		</td>
	</tr>
</table>
<?php
require_once("includes/footer.php");
?>
