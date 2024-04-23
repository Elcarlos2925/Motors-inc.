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
    <?php echo "$FontAwesome_css $Style_css $ICT_Mantenaince_css $Bootstrap_4_6_0_css $DataTables_css $jQuery_js $ClockPicker_js $ClockPicker_css";?>
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
                        <button class="btn-calendar" id="btn-calendar" onclick="showCalendar()">Calendar</button> <?php //? OPCION 1?>
                        <button class="btn-details" id="btn-details" onclick="showDetails()">Details</button><?php //? OPCION 2?>
                    </div>
                </div>
                <div class="options-container" id="content"><?php //? Contenedor principal de las 4 opciones?>
                    <?php echo "$ICT_Mantenaince_js";?>
                    <script>showCalendar()</script>
                </div>
       </div>
    </div>

        <?php //? FOOTER?>
        <?php echo "$footer";?>
    </div>
    <?php //? Cargar js?>
    <?php echo "$SubMenu_js $Back_Button_js $FullCalendar_js $Bootstrap_js  $Popper_js $DataTables_js $Moment_js";?>
</body>
</html>