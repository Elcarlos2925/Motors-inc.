<?php
    include '../home/scripts.php';
include("Connection.php");
$connection = returnConnection();

function PassRateToday($connection){
        $queryPassRateToday = "SELECT * FROM passRateToday";
        $result = mysqli_query($connection,$queryPassRateToday);
        echo "
        <br>
        <button class='btn btn-outline-primary float-right' onclick='modalAdd()'>+ add</button>
        <br>
        <br>
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
                                    echo "<td>" . $showResult['fr_percentage'] . "%" . "</td>";
                                    echo "<td>" . $showResult['ok_percentage'] . "%" . "</td>";
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
            $result1Chart1 = mysqli_query($connection,$queryPassRateTodayChart);
            $result2Chart1 = mysqli_query($connection,$queryPassRateTodayChart);
            $result3Chart1 = mysqli_query($connection,$queryPassRateTodayChart);
            $result4Chart1 = mysqli_query($connection,$queryPassRateTodayChart);

            echo "
            <script>
              var trace1 = {
                  x: [
            ";
            if (mysqli_num_rows($result1Chart1) > 0) {
                while ($showResult1 = mysqli_fetch_array($result1Chart1)){
                        echo "'" . $showResult1['model'] . "',";
                    }}
            echo "],
                y: [";
            if (mysqli_num_rows($result2Chart1) > 0) {
                while ($showResult2 = mysqli_fetch_array($result2Chart1)){
                        echo $showResult2['ok_percentage'] . ",";
                    }}
                    echo "],
                name: 'OK',
                type: 'bar',
                marker: {
                  color: 'green'
                }
              };";

              echo "var trace2 = {
                x: [";
                if (mysqli_num_rows($result3Chart1) > 0) {
                  while ($showResult3 = mysqli_fetch_array($result3Chart1)){
                          echo "'" . $showResult3['model'] . "',";
                      }}
              echo "],
                  y: [";
                  if (mysqli_num_rows($result4Chart1) > 0) {
                    while ($showResult4 = mysqli_fetch_array($result4Chart1)){
                            echo $showResult4['fr_percentage'] . ",";
                        }}
              echo "],
                name: 'F.R.',
                type: 'bar',
                marker: {
                  color: 'red'
                }
              };";
            
              echo "

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

              $result1Chart2 = mysqli_query($connection,$queryPassRateTodayChart);
              $result2Chart2 = mysqli_query($connection,$queryPassRateTodayChart);
              $result3Chart2 = mysqli_query($connection,$queryPassRateTodayChart);
              $result4Chart2 = mysqli_query($connection,$queryPassRateTodayChart);

              echo "
              <script>
                var trace4 = {
                    x: [
              ";
              if (mysqli_num_rows($result1Chart2) > 0) {
                  while ($showResult5 = mysqli_fetch_array($result1Chart2)){
                          echo "'" . $showResult5['model'] . "',";
                      }}
              echo "],
                  y: [";
              if (mysqli_num_rows($result2Chart2) > 0) {
                  while ($showResult7 = mysqli_fetch_array($result2Chart2)){
                          echo $showResult7['ok'] . ",";
                      }}
                      echo "],
                      name: 'OK',
                      type: 'bar',
                      marker: {
                        color: 'green'
                      }
                };";
  
                echo "var trace5 = {
                  x: [";
                  if (mysqli_num_rows($result3Chart2) > 0) {
                    while ($showResult7 = mysqli_fetch_array($result3Chart2)){
                            echo "'" . $showResult7['model'] . "',";
                        }}
                echo "],
                    y: [";
                    if (mysqli_num_rows($result4Chart2) > 0) {
                      while ($showResult8 = mysqli_fetch_array($result4Chart2)){
                              echo $showResult8['fr'] . ",";
                          }}
                echo "],
                  name: 'F.R.',
                  type: 'bar',
                  marker: {
                    color: 'red'
                  }
                };";
                echo "
              var data = [trace4, trace5];
            
              var layout = {
                barmode: 'stack',
                title: 'Production vs False Rejection',
                font:{
                  family: 'Telegraf, sans-serif'
                },
                showlegend: true,
                xaxis: {
                  tickangle: -45
                },
                yaxis: {
                  zeroline: true,
                  gridwidth: 2
                },
                bargap :0.50,
                dragmode: false,
                modebar: {
                  displayModeBar: false
                },
                cursor: 'pointer',
                plot_bgcolor: '#D9D9D9',
                paper_bgcolor: '#D9D9D9'
              };
            
              Plotly.newPlot('chart1', data, layout);
              </script>";
            
              $result1Chart3 = mysqli_query($connection,$queryPassRateTodayChart);
              $result2Chart3 = mysqli_query($connection,$queryPassRateTodayChart);
              $result3Chart3 = mysqli_query($connection,$queryPassRateTodayChart);
              $result4Chart3 = mysqli_query($connection,$queryPassRateTodayChart);

              echo "
              <script>
                var trace6 = {
                    x: [
              ";
              if (mysqli_num_rows($result1Chart3) > 0) {
                  while ($showResult9 = mysqli_fetch_array($result1Chart3)){
                          echo "'" . $showResult9['model'] . "',";
                      }}
              echo "],
                  y: [";
              if (mysqli_num_rows($result2Chart3) > 0) {
                  while ($showResult10 = mysqli_fetch_array($result2Chart3)){
                          echo $showResult10['ok_percentage'] . ",";
                      }}
                      echo "],
                      name: 'OK',
                      type: 'line',
                      marker: {
                        color: 'green'
                      }
                };";
  
                echo "var trace7 = {
                  x: [";
                  if (mysqli_num_rows($result3Chart3) > 0) {
                    while ($showResult11 = mysqli_fetch_array($result3Chart3)){
                            echo "'" . $showResult11['model'] . "',";
                        }}
                echo "],
                    y: [";
                    if (mysqli_num_rows($result4Chart3) > 0) {
                      while ($showResult13 = mysqli_fetch_array($result4Chart3)){
                              echo $showResult13['fr_percentage'] . ",";
                          }}
                echo "],
                name: 'F.R.',
                type: 'line',
                marker: {
                  color: 'red' // Color verde para la barra 'OK'
                }
                };";
                echo "
                var trace8 = {
                  x: [null], // Coordenadas fuera del rango visible
                  y: [null], // Coordenadas fuera del rango visible
                  mode: 'lines',
                  name: 'Target',
                  line: {
                    color: 'blue', // Color de la línea objetivo
                    width: 2,
                    dash: 'dot' // Tipo de línea punteada
                  }
                };
                var data = [trace6, trace7, trace8];
    
                var layout = {
                  barmode: 'stack',
                  title: 'ICT Target 90% F.R.',
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
                      y0: 90, // Posición en el eje y donde quieres que comience la línea punteada
                      x1: 1,
                      y1: 90, // Posición en el eje y donde quieres que termine la línea punteada
                      line: {
                        color: 'blue', // Color de la línea punteada
                        width: 2,
                        dash: 'dot' // Tipo de línea punteada
                      }}]
                };
              
                Plotly.newPlot('chart2', data, layout);
              </script>";
}
?>