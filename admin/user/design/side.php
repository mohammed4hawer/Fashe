
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="../images/<?php echo $_SESSION['img']; ?>" class="img-responsive" alt="user-img">
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
			<li id="list1"><a href="index.php"><em class="fa fa-user">&nbsp;</em> My Profile </a></li>
			<li id="list2"><a href="activity.php"><em class="fa fa-calendar">&nbsp;</em> Activities</a></li>
			<li id="list3"><a href="charts.php"><em class="fa fa-bar-chart">&nbsp;</em> My Charts</a></li>
			<li id="list4"><a href="edit_user.php?id=<?php echo $_SESSION['id_user']; ?>"><em class="fa fa-edit">&nbsp;</em> Preferences</a></li>
			<li><a href="fun/logout.php"><em class="fa fa-sign-out">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		