<?php
include("Connection.php");
$connection = returnConnection();

function EquipmentInventory($connection){
    $queryEquipmentInventory = "SELECT * FROM equipmentInventory";
    $result = mysqli_query($connection,$queryEquipmentInventory);
    if (mysqli_num_rows($result) > 0) {
        while ($showResult = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $showResult['name'] . "</td>";
                echo "<td>" . $showResult['hostName'] . "</td>";
                echo "<td>" . $showResult['ipAdress'] . "</td>";
                echo "<td>" . $showResult['classification'] . "</td>";
                echo "<td>" . $showResult['location'] . "</td>";
                echo "<td>" . $showResult['department'] . "</td>";
                echo "<td>" . $showResult['assignedTo'] . "</td>";
                echo "<td>" . $showResult['trademark'] . "</td>";
                echo "<td>" . $showResult['model'] . "</td>";
                echo "<td>" . $showResult['cpu'] . "</td>";
                echo "<td>" . $showResult['hddSize'] . "</td>";
                echo "<td>" . $showResult['ramSize'] . "</td>";
                echo "<td>" . $showResult['serviceTag'] . "</td>";
                echo "<td>" . $showResult['serialNumber'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>
            <td colspan='14'>No data available in table</td>
        </tr>";
    }
}

function search_EquipmentInventory($connection, $name){
    $sql = "SELECT * FROM equipmentInventory WHERE name LIKE '%$name%'";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['hostName'] . "</td>";
                echo "<td>" . $row['ipAdress'] . "</td>";
                echo "<td>" . $row['classification'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['department'] . "</td>";
                echo "<td>" . $row['assignedTo'] . "</td>";
                echo "<td>" . $row['trademark'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['cpu'] . "</td>";
                echo "<td>" . $row['hddSize'] . "</td>";
                echo "<td>" . $row['ramSize'] . "</td>";
                echo "<td>" . $row['serviceTag'] . "</td>";
                echo "<td>" . $row['serialNumber'] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr>
            <td colspan='14'>No data available in table</td>
        </tr>";
    }
}
?>