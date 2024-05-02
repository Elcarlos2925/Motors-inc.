<?php
include '../home/index.php';
include '../home/scripts.php';
include '../home/icons.php';
include '../home/ConnectionDB/edit_user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "$Edit_User_icon"; ?>
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $Edit_User_css $Bootstrap_4_6_0_css";?>
    <title>Edit User</title>
</head>
<body>

    <?php //?Contenedor Principal?>
    <div class="main-container">

        <?php //? HEADER?>
        <?php echo "$header";?>
        <?php //? SIDEBAR?>
        <?php echo "$sidebar";?>

        <?php //? CONTENIDO?>
        <div class="content-container">
            <div class="title-container">
                <h1>Edit User</h1>
            </div>
            <?php //?Edit user?>
            <div class="edit-user-container">
                <div class="search-container">
                    <form action='../home/ConnectionDB/search_edit_user.php' method='get' class="Search-User" id="search-form">
                        <button class='Search-button' id="Search-user-button" type='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                        <input id='Search-input' class='Search-input' type='search' name='username' placeholder='Search user here...'>
                    </form>
                </div>
                <div class="table-edit-user">
                <div class="table-container">
                    <table class="table table-secondary table-hover">
                        <thead>
                            <tr>
                                <td>Number</td>
                                <td>Username</td>
                                <td>Name</td>
                                <td>Subarea</td>
                                <td>Role</td>
                                <td>Phone</td>
                                <td>Options</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php EditUser($connection)?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>

        <?php //? FOOTER?>
        <?php echo "$footer";?>
    </div>

    <?php //? Cargar js?>
    <?php echo "$SubMenu_js $Back_Button_js";?>
</body>
</html>