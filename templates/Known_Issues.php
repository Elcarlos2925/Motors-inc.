<?php
    include '../home/index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../static/assets/icons/house-door-fill.svg" type="image/svg+xml">
    <link rel="stylesheet" href="../static/assets/fontawesome-free-6.5.1-web/css/all.min.css">
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../static/css/Known_Issues.css">


    <title>Known Issues</title>
</head>
<body>

    <!-- CONTENEDOR PRINCIAL-->
    <div class="main-container"> 
    
        <!--HEADER-->
        <?php echo "$header";?>


        <!--SIDEBAR-->
        <?php echo "$sidebar";?>
        <!--CONTENDIO-->
        <div class="content-container">
             <div class="title-container">
                <h1>Known Issues</h1>
            </div>
            <!--KNOWN ISSUES-->
            <div class="known-issues-container">
                <h2>Search</h2>
                <div class="known-issues">
                    <div class="known-issues-search">
                       <!--?Formulario Buscar-->
                       <form action='/buscar' method='get'>
                       <button class='Search-button' type='submit'><i class='fa-solid fa-magnifying-glass'></i></button>
                       <input id='Search-input' class='Search-input' type='search' name='Search' placeholder='Type your keywords here'>
                       </form>
                    </div>
                </div>
                
                <div class="icon-search">
                    <i class='fa-solid fa-magnifying-glass'></i>
                    <!--contenido-->
                </div>
            </div>  
        </div>

        <!--FOOTER-->
        <?php echo "$footer";?>
    </div>

    
</body>
</html>