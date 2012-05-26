<?php
require_once("config.php");
require_once("functions.php");
require_once ("stats/isoregion.php");
db_connect();

$getalias = trim(mysql_real_escape_string($_SERVER['REQUEST_URI']));
$alias = substr($getalias, 1, strlen($getalias));

if (preg_match("/^[a-zA-Z0-9_-]+\-$/", $alias)) {
  define('PHURL', true);
  include "html/header.php";
  include "stats/index.php";
  include "html/footer.php";
  die();
} elseif (!preg_match("/^[a-zA-Z0-9_]+$/", $alias)) {
  header("Location: ".SITE_URL, true, 301);
  exit();
} else {

 if (($url = get_url($alias))) {
    $ipad=$_SERVER['REMOTE_ADDR'];
    $country = file_get_contents("http://api.hostip.info/country.php?ip=$ipad");
    if ($country == 'XX') {
     $country = 'Unknown';
    }
    $result=mysql_query("SELECT count(*) as numrecords FROM ".DB_PREFIX."stats WHERE BINARY alias='$alias' and country='$country'") or die ('An error was encountered. Please refer to phurl support for more info. :('); 
    $row=mysql_fetch_assoc($result);
    if ($row['numrecords'] >= 1){
mysql_query("UPDATE `".DB_PREFIX."stats` SET `clicks` = clicks+1 WHERE `alias` = '$alias' and `country` = '$country';");    
} else {
mysql_query("INSERT INTO ".DB_PREFIX."stats (alias, country, clicks) VALUES ('$alias', '$country', '1');");
} 
header("Location: $url", true, 301);
       exit();

}
}
 header("Location: ".SITE_URL, true, 301);
?>
