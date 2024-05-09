<?php
    include '../home/index.php';
    include '../home/scripts.php';
    include '../home/icons.php';
    include '../home/ConnectionDB/pass_rate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "$Pass_Rate_icon"; ?>
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $Pass_Rate_css $Bootstrap_4_6_0_css $Bootstrap_4_6_0_css $jQuery_js $ClockPicker_js $ClockPicker_css $ploty_js";?>
    <title>Pass Rate ICT</title>
</head>
<body>

    <div class="main-container">
        <?php //?Contenedor Principal?>

        <?php //TODO: HEADER?>
        <?php echo "$header";?>
        <?php //TODO: SIDEBAR?>
        <?php echo "$sidebar";?>

        <div class="content-container">
            <div class="title-container">
                <h1>Pass Rate ICT</h1>
            </div>
            <div class="pass-rate-container">
                <?php PassRateToday($connection)?>
            </div>
        </div>

        <?php //TODO: FOOTER?>
        <?php echo "$footer";?>
    </div>

    <?php //? Cargar js?>
    <?php echo "$SubMenu_js $Back_Button_js $Bootstrap_js  $Popper_js $DataTables_js $Moment_js";?>
</body>
</html>