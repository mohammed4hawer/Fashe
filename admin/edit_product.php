<?php
session_start();

if(isset($_SESSION['email'])){

 include 'design/header.php';
 include 'design/nav.php';
 include 'design/sidebar.php';

 $id = $_GET['id'];
 $select_pro = "SELECT * FROM product WHERE id = $id";
 $result_pro = $conn->query($select_pro);
 $pro_row = $result_pro->fetch_assoc();
 
 
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
		<form action="function/update_pro.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id ?>">
        <label>Name:</label>
     <input type="text" name="name" class="form-control" value="<?php echo $pro_row['pro_name'] ?>">
     <label>price:</label>   
     <input type="text" name="price" class="form-control" value="<?php echo $pro_row['price'] ?>"> 
     <label>sale:</label>  
     <input type="text" name="sale" class="form-control" value="<?php echo $pro_row['sale']; ?>">
     <label>Img:</label>
     <img style="width: 100px; height: 100px;" src="images/<?php echo $pro_row['img']; ?>">   
     <input type="file" name="img"  class="form-control"> 
     <label>Description:</label>
     <textarea name="des" class="form-control"><?php echo $pro_row['description']; ?></textarea>
     <br>
     <label>Stock:</label>
     <input type="text" class="form-control" name="stock" value="<?php echo $pro_row['pro_stock']; ?>">

     <input type="submit" name="submit" value="Edit" class="btn btn-info"> 
      </form>
			
		</div><!--/.row-->
		

    <?php 
    } 
    else
    {
		header("location: login.php");
	}

 
		