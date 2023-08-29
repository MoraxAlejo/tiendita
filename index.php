<!DOCTYPE html>
<html>
<head>
    <title>CRUD de Productos</title>
</head>
<body>
    <h1>CRUD de Productos</h1>

    <?php
    // Incluir archivo de configuración de la base de datos
    include 'config.php';

    // Mostrar la lista de productos existentes
    $query = "SELECT * FROM productos";
    $result = mysqli_query($conn, $query);
    ?>

    <h2>Lista de Productos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre_producto'] . "</td>";
            echo "<td>" . $row['descripcion'] . "</td>";
            echo "<td>" . $row['precio'] . "</td>";
            echo "<td><a href='editar.php?id=" . $row['id'] . "'>Editar</a> | <a href='eliminar.php?id=" . $row['id'] . "'>Eliminar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Agregar Producto</h2>
    <form method="post" action="agregar.php">
        Nombre: <input type="text" name="nombre"><br>
        Descripción: <input type="text" name="descripcion"><br>
        Precio: <input type="text" name="precio"><br>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>