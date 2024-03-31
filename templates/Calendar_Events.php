<?php
include '../home/index.php';
include '../home/scripts.php';
include '../home/ConnectionDB/Connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/assets/icons/house-door-fill.svg" type="image/svg+xml">
    <?php //? Cargar Css ?>
    <?php echo "$FontAwesome_css $Style_css $Calendar_Events_css";?>

    <title>Calendar & Events</title>
</head>
<body>

    <?php //? CONTENEDOR PRINCIAL ?>
    <div class="main-container">
        <?php //?HEADER ?>
        <?php echo "$header";?>


        <?php //?SIDEBAR ?>
        <?php echo "$sidebar";?>
        <?php //?CONTENDIO ?>
        <div class="content-container">
            <div class="title-container">
                <h1>Calendar & Events</h1>
            </div>
            <div id='calendar'></div>
        </div>

        <?php //?FOOTER ?>
        <?php echo "$footer";?>
    </div>




    <?php echo "$SubMenu_js $FullCalendar_js $Load_Calendar_js";?>
</body>
</html>