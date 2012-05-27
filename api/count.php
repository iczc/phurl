<?php

$link = mysql_connect("localhost", "root", "fox#45dtSUF");
mysql_select_db("urcx", $link);

$result = mysql_query("SELECT * FROM phurl_urls", $link);
$num_rows = mysql_num_rows($result);

echo "$num_rows\n";

?>
