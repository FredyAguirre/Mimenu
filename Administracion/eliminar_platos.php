<?php
include 'conexion.php';

$id = $_GET['id'];
$sql = "DELETE FROM platos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>
