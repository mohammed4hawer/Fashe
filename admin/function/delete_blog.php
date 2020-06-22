<?php 
include 'connect_db.php';

$id = $_GET['id'];
$delete_blog = "DELETE FROM blog WHERE id = $id";
$conn->query($delete_blog);

header("location: ../blog.php");

?>