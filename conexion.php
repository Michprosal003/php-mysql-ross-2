<?php
// Establecer la conexión a la base de datos MySQL
$conn = mysqli_connect("localhost", "root", "", "lightblue");

// Verificar si la conexión fue exitosa
if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}
?>
