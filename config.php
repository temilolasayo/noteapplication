<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'https://wgh14.whogohost.com:2083/cpsess4122011077');
define('DB_USERNAME', 'exituss1_sayo');
define('DB_PASSWORD', 'p@ssword123456');
define('DB_NAME', 'exituss1_test');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
