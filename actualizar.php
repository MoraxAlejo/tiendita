
<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];

    $query = "UPDATE productos SET nombre_producto='$nombre', descripcion='$descripcion', precio='$precio' WHERE id='$id'";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>