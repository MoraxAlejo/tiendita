<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM productos WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Producto</title>
</head>
<body>
    <h2>Editar Producto</h2>
    <form method="post" action="actualizar.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nombre: <input type="text" name="nombre" value="<?php echo $row['nombre_producto']; ?>"><br>
        Descripción: <input type="text" name="descripcion" value="<?php echo $row['descripcion']; ?>"><br>
        Precio: <input type="text" name="precio" value="<?php echo $row['precio']; ?>"><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>