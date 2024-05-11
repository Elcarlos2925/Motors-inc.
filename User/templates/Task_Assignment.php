<?php
    include '../home/index.php';
    include '../home/scripts.php';
    include '../home/icons.php';
    include '../home/ConnectionDB/task_assignment.php';
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
                <div class="go-to-calendar-container">
                    <a href="<?php echo $Calendar_Events;?>" class="btn btn-primary btn-go-to-calendar float-right"><i class="icono"></i>Go to Calendar</a>
                </div>
                <div class="table-container">
                    <table class="table table-secondary table-hover">
                        <thead>
                            <tr>
                                <td>Task</td><!--id-->
                                <td>Details</td><!--DescriptionEvent-->
                                <td>Assigned to</td><!--title-->
                                <td>Start Date</td><!--StartDate-->
                                <td>End Date</td><!--EndDate-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php TaskAssignment($connection);?>
                        </tbody>
                    </table>
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