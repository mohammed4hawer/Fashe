<?php

if(isset($_POST['submit'])){

    include 'connect_db.php';

    $name = $_POST['pro_name'];
    $price = $_POST['price'];
    $sale = $_POST['sale'];
    $descrip = $conn-> real_escape_string($_POST['des']);
    $stock = $_POST['stock'];
    $cat = $_POST['cat'];
    $date = $_POST['date'];

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

    $insert_pro = "INSERT INTO product (pro_name, price, sale, description, id_cat, pro_stock, img, pro_date) VALUES ('$name', '$price', '$sale', '$descrip', '$cat', '$stock', '$img_name', '$date')";

    $conn->query($insert_pro);

    header("location: ../product.php");


}


?>