<?php
include("Connection.php");
$connection = returnConnection();

function ictMaintenaince($connection){
    $queryictMaintenaince = "SELECT * FROM ictMaintenaince";
    $result = mysqli_query($connection, $queryictMaintenaince);

    if(mysqli_num_rows($result) > 0){
        while($showResult = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $showResult['Activity'] . "</td>";
            echo "<td>" . $showResult['Responsible'] . "</td>";
            echo "<td>" . $showResult['startDay'] . "</td>";
            echo "<td>" . $showResult['limitDay'] . "</td>";
            if ($showResult['Finished'] == 1){
                echo "<td>" . "<i class='fas fa-check'></i>" . "</td>";
            } else{
                echo "<td>" . "<i class='fas fa-times'></i>" . "</td>";
            }
            echo "<td>" . $showResult['Title'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>
            <td colspan='6'>No data available in table</td>
        </tr>";
    }
}
?>