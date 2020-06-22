
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
<div class="flex-w p-b-90">
<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
<h4 class="s-text12 p-b-30">
GET IN TOUCH
</h4>
<div>
<p class="s-text7 w-size27">
Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
</p>
<div class="flex-m p-t-30">
<a href="https://www.fb.com/fashe" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
<a href="https://www.instagram.com/fashe" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
<a href="https://www.pintrest.com/fashe" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
<a href="https://www.snapchat.com/fashe" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
<a href="https://www.youtube.com/fashe" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
</div>
</div>
</div>
<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
<h4 class="s-text12 p-b-30">
Categories
</h4>
<ul>
<?php
include 'admin/function/connect_db.php';

$select_cat = "SELECT * FROM cate";
$result_cat = $conn->query($select_cat);
foreach ($result_cat as $key_cat) {
    
?>	
<li class="p-b-9">
<a href="product.php?id=<?php echo $key_cat['id']; ?>" class="s-text7">
<?php echo $key_cat['cat_name']; ?>
</a>
</li>
<?php } ?>
</ul>
</div>
<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
<h4 class="s-text12 p-b-30">
Links
</h4>
<ul>
<li class="p-b-9">
<a href="#" class="s-text7">
Search
</a>
</li>
<li class="p-b-9">
<a href="../about.php" class="s-text7">
About Us
</a>
</li>
<li class="p-b-9">
<a href="../contact.php" class="s-text7">
Contact Us
</a>
</li>
<li class="p-b-9">
<a href="#" class="s-text7">
Returns
</a>
</li>
</ul>
</div>
<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
<h4 class="s-text12 p-b-30">
Help
</h4>
<ul>
<li class="p-b-9">
<a href="#" class="s-text7">
Track Order
</a>
</li>
<li class="p-b-9">
<a href="#" class="s-text7">
Returns
</a>
</li>
<li class="p-b-9">
<a href="#" class="s-text7">
Shipping
</a>
</li>
<li class="p-b-9">
<a href="#" class="s-text7">
FAQs
</a>
</li>
</ul>
</div>
<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
<h4 class="s-text12 p-b-30">
Newsletter
</h4>
<form>
<div class="effect1 w-size9">
<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
<span class="effect1-line"></span>
</div>
<div class="w-size2 p-t-20">

<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
Subscribe
</button>
</div>
</form>
</div>
</div>
<div class="t-center p-l-15 p-r-15">
<a href="#">
<img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
</a>
<a href="#">
<img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
</a>
<a href="#">
<img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
</a>
<a href="#">
<img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
</a>
<a href="#">
<img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
</a>
<div class="t-center s-text8 p-t-20">
Copyright © 2019 <a href="profile/index.php">ShayTech.</a> All rights reserved.
</div>
</div>
</footer>

<div class="btn-back-to-top bg0-hov" id="myBtn">
<span class="symbol-btn-back-to-top">
<i class="fa fa-angle-double-up" aria-hidden="true"></i>
</span>
</div>

<div id="dropDownSelect1"></div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>

<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>

<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>

<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>

<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>

<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
//================================================================
$("#post-comment").click(function(){
var name = $("#usr").val();
var pro_id = $("#id_pro").val();
var comment = $("#com").val();

if (!name) {
 	$("#usr").attr("placeholder", "Enter Your Name Please!");
 	$("#usr").addClass("x");
 }
 if (!comment) {
 	$("#com").attr("placeholder", "Place Your comment Please!");
 	$("#com").addClass("x");
 }
 
 if (name && comment) 
 {
 	$.post("fun/add_comment.php", {usr_n:name, usr_com:comment, pro_id:pro_id},function(data){

 		$(".comsent").html(data);

 	});

 	$("#usr").val("");
 	$("#com").val("");
 }

});
//================================================================

$("#search").keyup(function() {
    var search_word = $("#search").val();
    if (search_word) {
        
        $.post("search_data.php", {word:search_word}, function(data) {
            
            $("#search_d").html(data);
        })


    }

});
$("#ddd").blur(function(){
		$(this).css({"display":"none"});
	});
//======================================================================
$(".page").click(function(){
var page_num = $(this).html();
var cat_id = $(this).attr("data-x");
var f_val = $("#sel1").val();
var value_pp = $("#sel2").val();

$.post("fun/view_pro.php", {page_x:page_num, id_cat:cat_id, filter_val:f_val, value_p:value_pp}, function(data){

	$("#pro").html(data);
});

});
//======================================================================
$("#searchb").keyup(function() {
    var searchb_word = $("#searchb").val();
    if (searchb_word) {
        
        $.post("search_blog.php", {word_d:searchb_word}, function(data) {
            
            $("#search_b").html(data);
        });


    }
	
});
//=======================================================================
$("#sel1").change(function(){

var val = $(this).val();
$.post("pro_filter.php", {filter_n:val}, function(data){

	$("#pro").html(data);
});

});
//==============================
$("#sel2").change(function(){

var val = $(this).val();
$.post("pro_filter2.php", {filter:val}, function(data){

	$("#pro").html(data);
});

});
//===================================================================
$(".addP").click(function(){

var pro_id = $(this).attr("data-p");
var user_id = $(this).attr("data-u");
var count = $("#count").html();
//console.log(pro_id);
//console.log(user_id);

$.post("fun/insert_pro.php", {pro_id:pro_id, user_id:user_id}, function(data){
    count++
    $("#count").html(count);
	$("#cart").append(data);
	$("#total").load("index.php #window_cart");
// $(".swal-text").html(data);


});

});
//=================================================================
$(document).on("click", ".del_img", function(){
// $(".del_img").click(function(){
	var count = $("#count").html();
	var usr_id = $(this).attr("data-user");
	var cart_id = $(this).attr("data-cart");

   $.post("fun/delete_cart.php", {user:usr_id, id_cart:cart_id}, function(data){

	$("#table_load").load("cart.php .container-table-cart");
	count--
    $("#count").html(count);
	$("#total").load("cart.php #window_cart");

   });

});
//===============================================================
$(document).on("click", ".innum", function(){

	var usr_id = $(this).closest("tr").find(".cart-img-product").attr("data-user");
	var cart_id = $(this).closest("tr").find(".cart-img-product").attr("data-cart");
	var num = $(this).val();
	// console.log(usr_id);
	// console.log(cart_id);
	// console.log(num);

	$.post("fun/update_cart.php", {cart_num:num, user_id:usr_id, cart_id:cart_id}, function(data){
        console.log(data);
		$(".new_table").load("cart.php #table_load");
		$("#total").load("cart.php #window_cart");
        
	});
	
});
//===============================================================
$("#rate").bind("click", function(){

	var pro_id = $(this).find("span").attr("data-pro");
	var user_id = $(this).find("span").attr("data-user");
	var rate_val = $(this).find("div").attr("data-rating");
	//console.log(rate_val);
	//console.log(user_id);
	//console.log(pro_id);
	$.post("fun/rate.php", {rate:rate_val, user:user_id, pro:pro_id}, function(data){
    $(".posted-rate").html(data);

	});
});
//initial setup
document.addEventListener('DOMContentLoaded', function(){
            let stars = document.querySelectorAll('.star');
            stars.forEach(function(star){
                star.addEventListener('click', setRating); 
            });
            
            let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
            let target = stars[rating - 1];
            target.dispatchEvent(new MouseEvent('click'));
        });
        function setRating(ev){
            let span = ev.currentTarget;
            let stars = document.querySelectorAll('.star');
            let match = false;
            let num = 0;
            stars.forEach(function(star, index){
                if(match){
                    star.classList.remove('rated');
                }else{
                    star.classList.add('rated');
                }
                //are we currently looking at the span that was clicked
                if(star === span){
                    match = true;
                    num = index + 1;
                }
            });
            document.querySelector('.stars').setAttribute('data-rating', num);
        }
        
//===============================================================
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
//=============================================
        $("#listlog").click(function(){

			$(".logmenu").toggle(500);
		});	

	</script>

<script src="js/main.js"></script>
</body>

<!-- Mirrored from colorlib.com/etc/fashe/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jan 2019 15:53:05 GMT -->
</html>