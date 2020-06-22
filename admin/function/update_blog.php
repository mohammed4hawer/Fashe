<?php 
if(isset($_POST['submit'])){

    include 'connect_db.php';
    
	$id = $_POST['id'];
	$name = $_POST['name'];
    $content = $_POST['content'];
    $date = new DateTime();
    $dt = $date->format("y-m-d  h:i:s");
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
		$update_image = "UPDATE blog SET blog_img = '$img_name' WHERE id = $id";
		$conn->query($update_image);

	}


$update_blog = "UPDATE blog SET blog_title = '$name' , blog_content = '$content', blog_date = '$dt' WHERE id =  $id";
$conn->query($update_blog);

header("location: ../blog_details.php?id=$id");
//print_r($dt);
	

}

?>