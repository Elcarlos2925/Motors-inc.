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
    <?php echo "$Know_Issues_icon"; ?>
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $Know_Issues_css";?>

    <title>Known Issues</title>
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
                <h1>Known Issues</h1>
            </div>
            <?php //?KNOWN ISSUES?>
            <div class="known-issues-container">
                <h2>Search</h2>
                <div class="known-issues">
                    <div class="known-issues-search">
                       <?php //??Formulario Buscar?>
                       <form action='/buscar' method='get'>
                            <button class='Search-button' type='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                            <input id='Search-input' class='Search-input' type='search' name='Search' placeholder='Type your keywords here'>
                       </form>
                    </div>
                </div>

                <div class="icon-search">
                    <i class='fa-solid fa-magnifying-glass'></i>
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