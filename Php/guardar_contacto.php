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
