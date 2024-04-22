<?php
    include '../home/scripts.php';
include("Connection.php");
$connection = returnConnection();

function PassRateToday($connection){
        $queryPassRateToday = "SELECT * FROM passRateToday";
        $result = mysqli_query($connection,$queryPassRateToday);
        echo "
        <h3>Pass Rate Today</h3>
        <div class='table-container'>
            <table class='table table-secondary table-hover'>
                <thead>
                    <tr>
                        <td>Model</td>
                        <td>Total Production</td>
                        <td>F.R</td>
                        <td>Ok</td>
                        <td>%Ng</td>
                        <td>%Ok</td>
                    </tr>
                </thead>
                <tbody>";
                        if (mysqli_num_rows($result) > 0) {
                            while ($showResult = mysqli_fetch_array($result)){
                                echo "<tr>";
                                    echo "<td>" . $showResult['model'] . "</td>";
                                    echo "<td>" . $showResult['total_production'] . "</td>";
                                    echo "<td>" . $showResult['fr'] . "</td>";
                                    echo "<td>" . $showResult['ok'] . "</td>";
                                    echo "<td>" . $showResult['fr_percentage'] . "</td>";
                                    echo "<td>" . $showResult['ok_percentage'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr>
                                <td colspan='7'>No data available in table</td>
                            </tr>";
                        }
            echo "
            </tbody>
            </table>
            </div>
            <div class='chart' id='chart'></div>
            <div class='chart' id='chart1'></div>
            <div class='chart' id='chart2'></div>";
}
?>