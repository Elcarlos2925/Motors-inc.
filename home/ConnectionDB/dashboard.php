<?php
include("Connection.php");
$connection = returnConnection();

function countPending($connection){
    $Pending_Assigments = mysqli_query($connection,"SELECT COUNT(*) AS pendings FROM events;");
    $row = mysqli_fetch_assoc($Pending_Assigments);
    $pendings=$row['pendings'];
    return ($pendings);
}

function countMantenaincePending($connection){
    $mantenaincePending_Assigments = mysqli_query($connection,"SELECT COUNT(*) as num_rows FROM `ictMaintenaince` WHERE Finished = 1;");
    $row = mysqli_fetch_assoc($mantenaincePending_Assigments);
    $pendings=$row['num_rows'];
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
function passRatePercentage($connection){
    $queryTotalProduction = "SELECT SUM(total_production) FROM passRateToday;";
    $queryTotalFR = "SELECT SUM(fr) FROM passRateToday;";
    $queryTotalOK = "SELECT SUM(ok) FROM passRateToday;";

    $resultTotalProduction = mysqli_query($connection, $queryTotalProduction);
    $resultTotalOK = mysqli_query($connection, $queryTotalOK);

    $totalProduction = mysqli_fetch_array($resultTotalProduction)[0];
    $totalOK = mysqli_fetch_array($resultTotalOK)[0];

    $percentage = ($totalOK / $totalProduction) * 100;

    $percentage = round($percentage);

    return $percentage;
}
?>