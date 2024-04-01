<?php
    include '../home/index.php';
    include '../home/scripts.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php //? Cargar CSS ?>
    <?php echo "$FontAwesome_css $Style_css $Add_User_css $Table_css";?>
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
                            <form action="/agregar" method="">
                                <div class="centrar-cochinero-de-alexis">
                                    <label for="name">Name: </label> <?php //? Nombre?> 
                                    <input type="text" id="name-input" class="name-input" name="name" placeholder="Type the name">
                                </div>
                                <div class="centrar-cochinero-de-alexis">
                                    <label for="name">Last Name: </label> <?php //? Apellido?>
                                    <input type="text" id="last-name-input" class="last-name-input" name="last-name" placeholder="Type the surname">
                                </div>
                                <div class="centrar-cochinero-de-alexis">
                                    <label for="name">Username: </label><?php //? Usuario?>
                                    <input type="text" id="username-input" class="username-input" name="username" placeholder="Type the username">
                                </div>
                                <div class="centrar-cochinero-de-alexis">
                                    <label for="name">Employee Id: </label> <?php //? Id de empleado?>
                                    <input type="text" id="employeeid-input" class="employeeid-input" name="employeeid" placeholder="Type the employee Id">
                                </div>
                                <div class="centrar-cochinero-de-alexis">
                                    <label for="name">Password: </label> <?php //? Contraseña?>
                                    <input type="password" id="name-input" class="name-input" name="name" placeholder="Type the password">
                                </div>
                                <div class="centrar-cochinero-de-alexis">
                                    <label for="name">Departament: </label> <?php //? Departamento?>
                                    <select name="departament" id="select-departament">
                                </div>
                                    <option value="">Select department</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                </select>
                                <br>
                                <label for="name">Subarea: </label> <?php //? subarea?>
                                <select name="subarea" id="select-subarea">
                                    <option value="">Select subarea</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                </select>
                                <br>
                                <label for="name">Privileges: </label> <?php //? Privilegios?>
                                <select name="departament" id="select-departament">
                                    <option value="">Select privileges</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                    <option value="">..</option>
                                </select>
                                <br>
                                <label for="name">Phone: </label> <?php //? Contraseña?>
                                <input type="text" id="phone-input" class="phone-input" name="phone" placeholder="Type the phone">
                                
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