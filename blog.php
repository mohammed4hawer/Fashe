<?php
include 'design/header.php';
include 'design/nav.php';
include 'design/sidebar.php';
?>
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-05.jpg);">
<h2 class="l-text2 t-center">
Blog
</h2>
</section>

<section class="bgwhite p-t-60">
<div class="container">
<div class="row">

<div class="col-md-8 col-lg-9 p-b-75">
<div class="p-r-50 p-r-0-lg">
<?php
$select_blog = "SELECT * FROM blog";
$result_blog = $conn->query($select_blog);
foreach ($result_blog as $key_blog) {
    
?>
<div class="item-blog p-b-80">
<a href="blog-detail.php?id=<?php echo $key_blog['id']; ?>" class="item-blog-img pos-relative dis-block hov-img-zoom">
<img src="admin/images/<?php echo $key_blog['blog_img']; ?>" alt="IMG-BLOG">
<span style="width: 110px; height: 50px; font-size: 16px; font-weight: 600; padding: 3px;" class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
<?php echo $key_blog['blog_date']; ?>
</span>
</a>
<div class="item-blog-txt p-t-33">
<h4 class="p-b-11">
<a href="blog-detail.php?id=<?php echo $key_blog['id']; ?>" class="m-text24">
<?php echo $key_blog['blog_title']; ?>
</a>
</h4>
<div class="s-text8 flex-w flex-m p-b-21">
<span>
By Admin
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
<p class="p-b-12">
<?php echo $key_blog['blog_content']; ?>
</p>
<a href="blog-detail.php?id=<?php echo $key_blog['id']; ?>" class="s-text20">
Continue Reading
<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
</a>
</div>
</div>
<?php } ?>
<!--====================================================-->
</div>

<div class="pagination flex-m flex-w p-r-50">
<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
</div>
</div>
<div class="col-md-4 col-lg-3 p-b-75">
<div class="rightbar">
<!--===========================Search=============================-->
<div class="pos-relative bo11 of-hidden">
<input id="searchb" class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search">
<div>
<ul id="search_b">

</ul>
</div>
<button style="top: 25px;" class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
<i class="fs-13 fa fa-search" aria-hidden="true"></i>
</button>
</div>

<h4 class="m-text23 p-t-56 p-b-34">
Categories
</h4>
<ul>
 <?php
 $select_cat = "SELECT * FROM cate";
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
    foreach($result_pro as $key_pro)
    {

    ?>
<li class="flex-w p-b-20">
<a href="product-detail.php" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
<img src="admin/images/<?php echo $key_pro['img']; ?>" alt="IMG-PRODUCT">
</a>
<div class="w-size23 p-t-5">
<a href="product-detail.php" class="s-text20">
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