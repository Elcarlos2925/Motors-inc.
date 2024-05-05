<?php
    include '../home/index.php';
    include '../home/scripts.php';
    include '../home/ConnectionDB/dashboard.php';
    include '../home/icons.php';
    $pendingAssigment = countPending($connection);
    $percentage_pass_rate = passRatePercentage($connection);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "$Dashboard_icon"; ?>
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $Dashboard_css $Bootstrap_4_6_0_css";?>
    <title>Dashboard</title>
</head>
<body>

    <div class="main-container">
        <?php //?Contenedor Principal?>

        <?php //TODO: HEADER?>
        <?php echo "$header";?>
        <?php //TODO: SIDEBAR?>
        <?php echo "$sidebar";?>

        <div class="content-container">
            <div class="title-container">
                <h1>Dashboard</h1>
            </div>
            <?php //?Quick views?>
            <div class="quick-view-container">
                <h2>Quick View</h2>
                <div class="quick-view">
                    <div class="view">
                        <div class="icon-title">
                            <?php //?Titulo?>
                            <h2>ALL LINES GENERAL PASS RATE</h2>
                        </div>
                        <?php //?Status?>
                        <p class="all-lines-general-pass-rate"><?php echo "$percentage_pass_rate"; ?>%</p>
                        <?php //?more?>
                        <a href="<?php echo "$Pass_Rate"; ?>">more <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                    </div>
                    <div class="view">
                        <div class="icon-title">
                            <?php //?Titulo?>
                            <h2>PENDING ASSIGNMENTS</h2>
                        </div>
                        <?php //?Status?>
                        <p class="pending-assignments"><?php echo "$pendingAssigment";?></p>
                        <?php //?more?>
                        <a href="<?php echo "$Task_Assignment"; ?>">more <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                    </div>
                    <div class="view">
                        <div class="icon-title">
                            <?php //?Titulo?>
                            <h2>PENDING MAINTENANCE THIS MONTH</h2>
                        </div>
                        <?php //?Status?>
                        <p class="pending-maintenance-this-month">0</p>
                        <?php //?more?>
                        <a href="<?php echo "$Mantenaince"; ?>">more <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                    </div>
                </div>
            </div>
            <?php //?Last Assignments?>
            <div class="Last-assigments-container">
                <h2>Last Assignment</h2>
                <div class="table-container">
                    <table class="table table-secondary table-hover">
                        <thead>
                            <tr>
                                <td>Task</td>
                                <td>Details</td>
                                <td>Assignment to</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php LastAssigment($connection);?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php //TODO: FOOTER?>
        <?php echo "$footer";?>
    </div>

    <?php //? Cargar js?>
    <?php echo "$SubMenu_js $Back_Button_js";?>
</body>
</html>