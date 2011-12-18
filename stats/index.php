<?php
require_once "config.php";
error_reporting(0); 
db_connect();
if (empty($alias)) {
echo 'Please specify an alias.';
die;
}
$alias = str_replace("-","",$alias);
$url   = get_url($alias);
?>
<h3>Statistics for <a href="<?php echo SITE_URL; ?>/<?php echo $alias ?>"><?php echo SITE_URL; ?>/<?php echo $alias ?></a></h3>
<table width="50%" align="center">
<tr>
<td align="center" width="240" height="180"><img src="http://api1.thumbalizr.com/?width=250&url=<?php echo $url; ?>" /></td>
</tr><tr>
<td align="center">
<b>Page Title: </b><?php $file = file($url);
$file = implode("",$file);
$result = mysql_query("SELECT SUM(clicks) AS clicks FROM ".DB_PREFIX."_stats WHERE BINARY alias='$alias'");
$total=mysql_fetch_assoc($result);
if(preg_match("/<title>(.+)<\/title>/i",$file,$m))
print "$m[1]";
else
print "<i>(title not detected)</i>";
?>
<br/><b>Long URL: </b><a href="<?php echo $url ?>"><?php echo $url ?></a>
<br/><b>Clicks: </b><?php echo $total['clicks']; ?>
</td>
</tr>
</table><br/>
<?php
require ("stats/intelliregion.php");
require ("stats/isoregion.php");
db_connect();
$id = $alias;
?>
<b>Regional statistics for <?php echo SITE_URL; ?>/<?php echo $alias ?> (Total <?php echo $total['clicks']; ?> clicks)</b><br />
<?php
$result = mysql_query("SELECT country, clicks FROM ".DB_PREFIX."stats WHERE BINARY alias='p' GROUP BY country ORDER BY clicks DESC");
$countries = "";
$numbers = "";
echo "<div id=\"flags\">";
while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
$countries .= $row['country'] . "|";
$numbers .= $row['clicks'] . ",";
$country = $row['country'];
//echo '<div class="flags"><img src="../flags/png/' . strtolower($iso[$country]) . '.png"> ' . $country . ' ' . $row['count'] . ' click(s) </div>';
}
echo "</div>";
echo "<img src=\"http://chart.apis.google.com/chart?chf=bg,t,bebebe&chco=233a4b%2C5ba1d2&cht=p3&chd=t:" . mb_substr($numbers,0, -1) . "&chs=500x200&chl=" . mb_substr($countries, 0,-1) . "\" />";
$result = mysql_query("SELECT country, clicks FROM ".DB_PREFIX."stats WHERE BINARY alias='p' GROUP BY country ORDER BY clicks DESC");
$countries = "";
$numbers = "";
while($row = mysql_fetch_assoc($result)) {
$country = $row['country'];
$countries .= $row['country'] . "|";
$numbers .= $row['clicks'] . ",";
echo $iso['$country'];
}
echo "<img src=\"http://chart.apis.google.com/chart?chf=bg,lc,bebsbe&cht=t&chs=440x220&chd=t:" . mb_substr($numbers,0, -1) . "&chtm=world&chld=" . mb_substr($countries, 0,-1) . "\" float=\"right\" />";
$result = mysql_query("SELECT * FROM ".DB_PREFIX."urls WHERE BINARY code = '$alias'");
$row = mysql_fetch_array($result);
?>
<br/>
<b>Top 5 countries for this URL:</b><br/>
<?php
$db_result = mysql_query("SELECT * FROM ".DB_PREFIX."stats WHERE alias='$alias' ORDER BY clicks DESC LIMIT 0, 5") or db_die(__FILE__, __LINE__, mysql_error());
echo "<table style=\"padding: 3px;\" align=\"center\" id=\"url_list\">\n";
while ($db_row = mysql_fetch_assoc($db_result)) {
    $db_row = array_filter($db_row, "stripslashes");
    extract($db_row, EXTR_OVERWRITE|EXTR_PREFIX_ALL, "u");
$lowercountry = strtolower($u_country);
    echo  "<td><img src=\"images/flags/$lowercountry.png\" /> <b>$u_country</b> $u_clicks</td>\n";
unset($u_country, $u_alias, $u_clicks);
}
echo "</table>\n";
?>
