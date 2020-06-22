<?php
include 'connect_db.php';
$id = $_GET['id'];
$delete_msg = "DELETE FROM contact_msg WHERE id = $id";
$conn->query($delete_msg);

header("location: ../message.php");
?>