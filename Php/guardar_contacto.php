<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "valoraciones_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " .$conn->connect_error);
}

// Recibir los datos de contactos y sacarlos para evitar errores.
$nombre = $conn->real_escape_string($conn, $_POST['nombre']);
$correo = $conn->real_escape_string($conn, $_POST['correo']);
$mensaje = $conn->real_escape_string($conn, $_POST['mensaje']);

// Insertar los datos en la base de datos
$sql = "INSERT INTO contacto (nombre, correo, mensaje) VALUES ('$nombre','$correo','$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Contacto guardado con éxito";
} else {
    echo "Error: " .$sql. "<br>" .$conn->error;
}

$conn->close();
?>