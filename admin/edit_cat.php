<?php
session_start();

if(isset($_SESSION['email'])){

 include 'design/header.php';
 include 'design/nav.php';
 include 'design/sidebar.php';


 $id = $_GET['id'];
 $select_cat = "SELECT * FROM cate WHERE id = $id";
 $result_cat = $conn->query($select_cat);
 $row_cat = $result_cat->fetch_assoc();
 $row_status = $row_cat['cat_status'];

 
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
			<form action="function/update_cat.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id ?>">
        <label>Name:</label>
     <input type="text" name="name" class="form-control" value="<?php echo $row_cat['cat_name'] ?>">
     
     <label>Status:</label>     
     <select class="form-control" name="status">
     	<option value=""><?php if($row_status == '0'){echo "suspend";}else{echo "active";} ?></option>
     	<option value="<?php if($row_status == '0'){echo '1';}else{echo '0';} ?>"><?php if($row_status == '0'){echo "active";}else{echo "suspend";} ?></option>

     	
       
    
	 </select> 
	 <label>Image:</label>
	 <img src="images/<?php echo $row_cat['cat_img']; ?>" style="width: 50px; height: 50px;">
	 <input type="file" name="img" class="form-control">
     <br>
     <input type="submit" name="submit" value="Edit" class="btn btn-info"> 
      </form>
			
		</div><!--/.row-->
		

    <?php 
    } 
    else
    {
		header("location: login.php");
	}

 ?>
		