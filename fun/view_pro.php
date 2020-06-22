<?php
include '../admin/function/connect_db.php';

$valp = $_POST['value_p'];
$filter_ex = explode("-", $valp);
$val1 = $filter_ex[0];
$val2 = $filter_ex[1];
$filter_value = $_POST['filter_val'];
$cat_id = $_POST['id_cat'];
$page_num = $_POST['page_x'];
$pages = ($page_num-1)*9;

if (empty($cat_id)) {
    
$select_pro = "SELECT * FROM product WHERE price > $val1 AND price < $val2 ORDER BY $filter_value LIMIT 9 OFFSET $pages";
}
else
{
$select_pro_x = "SELECT * FROM product WHERE id_cat='$cat_id' AND price > $val1 AND price < $val2 ORDER BY $filter_value LIMIT 9 OFFSET $pages";    
}
$result_pro = $conn->query($select_pro);
foreach ($result_pro as $key_pro) {
    
    ?>
    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
    <div class="block2">
    <div class="block2-img wrap-pic-w of-hidden pos-relative <?php
$pro_date = $key_pro['pro_date'];
$time = new DateTime();
$time_pro = new DateTime($pro_date);
$total_pro = $time->diff($time_pro);
  //print_r($time);
  //print_r($time_pro);
  //print_r($total_pro);

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
    <img src="admin/images/<?php echo $key_pro['img']; ?>" alt="IMG-PRODUCT">
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
    <a href="product-detail.php?id=<?php echo $key_pro['id']; ?>" class="block2-name dis-block s-text3 p-b-5">
    <?php echo $key_pro['pro_name']; ?>
    </a>
    <span class="block2-price m-text6 p-r-5">
    $<?php echo $key_pro['price']; ?>
    </span>
    </div>
    </div>
    </div>

<?php
}
?>