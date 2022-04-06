<?php

define('DB_SERVERSs', 'localhost');
define('DB_USERNAMESs', 'root');
define('DB_PASSWORDSs', '');
define('DB_NAMESs', 'clurs');
 
$link2 = mysqli_connect(DB_SERVERSs, DB_USERNAMESs, DB_PASSWORDSs, DB_NAMESs);
 
if($link2 === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>