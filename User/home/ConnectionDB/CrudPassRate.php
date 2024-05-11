<?php

header('Content-Type: application/json');

require("Connection.php");

$connection = returnConnection();

switch ($_GET['action']) {
    case 'list':
        $data = mysqli_query($connection, "SELECT
        model,
        total_production,
        fr,
        ok,
        fr_percentage,
        ok_percentage FROM passRateToday;");

        $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
        echo json_encode($result);
        break;

    case 'add':
        $result = mysqli_query($connection,
            "INSERT INTO passRateToday
            (model,
            total_production,
            fr,
            ok,
            fr_percentage,
            ok_percentage) VALUES
            ('$_POST[model]',
            '$_POST[total_production]',
            '$_POST[fr]',
            '$_POST[ok]',
            '$_POST[fr_percentage]',
            '$_POST[ok_percentage]');");
        echo json_encode($result);
        break;

    case 'modify':
       $result = mysqli_query($connection,
            "UPDATE passRateToday SET
            model = '$_POST[model]',
            total_production = '$_POST[total_production]',
            fr = '$_POST[fr]',
            ok = '$_POST[ok]',
            fr_percentage = '$_POST[fr_percentage]',
            ok_percentage = '$_POST[ok_percentage]'
            WHERE id = $_POST[id]");
        echo json_encode($result);
        break;

    case 'delete':
       $result = mysqli_query($connection, "DELETE FROM passRateToday WHERE id = $_POST[id]");
       echo json_encode($result);
        break;
}
?>