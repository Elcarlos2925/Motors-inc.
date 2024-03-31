<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function returnConnection(){
    $server="Localhost";
    $user="root";
    $password="";
    $db ="Calendar";
    
    $connection = mysqli_connect($server, $user, $password, $db) or die ("error: connection problem");
    mysqli_set_charset($connection, "utf8");
    return $connection;
}
?>