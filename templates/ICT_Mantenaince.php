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
                <div class="ict-options"><?php //? botones de las 4 opciones?>
                    <button class="btn-calendar">Calendar</button> <?php //? OPCION 1?>
                    <button class="btn-details">Details</button><?php //? OPCION 2?>
                    <button class="btn-most-faulty-pins">Most faulty pins</button> <?php //? OPCION 3?>
                    <button class="btn-total-cycles">Total cycles</button> <?php //? OPCION 4?>
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
                                    </tbody>
                                </tr>
                            </table>
                    </div>

                    <?php //? Most faulty pins (OPCION 3)?>
                <div class="ict-most-faulty-pins-container">
                    <div class="title-options">
                        <h2>Most faulty pins</h2>
                    </div>    
                    <form action="">
                        <div class="form-container">
                            <input type="text"  class="specific-fixure" placeholder="Specific fixure ID">
                        </div>    
                        <div class="form-container">
                            <label for="">Number pins</label>
                                <select name="number-pins">
                                    <option value="" disabled selected>Select number of pins</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                </select>
                        </div>
                        <div class="form-container">
                            <label for="">Chose a machine</label>
                                <select name="number-pins">
                                    <option value="" disabled selected>Select machine</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                </select>
                        </div>
                        <div class="form-container">
                            <label for="">Date start: </label>
                            <input id="f" type="date">
                        </div>   
                        <div class="form-container">
                            <label for="">Date end: </label>
                            <input type="date">
                        </div>                     
                    </form>
                </div>

                <?php //? Total cycles OPCION 4?>
                <div class="ict-total-cycles-container">
                    <div class="title-options">
                        <h2>Total cycles </h2>
                    </div>
                    <form action="">
                        <div class="form-container">
                            <input type="text"  class="specific-fixure" placeholder="Specific fixure ID">
                        </div>    
                        <div class="form-container">
                            <label for="">Chose a machine</label>
                                <select name="number-pins">
                                    <option value="" disabled selected>Select machine</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                </select>
                        </div>
                        <div class="form-container">
                            <label for="">Date start: </label>
                            <input id="f" type="date">
                        </div>   
                        <div class="form-container">
                            <label for="">Date end: </label>
                            <input type="date">
                        </div>                     
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