<?php 

include '../admin/function/connect_db.php'; 

$name = $_POST['name_x'];
$phone = $_POST['phone_x'];
$email = $_POST['email_x'];
$message = $_POST['message_x'];
$date = date("Y-m-d h:m:s");



$insert_message = "INSERT INTO contact_msg (name, phone, email, message, msg_date) VALUES ('$name','$phone','$email','$message','$date')";
$conn->query($insert_message);

echo "Your Message Is Sent Successfully";

?>