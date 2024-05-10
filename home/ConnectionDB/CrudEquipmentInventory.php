<?php

header('Content-Type: application/json');

require("Connection.php");

$connection = returnConnection();

switch ($_GET['action']) {
    case 'list':
        $data = mysqli_query($connection, "SELECT
        name,
        hostName,
        ipAddress,
        classification,
        location,
        department,
        assignedTo,
        trademark,
        model,
        cpu,
        hddSize,
        ramSize,
        serviceTag,
        serialNumber FROM equipmentInventory;");

        $result = mysqli_fetch_all($data, MYSQLI_ASSOC);
        echo json_encode($result);
        break;

    case 'add':
        $result = mysqli_query($connection,
            "INSERT INTO equipmentInventory
            (`name`,
            hostName,
            ipAdress,
            classification,
            `location`,
            department,
            assignedTo,
            trademark,
            model,
            cpu,
            hddSize,
            ramSize,
            serviceTag,
            serialNumber) VALUES
            ('$_POST[name]',
            '$_POST[hostName]',
            '$_POST[ipAdress]',
            '$_POST[classification]',
            '$_POST[location]',
            '$_POST[department]',
            '$_POST[assignedTo]',
            '$_POST[trademark]',
            '$_POST[model]',
            '$_POST[cpu]',
            '$_POST[hddSize]',
            '$_POST[ramSize]',
            '$_POST[serviceTag]',
            '$_POST[serialNumber]');");
        echo json_encode($result);
        break;

    case 'modify':
       $result = mysqli_query($connection,
            "UPDATE equipmentInventory SET
            name = '$_POST[name]',
            hostName = '$_POST[hostName]',
            ipAddress = '$_POST[ipAddress]',
            classification = '$_POST[classification]',
            location = '$_POST[location]',
            department = '$_POST[department]',
            assignedTo = '$_POST[assignedTo]',
            trademark = '$_POST[trademark]',
            model = '$_POST[model]',
            cpu = '$_POST[cpu]',
            hddSize = '$_POST[hddSize]',
            ramSize = '$_POST[ramSize]',
            serviceTag = '$_POST[serviceTag]',
            serialNumber = '$_POST[serialNumber]'
            WHERE id = $_POST[id]");
        echo json_encode($result);
        break;

    case 'delete':
       $result = mysqli_query($connection, "DELETE FROM equipmentInventory WHERE id = $_POST[id]");
       echo json_encode($result);
        break;
}
?>