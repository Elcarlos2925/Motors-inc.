<?php
    include '../home/index.php';
    include '../home/scripts.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/assets/icons/house-door-fill.svg" type="image/svg+xml">
    <!--? Cargar Css-->
    <?php echo "$FontAwesome_css $Style_css $Dashboard_css $Table_css";?>
    <title>Dashboard</title>
</head>
<body>
    
    <div class="main-container">
        <!--?Contenedor Principal-->

        <!--TODO: HEADER-->
        <?php echo "$header";?>
        
        
        <!--TODO: SIDEBAR-->
        <?php echo "$sidebar";?>
        

        <div class="content-container">
            <!--!aqui poner contenido por pagina-->
            <div class="title-container">
                <h1>Dashboard</h1>
            </div>
            <!--?Quick views-->
            <div class="quick-view-container">
                <h2>Quick View</h2>
                <div class="quick-view">
                    <div class="view">
                        <div class="icon-title">
                            <!--?Icono-->
                            <div class="icon">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <!--?Titulo-->
                            <h2>ALL LINES GENERAL PASS RATE</h2>
                        </div>
                        <!--?Status-->
                        <p class="all-lines-general-pass-rate">90%</p>
                        <!--?more-->
                        <a href="">more <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                    </div>
                    <div class="view">
                        <div class="icon-title">
                            <!--?Icono-->
                            <div class="icon">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <!--?Titulo-->
                            <h2>PENDING ASSIGNMENTS</h2>
                        </div>
                        <!--?Status-->
                        <p class="pending-assignments">1</p>
                        <!--?more-->
                        <a href="">more <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                    </div>
                    <div class="view">
                        <div class="icon-title">
                            <!--?Icono-->
                            <div class="icon">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <!--?Titulo-->
                            <h2>PENDING MAINTENANCE THIS MONTH</h2>
                        </div>
                        <!--?Status-->
                        <p class="pending-maintenance-this-month">0</p>
                        <!--?more-->
                        <a href="">more <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                    </div>
                    <div class="view">
                        <div class="icon-title">
                            <!--?Icono-->
                            <div class="icon">
                                <i class="fa-solid fa-gear"></i>
                            </div>
                            <!--?Titulo-->
                            <h2>MACHINES NEARLY FULL STORAGE</h2>
                        </div>
                        <!--?Status-->
                        <p class="machines-nearly-full-storage">2</p>
                        <!--?more-->
                        <a href="">more <i class="fa-solid fa-arrow-right fa-xs"></i></a>
                    </div>
                </div>
            </div>
            <!--?Last Assignments-->
            <div class="Last-assigments-container">
                <h2>Last Assignment</h2>
                <table class="table table-secondary table-hover">
                    <thead>
                        <tr>
                            <td>Task</td>
                            <td>Details</td>
                            <td>Created At</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!--!Aqui va el cuerpo de la tabla-->
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
                <!--TODO: -->
            </div>
        </div>

        <!--TODO: FOOTER-->
        <?php echo "$footer";?>
        
    </div>

    <!--? Cargar js-->
    <?php echo "$SubMenu_js";?>
</body>
</html>