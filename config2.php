<?php

define('DB_SERVERS', 'localhost');
define('DB_USERNAMES', 'root');
define('DB_PASSWORDS', '');
define('DB_NAMES', 'clurs');
$link1 = mysqli_connect(DB_SERVERS, DB_USERNAMES, DB_PASSWORDS, DB_NAMES);


if($link1 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>