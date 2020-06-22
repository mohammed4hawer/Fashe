<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="images/<?php echo $_SESSION['img']; ?>" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo $_SESSION['username']; ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li id="list1"><a href="index.php"><em class="fa fa-user-times">&nbsp;</em> Admin</a></li>
            <li id="list2"><a href="cat.php"><em class="fa fa-suitcase">&nbsp;</em> Categories</a></li>
            <li id="list3"><a href="product.php"><em class="fa fa-bitbucket-square">&nbsp;</em> Products</a></li>
            <li id="list4"><a href="message.php"><em class="fa fa-comments">&nbsp;</em> Messages</a></li>
			<li id="list5"><a href="blog.php"><em class="fa fa-shirtsinbulk">&nbsp;</em> Blogs</a></li>
			<li><a href="function/logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->