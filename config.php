<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'ec2-54-234-28-165.compute-1.amazonaws.com');
define('DB_USERNAME', 'xpwuybqcaujdal');
define('DB_PASSWORD', 'c4050b541402c7e73b23cb00cb6cb5e4d5268d19d03ed7367bdb962a05bb490f');
define('DB_NAME', 'd4tucp28q59016');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
