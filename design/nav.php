<body class="animsition">

<header class="header1">
<?php
session_start();
include 'admin/function/connect_db.php';

?>
<div class="container-menu-header">
<div class="topbar">
<div class="topbar-social">
<a href="https://www.fb.com/fashe" class="topbar-social-item fa fa-facebook"></a>
<a href="https://www.instagram.com/fashe" class="topbar-social-item fa fa-instagram"></a>
<a href="https://www.pintrest.com/fashe" class="topbar-social-item fa fa-pinterest-p"></a>
<a href="https://www.snapchat.com/fashe" class="topbar-social-item fa fa-snapchat-ghost"></a>
<a href="https://www.youtube.com/fashe" class="topbar-social-item fa fa-youtube-play"></a>
</div>
<span class="topbar-child1">
Free shipping for standard order over $100
</span>
<div class="topbar-child2">
<span class="topbar-email">
<a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="98fef9ebf0fdd8fde0f9f5e8f4fdb6fbf7f5">[email&#160;protected]</a>
</span>
<div class="topbar-language rs1-select2">
<select class="selection-1" name="time">
<option>USD</option>
<option>EUR</option>
</select>
</div>
</div>
</div>
<div class="wrap_header">

<a href="index.php" class="logo">
<img src="images/icons/logo.png" alt="IMG-LOGO">
</a>

<div class="wrap_menu">
<nav class="menu">
<ul class="main_menu">
<li>
<a href="index.php">Home</a>

</li>
<li>
<a href="product.php">Shop</a>
</li>
<li class="sale-noti">
<a href="product-sale.php">Sale</a>
</li>
<li>
<a href="cart.php">Features</a>
</li>
<li>
<a href="blog.php">Blog</a>
</li>
<li>
<a href="about.php">About</a>
</li>
<li>
<a href="contact.php">Contact</a>
</li>
</ul>
</nav>
</div>


<div class="header-icons">
<br href="#" class="header-wrapicon1 dis-block">
<img id="listlog" src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">


<ul class="logmenu">
    <li class="logli">
        <?php
        //error_reporting(0);

        
        if (isset($_SESSION['id_user'])) {

            $session = $_SESSION['id_user'];
            $select_user = "SELECT * FROM users WHERE id = $session";
            $result_user = $conn ->query($select_user);
            $row_user = $result_user ->fetch_assoc();
            ?>
            <a href="admin/user/index.php"><img src="admin/images/<?php echo $row_user['img']; ?>" alt="user" class="usrimg"></a>
            <a href="admin/user/index.php"><span class="usrname">&nbsp; <?php echo $row_user['name']; ?></span></a>
            <a href="fun/logout.php" class="btn btn-dark">Logout</a>
            <hr class="hrr">
    <?php
     }
    else
    {
?>
        <h5 style="color: #021; font-weight: 600; margin-left: 2px;"><?php echo "There Is No Users"; ?></h5>
<?php } ?>
        <a href="admin/user/login.php" class="btn btn-info butt">Sign In</a>
        <a href="admin/user/login.php" class="btn btn-success butt">Sign Up</a><br>
</li>
</ul>

</br>
<span class="linedivide1"></span>
<div class="header-wrapicon2">
<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
<span class="header-icons-noti" id="count">
<?php

if(isset($_SESSION['id_user'])){
    $user = $_SESSION['id_user'];
}
else
{
    $user =0;
}
$select_cart = "SELECT * FROM cart WHERE user_id = $user";
$result_cart = $conn->query($select_cart);
$cart_num = $result_cart->fetch_assoc();
$cart_rows = $result_cart->num_rows;

echo $cart_rows; 

?>    
</span>
<div id="total">
<div id="window_cart" class="header-cart header-dropdown">

<ul id="cart" class="header-cart-wrapitem">
<?php
if(isset($_SESSION['id_user'])){
    $user = $_SESSION['id_user'];
}
else
{
    $user =0;
}
$total = 0;
$select_cart = "SELECT * FROM cart WHERE user_id = $user";
$result_cart = $conn->query($select_cart);
foreach ($result_cart as $key_cart) {
$pro_id = $key_cart['pro_id'];

$select_price = "SELECT * FROM product WHERE id = $pro_id";
$result_price = $conn->query($select_price);
$fetch_pro = $result_price->fetch_assoc();
$total += ($fetch_pro['price'] * $key_cart['quantity']);
?>
<li  class="header-cart-item">
<div class="header-cart-item-img">
<img src="admin/images/<?php echo $fetch_pro['img']; ?>" alt="IMG">
</div>
<div class="header-cart-item-txt">
<a href="#" class="header-cart-item-name">
<?php echo $fetch_pro['pro_name']; ?>
</a>
<span class="header-cart-item-info">
$<?php echo $fetch_pro['price']; ?>
<span class="header-cart-item-info">Total: $<?php echo ($key_cart['quantity'] * $fetch_pro['price']); ?> &nbsp; (<?php echo $key_cart['quantity']; ?>)</span>
</span>
</div>
</li>
<?php } ?>

</ul>
<div id="tot" class="header-cart-total">

Total: $<?php echo $total; ?> 
</div>
<div class="header-cart-buttons">
<div class="header-cart-wrapbtn">

<a href="cart.php?<?php echo $_SESSION['id']; ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
View Cart
</a>
</div>
<div class="header-cart-wrapbtn">

<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
Check Out
</a>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

<div class="wrap_header_mobile">

<a href="index.php" class="logo-mobile">
<img src="images/icons/logo.png" alt="IMG-LOGO">
</a>

<div class="btn-show-menu">

<div class="header-icons-mobile">
<a href="admin/index.php" class="header-wrapicon1 dis-block">
<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
</a>
<span class="linedivide2"></span>
<!--===========================================================-->
<div class="header-wrapicon2">
<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
<span class="header-icons-noti">0</span>

<div class="header-cart header-dropdown">
<ul class="header-cart-wrapitem">
<li class="header-cart-item">
<div class="header-cart-item-img">
<img src="images/item-cart-01.jpg" alt="IMG">
</div>
<div class="header-cart-item-txt">
<a href="#" class="header-cart-item-name">
White Shirt With Pleat Detail Back
</a>
<span class="header-cart-item-info">
1 x $19.00
</span>
</div>
</li>
<li class="header-cart-item">
<div class="header-cart-item-img">
<img src="images/item-cart-02.jpg" alt="IMG">
</div>
<div class="header-cart-item-txt">
<a href="#" class="header-cart-item-name">
Converse All Star Hi Black Canvas
</a>
<span class="header-cart-item-info">
1 x $39.00
</span>
</div>
</li>
<li class="header-cart-item">
<div class="header-cart-item-img">
<img src="images/item-cart-03.jpg" alt="IMG">
</div>
<div class="header-cart-item-txt">
<a href="#" class="header-cart-item-name">
Nixon Porter Leather Watch In Tan
</a>
<span class="header-cart-item-info">
1 x $17.00
</span>
</div>
</li>
</ul>
<div class="header-cart-total">
Total: $75.00
</div>
<div class="header-cart-buttons">
<div class="header-cart-wrapbtn">

<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
View Cart
</a>
</div>
<div class="header-cart-wrapbtn">

<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
Check Out
</a>
</div>
</div>
</div>
</div>
</div>
<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</div>
</div>
</div>