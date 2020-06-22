<?php
session_start();
include '../../function/connect_db.php';

$user = $_POST['email'];
$password = $_POST['password'];

$select_user = "SELECT * FROM users WHERE name = '$user' OR email = '$user' AND password = '$password'";

	$result_user = $conn ->query($select_user);
	$row_user = $result_user ->fetch_assoc();
	
	$username = $row_user['name'];
	$user = $row_user['email'];
	$user_img = $row_user['img'];
	$user_id = $row_user['id'];
	$user_priv = $row_user['id_priv'];
	$count = $result_user -> num_rows;

	if ($count > 0) {
	
		$_SESSION['email'] = $user;
		$_SESSION['username'] = $username;
		$_SESSION['img'] = $user_img;
		$_SESSION['id_user'] = $user_id;
		$_SESSION['id_priv'] = $user_priv;
		
		header("location: ../../../index.php");
	 
	}
	else
	{
		header("location: ../login.php");
	}
?>