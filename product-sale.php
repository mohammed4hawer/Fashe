<?php
session_start();

include 'design/header.php';
include 'design/nav.php';
include 'design/sidebar.php';
?>
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
<h2 class="l-text2 t-center">
Products
</h2>
<p class="m-text13 t-center">
New Arrivals Products Collection 2019
</p>
</section>

<section class="bgwhite p-t-55 p-b-65">
<div class="container">
<div class="row">
<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
<div class="leftbar p-r-20 p-r-0-sm">

<h4 class="m-text14 p-b-7">
Categories
</h4>
<ul class="p-b-54">
<li class="p-t-4">
<a href="product.php" class="s-text13 active1">
All
</a>
</li>
<?php
$select_cat = "SELECT * FROM cate";
$result_cat = $conn->query($select_cat);
foreach ($result_cat as $key_cat) {

?>
<li class="p-t-4">
<a href="product.php?id=<?php echo $key_cat['id']; ?>" class="s-text13">
<?php echo $key_cat['cat_name']; ?>
</a>
</li>
<?php } ?>
</ul>


<h5 style="font-family: sans-serif; font-weight: 600;">Search</h5><br>   
<div class="search-product pos-relative bo4 of-hidden">
<input id="search" id="ddd" class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search Products...">
<div>
<ul id="search_d">

</ul>
</div>
<button style="top: 25px;" class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
<i class="fs-12 fa fa-search" aria-hidden="true"></i>
</button>
</div>
</div>
</div>
<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
<!--============================Filter===========================-->
<div class="flex-sb-m flex-w p-b-35">
<div class="flex-w">
<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
<select id="sel1" class="selection-2" name="sorting">
<option value="id">Default Sorting</option>
<option value="pro_name">Order By Name</option>
<option value="sale">Hot Sale</option>
<option value="pro_rate">Rate</option>
</select>
</div>
<div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
<select id="sel2" class="selection-2" name="sorting">
<option value="0-5000">Price</option>
<option value="0-500">$0 - $500</option>
<option value="500-1000">$500 - $1000</option>
<option value="1000-1500">$1000 - $1500</option>
<option value="1500-2000">$1500 - $2000</option>
<option value="2500-10000">$2500+</option>
</select>
</div>
</div>
<span class="s-text8 p-t-5 p-b-5">
Showing 1–9 of 14 results
</span>
</div>

<div id="pro" class="row">
<?php 

if (isset($_GET['id'])) {
    $id = $_GET['id'];
$select_pro = "SELECT * FROM product WHERE id_cat = $id LIMIT 9";
$result_pro = $conn->query($select_pro);
}
else
{
$select_pro = "SELECT * FROM product WHERE sale > 0 LIMIT 9";
$result_pro = $conn->query($select_pro);
}
foreach ($result_pro as $key_pro) {
    
?>
<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
<img src="admin/images/<?php echo $key_pro['img']; ?>" alt="IMG-PRODUCT" style="width: 220px; height: 250px;">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">

<button class="addP flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 data-p="<?php echo $key_pro['id']; ?>" data-u="<?php echo $_SESSION['id']; ?>">
Add to Cart
</button>
</div>
</div>
</div>

<div class="block2-txt p-t-20">
<a href="product-detail.php?id=<?php echo $key_pro['id']; ?>" class="block2-name dis-block s-text3 p-b-5">
<?php echo $key_pro['pro_name']; ?>
</a>
<div id="ratee">
        <span class="starr">&nbsp;</span>
        <span class="starr">&nbsp;</span>
        <span class="starr">&nbsp;</span>
        <span class="starr">&nbsp;</span>
        <span class="starr">&nbsp;</span>
</div>
<span class="block2-oldprice m-text7 p-r-5">
$<?php echo $key_pro['price']; ?>
</span>
<span class="block2-newprice m-text8 p-r-5">
$<?php 
$new_price = ($key_pro['price'])/($key_pro['sale']);
echo (floor($new_price));
?>
</span>
</div>
</div>
</div>

<?php
}
?>

</div>
<!--============================Pages============================-->
<div class="pagination flex-m flex-w p-t-26">
<ul class="pagination">
<li class="page-item"><a class="page-link" href="#">Previous</a></li>
<li class="page-item">
<?php
$pro_num = "SELECT count(id) FROM product";
$result_num = $conn->query($pro_num);

$page_num = $result_num->fetch_assoc();
$page_number = $page_num['count(id)'];
$page = $page_number/9;
$pag = ceil($page);

for ($x=1; $x <= $pag; $x++) {


?>

    
    <a class="page-link page" href="#" data-x="<?php if (isset($_GET['id'])) {
    echo $_GET['id'];
} 
?>">
    

<?php
echo $x; 
?></a></li>

<?php
}
?>
<li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</div>
</div>
</div>
</div>
</section>

<?php
include 'design/footer.php';
?>
