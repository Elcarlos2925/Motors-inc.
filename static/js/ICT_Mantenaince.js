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

function showPendingMaintenance(){
    document.querySelector('#content').innerHTML="";
    const div = document.createElement("div");
    div.innerHTML = `
    <style>
        #btn-calendar{
            background-color:var(--background-color);
        }
    </style>`
    document.querySelector('#content').append(div);
}