
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM productos WHERE id = $id";
    mysqli_query($conn, $query);

    header("Location: index.php");
}
?>