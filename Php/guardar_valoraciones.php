<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "pirineus";
$dbname = "valoraciones_db";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: ".$conn->connect_error);
}

// Recibir los daots del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$comentario = $_POST['comentario'];
$puntuacion = $_POST['puntuacion'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO valoraciones (nombre,comentario,puntuacion) VALUES
('$nombre_usuario','$comentario','$puntuacion')";

if ($conn->query($sql) === TRUE) {
    echo "Valoración guardad con éxito";
} else {
    echo"Error: ".$sql. "<br>".$conn->error;
}

// Cerrar la conexión
$conn->close();
?>
