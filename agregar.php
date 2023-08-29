<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $query = "INSERT INTO productos (nombre_producto, descripcion, precio) VALUES ('$nombre', '$descripcion', '$precio')";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>