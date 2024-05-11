<?php
include '../home/index.php';
include '../home/scripts.php';
include '../home/icons.php';
include '../home/ConnectionDB/pcbs_location.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "$Pcbs_Location_icon";?>
    <?php //? Cargar Css?>
    <?php echo "$Pcbs_location_css $Calendar_Events_css $FontAwesome_css $Style_css $Bootstrap_4_6_0_css $DataTables_css $jQuery_js";?>
    <title>PCB's Location</title>
</head>
<body>
    <?php //? CONTENEDOR PRINCIPAL?>
    <div class="main-container">
        <?php //? HEADER?>
        <?php echo "$header";?>
        <?php //? SIDEBAR?>
        <?php echo "$sidebar";?>
        
        <?php //? CONTENIDO?>
        <div class="content-container">
            <div class="title-container">
                <h1>PCB's Location</h1>
            </div>
            <div class="pcbs-location-container">
                <div class="center">
                    <div class='search-container-pcbs-location'>
                        <form action='' method='get'>
                            <button class='Search-button-pcbs-location' id='Search-pcbs-locatiob-button' type='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                            <input id='Search-input-pcbs-location' class='Search-input-pcbs-location' type='search' name='models' placeholder='Search model here...'>
                        </form>
                    </div>
                </div>
                <div class="table-container">
                    <table class="table table-secondary table-hover">
                        <thead>
                            <tr>
                                <td>Cliet</td>
                                <td>Model</td>
                                <td>Department</td>
                                <td>Expiration Verification</td>
                                <td>Status</td>
                                <td>TitPCB typele</td>
                                <td>Position</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if (isset($_GET['models'])) {
                                    $models = $_GET['models'];
                                    search_models($connection,$models);
                                } else {
                                    pcbsLocation($connection);
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade" id="FormPcbsLocation" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" name="button" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="client-input">Client: </label> 
                                <input type="text" id="client-input" class="form-control" name="client" placeholder="Type the client"  required minlength="1" maxlength="50" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="models-input">Models: </label> 
                                <input type="text" id="models-input" class="form-control" name="models" placeholder="Type the models"  required minlength="1" maxlength="50">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="department-input">Department: </label> 
                                <input type="text" id="department-input" class="form-control" name="department" placeholder="Type the department" required minlength="1" maxlength="50">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-10">
                                <label for="expirationVerification-input">Expiration Verification: </label> 
                                <input type="date" id="expirationVerification-input" class="form-control" name="expirationVerification" placeholder="Type the expiration verification" required minlength="1" maxlength="50">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="status-input">Status: </label> 
                                <input type="checkbox" id="status-input" class="form-control" name="status" required minlength="1" maxlength="1">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="tipPcbTypele-input">Tip Pcb Typele: </label> 
                                <input type="text" id="tipPcbTypele-input" class="form-control" name="tipPcbTypele" placeholder="Type the tip pcb typele" required minlength="1" maxlength="50">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="position-input">Position: </label> 
                                <input type="text" id="position-input" class="form-control" name="position" placeholder="Type the position" required minlength="1" maxlength="50">
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

        <?php //? footer?>
        <?php echo "$footer";?>
        <?php //? Cargar js?>
    <?php echo "$pcbsLocation_Modal_js $SubMenu_js $Back_Button_js $FullCalendar_js $Bootstrap_js  $Popper_js $DataTables_js $Moment_js";?>
    </div>
</body>
</html>