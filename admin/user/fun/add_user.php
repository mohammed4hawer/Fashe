<?php
session_start();

if(isset($_POST['submit'])){

	include 'connect_db.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$priv = $_POST['priv'];

	
	$img_name = $_FILES['img']['name'];
	$img_temp = $_FILES['img']['tmp_name'];
	if ($_FILES['img']['error'] == 0) {
		$extarray = array("jpg","png", "gif","tiff", "jfif");
		//$img = explode(".", $img_name);
		//$ext = end($img);
		//echo $ext;
		$ext = pathinfo($img_name, PATHINFO_EXTENSION);
		if (in_array($ext, $extarray)) {
			if ($_FILES['img']['size'] <= 5000000) {
				$new_name = md5(rand()).".".$ext;
				move_uploaded_file($img_temp, "../images/$new_name");

			}
		}
	}


	$insert_user = "INSERT INTO users (name , password , email, img, id_priv) VALUES('$username','$password','$email','$img_name', '$priv')";
    $conn->query($insert_user);
	$new_id = $conn ->insert_id;
	 $_SESSION['id_user']= $new_id;
    
	header("location: ../../index.php");

}

?>