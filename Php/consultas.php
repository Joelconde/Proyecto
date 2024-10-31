<?php
include 'guardar_valoraciones.php';

// Insertar datos 
$sql = "INSERT INTO valoraciones (nombre, comentario, puntuacion) VALUES ('iker','tope','3')";
if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado";
} else {
    echo "Error: " .$sql. "<br>" .$conn->error;
}