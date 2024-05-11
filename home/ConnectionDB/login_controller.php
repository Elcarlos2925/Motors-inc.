<?php
// Iniciar la sesión (asegúrate de hacer esto al principio de tus archivos PHP)
session_start();

// Llamar conexión a la base de datos
require("Connection.php");

$connection = returnConnection();


$message_error = '';
$uservalid = 0;
$role = '';

if (isset($_POST['LogIn'])) {
    // Recuperar usuario y contraseña
    $ruser = $connection->real_escape_string($_POST['username']);
    $rpass = $connection->real_escape_string(($_POST['password']));

    // consulta SQL
    $consult = "SELECT `name`, `password`, `role` FROM `user` WHERE `username` = '$ruser' ";

    // Verificar las credenciales
    if ($result = $connection->query($consult)) {
        $message_error = '';
        while ($row = $result->fetch_array()) {
            $nameUser = $row["name"];
            $passwordvalid = $row["password"];
            $role = $row["role"];

            if ($rpass == $passwordvalid) {
                // Almacenar el nombre del usuario en la sesión
                $_SESSION['login'] = true;
                $_SESSION['username'] = $nameUser;
                $_SESSION['role'] = $role;

                if ($role == "Admin"){
                    header("location:../Admin/templates/Dashboard.php");
                }elseif ($role == "User"){
                    header("location:../User/templates/Dashboard.php");
                }else{
                    $message_error .= "<div class='alert alert-danger'>
                        <strong>Query Error</strong> Please contact support.
                    </div>";
                }

                // Redirigir a la página de inicio
                $uservalid = 1;
            } else {
                $message_error .= "<div class='alert alert-danger'>
                                        <strong>Password or Username Incorrect.</strong>
                                    </div>";
            }
        }
        $result->close();
    } else {
        $message_error .= "<div class='alert alert-danger'>
                                <strong>Query Error</strong> Please contact support.
                            </div>";
    }
    $connection->close();
}
?>