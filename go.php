<?php
require_once("config.php");
require_once("functions.php");

db_connect();

$getalias = trim(mysql_real_escape_string($_SERVER['REQUEST_URI']));
$alias = substr($getalias, 1, strlen($getalias));

if (preg_match("/^[a-zA-Z0-9_-]+\-$/", $alias)) {
  define('PHURL', true);
  include "html/header.php";
  include "stats/index.php";
  include "html/footer.php";
  die();
} elseif (!preg_match("/^[a-zA-Z0-9_-]+$/", $alias)) {
  header("Location: ".SITE_URL, true, 301);
  exit();
} else {

if (($url = get_url($alias))) {
    header("Location: $url", true, 301);
    exit();
}
}

header("Location: ".SITE_URL, true, 301);

