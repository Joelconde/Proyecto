<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$servername = "127.0.0.1";
$username = "user";
$password = "@Mvm2016";
$dbname = "valoraciones_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Supongamos que tienes una lógica de autenticación aquí
if ($_POST['username'] == 'user' && $_POST['password'] == 'pass') {
  echo "Inicio de sesión exitoso";
} else {
  echo "Nombre de usuario o contraseña incorrectos";
}

?>
