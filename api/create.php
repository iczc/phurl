<?php
require_once("../includes/config.php");
require_once("../includes/functions.php");
ini_set('display_errors', 0);
db_connect();
if (count($_GET) > 0) {
    $url   = mysql_real_escape_string(trim($_GET['url']));
    $alias = mysql_real_escape_string(trim($_GET['a']));
    if (!preg_match("/^(".URL_PROTOCOLS.")\:\/\//i", $url)) {
        $url = "http://".$url;
    }

    $last = $url[strlen($url) - 1];

    if ($last == "/") {
        $url = substr($url, 0, -1);
    }

    $data = @parse_url($url);

    if (strlen($url) == 0) {
        $_ERROR[] = "Please enter an URL to shorten.";
    }
    else if (empty($data['scheme']) || empty($data['host'])) {
        $_ERROR[] = "Please enter a valid URL to shorten.";
    }
    else {
	$blcheck = file_get_contents("http://gsb.phurlproject.org/lookup.php?url=$url");
	if (trim($blcheck) == "1") {
 	     $_ERROR[] = "Blacklist match";
	}
        $hostname = get_hostname();
        $domain   = get_domain();
        if (preg_match("/($hostname|$domain)/i", $data['host'])) {
            $_ERROR[] = "The URL you have entered is not allowed.";
        }
    }

    if (strlen($alias) > 0) {
        if (!preg_match("/^[a-zA-Z0-9_-]+$/", $alias)) {
            $_ERROR[] = "Custom alias can only contain letters, numbers, underscores and dashes.";
        }
        else if (code_exists($alias) || alias_exists($alias)) {
            $_ERROR[] = "The custom alias you entered is already exists.";
        }
    }

    if (count($_ERROR) == 0) {
        $create = true;

        if (($url_data = url_exists($url))) {
            $create    = false;
            $id        = $url_data[0];
            $code      = $url_data[1];
            $old_alias = $url_data[2];

            if (strlen($alias) > 0) {
                if ($old_alias != $alias) {
                    $create = true;
                }
            }
        }

        if ($create) {
            do {
				$sctype = get_phurl_option('shortcode_type');
				if ($sctype = "r") {
					$code = generate_code_rand();
				} else {
                $code = generate_code(get_last_number());

                if (!increase_last_number()) {
                    die("System error!");
                }
				}
                if (code_exists($code) || alias_exists($code)) {
                    continue;
                }

                break;
            } while (1);

            $id = insert_url($url, $code, $alias);
        }

        if (strlen($alias) > 0) {
            $code = $alias;
        }

        $short_url = SITE_URL."/".$code;

        $_GET['url']   = "";
        $_GET['alias'] = "";
	echo "$short_url\n";
        exit();
    }
}
