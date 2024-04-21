function passRateToday(){
    document.querySelector('#content').innerHTML=""
    const div = document.createElement("div")
    div.innerHTML = `
     <style>
        #btn-pass-rate-today{
            background-color:var(--background-color);
        }
    </style>
    <?php //?Pass Rate Today ?>
            <h3>Pass Rate Today</h3>
            <div class="table-container">
                <table class="table table-secondary table-hover">
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
                    <tbody>
                        <?php//!Aqui va el cuerpo de la tabla?>
                        <tr>
                            <td>E3-10119E30052</td>
                            <td>2964</td>
                            <td>161</td>
                            <td>2803</td>
                            <td>2.43%</td>
                            <td>97.57%</td>
                        </tr>
                        <tr>
                            <td>E3-10129P17D21</td>
                            <td>1988</td>
                            <td>0</td>
                            <td>1988</td>
                            <td>0%</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>E3-23406AAJX</td>
                            <td>1213</td>
                            <td>4</td>
                            <td>1209</td>
                            <td>0.33%</td>
                            <td>99.67%</td>
                        </tr>
                        <tr>
                            <td>E3-441-09-DB3B</td>
                            <td>2596</td>
                            <td>44</td>
                            <td>2552</td>
                            <td>1.69%</td>
                            <td>98.31%</td>
                        </tr>
                        <tr>
                            <td>E3-949502-31CB</td>
                            <td>162</td>
                            <td>0</td>
                            <td>162</td>
                            <td>0%</td>
                            <td>100%</td>
                        </tr>
                        <tr>
                            <td>E3-95018-154</td>
                            <td>2304</td>
                            <td>171</td>
                            <td>2133</td>
                            <td>7.42%</td>
                            <td>92.58%</td>
                        </tr>
                        <tr>
                            <td>E3-0341B510BX</td>
                            <td>4356</td>
                            <td>54</td>
                            <td>4302</td>
                            <td>1.24%</td>
                            <td>98.76%</td>
                        </tr>
                        <tr>
                            <td>E3-W343F01872</td>
                            <td>20</td>
                            <td>20</td>
                            <td>0</td>
                            <td>100%</td>
                            <td>0%</td>
                        </tr>
                        <tr>
                            <td>E3-W343F04274</td>
                            <td>824</td>
                            <td>96</td>
                            <td>728</td>
                            <td>11.65%</td>
                            <td>88.35%</td>
                        </tr>
                        <tr>
                            <td>E3-X001TL0382H</td>
                            <td>2613</td>
                            <td>32</td>
                            <td>2581</td>
                            <td>1.22%</td>
                            <td>98.78%</td>
                        </tr>
                        <tr>
                            <td>F3-X1T66895H7X</td>
                            <td>1428</td>
                            <td>44</td>
                            <td>1384</td>
                            <td>3.08%</td>
                            <td>96.92%</td>
                        </tr>
                        <tr>
                            <td>E3-X1T84791H17</td>
                            <td>6</td>
                            <td>0</td>
                            <td>6</td>
                            <td>0%</td>
                            <td>100%</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="chart" id="chart"></div>
            <div class="chart" id="chart1"></div>
            <div class="chart" id="chart2"></div>`
    document.querySelector('#content').append(div);
    graphic()
}
function top5FailsAllCurrentModels(){
    document.querySelector('#content').innerHTML=""
    const div = document.createElement("div")
    div.innerHTML = `
     <style>
        #btn-top-5-fails{
            background-color:var(--background-color);
        }
    </style>
    <?php //?TOP 5 COMPONENT FAIL ?>
            <h3>Top 5 Component Fail E3-10119E30052</h3>
            <div class="table-container">
                <table class="table table-secondary table-hover">
                    <thead>
                        <tr>
                            <td>Total</td>
                            <td>Part</td>
                            <td>Tester ID</td>
                            <td>Refer Value</td>
                            <td>Tester Value</td>
                            <td>HPin</td>
                            <td>Lpin</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php//!Aqui va el cuerpo de la tabla?>
                        <tr>
                            <td>11</td>
                            <td>D7</td>
                            <td>ICT19</td>
                            <td>2.60V</td>
                            <td>3.51V</td>
                            <td>53</td>
                            <td>43</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>R2</td>
                            <td>ICT19</td>
                            <td>10.00Ko</td>
                            <td>6.05Ko</td>
                            <td>64</td>
                            <td>63</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>D6</td>
                            <td>ICT19</td>
                            <td>2.60V</td>
                            <td>3.51V</td>
                            <td>47</td>
                            <td>53</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>D4</td>
                            <td>ICT19</td>
                            <td>2.60V</td>
                            <td>3.51V</td>
                            <td>35</td>
                            <td>31</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3>Top 5 Component Fail E3-10129P17D21</h3>
            <div class="table-container">
                <table class="table table-secondary table-hover">
                    <thead>
                        <tr>
                            <td>Total</td>
                            <td>Part</td>
                            <td>Tester ID</td>
                            <td>Refer Value</td>
                            <td>Tester Value</td>
                            <td>HPin</td>
                            <td>Lpin</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php//!Aqui va el cuerpo de la tabla?>
                        <tr>
                            <td>1</td>
                            <td>D5</td>
                            <td>ICT23</td>
                            <td>3.00V</td>
                            <td>3.51V</td>
                            <td>241</td>
                            <td>254</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>U1-7</td>
                            <td>ICT23</td>
                            <td>0.81V</td>
                            <td>6.05Ko</td>
                            <td>161</td>
                            <td>186</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>R10</td>
                            <td>ICT23</td>
                            <td>37.70Ko</td>
                            <td>3.51V</td>
                            <td>201</td>
                            <td>228</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>C10</td>
                            <td>ICT23</td>
                            <td>0.21nF</td>
                            <td>3.51V</td>
                            <td>201</td>
                            <td>215</td>
                        </tr>
                    </tbody>
                </table>
            </div>`
    document.querySelector('#content').append(div)
}
function passRateBySpecificDate(){
    document.querySelector('#content').innerHTML=""
    const div = document.createElement("div")
    div.innerHTML = `
     <style>
        #btn-pass-rate-by-specific-date{
            background-color:var(--background-color);
        }
    </style>
    <?php //?Pass Rate by Specific Date ?>
            <h3>Pass Rate By Specific Date</h3>
            <form action="" class="form-date-hour-form">
                <div class="form-group mb-3 form-date-hour">
                    <p class="p-date-hour">Date & Hour Start: </p>
                    <div class="input-group" data-autoclose="true">
                        <input type="date" id="" class="form-control" value="">
                    </div>
                    <div class="input-group clockpicker" data-autoclose="true">
                        <input type="text" id="End-time" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group mb-3 form-date-hour">
                    <p class="p-date-hour">Date & Hour End: </p>
                    <div class="input-group" data-autoclose="true">
                        <input type="date" id="" class="form-control" value="dd/mm/yyyy">
                    </div>
                    <div class="input-group clockpicker" data-autoclose="true">
                        <input type="text" id="End-time" class="form-control" value="">
                    </div>
                </div>
                <input type="submit" class="generate-report-pass-rate" value="Generate Report">
            </form>`
    document.querySelector('#content').append(div)
    clockpicker()
}
function top5FailsBySpecificDate(){
    document.querySelector('#content').innerHTML=""
    const div = document.createElement("div")
    div.innerHTML = `
    <?php echo "$jQuery_js $ClockPicker_js $ClockPicker_css";?>
     <style>
        #btn-top-5-fails-by-specific-date{
            background-color:var(--background-color);
        }
    </style>
    <?php //?Top 5 fails by Specific Date ?>
    <h3>Top 5 Component By Specific Date</h3>
    <form action="" class="form-date-hour-form">
        <div class="input-group mb-3 specific-model">
            <input type="text" class="form-control mb-3" placeholder="Specific Model">
        </div>
        <div class="form-group mb-3 form-date-hour">
            <p class="p-date-hour">Date & Hour Start: </p>
            <div class="input-group" data-autoclose="true">
                <input type="date" id="" class="form-control" value="">
            </div>
            <div class="input-group clockpicker" data-autoclose="true">
                <input type="text" id="End-time" class="form-control" value="">
            </div>
        </div>
        <div class="form-group mb-3 form-date-hour">
            <p class="p-date-hour">Date & Hour End: </p>
            <div class="input-group" data-autoclose="true">
                <input type="date" id="" class="form-control" value="">
            </div>
            <div class="input-group clockpicker" data-autoclose="true">
                <input type="text" id="End-time" class="form-control" value="">
            </div>
        </div>
        <input type="submit" class="generate-report-pass-rate" value="Generate Report">
    </form>`
    document.querySelector('#content').append(div)
    clockpicker()
}

function clockpicker(){
    $('.clockpicker').clockpicker({
        placement: 'top',
        align: 'left',
        donetext: 'Done'
    })
}

function graphic(){
    var trace1 = {
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
        y: [97.57,
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
          color: 'green' // Color verde para la barra "OK"
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
          color: 'red' // Color verde para la barra "OK"
        }
      };
    
      var trace3 = {
        x: [null],
        y: [null],
        mode: 'lines',
        name: 'Target',
        line: {
          color: 'blue', // Color de la línea objetivo
          width: 2,
          dash: 'dot' // Tipo de línea punteada
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
            y0: 90, // Posición en el eje y donde quieres que comience la línea punteada
            x1: 1,
            y1: 90, // Posición en el eje y donde quieres que termine la línea punteada
            line: {
              color: 'blue', // Color de la línea punteada
              width: 2,
              dash: 'dot' // Tipo de línea punteada
            }}]
      };
    
      Plotly.newPlot('chart', data, layout);
    
                                                                                
      var trace4 = {
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
        y: [2803,
            1988,
            1209,
            2552,
            162,
            2133,
            4302,
            0,
            728,
            2581,
            1384,
            6],
        name: 'OK',
        type: 'bar',
        marker: {
          color: 'green' // Color verde para la barra "OK"
        }
      };
    
      var trace5 = {
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
        y: [161,
            0,
            4,
            44,
            0,
            171,
            54,
            20,
            96,
            32,
            44,
            0],
        name: 'F.R.',
        type: 'bar',
        marker: {
          color: 'red' // Color verde para la barra "OK"
        }
      };
    
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
    
    
                                                                                
      var trace6 = {
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
        y: [97.57,
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
        type: 'line',
        marker: {
          color: 'green' // Color verde para la barra "OK"
        }
      };
    
      var trace7 = {
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
        type: 'line',
        marker: {
          color: 'red' // Color verde para la barra "OK"
        }
      };
    
    
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
}