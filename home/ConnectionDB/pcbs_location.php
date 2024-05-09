<?php
include("Connection.php");
$connection = returnConnection();

function pcbsLocation($connection){
    $queryPcbsLocation = "SELECT * FROM pcbsLocation";
    $result = mysqli_query($connection, $queryPcbsLocation);

    if(mysqli_num_rows($result) > 0){
        while($showResult = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $showResult['client'] . "</td>";
                echo "<td>" . $showResult['models'] . "</td>";
                echo "<td>" . $showResult['department'] . "</td>";
                echo "<td>" . $showResult['expirationVerification'] . "</td>";
                echo "<td>" . $showResult['status'] . "</td>";
                echo "<td>" . $showResult['tipPcbTypele'] . "</td>";
                echo "<td>" . $showResult['position'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>
            <td colspan='7'>No data available in table</td>
        </tr>";
    }
}


function search_models($connection, $models){
    $sql = "SELECT * FROM pcbsLocation WHERE models LIKE '%$models%'";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $row['client'] . "</td>";
                echo "<td>" . $row['models'] . "</td>";
                echo "<td>" . $row['department'] . "</td>";
                echo "<td>" . $row['expirationVerification'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['tipPcbTypele'] . "</td>";
                echo "<td>" . $row['position'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>
            <td colspan='7'>No data available in table</td>
        </tr>";
    }
}

?>