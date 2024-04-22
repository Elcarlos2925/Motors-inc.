<?php
include("Connection.php");
$connection = returnConnection();

function TaskAssignment($connection){
    $queryTaskAssignment = "SELECT * FROM events";
    $result = mysqli_query($connection,$queryTaskAssignment);
    if (mysqli_num_rows($result) > 0) {
        while ($showResult = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $showResult['idEvent'] . "</td>";
            echo "<td>" . $showResult['descriptionEvent'] . "</td>";
            echo "<td>" . $showResult['title'] . "</td>";
            echo "<td>" . $showResult['startEvent'] . "</td>";
            echo "<td>" . $showResult['endEvent'] . "</td>";
            echo "<td>" . "
                        <button class='btn btn-outline-success'>Success</button>
                        <button class='btn btn-outline-primary'>Modify</button>
                        <button class='btn btn-outline-danger'>Delete</button>
                           " . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>
            <td colspan='7'>No data available in table</td>
        </tr>";
    }
}
?>