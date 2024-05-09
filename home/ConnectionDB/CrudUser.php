<?php

header('Content-Type: application/json');

require("Connection.php");

$connection = returnConnection();

switch ($_GET['action']) {
    case 'list':
        $data = mysqli_query($connection, "SELECT
        idUser as id,
        username,
        name,
        subarea,
        role,
        phone FROM user;");

        $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
        echo json_encode($result);
        break;

    case 'add':
        $result = mysqli_query($connection,
            "INSERT INTO `user`
            (`idUser`,
            `username`,
            `name`,
            `subarea`,
            `role`,
            `phone`,
            `password`) VALUES
            ('$_POST[idUser]',
            '$_POST[username]',
            '$_POST[name]',
            '$_POST[subarea]',
            '$_POST[role]',
            '$_POST[phone]',
            '$_POST[password]');");
        echo json_encode($result);
        break;

    case 'modify':
       $result = mysqli_query($connection,
            "UPDATE user SET
            `username` = '$_POST[username]',
            `name` = '$_POST[name]',
            `subarea` = '$_POST[subarea]',
            `role` = '$_POST[role]',
            `phone` = '$_POST[phone]'
            WHERE `idUser` = '$_POST[idUser]';");
        echo json_encode($result);
        break;

    case 'delete':
       $result = mysqli_query($connection, "DELETE FROM user WHERE idUser = $_POST[idUser]");
       echo json_encode($result);
        break;
}
?>
