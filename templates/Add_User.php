<?php
    include '../home/index.php';
    include '../home/scripts.php';
    include '../home/icons.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "$Add_User_icon"; ?>
    <?php //? Cargar CSS ?>
    <?php echo "$FontAwesome_css $Style_css $Add_User_css $Bootstrap_4_6_0_css";?>
    <title>Add User</title>
</head>
<body>
        <div class="main-container">
            <?php //? HEADER?>
            <?php echo "$header";?>
            <?php //? SIDEBAR?> 
            <?php echo "$sidebar";?>
            <?php //? CONTENEDOR PRINCIPAL?>
            <div class="content-container"> 
                <div class="title-container">
                    <h1>Add User</h1>
                </div>
                <div class="add-user-container">
                    <h2>New User</h2>
                    <?php //?FORMULARIO AÑADIR USUARIO?>
                    <div class="add-user">
                        <form action="/agregar" method="" class="add-user-form">
                            <div class="add-user">
                                <div class="form-row">
                                    <div class="form-group col-md-11">
                                        <label for="name-input">Name: </label> <?php //? Nombre?> 
                                        <input type="text" id="name-input" class="form-control" name="name" placeholder="Type the name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-11">
                                        <label for="last-name-input">Last Name: </label> <?php //? Apellido?>
                                        <input type="text" id="last-name-input" class="form-control" name="last-name" placeholder="Type the surname">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-11">
                                        <label for="username-input">Username: </label><?php //? Usuario?>
                                        <input type="text" id="username-input" class="form-control" name="username" placeholder="Type the username">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-11">
                                        <label for="employeeid-input">Employee Id: </label> <?php //? Id de empleado?>
                                        <input type="text" id="employeeid-input" class="form-control" name="employeeid" placeholder="Type the employee Id">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-11">
                                        <label for="password-input">Password: </label> <?php //? Contraseña?>
                                        <input type="password" id="password-input" class="form-control" name="name" placeholder="Type the password">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="select-departament">Departament: </label> <?php //? Departamento?>
                                        <select name="departament" id="select-departament" class="form-control">
                                            <option value="" disabled selected>Select department</option>
                                            <option value="">..</option>
                                            <option value="">..</option>
                                            <option value="">..</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="select-subarea">Subarea: </label> <?php //? subarea?>
                                        <select name="subarea" id="select-subarea" class="form-control">
                                            <option value="" disabled selected>Select subarea</option>
                                            <option value="">..</option>
                                            <option value="">..</option>
                                            <option value="">..</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="privileges-input">Privileges: </label> <?php //? Privilegios?>
                                        <select name="departament" id="privileges-input" class="form-control">
                                            <option value="" disabled selected>Select privileges</option>
                                            <option value="">..</option>
                                            <option value="">..</option>
                                            <option value="">..</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label for="phone-input">Phone: </label> <?php //? Contraseña?>
                                        <input type="text" id="phone-input" class="form-control" name="phone" placeholder="Type the phone">
                                    </div>
                                </div>

                                <div class="buttons-container move-rigth">
                                    <button class="btn btn-danger"><i class="fa-solid fa-x"></i> Cancel</button>
                                    <button class="btn btn-success"><i class="fa-regular fa-floppy-disk"></i> Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php echo "$footer";?>
            <?php //? FOOTER?>

        </div>

    <?php //? Cargar js?>
    <?php echo "$SubMenu_js";?>
</body>
</html>