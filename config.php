<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tiendaalejo";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
} else {
    echo "conectado";
}
?>