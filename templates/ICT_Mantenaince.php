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
    <?php echo "$ICT_Mantenaince_css $Calendar_Events_css $FontAwesome_css $Style_css $Bootstrap_4_6_0_css $DataTables_css $jQuery_js";?>
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

    <div class="modal fade" id="FormUser" tabindex="-1" role="dialog">
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
                                    <label for="employeeid-input">Employee Id: </label> <?php //? Id de empleado?>
                                    <input type="text" id="employeeid-input" class="form-control" name="employeeid" placeholder="Type the employee Id">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name-input">Name: </label> <?php //? Nombre?> 
                                    <input type="text" id="name-input" class="form-control" name="name" placeholder="Type the name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="username-input">Username: </label><?php //? Usuario?>
                                    <input type="text" id="username-input" class="form-control" name="username" placeholder="Type the username">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="select-subarea">Subarea: </label> <?php //? subarea?>
                                    <select name="subarea" id="select-subarea" class="form-control">
                                        <option value="" disabled selected>Select subarea</option>
                                        <option value="Tics">Tics</option>
                                        <option value="Informatica">Informatica</option>
                                        <option value="Sistemas">Sistemas</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="privileges-input">Role: </label> <?php //? Privilegios?>
                                    <select name="privileges" id="privileges-input" class="form-control">
                                        <option value="" disabled selected>Select role</option>
                                        <option value="Scrum Master">Scrum Master</option>
                                        <option value="Product Owner">Product Owner</option>
                                        <option value="Backend">Backend</option>
                                        <option value="Frontend">Frontend</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="phone-input">Phone: </label> <?php //? Contraseña?>
                                    <input type="text" id="phone-input" class="form-control" name="phone" placeholder="Type the phone">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12" id="password-group">
                                    <label for="password-input">Password: </label> <?php //? Contraseña?>
                                    <input type="input" id="password-input" class="form-control" name="password" placeholder="Type the password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="button-add" class="btn btn-success">Add</button>
                        <button type="button" id="button-Modify" class="btn btn-primary">Modify</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <?php //? FOOTER?>
        <?php echo "$footer";?>
    </div>
    <?php //? Cargar js?>
    <?php echo "$ict_Mantenaince_Modal_js $SubMenu_js $Back_Button_js $FullCalendar_js $Bootstrap_js  $Popper_js $DataTables_js $Moment_js";?>
</body>
</html>