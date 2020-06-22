<?php

include '../admin/function/connect_db.php';

$username = $_POST['usr_n'];
$comment = $conn->real_escape_string($_POST['usr_com']);
$pro_id = $_POST['pro_id'];

$date = date("Y-m-d h:m:s");


$add_comment = "INSERT INTO comments (name, pro_id, comment, post_date) VALUES ('$username', '$pro_id', '$comment', '$date') ";
$conn->query($add_comment);

echo "Your Comment Is Sent Successfully";

?>