<?php
include '../admin/function/connect_db.php';

$id_pro = $_POST['pro_id'];
$total_price = $_POST['total'];

$fetch_pro = "SELECT * FROM product WHERE id = $id_pro";
$result_pro = $conn->query($fetch_pro);
$fetch_pro_row = $result_pro->fetch_assoc();
    $total_price += $fetch_pro['price'];
    ?>
<div id="tot" class="header-cart-total">

Total:<?php echo $total_price; ?> 
</div>
