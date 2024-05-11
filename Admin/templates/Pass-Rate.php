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
    <?php echo "$FontAwesome_css $Style_css $Pass_Rate_css $Bootstrap_4_6_0_css $Bootstrap_4_6_0_css $jQuery_js $ClockPicker_js $ClockPicker_css $ploty_js $Calendar_Events_css $DataTables_css";?>
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

        <div class="modal fade" id="FormPassRate" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" name="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="add-user">
                        <div class="form-row">
                            <div class="form-group col-md-12" id="employeeid-group">
                                <label for="model-input">Model: </label> <?php //? Id de empleado?>
                                <input type="text" id="model-input" class="form-control" name="model" placeholder="Type the Model">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="total-production-input">Total Production: </label> <?php //? Nombre?> 
                                <input type="text" id="total-production-input" class="form-control" name="total-production" placeholder="Type the Total Production">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fr-input">FR: </label><?php //? Usuario?>
                                <input type="text" id="fr-input" class="form-control" name="fr" placeholder="Type the FR">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ok-input">OK: </label><?php //? Usuario?>
                                <input type="text" id="ok-input" class="form-control" name="ok" placeholder="Type the OK">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="fr-percentage-input">FR%: </label><?php //? Usuario?>
                                <input type="text" id="fr-percentage-input" class="form-control" name="fr-percentage" placeholder="Type the FR%">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ok-percentage-input">OK% </label><?php //? Usuario?>
                                <input type="text" id="ok-percentage-input" class="form-control" name="ok-percentage" placeholder="Type the OK%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="button-add" class="btn btn-success">Add</button>
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

        <?php //TODO: FOOTER?>
        <?php echo "$footer";?>
    </div>

    <?php //? Cargar js?>
    <?php echo "$pass_Rate_Modal_js $SubMenu_js $Back_Button_js $FullCalendar_js $Bootstrap_js  $Popper_js $DataTables_js $Moment_js";?>
</body>
</html>