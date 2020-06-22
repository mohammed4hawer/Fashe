<?php 
if(isset($_POST['submit'])){

    include 'connect_db.php';
    
	$name = $_POST['name'];
	$status = $_POST['status'];
	
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
	
	
	$insert_cat = "INSERT INTO cate (cat_name, cat_status, cat_img) VALUES('$name','$status', '$new_name')";
    $conn->query($insert_cat);
    
	header("location: ../cat.php");

	

}

?>