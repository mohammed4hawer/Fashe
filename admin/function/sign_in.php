<?php 
session_start();

include 'connect_db.php';


$name = $_POST['email'];
$pass = $_POST['password'];

$select_admin = "SELECT * FROM admin WHERE admin_name = '$name' OR admin_email = '$name' AND password_admin = '$pass'";
$result_admin = $conn ->query($select_admin);
$row_admin = $result_admin ->fetch_assoc();

$username = $row_admin['admin_name'];
$img = $row_admin['img_admin'];
$id = $row_admin['id'];
$priv_id = $row_admin['id_priv'];

if ($priv_id == 3) {

	header("location: ../login.php");
	exit();
}
$select_priv = "SELECT * FROM priv WHERE id = '$priv_id'";
$result_priv = $conn->query($select_priv);
$row_priv = $result_priv->fetch_assoc();
$priv_num = $row_priv['privilege_auth'];
$count = $result_admin-> num_rows;

 if($count > 0){

 	$_SESSION['email'] = $name;
 	$_SESSION['username'] = $username;
	$_SESSION['img'] = $img;
	$_SESSION['id_admin'] = $id;
	$_SESSION['id_priv']= $priv_num;
 	

 	header("location: ../index.php");

 }
 else
	{
		header("location: ../login.php");
	}



?>