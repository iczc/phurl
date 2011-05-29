<?php
//Main functions file
function mysqlDie($filename, $line, $message) {
    die("File: $filename<br />Line: $line<br />Message: $message");
}
function mysqlConnect() {
	$connection = mysql_connect($config['mysql_server'], $config['mysql_user'], $config['mysql_pass']);
	if (!$connection) {
		if ($config['debug']) {
			die($p_lang[13]);
		//} else {
			//header("Location: index.php?f=error&q=mysql_con");
		}
	}

$database = mysql_select_db($config['mysql_db'], $connection);

if (!$database){
	if ($config['debug']) {
		die($p_lang[14]);
	//} else {
		//header("Location: index.php?f=error&q=mysql_db");
	}
}
}

function mysqlClose() {
	mysql_close($connection);
}

function compressNumber($n) {
	$codeset = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$base = strlen($codeset);
	$converted = "";
	while ($n > 0) {
		$converted = substr($codeset, ($n % $base), 1) . $converted;
		$n = floor($n/$base);
	}
	return $converted;
}

function aliasIsAvailable($alias) {
	mysqlConnect();
	$query = mysql_query("SELECT * FROM `urls` WHERE `alias` = '$alias';");
	$mysql_querys++;
	if (mysql_num_rows($query) == 0) {
		return true;
	} else {
		return false;
	}
}


function insertURL($long, $alias='') {
	if (empty($_SESSION['uid'])) {
		$uid = '0';
	} else {
		$uid = $_SESSION['uid'];
	}
	$ipaddress = $_SERVER['REMOTE_ADDR'];

	mysqlConnect();
	$query = mysql_query("INSERT INTO `urls` (`id`, `alias`, `longurl`, `uid`, `ipaddress`, `time`) VALUES (NULL, '', '$long', '$uid', '$ipaddress', UNIX_TIMESTAMP());");
	$mysql_querys++;
	if (empty($alias)) {
		$lid = mysql_insert_id($query);
		$alias = compressNumber($lid);
		
	}
}

//Update settings
$config['version']		= '3.0.0'; 
$updateurl = "http://cdn.phurlproject.org/liveupdate/latest.txt";
$version = @file_get_contents($updateurl);
$current = $config['version'];


//THE NEXT SECTION CONSTITUTES THE USER REGISTRATION AND LOGIN SYSTEM
function generate_salt()
{
     $salt = '';

     for ($i = 0; $i < 3; $i++)
     {
          $salt .= chr(rand(35, 126));
     }
          return $salt;
}

function user_register($username, $password, $email, $fname, $lname, $time_reg, $acclevel)
{
     // Generate API Key
     $apikey = rand(9999999, 99999999999999999999999);
     $apikey = hash('md5', $apikey);
     
     // Get a salt using our function
     $salt = generate_salt();

     // Now encrypt the password using that salt
     $encrypted = md5(md5($password).$salt);

     // And lastly, store the information in the database
     db_connect();
     $query = "insert into phurl_users (username, password, salt, email, fname, lname, time_reg, acclevel, apikey) values ('$username', '$encrypted', '$salt', '$email', '$fname', '$lname', '$time_reg', '$acclevel', '$apikey')";
     mysql_query ($query) or die ('Could not create user.');
}
function user_login($username, $password)
{
     // Try and get the salt from the database using the username
     db_connect();
     $query = "select salt from phurl_users where username='$username' limit 1";
     $result = mysql_query($query);
     $user = mysql_fetch_array($result);

     // Using the salt, encrypt the given password to see if it
     // matches the one in the database
     $encrypted_pass = md5(md5($password).$user['salt']);

     // Try and get the user using the username & encrypted pass
     $query = "select id, username from phurl_users where username='$username' and password='$encrypted_pass'";
     $result = mysql_query($query);
     $user = mysql_fetch_array($result);
     $numrows = mysql_num_rows($result);

     // Now encrypt the data to be stored in the session
     $encrypted_id = md5($user['id']);
     $encrypted_name = md5($user['username']);

     // Store the data in the session
     $_SESSION['id'] = $id;
     $_SESSION['username'] = $username;
     $_SESSION['encrypted_id'] = $encrypted_id;
     $_SESSION['encrypted_name'] = $encrypted_name;

    if ($numrows == 1)
    {
        return 'Correct';
    }
    else
    {
        return false;
    }
}

function user_logout()
{
     // End the session and unset all vars
     session_unset ();
     session_destroy ();
}

function is_authed()
{
     // Check if the encrypted username is the same
     // as the unencrypted one, if it is, it hasn't been changed
     if (isset($_SESSION['username']) && (md5($_SESSION['username']) == $_SESSION['encrypted_name']))
     {
          return true;
     }
     else
     {
          return false;
     }
}
?>