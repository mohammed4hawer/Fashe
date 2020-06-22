<?php

session_start();

if(isset($_SESSION['email'])){

 include 'design/header.php';
 include 'design/nav.php';
 include 'design/sidebar.php';

 ?>
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Blogs</li>
			</ol>
        </div><!--/.row-->

        <div class="row">
        <form class="form-group" action="function/add_blog.php" method="post" enctype="multipart/form-data">
        <label>Blog Name:</label>
        <input type="text" class="form-control" name="blog_name">
        <label>Content:</label>   
        <input type="text" name="content" class="form-control"> 
        <label>Image:</label>  
        <input type="file" name="img" class="form-control">
        <label>Date:</label>
        <input type="datetime-local" class="form-control" name="date">
        
        <br>
        <input type="submit" name="submit" value="Add" class="btn btn-info">
        </form>

        </div>
        

<?php
}
else
{
    header("location: login.php");
}
include 'design/footer.php';

?>