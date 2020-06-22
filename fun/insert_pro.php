<?php

include '../admin/function/connect_db.php';

$id_pro = $_POST['pro_id'];
$id_user = $_POST['user_id'];

$insert_pro = "INSERT INTO cart (pro_id, user_id, quantity) VALUES ('$id_pro', '$id_user', 1)";

$conn->query($insert_pro);

// echo "Added To Cart Successfully!";
$select_pro = "SELECT * FROM product WHERE id = $id_pro";
$result_pro = $conn->query($select_pro);
$pro_row = $result_pro->fetch_assoc();

?>
<li  class="header-cart-item">
<div class="header-cart-item-img">
<img src="admin/images/<?php echo $pro_row['img']; ?>" alt="IMG">
</div>
<div class="header-cart-item-txt">
<a href="#" class="header-cart-item-name">
<?php echo $pro_row['pro_name']; ?>
</a>
<span class="header-cart-item-info">
<?php echo $pro_row['price']; ?>
</span>
</div>
</li>
