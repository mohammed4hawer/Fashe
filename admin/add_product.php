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
				<li class="active">Products</li>
			</ol>
        </div><!--/.row-->

        <div class="row">
        <form class="form-group" action="function/add_pro.php" method="post" enctype="multipart/form-data">
        <label>Product Name:</label>
        <input type="text" class="form-control" name="pro_name">
        <label>Price:</label>   
        <input type="text" name="price" class="form-control"> 
        <label>Sale:</label>  
        <input type="text" name="sale" class="form-control">
        <label>Description:</label>
        <textarea name="des" class="form-control"></textarea>
        <label>Category:</label>
        <select class="form-control" name="cat">
        <option selected="" disabled="">Choose category</option>
        <?php $select_cat = "SELECT * FROM cate";
        $result_cat = $conn->query($select_cat);
        foreach ($result_cat as $key_cat) {
        
        ?>
        <option value="<?php echo $key_cat['id']; ?>"><?php echo $key_cat['cat_name']; ?></option>

        <?php } ?>
        </select>
        <label>Image:</label>
        <input type="file" class="form-control" name="img">
        <label>Stock:</label>
        <input type="number" class="form-control" name="stock">
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