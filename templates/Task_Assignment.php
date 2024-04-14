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
    <?php echo "$Task_Assignment_icon"; ?>
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $Task_Assignment_css $Bootstrap_4_6_0_css";?>
    <title>Task Assignment</title>
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
                <h1>Task Assignment</h1>
            </div>
            <?php //?Task Assignment?>
            <div class="task-assignment-container">
                <table class="table table-secondary table-hover">
                    <thead>
                        <tr>
                            <td>Task</td><!--id-->
                            <td>Details</td><!--DescriptionEvent-->
                            <td>Assigned to</td><!--title-->
                            <td>Start Date</td><!--StartDate-->
                            <td>End Date</td><!--EndDate-->
                            <td>Options</td><!--editar, eliminar, cumplida-->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Desarrollar casos de uso</td>
                            <td>Odette Franco</td>
                            <td>2024-04-01 01:00:00</td>
                            <td>2024-04-01 23:59:59</td>
                            <td>
                                <button class="btn btn-success">Success</button>
                                <button class="btn btn-warning">Modify</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Revisar documentación</td>
                            <td>Karla Trillo</td>
                            <td>2024-04-02 00:00:01</td>
                            <td>2024-04-03 23:59:59</td>
                            <td>
                                <button class="btn btn-success">Success</button>
                                <button class="btn btn-warning">Modify</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Terminar Vistas Pendientes</td>
                            <td>Alexis Martinez</td>
                            <td>2024-04-09 12:10:00</td>
                            <td>2024-04-10 01:15:00</td>
                            <td>
                                <button class="btn btn-success">Success</button>
                                <button class="btn btn-warning">Modify</button>
                                <button class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <?php //? FOOTER?>
        <?php echo "$footer";?>
    </div>

    <?php //? Cargar js?>
    <?php echo "$SubMenu_js";?>
</body>
</html>