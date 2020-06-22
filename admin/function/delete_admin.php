<?php 
include 'connect_db.php';

$id = $_GET['id'];
$delete_admin = "DELETE FROM admin WHERE id = $id";
$conn->query($delete_admin);

header("location: ../index.php");

?>