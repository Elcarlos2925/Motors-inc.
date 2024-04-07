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
    <?php echo "$FontAwesome_css $Style_css $Calendar_Events_css $Calendario_css $ClockPicker_css";?>

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
        
        <div class="modal fade" id="FormEvent" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" name="button" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="Id">

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="">Title Task: </label>
                                <input type="text" id="title-task" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Start Date: </label>
                                <div class="input-group" data-autoclose="true">
                                    <input type="date" id="start-date" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="Title-Start-Hour">
                                <label for="">Start Hour:</label>
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" id="start-time" class="form-control" value="" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">End Date: </label>
                                <div class="input-group" data-autoclose="true">
                                    <input type="date" id="End-date" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="Title-Start-Hour">
                                <label for="">End Hour:</label>
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" id="End-time" class="form-control" value="" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <label for="">Description: </label>
                            <textarea name="" id="Description" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-row">
                            <label for="">Background Color: </label>
                            <input type="color" value="#284B63" id="background-color" class="form-control" style="height:36px;">
                        </div>
                        <div class="form-row">
                            <label for="">Text Color: </label>
                            <input type="color" value="#ffffff" id="text-color" class="form-control" style="height:36px;">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" id="button-add" class="btn btn-success">Add</button>
                        <button type="button" id="button-Modify" class="btn btn-success">Modify</button>
                        <button type="button" id="button-delete" class="btn btn-success">Delete</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss>Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <?php //?FOOTER ?>
        <?php echo "$footer";?>
    </div>




    <?php echo "$SubMenu_js $FullCalendar_js $Load_Calendar_js $jQuery_js $Bootstrap_js $ClockPicker_js";?>
</body>
</html>