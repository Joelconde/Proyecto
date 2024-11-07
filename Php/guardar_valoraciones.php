<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//include 'conexion.php';

//Conectar a la base de datos
$servername = "127.0.0.1";
$username = "user";
$password = "@Mvm2016";
$dbname = "valoraciones_db";

// Crear la conexión
$conn = mysqli_connect("127.0.0.1", "user", "@Mvm2016", "valoraciones_db");

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Recibir los datos del formulario y escaparlos para evitar errores SQL.
if (!empty($_POST['nombre_usuario']) && !empty($_POST['comentario']) &&
!empty($_POST['puntuacion'])) {
    $nombre_usuario = $_POST['nombre_usuario'];
    $comentario = $_POST['comentario'];
    $puntuacion = $_POST['puntuacion'];
}

// Insertar los datos en la base de datos
if (!empty($nombre_usuario) && !empty($comentario) && !empty($puntuacion)) {
$sql = "INSERT INTO valoraciones (nombre,comentario,puntuacion) VALUES
('$nombre_usuario','$comentario','$puntuacion')";

if (mysqli_query($conn, $sql)) {
    echo "Valoración guardad con éxito";
} else {
    echo"Error: ".$sql. "<br>". mysqli_error($conn);
}
} else {
    echo "Todos los campos son obligatorios. ";
}

// Cerrar la conexión
mysqli_close($conn);    
?>
