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
    <title>iFrame</title>
    <?php echo "$iFrame_icon"; ?>
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $iFrame_css $Table_css";?>
</head>
<body>
    <div class="main-container">
        <?php //? HEADER?>
        <?php echo "$header";?>
        <?php //? SIDEBAR?>
        <?php echo "$sidebar";?>
        <?php //? CONTENIDO?>
        <div class="content-container">
            <div class="title-container"><?php //? TITULO?>
                <h1>iFrame</h1>
            </div>
            <div class="iFrame-container"><?php //? Contenido principal?>
                
            </div>
        </div>


        <?php //? FOOTER?>
        <?php echo "$footer";?>
    </div>
    <?php //? Cargar js?>
    <?php echo "$SubMenu_js";?>
</body>
</html>