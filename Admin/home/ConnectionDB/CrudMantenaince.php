<?php

header('Content-Type: application/json');

require("Connection.php");

$connection = returnConnection();

switch ($_GET['action']) {
    case 'list':
        $data = mysqli_query($connection, "SELECT
        Title,
        Responsible,
        Activity,
        startDay,
        limitDay,
        Finished FROM ictMaintenaince;");

        $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
        echo json_encode($result);
        break;

    case 'add':
        $result = mysqli_query($connection,
            "INSERT INTO ictMaintenaince
            (Title,
            Responsible,
            Activity,
            startDay,
            limitDay,
            Finished) VALUES
            ('$_POST[Title]',
            '$_POST[Responsible]',
            '$_POST[Activity]',
            '$_POST[startDay]',
            '$_POST[limitDay]',
            '$_POST[Finished]');");
        echo json_encode($result);
        break;

    case 'modify':
       $result = mysqli_query($connection,
            "UPDATE ictMaintenaince SET
            Title = '$_POST[Title]',
            Responsible = '$_POST[Responsible]',
            Activity = '$_POST[Activity]',
            startDay = '$_POST[startDay]',
            limitDay = '$_POST[limitDay]',
            Finished = '$_POST[Finished]'
            WHERE id = $_POST[id]");
        echo json_encode($result);
        break;

    case 'delete':
       $result = mysqli_query($connection, "DELETE FROM ictMaintenaince WHERE id = $_POST[id]");
       echo json_encode($result);
        break;
}
?>
