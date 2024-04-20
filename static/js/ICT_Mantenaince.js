function showDetails(){
    document.querySelector('#content').innerHTML="";
    const div = document.createElement("div");
    div.innerHTML = `
    <style>
        #btn-details{
            background-color:var(--background-color);
        }
    </style>

    <div class="ict-details-container">
        <div class="title-options">
            <h2>Details</h2>
        </div>
        <div class="table-container">
            <table class="table table-secondary table-hover">
                <thead>
                    <tr>
                        <td>Activity</td>
                        <td>Responsible</td>
                        <td>Start day</td>
                        <td>Limit day</td>
                        <td>Finished</td>
                        <td>Title</td>
                    </tr>
                </thead>
                <tbody>
                    <tr id="sinContenido">
                        <td colspan="6">No data available in table</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>`
    document.querySelector('#content').append(div);
}

function showCalendar(){
    document.querySelector('#content').innerHTML="";
    const div = document.createElement("div");
    div.innerHTML = `
    <style>
        #btn-calendar{
            background-color:var(--background-color);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('content');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
            });
            calendar.render();
        });
    </script>`
    document.querySelector('#content').append(div);
    Calendar()
}

function showMostFaultyPins(){
    document.querySelector('#content').innerHTML="";
    const div = document.createElement("div");
    div.innerHTML = `
    <style>
    #btn-most-faulty-pins{
        background-color:var(--background-color);
    }
    </style>
    <?php //? Most faulty pins (OPCION 3)?>
    <div class="ict-most-faulty-pins-container">
        <div class="title-options">
            <h2>Most faulty pins</h2>
        </div>    

        <form action="">
            <div class="form-row">
                <div class="form-group col center">
                    <input type="text" id="specific-fixure" class="specific-fixure form-control" placeholder="Specific fixure ID">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="number-pins">Number pins</label>
                    <select name="number-pins" id="number-pins" class="form-control">
                        <option value="" disabled selected>Select number of pins</option>
                        <option value="">Undefined</option>
                        <option value="">Undefined</option>
                        <option value="">Undefined</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="chose-machine">Chose a machine</label>
                    <select name="chose-machine" id="chose-machine" class="form-control">
                        <option value="" disabled selected>Select machine</option>
                        <option value="">Undefined</option>
                        <option value="">Undefined</option>
                        <option value="">Undefined</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="Start-date">Start Date: </label>
                    <div class="input-group" data-autoclose="true">
                        <input type="date" id="Start-date" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group col">
                    <label for="End-date">End Date: </label>
                    <div class="input-group" data-autoclose="true">
                        <input type="date" id="End-date" class="form-control" value="">
                    </div>
                </div>
            </div>
            <button type="button" id="button-add" class="btn btn-secondary float-right">Add</button>
        </form>
    </div>`
    document.querySelector('#content').append(div);
}

function showTotalCycles(){
    document.querySelector('#content').innerHTML="";
    const div = document.createElement("div");
    div.innerHTML = `
    <style>
        #btn-total-cycles{
            background-color:var(--background-color);
        }
    </style>
    <?php //? Total cycles OPCION 4?>
    <div class="ict-total-cycles-container">
        <div class="title-options">
            <h2>Total cycles </h2>
        </div>
        <form action="">
            <div class="form-row">
                    <div class="form-group col center">
                    <input type="text"  id="specific-fixure"  class="form-control" placeholder="Specific fixure ID">
                </div>    
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="chose-machine">Chose a machine</label>
                    <select name="chose-machine" id="chose-machine" class="form-control">
                        <option value="" disabled selected>Select machine</option>
                        <option value="">..</option>
                        <option value="">..</option>
                        <option value="">..</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="Start-date">Start Date: </label>
                    <div class="input-group" data-autoclose="true">
                        <input type="date" id="Start-date" class="form-control" value="">
                    </div>
                </div>
                <div class="form-group col">
                    <label for="End-date">End Date: </label>
                    <div class="input-group" data-autoclose="true">
                        <input type="date" id="End-date" class="form-control" value="">
                    </div>
                </div>
            </div>
            <button type="button" id="button-add" class="btn btn-secondary float-right">Add</button>
        </form>
    </div>`
    document.querySelector('#content').append(div);
}

function Calendar(){
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('content');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
        });
        calendar.render();
    });
}