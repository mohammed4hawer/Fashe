<?php
include '../admin/function/connect_db.php';

$usr_id = $_POST['user'];
$cart_id = $_POST['id_cart'];

$delete_item = "DELETE FROM cart WHERE pro_id= $cart_id AND user_id= $usr_id";

$conn->query($delete_item);

?>