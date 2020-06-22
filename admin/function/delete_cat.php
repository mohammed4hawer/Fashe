<?php 
include 'connect_db.php';
$id = $_GET['id'];
$delete_cat = "DELETE FROM cate WHERE id = $id";
$conn->query($delete_cat);

header("location: ../cat.php");

?>