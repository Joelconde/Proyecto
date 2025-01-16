<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

include 'conexion.php';

// Conectar a la base de datos
$servername = "127.0.0.1";
$username = "izeta3php";
$password = "Camello@33";
$dbname = "valoraciones_db";

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT); // Hasheamos la contraseña para mayor seguridad

// Check if the email already exists
$sql_check = "SELECT * FROM usuarios WHERE correo='$correo'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    echo "El correo electrónico ya está registrado.";
} else {
    $sql = "INSERT INTO usuarios (usuario, correo, contraseña) VALUES ('$usuario', '$correo', '$contraseña')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>