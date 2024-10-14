<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "pirineus";
$dbname = "valoraciones_db";

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Recibir los datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$comentario = $_POST['comentario'];
$puntuacion = $_POST['puntuacion'];

// Insertar los datos en la base de datos
if (!empty($nombre_usuario) && !empty($comentario) && !empty($puntuacion)) {
$sql = "INSERT INTO valoraciones (nombre,comentario,puntuacion) VALUES
('$nombre_usuario','$comentario','$puntuacion')";

if ($conn->query($sql) === TRUE) {
    echo "Valoración guardad con éxito";
} else {
    echo"Error: ".$sql. "<br>".$conn->error;
}
} else {
    echo "Todos los campos son obligatorios. ";
}

// Cerrar la conexión
$conn->close();
?>
