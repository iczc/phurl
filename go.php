<?php
require_once("config.php");
require_once("functions.php");

db_connect();

$uri = trim(mysql_real_escape_string($_SERVER['REQUEST_URI']));
$alias = SubStr($uri, 1, strlen($uri));

if (!preg_match("/^[a-zA-Z0-9_-]+$/", $alias)) {
  header("Location: ".SITE_URL, true, 301);
  exit();
}

if (($url = get_url($alias))) {
    header("Location: $url", true, 301);
    exit();
}

header("Location: ".SITE_URL, true, 301);
