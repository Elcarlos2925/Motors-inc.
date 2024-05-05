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