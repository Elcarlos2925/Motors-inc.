<?php
include("Connection.php");
$connection = returnConnection();
function countPending($connection){
    $Pending_Assigments=mysqli_query($connection,"SELECT COUNT(*) AS pendings FROM events;");
    $row = mysqli_fetch_assoc($Pending_Assigments);
    $pendings=$row['pendings'];
    return ($pendings);
}
?>