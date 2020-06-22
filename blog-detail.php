<?php
include 'design/header.php';
include 'design/nav.php';
include 'design/sidebar.php';
?>
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
<a href="index.php" class="s-text16">
Home
<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
</a>
<a href="blog.php" class="s-text16">
Blog
<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
</a>
<?php
include 'admin/function/connect_db.php';
$id_blog = $_GET['id'];
$select_blog = "SELECT * FROM blog WHERE id = $id_blog";
$result_blog = $conn->query($select_blog);
$fetch_blog = $result_blog->fetch_assoc();
?>
<span class="s-text17">
<?php echo $fetch_blog['blog_title']; ?>
</span>
</div>

<section class="bgwhite p-t-60 p-b-25">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-9 p-b-80">
<div class="p-r-50 p-r-0-lg">
<div class="p-b-40">
<div class="blog-detail-img wrap-pic-w">
<img src="admin/images/<?php echo $fetch_blog['blog_img']; ?>" alt="IMG-BLOG">
</div>
<div class="blog-detail-txt p-t-33">
<h4 class="p-b-11 m-text24">
<?php echo $fetch_blog['blog_title']; ?>
</h4>
<div class="s-text8 flex-w flex-m p-b-21">
<span>
By Admin &nbsp; <?php echo $fetch_blog['blog_admin']; ?>
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
<?php echo $fetch_blog['blog_date'] ?>
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
Cooking, Food
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
8 Comments
</span>
</div>
<p class="p-b-25">
<?php echo $fetch_blog['blog_content']; ?>
</p>
<p class="p-b-25">
Aliquam faucibus scelerisque placerat. Vestibulum vel libero eu nulla varius pretium eget eu magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean dictum faucibus felis, ac vestibulum risus mollis in. Phasellus neque dolor, euismod vitae auctor eget, dignissim a felis. Etiam malesuada elit a nibh aliquam, placerat ultricies nibh dictum. Nam ut egestas velit. Pellentesque viverra tincidunt tellus. Etiam cursus, ligula id vehicula cursus, turpis mauris facilisis massa, eget tincidunt est purus et odio. Nam quis luctus libero, non posuere velit. Ut eu varius diam, eu euismod elit. Donec efficitur, neque eu consectetur consectetur, dui sem consectetur felis, vitae rutrum risus urna vel arcu. Aliquam semper ullamcorper laoreet. Sed arcu lectus, fermentum imperdiet purus eu, ornare ornare libero.
</p>
</div>
<div class="flex-m flex-w p-t-20">
<span class="s-text20 p-r-20">
Tags
</span>
<div class="wrap-tags flex-w">
<a href="#" class="tag-item">
Streetstyle
</a>
<a href="#" class="tag-item">
Crafts
</a>
</div>
</div>
</div>

<form class="leave-comment">
<h4 class="m-text25 p-b-14">
Leave a Comment
</h4>
<p class="s-text8 p-b-40">
Your email address will not be published. Required fields are marked *
</p>
<textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="comment" placeholder="Comment..."></textarea>
<div class="bo12 of-hidden size19 m-b-20">
<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="name" placeholder="Name *">
</div>
<div class="bo12 of-hidden size19 m-b-20">
<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="email" placeholder="Email *">
</div>
<div class="bo12 of-hidden size19 m-b-30">
<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="website" placeholder="Website">
</div>
<div class="w-size24">

<button class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
Post Comment
</button>
</div>
</form>
</div>
</div>
<div class="col-md-4 col-lg-3 p-b-80">
<div class="rightbar">

<div class="pos-relative bo11 of-hidden">
<input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search">
<button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
<i class="fs-13 fa fa-search" aria-hidden="true"></i>
</button>
</div>

<h4 class="m-text23 p-t-56 p-b-34">
Categories
</h4>
<ul>
<?php
$select_cat = "SELECT * FROM cate ";
$result_cat = $conn->query($select_cat);
foreach ($result_cat as $key_cat) {
    
?>
<li class="p-t-6 p-b-8 bo6">
<a href="product.php?id=<?php echo $key_cat['id']; ?>" class="s-text13 p-t-5 p-b-5">
<?php echo $key_cat['cat_name']; ?>
</a>
</li>
<?php } ?>
</ul>

<h4 class="m-text23 p-t-65 p-b-34">
Featured Products
</h4>
<ul class="bgwhite">
    <?php
    $select_pro = "SELECT * FROM product ORDER BY id DESC LIMIT 5";
    $result_pro = $conn->query($select_pro);
    foreach ($result_pro as $key_pro) {
        
    
    ?>
<li class="flex-w p-b-20">
<a href="product-detail.php" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
<img src="admin/images/<?php echo $key_pro['img']; ?>" alt="IMG-PRODUCT">
</a>
<div class="w-size23 p-t-5">
<a href="product-detail.php?id=<?php echo $key_pro['id']; ?>" class="s-text20">
<?php echo $key_pro['pro_name']; ?>
</a>
<span class="dis-block s-text17 p-t-6">
$<?php echo $key_pro['price']; ?>
</span>
</div>
</li>
    <?php } ?>
</ul>

<h4 class="m-text23 p-t-50 p-b-16">
Archive
</h4>
<ul>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
July 2018
</a>
<span class="s-text13">
(9)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
June 2018
</a>
<span class="s-text13">
(39)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
May 2018
</a>
<span class="s-text13">
(29)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
April 2018
</a>
<span class="s-text13">
(35)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
March 2018
</a>
<span class="s-text13">
(22)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
February 2018
</a>
<span class="s-text13">
(32)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
January 2018
</a>
<span class="s-text13">
(21)
</span>
</li>
<li class="flex-sb-m">
<a href="#" class="s-text13 p-t-5 p-b-5">
December 2017
</a>
<span class="s-text13">
(26)
</span>
</li>
</ul>

<h4 class="m-text23 p-t-50 p-b-25">
Tags
</h4>
<div class="wrap-tags flex-w">
<a href="#" class="tag-item">
Fashion
</a>
<a href="#" class="tag-item">
Lifestyle
</a>
<a href="#" class="tag-item">
Denim
</a>
<a href="#" class="tag-item">
Streetstyle
</a>
<a href="#" class="tag-item">
Crafts
</a>
</div>
</div>
</div>
</div>
</div>
</section>
<?php
include 'design/footer.php';
?>