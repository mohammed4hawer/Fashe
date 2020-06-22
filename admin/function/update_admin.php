<?php 
if(isset($_POST['submit'])){

    include 'connect_db.php';
    
	$id = $_POST['id'];
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

	if(!empty($img_name)){
		$update_image = "UPDATE admin SET img_admin = '$img_name' WHERE id = $id";
		$conn->query($update_image);

	}
	if(!empty($password)){
		$update_pass = "UPDATE admin SET password_admin = '$password' WHERE id = $id";
		$conn->query($update_pass);
	}

$update_admin = "UPDATE admin SET admin_name = '$username' , admin_email = '$email' , id_priv = '$priv'  WHERE id =  $id";

$conn->query($update_admin);

header("location: ../index.php");
 
	

}

?>