<?php

header('Content-Type: application/json');

require("Connection.php");

$connection= returnConnection();

switch ($_GET['action']) {
    case 'list':
        $data = mysqli_query($connection, "select
        idEvent as id,
        title,
        descriptionEvent as descripcion,
        startEvent as start,
        endEvent as end,
        textColor ,
        backgroundColor from events;");

        $result=mysqli_fetch_all($data, MYSQLI_ASSOC);
        echo json_encode($result);
        break;

    case 'add':
        $result = mysqli_query ($connection,
        "insert into events
        (title,
        descriptionEvent,
        startEvent,
        endEvent,
        textColor,
        backgroundColor) values
        ('$_POST[title]',
        '$_POST[descriptionEvent]',
        '$_POST[startEvent]',
        '$_POST[endEvent]',
        '$_POST[textColor]',
        '$_POST[backgroundColor]';
        )");
        echo json_encode($result);
        break;

    case 'modify':
      "update events set
        (title = ('$_POST[title]',
        descriptionEvent = '$_POST[descriptionEvent]',
        startEvent = '$_POST[startEvent]',
        endEvent = '$_POST[endEvent]',
        textColor = '$_POST[textColor]',
        backgroundColor) = '$_POST[backgroundColor]'
        where idEvent = $_POST[idEvent];
        )";

        echo "Modify";
        break;

    case 'delete':
//        "delete from   where idEvent = $_POST[idEvent];";
        echo "Delete";
        break;
}

?>