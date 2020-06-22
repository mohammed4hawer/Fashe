<?php
include 'connect_db.php';

$id = $_GET['id'];

$delete_pro = "DELETE FROM product WHERE id = $id";
$conn->query($delete_pro);

header("location: ../product.php");
?>