<?php
require ("intelliregion.php");
require ("isoregion.php");
require ("config.php");
require ("functions.php");
?>

<?php
db_connect();
$id = $_GET['alias'];
$result = mysql_query("SELECT COUNT(*) AS clicks FROM clicks WHERE BINARY linkid='$id'");
$row = mysql_fetch_array($result);
$clicks = $row['clicks'];
?>
<b>Info and Statistics for <?php echo 'http://l0p.us/'; echo $_GET['alias']; ?> - <?php echo $clicks; ?> clicks</b><br />

<?php

include("isoregion.php");
$result = mysql_query("SELECT country, COUNT(country) AS count FROM clicks WHERE BINARY linkid='$id' GROUP BY country ORDER BY count DESC");
$countries = "";
$numbers = "";
echo "<div id=\"flags\">";
while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
$countries .= $row['country'] . "|";
$numbers .= $row['count'] . ",";
$country = $row['country'];
echo '<div class="flags"><img src="../flags/png/' . strtolower($iso[$country]) . '.png"> ' . $country . ' ' . $row['count'] . ' click(s) </div>';
}
echo "</div>";
echo "<img src=\"http://chart.apis.google.com/chart?chf=bg,t,bebebe&chco=233a4b%2C5ba1d2&cht=p3&chd=t:" . mb_substr($numbers,0, -1) . "&chs=500x200&chl=" . mb_substr($countries, 0,-1) . "\" />";


$result = mysql_query("SELECT country, COUNT(country) AS count FROM clicks WHERE BINARY linkid='$id' GROUP BY country ORDER BY count DESC");
$countries = "";
$numbers = "";
while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
$country = $row['country'];
$countries .= $iso[$country] . "|";
$numbers .= $row['count'] . ",";
}

echo "<img src=\"http://chart.apis.google.com/chart?chf=bg,w,bebsbe&cht=t&chs=440x220&chd=t:" . mb_substr($numbers,0, -1) . "&chtm=world&chld=" . mb_substr($countries, 0,-1) . "\" float=\"right\" />";

$result = mysql_query("SELECT * FROM phurl_urls WHERE BINARY code = '$id'");
$row = mysql_fetch_array($result);


?>
<?php
?>
<?php
$ipad=$_SERVER['REMOTE_ADDR'];
$country = locateip($ipad);
?>