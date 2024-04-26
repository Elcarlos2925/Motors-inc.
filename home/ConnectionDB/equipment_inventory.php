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
?>