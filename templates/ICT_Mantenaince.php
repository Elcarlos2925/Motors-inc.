<?php
include '../home/index.php';
include '../home/scripts.php';
include '../home/icons.php';
include '../home/ConnectionDB/ict_mantenaince.php';
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
            <div class="ict-mantenaince-container">
                <div class="options-container" id="content">
                    <div class="ict-details-container">
                        <div class="title-options">
                            <button class="btn btn-outline-primary">+ add</button>
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
                                    <?php ictMaintenaince($connection);?>
                                </tbody>
                            </table>
                        </div>
                    </div>
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