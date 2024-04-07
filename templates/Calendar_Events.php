
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
    <?php echo "$FontAwesome_css $Style_css $Calendar_Events_css $Bootstrap_4_6_0_css $DataTables_css $jQuery_js $ClockPicker_js $ClockPicker_css";?>

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
                                <input type="text" id="Title-task" class="form-control" placeholder="">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Start Date: </label>
                                <div class="input-group" data-autoclose="true">
                                    <input type="date" id="Start-date" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="Title-Start-Timer">
                                <label for="">Start Time:</label>
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" id="Start-time" class="form-control" value="">
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
                            <div class="form-group col-md-6" id="Title-End-Time">
                                <label for="">End Time:</label>
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" id="End-time" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <script>
                                // Clockpicker initialization
                                $(document).ready(function() {
                                    $('.clockpicker').clockpicker();
                                });
                        </script>


                        <div class="form-row">
                            <label for="">Description: </label>
                            <textarea name="" id="Description" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-row">
                            <label for="">Background Color: </label>
                            <input type="color" value="#284B63" id="Background-color" class="form-control" style="height:36px;">
                        </div>
                        <div class="form-row">
                            <label for="">Text Color: </label>
                            <input type="color" value="#ffffff" id="Text-color" class="form-control" style="height:36px;">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" id="button-add" class="btn btn-success">Add</button>
                        <button type="button" id="button-Modify" class="btn btn-primary">Modify</button>
                        <button type="button" id="button-delete" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <?php //?FOOTER ?>
        <?php echo "$footer";?>
    </div>
    <?php echo "$SubMenu_js $FullCalendar_js $Load_Calendar_js $Bootstrap_js  $Popper_js $DataTables_js $Moment_js";?>
    <script>
        $('.clockpicker').clockpicker()
    </script>
</body>
</html>