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
    <!--? Cargar Css-->
    <?php echo "$FontAwesome_css $Style_css $Calendar_Events_css";?>

    <title>Calendar & Events</title>
</head>
<body>

    <!-- CONTENEDOR PRINCIAL-->
    <div class="main-container"> 
    
        <!--HEADER-->
        <?php echo "$header";?>


        <!--SIDEBAR-->
        <?php echo "$sidebar";?>
        <!--CONTENDIO-->
        <div class="content-container">
            <div class="title-container">
                <h1>Calendar & Events</h1>
            </div>
            <div id='calendar'></div>
        </div>

        <!--FOOTER-->
        <?php echo "$footer";?>
    </div>




    <?php echo "$SubMenu_js $FullCalendar_js $Load_Calendar_js";?>
<script>
        let calendario1 = new FullCalendar.Calendar(document.getElementById('calendar'),{
    events: '../home/ConnectionDB/Eventos.php?action=list'
    });

    calendar.render();
</script>
</body>
</html>