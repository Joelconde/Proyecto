<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "user";
$password = "@Mvm2016";
$dbname = "valoraciones_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexion fallida: ". mysqli_connect_error());
}

echo "Conexion Correcta";
?>