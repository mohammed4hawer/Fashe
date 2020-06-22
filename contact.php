<?php
include 'design/header.php';
include 'design/nav.php';
include 'design/sidebar.php';
?>
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-06.jpg);">
<h2 class="l-text2 t-center">
Contact
</h2>
</section>

<section class="bgwhite p-t-66 p-b-60">
<div class="container">
<div class="row">
<div class="col-md-6 p-b-30">
<div class="p-r-20 p-r-0-lg">
<div class="contact-map size21" id="google_map" data-map-x="40.614439" data-map-y="-73.926781" data-pin="images/icons/icon-position-map.png" data-scrollwhell="0" data-draggable="1"></div>
</div>
</div>
<div class="col-md-6 p-b-30">
<form class="leave-comment">
<h4 class="m-text26 p-b-36 p-t-15">
Send us your message
</h4>
<p id="form-data" style="color: green;"></p>
<div class="bo4 of-hidden size15 m-b-20">
<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="name" name="name" placeholder="Full Name">
</div>
<div class="bo4 of-hidden size15 m-b-20">
<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="phone" name="phone-number" placeholder="Phone Number">
</div>
<div class="bo4 of-hidden size15 m-b-20">
<input class="sizefull s-text7 p-l-22 p-r-22" type="text" id="email" name="email" placeholder="Email Address">
</div>
<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" id="message" placeholder="Message"></textarea>
<div class="w-size25">

<a class="btn btn-warning">
<span class="send_msg">Send Message</span>
</a>
</div>
</form>
</div>
</div>
</div>
</section>
<?php
include 'design/footer.php';
?>
<script type="text/javascript">

$(".send_msg").click(function(){
var name = $("#name").val();
var phone = $("#phone").val();
var email = $("#email").val();
var message = $("#message").val();
 if (!name) {
 	$("#name").attr("placeholder", "Enter Your Name Please!");
 	$("#name").addClass("x");
 }

			if(!phone){
				$("#phone").attr("placeholder", "Please Enter Your Phone!")
				$("#phone").addClass("x");
			}

			if(!email){
				$("#email").attr("placeholder", "Please Enter Your Email!")
				$("#email").addClass("x");
			}

			if(!message){
				$("#message").attr("placeholder", "Please Enter Your Message!")
				$("#message").addClass("x");
			}

 if (name && email && phone && message) 
 {
 	$.post("fun/add_msg.php", {name_x:name, email_x:email, phone_x:phone, message_x:message},function(data){
 		$("#form-data").html(data);

 	});

 	$("#name").val("");
 	$("#email").val("");
 	$("#phone").val("");
 	$("#message").val("");
	
 }

});
</script>