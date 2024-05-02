<?php
include("Connection.php");
$connection = returnConnection();

$username = $_GET['username'];
$sql = "SELECT * FROM user WHERE username = '$username'";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["idUser"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["subarea"] . "</td>";
        echo "<td>" . $row["role"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td> Opciones </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No se encontraron usuarios.</td></tr>";
}
?>
