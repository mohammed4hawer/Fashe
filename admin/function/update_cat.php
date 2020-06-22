<?php 
if(isset($_POST['submit'])){

    include 'connect_db.php';
    
	$id = $_POST['id'];
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

    if(!empty($img_name)){
		$update_image = "UPDATE cate SET cat_img = '$img_name' WHERE id = $id";
		$conn->query($update_image);

	}



$update_cate = "UPDATE cate SET cat_name = '$name' , cat_status = '$status' WHERE id =  $id";
$conn->query($update_cate);

header("location: ../cat.php");

	

}

?>