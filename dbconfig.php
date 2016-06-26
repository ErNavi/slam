<?php
define('DB_SERVER', 'mysql.hostinger.in');	// you may update if localhost not work
define('DB_USERNAME', 'u695643516_slamy');    // your DB username
define('DB_PASSWORD', 'root123');    // your DB password
define('DB_DATABASE', 'u695643516_slamy');      // your DB name
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die( "Unable to connect");
$database = mysql_select_db(DB_DATABASE) or die( "Unable to select database");
?>