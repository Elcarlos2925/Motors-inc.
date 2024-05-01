<?php
function returnConnection(){
    $server="Localhost";
    $user="root";
    $password="";
    $db ="Motors-inc";
    
    $connection = mysqli_connect($server, $user, $password, $db) or die ("error: connection problem");
    mysqli_set_charset($connection, "utf8");
    return $connection;
}
?>
