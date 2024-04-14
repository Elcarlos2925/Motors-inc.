<?php
include '../home/index.php';
include '../home/scripts.php';
include '../home/icons.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "$Mantenaince_icon"; ?>
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $ICT_Mantenaince_css $Bootstrap_4_6_0_css ";?>
    <title>ICT Mantenaince</title>
</head>
<body>
    <div class="main-container">
        <?php //? HEADER?>
        <?php echo "$header";?>
        <?php //? SIDEBAR?>
        <?php echo "$sidebar";?>
        <div class="content-container">
            <div class="title-container"><?php //? TITULO?>
                <h1>ICT Mantenaince</h1>
            </div>
            <div class="ict-mantenaince-container"><?php //? El contenedor principal de las 4 opciones?>
                <div class="menu-ict-option">
                    <div class="ict-options"><?php //? botones de las 4 opciones?>
                        <button class="btn-calendar">Calendar</button> <?php //? OPCION 1?>
                        <button class="btn-details">Details</button><?php //? OPCION 2?>
                        <button class="btn-most-faulty-pins">Most faulty pins</button> <?php //? OPCION 3?>
                        <button class="btn-total-cycles">Total cycles</button> <?php //? OPCION 4?>
                    </div>
                </div>
                <div class="options-container"><?php //? Contenedor principal de las 4 opciones?>
                    
                <?php //? Calendario del ict (OPCION 1)?>
                    <div class="ict-calendar-container">
                        <div class="title-options">
                            <h2>Calendar</h2>
                        </div>
                    </div>

                    <?php //? Contenido de detalles (OPCION 2)?>
                    <div class="ict-details-container">
                        <div class="title-options">
                            <h2>Details</h2>
                        </div>
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
                    </div>
    
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
                </div>
            </div>
       </div>
    </div>

        <?php //? FOOTER?>
        <?php echo "$footer";?>
    </div>
    <?php //? Cargar js?>
    <?php echo "$SubMenu_js";?>
</body>
</html>