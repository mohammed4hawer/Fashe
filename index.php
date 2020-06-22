<?php
session_start();

include 'design/header.php';
include 'design/nav.php';
include 'design/sidebar.php';
?>
<section class="slide1">
<div class="wrap-slick1">
<div class="slick1">
<div class="item-slick1 item1-slick1" style="background-image: url(images/master-slide-02.jpg);">
<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
Best Collection Of 2019
</span>
<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
New arrivals
</h2>
<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">

<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
Shop Now
</a>
</div>
</div>
</div>
<div class="item-slick1 item2-slick1" style="background-image: url(images/master-slide-03.jpg);">
<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
Best Collection Of 2019
</span>
<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
New arrivals
</h2>
<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">

<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
Shop Now
</a>
</div>
</div>
</div>
<div class="item-slick1 item3-slick1" style="background-image: url(images/master-slide-04.jpg);">
<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
Best Collection Of 2019
</span>
<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
New arrivals
</h2>
<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">

<a href="product.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
Shop Now
</a>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="banner bgwhite p-t-40 p-b-40">
<div class="container">
<div class="row">
<!--=====================================================-->    
<?php 
$select_cat = "SELECT *FROM cate";
$result_cat = $conn->query($select_cat);
foreach ($result_cat as $key_cat) 
{
    
?>
<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
<div class="block1 hov-img-zoom pos-relative m-b-30">
<img src="admin/images/<?php echo $key_cat['cat_img']; ?>" class="img_cat" alt="IMG-BENNER">
<div class="block1-wrapbtn w-size2">

<a href="product.php?id=<?php echo $key_cat['id']; ?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
<?php
echo $key_cat['cat_name'];
?>
</a>
</div>
</div>
</div>
<?php
}
?>
<!--=============================================================-->
<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
<div class="block2 wrap-pic-w pos-relative m-b-30">
<img src="images/icons/bg-01.jpg" alt="IMG">
<div class="block2-content sizefull ab-t-l flex-col-c-m">
<h4 class="m-text4 t-center w-size3 p-b-8">
Sign up & get 20% off
</h4>
<p class="t-center w-size4">
Be the frist to know about the latest fashion news and get exclu-sive offers
</p>
<div class="w-size2 p-t-25">

<a href="admin/index.php" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
Sign Up
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="newproduct bgwhite p-t-45 p-b-105">
<div class="container">
<div class="sec-title p-b-60">
<!-- =============================================================== -->
<h3 class="m-text5 t-center">
Featured Products
</h3>
</div>

<div class="wrap-slick2">
<div class="slick2">

<?php
$select_pro = "SELECT * FROM product ORDER BY id DESC LIMIT 6";
$result_pro = $conn->query($select_pro);
foreach ($result_pro as $key_pro) 
{

?>

<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative 
<?php
$pro_date = $key_pro['pro_date'];
$time = new DateTime();
$time_pro = new DateTime($pro_date);
$total_pro = $time->diff($time_pro);
// print_r($time);
// print_r($time_pro);
// print_r($total_pro);
$x = $total_pro->d;
//echo $x;
if ($x <= 3) {

    echo " block2-labelnew";
}
else
{
echo "";
}
?> ">
<img src="admin/images/<?php echo $key_pro['img']; ?>" style="width: 220px; height: 250px;" alt="IMG-PRODUCT">
<div class="block2-overlay trans-0-4">
<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
</a>
<div class="block2-btn-addcart w-size1 trans-0-4">

<button class="addP flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" data-p="<?php echo $key_pro['id']; ?>" data-u="<?php echo $_SESSION['id_user']; ?>">
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
<span class="block2-price m-text6 p-r-5">
$<?php echo $key_pro['price']; ?>
</span>
</div>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
</section>

<!-- ================================================================== -->
<section class="banner2 bg5 p-t-55 p-b-55">
<div class="container">
<div class="row">
<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
<div class="hov-img-zoom pos-relative">
<img src="images/banner-08.jpg" alt="IMG-BANNER">
<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
<span class="m-text9 p-t-45 fs-20-sm" style="color:darksalmon;">
The Beauty
</span>
<h3 class="l-text1 fs-35-sm" style="color:darksalmon;">
Lookbook
</h3>
<a href="#" class="s-text4 hov2 p-t-20 " style="color:darksalmon;">
View Collection
</a>
</div>
</div>
</div>
<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
    <?php
    $select_one = "SELECT * FROM product WHERE id = 13";
    $result = $conn->query($select_one);
    $fetch_one = $result->fetch_assoc();
    ?>
<div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
<img src="admin/images/<?php echo $fetch_one['img']; ?>" alt="IMG-BANNER">
<div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
<div class="t-center">
<a href="product-detail.php?id=<?php echo $fetch_one['id']; ?>" class="dis-block s-text3 p-b-5">
<?php echo $fetch_one['pro_name']; ?>
</a>
<span class="block2-oldprice m-text7 p-r-5">
$<?php echo $fetch_one['price']; ?>
</span>
<span class="block2-newprice m-text8">
$34.99
</span>
</div>
<div class="flex-c-m p-t-44 p-t-30-xl">
<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
<span class="m-text10 p-b-1 days">
30
</span>
<span class="s-text5">
days
</span>
</div>
<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
<span class="m-text10 p-b-1 hours">
04
</span>
<span class="s-text5">
hrs
</span>
</div>
<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
<span class="m-text10 p-b-1 minutes">
32
</span>
<span class="s-text5">
mins
</span>
</div>
<div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
<span class="m-text10 p-b-1 seconds">
05
</span>
<span class="s-text5">
secs
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="blog bgwhite p-t-94 p-b-65">
<div class="container">
<div class="sec-title p-b-52">
<h3 class="m-text5 t-center">
Our Blog
</h3>
</div>
<div class="row">
<?php
$select_blog = "SELECT * FROM blog";
$result_blog = $conn->query($select_blog);
foreach ($result_blog as $key_blog) {
    
?>
<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">

<div class="block3">
<a href="blog-detail.php" class="block3-img dis-block hov-img-zoom">
<img src="admin/images/<?php echo $key_blog['blog_img']; ?>" alt="IMG-BLOG" style="width: 375px; height: 220px;">
</a>
<div class="block3-txt p-t-14">
<h4 class="p-b-7">
<a href="blog-detail.php?id=<?php echo $key_blog['id']; ?>" class="m-text11">
<?php echo $key_blog['blog_title']; ?>
</a>
</h4>
<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
<span class="s-text6">on</span> <span class="s-text7"><?php echo $key_blog['blog_date']; ?></span>
<p class="s-text8 p-t-16">
<?php echo $key_blog['blog_content']; ?>
</p>
</div>
</div>
</div>
<?php } ?>

</div>
</div>
</section>

<section class="instagram p-t-20">
<div class="sec-title p-b-52 p-l-15 p-r-15">
<h3 class="m-text5 t-center">
@ follow us on Instagram
</h3>
</div>
<div class="flex-w">

<div class="block4 wrap-pic-w">
<img src="images/gallery-03.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
<span class="p-t-2">39</span>
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p class="s-text10 m-b-15 h-size1 of-hidden">
Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>

<div class="block4 wrap-pic-w">
<img src="images/gallery-07.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
<span class="p-t-2">39</span>
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p class="s-text10 m-b-15 h-size1 of-hidden">
Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>

<div class="block4 wrap-pic-w">
<img src="images/gallery-09.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
<span class="p-t-2">39</span>
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p class="s-text10 m-b-15 h-size1 of-hidden">
Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>

<div class="block4 wrap-pic-w">
<img src="images/gallery-13.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
<span class="p-t-2">39</span>
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p class="s-text10 m-b-15 h-size1 of-hidden">
Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>

<div class="block4 wrap-pic-w">
<img src="images/gallery-15.jpg" alt="IMG-INSTAGRAM">
<a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
<span class="p-t-2">39</span>
</span>
<div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
<p class="s-text10 m-b-15 h-size1 of-hidden">
Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
</p>
<span class="s-text9">
Photo by @nancyward
</span>
</div>
</a>
</div>
</div>
</section>

<section class="shipping bgwhite p-t-62 p-b-46">
<div class="flex-w p-l-15 p-r-15">
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
<h4 class="m-text12 t-center">
Free Delivery Worldwide
</h4>
<a href="#" class="s-text11 t-center">
Click here for more info
</a>
</div>
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
<h4 class="m-text12 t-center">
30 Days Return
</h4>
<span class="s-text11 t-center">
Simply return it within 30 days for an exchange.
</span>
</div>
<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
<h4 class="m-text12 t-center">
Store Opening
</h4>
<span class="s-text11 t-center">
Shop open from Monday to Sunday
</span>
</div>
</div>
</section>

<?php
include 'design/footer.php';
?>
