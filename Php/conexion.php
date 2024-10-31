<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "valoraciones_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexion fallida: ". $conn->connect_error);
}
?>