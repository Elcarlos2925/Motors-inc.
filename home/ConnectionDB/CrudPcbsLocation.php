<?php

header('Content-Type: application/json');

require("Connection.php");

$connection = returnConnection();

switch ($_GET['action']) {
    case 'list':
        $data = mysqli_query($connection, "SELECT
        client,
        models,
        department,
        expirationVerification,
        status,
        tipPcbTypele,
        position FROM pcbsLocation;");

        $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
        echo json_encode($result);
        break;

    case 'add':
        $result = mysqli_query($connection,
            "INSERT INTO pcbsLocation
            (client,
            models,
            department,
            expirationVerification,
            status,
            tipPcbTypele,
            position) VALUES
            ('$_POST[client]',
            '$_POST[models]',
            '$_POST[department]',
            '$_POST[expirationVerification]',
            '$_POST[status]',
            '$_POST[tipPcbTypele]',
            '$_POST[position]');");
        echo json_encode($result);
        break;

    case 'modify':
       $result = mysqli_query($connection,
            "UPDATE pcbsLocation SET
            client = '$_POST[client]',
            models = '$_POST[models]',
            department = '$_POST[department]',
            expirationVerification = '$_POST[expirationVerification]',
            status = '$_POST[status]',
            tipPcbTypele = '$_POST[tipPcbTypele]',
            position = '$_POST[position]'
            WHERE id = $_POST[id]");
        echo json_encode($result);
        break;

    case 'delete':
       $result = mysqli_query($connection, "DELETE FROM pcbsLocation WHERE id = $_POST[id]");
       echo json_encode($result);
        break;
}
?>