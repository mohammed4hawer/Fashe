<?php
session_start();
include 'design/header.php';
include 'design/nav.php';
include 'design/sidebar.php';
//===================================================
$id = $_GET['id'];
$select_details = "SELECT * FROM product WHERE id=$id";
$result_pro = $conn->query($select_details);
$row_details = $result_pro->fetch_assoc();
?>
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
<a href="index.php" class="s-text16">
Home
<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
</a>
<a href="product.php" class="s-text16">
Women
<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
</a>
<a href="#" class="s-text16">
T-Shirt
<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
</a>
<span class="s-text17">
<?php
echo $row_details['pro_name'];
?>
</span>
</div>

<div class="container bgwhite p-t-35 p-b-80">
<div class="flex-w flex-sb">

<div class="w-size13 p-t-30 respon5">
<div class="wrap-slick3 flex-sb flex-w">
<div class="wrap-slick3-dots"></div>
<div class="slick3">
<div class="item-slick3" data-thumb="admin/images/<?php echo $row_details['img']; ?>">
<div class="wrap-pic-w">
<img src="admin/images/<?php echo $row_details['img']; ?>" alt="IMG-PRODUCT">
</div>
</div>
<div class="item-slick3" data-thumb="admin/images/<?php echo $row_details['img']; ?>">
<div class="wrap-pic-w">
<img src="admin/images/<?php echo $row_details['img']; ?>" alt="IMG-PRODUCT">
</div>
</div>
<div class="item-slick3" data-thumb="admin/images/<?php echo $row_details['img']; ?>">
<div class="wrap-pic-w">
<img src="admin/images/<?php echo $row_details['img']; ?>" alt="IMG-PRODUCT">
</div>
</div>
</div>
</div>
</div>
<div class="w-size14 p-t-30 respon5">
<h4 class="product-detail-name m-text16 p-b-13">
<?php
echo $row_details['pro_name'];
?>
</h4>
<span class="m-text17">
$<?php echo $row_details['price']; ?>
</span>
<p class="s-text8 p-t-10">
Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
</p>

<div class="p-t-33 p-b-60">
<div class="flex-m flex-w p-b-10">
<div class="s-text15 w-size15 t-center">
Model
</div>
<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
<select class="selection-2" name="size">
<option>Choose an option</option>
<option>Model_2017</option>
<option>Model_2018</option>
<option>Model_2019</option>
<option>Model_2020</option>
</select>
</div>
</div>
<div class="flex-m flex-w">
<div class="s-text15 w-size15 t-center">
Color
</div>
<div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
<select class="selection-2" name="color">
<option>Choose an option</option>
<option>Grey</option>
<option>White</option>
<option>Red</option>
<option>Black</option>
<option>Blue</option>
</select>
</div>
</div>
<div class="flex-r-m flex-w p-t-10">
<div class="w-size16 flex-m flex-w">
<div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
</button>
<input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">
<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
</button>
</div>
<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">

<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
Add to Cart
</button>
</div>
</div>
</div>
</div>
<div class="p-b-45">
<span class="s-text8 m-r-35">SKU: MUG-01</span>
<span class="s-text8">Categories: Mug, Design</span>
</div>

<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
Description
<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
</h5>
<div class="dropdown-content dis-none p-t-15 p-b-23">
<p class="s-text8">
<?php
echo $row_details['description'];
?>
</p>
</div>
</div>
<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
Additional information
<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
</h5>
<div class="dropdown-content dis-none p-t-15 p-b-23">
<p class="s-text8">
Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
</p>
</div>
</div>
<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
Reviews (0)
<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
</h5>
<div class="dropdown-content dis-none p-t-15 p-b-23">
<p class="s-text8">
Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
</p>
</div>
</div>
<!--================================================-->
<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
Product Rate
<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
</h5>
<div class="dropdown-content dis-none p-t-15 p-b-23">
<div id="rate">
<div class="stars" data-rating="0">
        <span class="star" data-pro="<?php echo $id ?>" data-user="<?php echo $_SESSION['id_user']; ?>">&nbsp;</span>
        <span class="star" data-pro="<?php echo $id ?>" data-user="<?php echo $_SESSION['id_user']; ?>">&nbsp;</span>
        <span class="star" data-pro="<?php echo $id ?>" data-user="<?php echo $_SESSION['id_user']; ?>">&nbsp;</span>
        <span class="star" data-pro="<?php echo $id ?>" data-user="<?php echo $_SESSION['id_user']; ?>">&nbsp;</span>
        <span class="star" data-pro="<?php echo $id ?>" data-user="<?php echo $_SESSION['id_user']; ?>">&nbsp;</span>
    </div>
<br>
<div class="rating" style="margin-top: 20px;">  
<?php
    $rating_pro = round($row_details['pro_rate']);
    //echo $rating_pro;
    $unrated = (5 - $rating_pro);
    for ($i=0; $i < $rating_pro; $i++) { 
        ?>
        <span class="star">&nbsp;</span>
        <?php
    }
    for ($j=0; $j < $unrated; $j++) { 
        ?>
        <span class="star">&nbsp;</span>
        <?php
    }
    ?>
    </div>
</div>
<span class="posted-rate"></span>
</div>
</div>
<!--=========================Comments==========================-->
<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
Leave Your Comment Here
<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
</h5>
<div class="dropdown-content dis-none p-t-15 p-b-23">
<div class="row row5">
<div class="col-md-12 col-sm-12">
            <h5 class="comm">Please write us your comment here...</h5>
            <br><br>
            <form action="" method="" id="forma">
                <div class="form-group">
                <label for="usr" class="labx"> Enter Your Name:</label>
                <div class="textbox">
                <input type="text" id="usr" name="username" placeholder="  Your name" class="usr-i"></div>
                </div>
                <input type="hidden" id="id_pro" name="pro_id" value="<?php echo $row_details['id']; ?>" />
                <div class="form-group">
                <label for="com" class="labx"></label>
                <textarea class="form-control" id="com" name="comment" placeholder=" write your comment here..."></textarea>    
                </div>
                <div class="form-group">
                <a href="#" id="post-comment" class="btn btn-info">Post</a>
                </div>
            </form><br>
            <span class="comsent" style="color: springgreen; font-size: 14px;"></span>
            <br>
            <h6 class="comm">There is another comments...</h6><br>
            <ol class="olf">
            <?php
             $select_comm = "SELECT * FROM comments WHERE pro_id = $id";
             $result_comm = $conn->query($select_comm);
             foreach ($result_comm as $key_comm) {
                 
            ?>
            <li class="lir">
                <img src="images/avatar.jpg" alt="user-img" class="usr-img">
                <strong class="usr-name">&nbsp; <?php echo $key_comm['name']; ?></strong><br><br>
                <textarea class="comtxt" disabled><?php echo $key_comm['comment']; ?></textarea>
            </li><br>
             <?php } ?>
            </ol>
            
        </div>
</div>

</div>
</div>
</div>
<!--===================End of comments=====================-->
</div>
</div>

<section class="relateproduct bgwhite p-t-45 p-b-138">
<div class="container">
<div class="sec-title p-b-60">
<h3 class="m-text5 t-center">
Related Products
</h3>
</div>

<div class="wrap-slick2">
<div class="slick2">
<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
<img src="images/item-02.jpg" alt="IMG-PRODUCT">
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
<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
Herschel supply co 25l
</a>
<span class="block2-price m-text6 p-r-5">
$75.00
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative">
<img src="images/item-03.jpg" alt="IMG-PRODUCT">
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
<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
Denim jacket blue
</a>
<span class="block2-price m-text6 p-r-5">
$92.50
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative">
<img src="images/item-05.jpg" alt="IMG-PRODUCT">
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
<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
Coach slim easton black
</a>
<span class="block2-price m-text6 p-r-5">
$165.90
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
<img src="images/item-07.jpg" alt="IMG-PRODUCT">
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
<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
Frayed denim shorts
</a>
<span class="block2-oldprice m-text7 p-r-5">
$29.50
</span>
<span class="block2-newprice m-text8 p-r-5">
$15.90
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
<img src="images/item-02.jpg" alt="IMG-PRODUCT">
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
<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
Herschel supply co 25l
</a>
<span class="block2-price m-text6 p-r-5">
$75.00
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative">
<img src="images/item-03.jpg" alt="IMG-PRODUCT">
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
<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
Denim jacket blue
</a>
<span class="block2-price m-text6 p-r-5">
$92.50
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative">
<img src="images/item-05.jpg" alt="IMG-PRODUCT">
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
<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
Coach slim easton black
</a>
<span class="block2-price m-text6 p-r-5">
$165.90
</span>
</div>
</div>
</div>
<div class="item-slick2 p-l-15 p-r-15">

<div class="block2">
<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
<img src="images/item-07.jpg" alt="IMG-PRODUCT">
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
<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
Frayed denim shorts
</a>
<span class="block2-oldprice m-text7 p-r-5">
$29.50
</span>
<span class="block2-newprice m-text8 p-r-5">
$15.90
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php
include 'design/footer.php';
?>