<?php 
if(isset($_POST['submit'])){

include '../../function/connect_db.php';

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

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

    if(!empty($new_name)){
		$update_image = "UPDATE users SET img = '$new_name' WHERE id = $id";
		$conn->query($update_image);

	}
	if(!empty($password)){
		$update_pass = "UPDATE users SET password = '$pass' WHERE id = $id";
		$conn->query($update_pass);
	}

$update_user = "UPDATE users SET name = '$username' , email = '$email'  WHERE id =  $id";

$conn->query($update_user);


 header("location: ../index.php");  

}

?>