<?php
include("db_connection.php");

if(isset($_GET['Search'])) {
    $search = $_GET['Search'];
    
    $querySearchUser = "SELECT * FROM user WHERE username LIKE '%$search%'";
    
    $result = mysqli_query($connection, $querySearchUser);

    if($result) {
        if(mysqli_num_rows($result) > 0) {
            while($showResult = mysqli_fetch_array($result)) {
                echo "<tr class='highlight'>";
                echo "<td>" . $showResult['idUser'] . "</td>";
                echo "<td>" . $showResult['username'] . "</td>";
                echo "<td>" . $showResult['name'] . "</td>";
                echo "<td>" . $showResult['subarea'] . "</td>";
                echo "<td>" . $showResult['role'] . "</td>";
                echo "<td>" . $showResult['phone'] . "</td>";
                echo "<td>" . "
                    <button class='Edit-user-btn'>
                        <svg xmlns='../static/assets/fontawesome-free-6.5.1-web/svgs/regular/pen-to-square.svg' viewBox='0 0 512 512'>
                        <!-- SVG Code -->
                        </svg>
                    </button>
                    <button class='Delete-user-btn'>
                        <svg xmlns='../static/assets/fontawesome-free-6.5.1-web/svgs/regular/trash-can.svg' viewBox='0 0 512 512'>
                        <!-- SVG Code -->
                        </svg>
                    </button>
                    </td>
                " . "</td>";
                echo "</tr>";
            }
        } else {
            // No se encontraron resultados
            echo "<tr>
                <td colspan='7'>No se encontraron resultados</td>
            </tr>";
        }
    } else {
        // Error en la consulta
        echo "Error: " . mysqli_error($connection);
    }
} else {
    // No se ha enviado ninguna consulta de búsqueda
    echo "<tr>
        <td colspan='7'>Por favor, ingresa una consulta de búsqueda</td>
    </tr>";
}
?>