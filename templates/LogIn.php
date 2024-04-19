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
    <?php echo ""; ?>
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Log_In_css $Bootstrap_4_6_0_css";?>
    <title>Log In</title>
</head>
<body>
    <div class="main-container">
        <form class="form-logIn">
            <img id='logo' src='../static/assets/img/logo.jpeg' width='200px'>
            <div class="form-group col-md-8 ">
                <label for="">User name:</label>
                <div class="form-row">
                    <input type="text" placeholder="user name" class="form-control">
                </div>                
                <label for="">Password:</label>
                <div class="form-row">
                    <input type="password" placeholder="passwoord" class="form-control">
                </div>
                <div class="form-row">
                    <button class="form-control btn-info">Log In</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>