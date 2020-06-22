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
<?php
if ($_SESSION['id_priv'] == 100) {
	?>
<a href="add_product.php" class="btn btn-warning">Add Product</a>
	<?php
}
?>
			
			
			<table class="table table-hover">
    <thead>
      <tr>
      	<th>#</th>
        <th>Name</th>
        <th>Price</th>
        <th>Sale</th>
        <th>Description</th>
        <th>Category</th>
        <th>Stock</th>
        <th>Rate</th>
        <th>Comment</th>
		<th>Image</th>
		<th>Date</th>
		<?php 
		if ($_SESSION['id_priv'] == 100) {
		
		?>
		<th>Control</th>
		<?php } ?>
      </tr>
    </thead>
    <tbody>
		<?php
		$count =1;
		$select_pro = "SELECT * FROM product";
		$result_pro = $conn->query($select_pro);
		foreach ($result_pro as $key_pro) {
			?>
			<tr>
				<td><?php echo $count++; ?></td>
				<td><?php echo $key_pro['pro_name']; ?></td>
				<td><?php echo $key_pro['price']; ?></td>
				<td>%<?php echo $key_pro['sale']; ?></td>
				<td class="def"><?php echo $key_pro['description'];
				// $len = $key_pro['description'];
				// $length = substr($len, 0, 20);
				// echo $length;	
				 ?></td>
				<td><?php echo $key_pro['id_cat']; ?></td>
				<td><?php echo $key_pro['pro_stock']; ?></td>
				<td><?php echo $key_pro['pro_rate']; ?></td>
				<td><?php echo $key_pro['pro_comment']; ?></td>
				<td><img src="images/<?php echo $key_pro['img']; ?>" style="width:50px; height:50px;"></td>
				<td><?php echo $key_pro['pro_date']; ?></td>
				<?php
				if ($_SESSION['id_priv'] == 100) {
				
				?>
				<td><a href="edit_product.php?id=<?php echo $key_pro['id']; ?>" class="btn btn-primary">Edit</a>

					<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $key_pro['id']; ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $key_pro['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are You Sure To Delete<span style="color: red;"> <?php echo $key_pro['pro_name']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_pro.php?id=<?php echo $key_pro['id']; ?>"><button  class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
				<?php } ?>
				</td>
			</tr>



			<?php
		}
?>
	</tbody>
			</table>

			</div><!--/.row-->



<?php
} 
else
{
	header("location: login.php");
}
include 'design/footer.php';
?>

<script>
$(document).ready(function(){

$("#list3").addClass("active");

})
</script>