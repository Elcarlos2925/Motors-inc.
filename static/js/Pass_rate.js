function passRateToday(){
    document.querySelector('#content').innerHTML=""
    const div = document.createElement("div")
    div.innerHTML = `
     <style>
        #btn-pass-rate-today{
            background-color:var(--background-color);
        }
    </style>
    `
    document.querySelector('#content').append(div);
    graphic()
}

function passRateBySpecificDate(){
    document.querySelector('#content').innerHTML=""
    const div = document.createElement("div")
    div.innerHTML = `
     <style>
        #btn-pass-rate-by-specific-date{
            background-color:var(--background-color);
        }
        .hide{
            display:none;
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