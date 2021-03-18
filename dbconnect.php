<?php

/*
The purpose of this php file is to establish a database connection. This file is generated outside of any other php scripts for two reasons. The first is that it prevents a user from uncovering critical database information when viewing a page source. The other is so that it can easily be included into other php scripts without requiring it to be rewritten in every php script where a database connection is required.
*/

//Define databse attributes
define('DB_SERVER', '192.168.1.18:3306');
define('DB_USERNAME', 'efish');
define('DB_PASSWORD', 'efish');
define('DB_NAME', 'ABET');

//Establish and store database connection object
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Error handling
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
