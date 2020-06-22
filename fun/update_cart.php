<?php
include '../admin/function/connect_db.php';

$user = $_POST['user_id'];
$cart_id = $_POST['cart_id'];
$count_number = $_POST['cart_num'];

$update_cart = "UPDATE `cart` SET quantity = '$count_number' WHERE pro_id = '$cart_id' AND user_id = '$user'";

$conn->query($update_cart);
//echo $conn->error;

?>