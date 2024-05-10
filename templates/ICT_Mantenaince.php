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
    <?php echo "$ICT_Mantenaince_css $Calendar_Events_css $FontAwesome_css $Style_css $Bootstrap_4_6_0_css $DataTables_css $jQuery_js $ClockPicker_js $ClockPicker_css";?>
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
                            <button class="btn btn-outline-primary" onclick='modalAdd()'>+ add</button>
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

       <div class="modal fade" id="FormMantenaince" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" name="button" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="title-input">Title: </label><?php //? Usuario?>
                                <input type="text" id="title-input" class="form-control" name="title" placeholder="Type the title">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12" id="employeeid-group">
                                <label for="activity-input">Activity: </label> <?php //? Id de empleado?>
                                <input type="text" id="activity-input" class="form-control" name="activity" placeholder="Type the activity">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="responsible-input">Responsible: </label> <?php //? Nombre?> 
                                <input type="text" id="responsible-input" class="form-control" name="responsible" placeholder="Type the responsible">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Start Date: </label>
                                <div class="input-group" data-autoclose="true">
                                    <input type="date" id="Start-date-input" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="Title-Start-Timer">
                                <label for="">Start Time:</label>
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" id="Start-time-input" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Limit Date: </label>
                                <div class="input-group" data-autoclose="true">
                                    <input type="date" id="Limit-date-input" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group col-md-6" id="Title-End-Time">
                                <label for="">Limit Time:</label>
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" id="Limit-time-input" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-1">
                                <label for="finished-input">Finished: </label> <?php //? Nombre?> 
                                <input type="checkbox" id="finished-input" class="form-control" name="responsible" placeholder="Type the finished">
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

    </div>


    <?php //? FOOTER?>
    <?php echo "$footer";?>

    <?php //? Cargar js?>
    <?php echo "$ict_Mantenaince_Modal_js $SubMenu_js $Back_Button_js $FullCalendar_js $Bootstrap_js  $Popper_js $DataTables_js $Moment_js";?>
</body>
</html>