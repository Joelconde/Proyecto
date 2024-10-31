<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include 'conexion.php';
include 'guardar_valoraciones.php';

// Insertar datos 
$sql = "INSERT INTO valoraciones (nombre, comentario, puntuacion) VALUES ('iker','tope','3')";
if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado";
} else {
    echo "Error: " .$sql. "<br>" .$conn->error;
}


// Leer datos
$sql = "SELECT nombre, comentario, puntuacion FROM valoraciones";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - nombre: " . $row["nombre"]. " - comentario: " . $row["comentario"]. " - puntuacion: " . $row["puntuacion"]. "<br>";
    }
} else {
    echo "0 resultado";
}

$conn->close();
?>