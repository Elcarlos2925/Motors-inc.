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


            $queryPassRateTodayChart = "SELECT * FROM passRateToday";
            $resultChart = mysqli_query($connection,$queryPassRateTodayChart);
            echo "
            <script>
            var trace1 = {
                x: ['
            ";
            if (mysqli_num_rows($resultChart) > 0) {
                while ($showResult = mysqli_fetch_array($resultChart)){
                        echo "'" . $showResult['model'] . "',";
                    }}
            echo "],
                y: ["
            if (mysqli_num_rows($resultChart) > 0) {
                while ($showResult = mysqli_fetch_array($resultChart)){
                        echo $showResult['ok_percentage'] . ",";
                    }}
                    97.57,
                    100,
                    99.67,
                    98.31,
                    100,
                    92.58,
                    98.76,
                    0,
                    88.35,
                    98.78,
                    96.92,
                    100],
                name: 'OK',
                type: 'bar',
                marker: {
                  color: 'green' // Color verde para la barra 'OK'
                }
              };
            
              var trace2 = {
                x: ['E3-10119E30052',
                'E3-10129P17D21',
                'E3-23406AAJX',
                'E3-441-09-DB3B',
                'E3-949502-31CB',
                'E3-95018-154',
                'E3-0341B510BX ',
                'E3-W343F01872',
                'E3-W343F04274',
                'E3-X001TL0382H',
                'F3-X1T66895H7X',
                'E3-X1T84791H17'],
                y: [2.43,
                    0,
                    0.33,
                    1.69,
                    0,
                    7.42,
                    1.24,
                    100,
                    11.65,
                    1.22,
                    3.08,
                    0],
                name: 'F.R.',
                type: 'bar',
                marker: {
                  color: 'red'
                }
              };
            
              var trace3 = {
                x: [null],
                y: [null],
                mode: 'lines',
                name: 'Target',
                line: {
                  color: 'blue',
                  width: 2,
                  dash: 'dot'
                }
              };
            
              var data = [trace1, trace2, trace3];
            
              var layout = {
                barmode: 'stack',
                title: 'Pass Rate Percentage %',
                font:{
                  family: 'Telegraf, sans-serif'
                },
                showlegend: true,
                xaxis: {
                  tickangle: -45
                },
                yaxis: {
                  zeroline: true,
                  gridwidth: 2,
                  range: [0, 100]
                },
                bargap :0.50,
                dragmode: false,
                modebar: {
                    displayModeBar: false
                },
                cursor: 'pointer',
                plot_bgcolor: '#D9D9D9',
                paper_bgcolor: '#D9D9D9',
                shapes: [{
                    type: 'line',
                    xref: 'paper',
                    x0: 0,
                    y0: 90,
                    x1: 1,
                    y1: 90,
                    line: {
                      color: 'blue',
                      width: 2,
                      dash: 'dot'
                    }}]
              };
            
              Plotly.newPlot('chart', data, layout);
              </script>
            ";
}
?>