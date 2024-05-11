<?php
include '../home/scripts.php';
include '../home/icons.php';
include '../home/ConnectionDB/login_controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "$User_icon"; ?>
    <?php //? Cargar Css?>
    <?php echo "$FontAwesome_css $Style_css $Log_In_css $Bootstrap_4_6_0_css";?>
    <title>Log In</title>
</head>
<body>
    <div class="mensaje-error">
            <?php echo "$message_error";?>
   </div>
    <form class="form-logIn" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <img id='logo' src='../static/assets/img/logo.jpeg' width='200px'>
        <div class="form-group col-md-8 ">
            <label for="">User name:</label>
            <div class="form-row">
                <input type="text" placeholder="user name" class="form-control" name="username" id="username">
            </div>                
            <label for="">Password:</label>
            <div class="form-row password-container">
                <input type="password" placeholder="password" class="form-control password-input" name="password" id="password" autocomplete="current-password">
                <span class="eye-icon"><i class="far fa-eye"></i></span>
            </div>
            <div class="form-row">
                <button class="form-control btn-info" type="submit" name="LogIn">Log In</button>
            </div>
        </div>
    </form>

    <script>
        document.querySelector('.eye-icon').addEventListener('click', function() {
            var passwordField = document.querySelector('#password'); // Seleccionar el campo de contraseña directamente por su ID
            this.classList.toggle('active');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                this.innerHTML = '<i class="far fa-eye-slash"></i>';
            } else {
                passwordField.type = 'password';
                this.innerHTML = '<i class="far fa-eye"></i>';
            }
        });
    </script>
</body>
</html>