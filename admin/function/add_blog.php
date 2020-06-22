<?php
session_start();

if(isset($_POST['submit'])){

    include 'connect_db.php';

    $name = $_POST['blog_name'];
    $content = $_POST['content'];
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
    $date = $_POST['date'];
    $admin_id = $_SESSION['id'];
    

    $insert_blog = "INSERT INTO blog (blog_title, blog_content, blog_img, blog_date, blog_admin) VALUES ('$name', '$content', '$img_name', '$date
    ', '$admin_id')";

    $conn->query($insert_blog);
//print_r($_FILES);

 header("location: ../blog.php");


}


?>