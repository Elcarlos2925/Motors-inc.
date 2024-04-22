<?php
include("Connection.php");
$connection = returnConnection();
function countPending($connection){
    $Pending_Assigments = mysqli_query($connection,"SELECT COUNT(*) AS pendings FROM events;");
    $row = mysqli_fetch_assoc($Pending_Assigments);
    $pendings=$row['pendings'];
    return ($pendings);
}
function LastAssigment($connection){
    $queryLastAssigment = "SELECT * FROM events ORDER BY idEvent DESC LIMIT 10;";
    $result = mysqli_query($connection,$queryLastAssigment);
    if (mysqli_num_rows($result) > 0) {
        while ($showResult = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $showResult['idEvent'] . "</td>";
            echo "<td>" . $showResult['descriptionEvent'] . "</td>";
            echo "<td>" . $showResult['title'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>
            <td colspan='3'>No data available in table</td>
        </tr>";
    }
}
?>