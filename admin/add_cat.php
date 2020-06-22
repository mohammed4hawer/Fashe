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
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<form action="function/add_cat.php" method="post" enctype="multipart/form-data">
        <label>Name:</label>
     <input type="text" name="name" class="form-control">
      
     <label>Status:</label>     
     <select class="form-control" name="status">
      <option selected="" disabled="">Choose Status</option>
      
       <option value="1">Active</option>
       <option value="0">Suspend</option>
     
     </select>
     <label>Image:</label> 
     <input type="file" name="img" class="form-control">
     <br>
     <input type="submit" name="submit" value="Add" class="btn btn-info"> 
      </form>
			
		</div><!--/.row-->
		

    <?php 
    } 
    else
    {

		header("location: login.php");
	}

 
		