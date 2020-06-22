<?php
include 'admin/function/connect_db.php';
$value = $_POST['filter_n'];
$select_p = "SELECT * FROM product ORDER BY $value LIMIT 9";
$result_p = $conn->query($select_p);
foreach ($result_p as $key_p) {
    ?>

<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
    <div class="block2">
    <div class="block2-img wrap-pic-w of-hidden pos-relative <?php
$pro_date = $key_p['pro_date'];
$time = new DateTime();
$time_pro = new DateTime($pro_date);
$total_pro = $time->diff($time_pro);
  print_r($time);
  print_r($time_pro);
  print_r($total_pro);

$x = $total_pro->d;
echo $x;
if ($x <= 3) {

    echo " block2-labelnew";
}
else
{
echo "";
}
?> ">
    <img src="admin/images/<?php echo $key_p['img']; ?>" alt="IMG-PRODUCT">
    <div class="block2-overlay trans-0-4">
    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
    </a>
    <div class="block2-btn-addcart w-size1 trans-0-4">
    
    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
    Add to Cart
    </button>
    </div>
    </div>
    </div>
    <div class="block2-txt p-t-20">
    <a href="product-detail.php?id=<?php echo $key_p['id']; ?>" class="block2-name dis-block s-text3 p-b-5">
    <?php echo $key_p['pro_name']; ?>
    </a>
    <span class="block2-price m-text6 p-r-5">
    $<?php echo $key_p['price']; ?>
    </span>
    </div>
    </div>
    </div>

    <?php
}

?>