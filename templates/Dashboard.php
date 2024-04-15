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
                            <?php //?Icono?>
                            <div class="icon">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <?php //?Titulo?>
                            <h2>ALL LINES GENERAL PASS RATE</h2>
                        </div>
                        <?php //?Status?>
                        <p class="all-lines-general-pass-rate">90%</p>
                        <?php //?more?>
                        <a href="">more <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                    </div>
                    <div class="view">
                        <div class="icon-title">
                            <?php //?Icono?>
                            <div class="icon">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <?php //?Titulo?>
                            <h2>PENDING ASSIGNMENTS</h2>
                        </div>
                        <?php //?Status?>
                        <p class="pending-assignments">1</p>
                        <?php //?more?>
                        <a href="">more <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                    </div>
                    <div class="view">
                        <div class="icon-title">
                            <?php //?Icono?>
                            <div class="icon">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <?php //?Titulo?>
                            <h2>PENDING MAINTENANCE THIS MONTH</h2>
                        </div>
                        <?php //?Status?>
                        <p class="pending-maintenance-this-month">0</p>
                        <?php //?more?>
                        <a href="">more <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                    </div>
                    <div class="view">
                        <div class="icon-title">
                            <?php //?Icono?>
                            <div class="icon">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <?php //?Titulo?>
                            <h2>MACHINES NEARLY FULL STORAGE</h2>
                        </div>
                        <?php //?Status?>
                        <p class="machines-nearly-full-storage">2</p>
                        <?php //?more?>
                        <a href="">more <i class="fa-solid fa-arrow-right fa-xs"></i></a>
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
                                <td>Created At</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php//!Aqui va el cuerpo de la tabla?>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                            <tr>
                                <td>Undefined</td>
                                <td>Undefined</td>
                                <td>Undefined</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php //TODO: FOOTER?>
        <?php echo "$footer";?>
    </div>

    <?php //? Cargar js?>
    <?php echo "$SubMenu_js";?>
</body>
</html>