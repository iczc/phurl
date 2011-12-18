<?php
function locateIp($ip){
$d = file_get_contents("http://www.ipinfodb.com/ip_query.php?ip=$ip&output=xml");

//Use backup server if cannot make a connection
if (!$d){
$backup = file_get_contents("http://backup.ipinfodb.com/ip_query.php?ip=$ip&output=xml");
$answer = new SimpleXMLElement($backup);
if (!$backup) return false; // Failed to open connection
}else{
$answer = new SimpleXMLElement($d);
}

$country_code = $answer->CountryCode;
$country_name = $answer->CountryName;
$region_name = $answer->RegionName;
$city = $answer->City;
$zippostalcode = $answer->ZipPostalCode;
$latitude = $answer->Latitude;
$longitude = $answer->Longitude;
$timezone = $answer->Timezone;
$gmtoffset = $answer->Gmtoffset;
$dstoffset = $answer->Dstoffset;

return $country_name;
}
?>