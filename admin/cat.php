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
				<li class="active">Categories</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
      <?php
      if ($_SESSION['id_priv'] == 100) {
        ?>

<a href="add_cat.php" class="btn btn-warning">Add New Category</a>
        <?php
      }
      ?>

			<table class="table table-hover">
    <thead>
      <tr>
      	<th>#</th>
        <th>Name</th>
        <th>Status</th>
        <th>Image</th>
        <?php
        if ($_SESSION['id_priv'] == 100) {
        
        ?>
        <th>Control</th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
  <?php
  $count = 1;
  $select_cat = "SELECT * FROM cate";
  $result_cat = $conn->query($select_cat);
  foreach ($result_cat as $key_cat) {
  	
   	
  
   ?>	
      <tr>
      	<td><?php echo $count++ ?></td>
        <td><?php echo $key_cat['cat_name']; ?></td>
        <td><?php if($key_cat['cat_status'] == '0'){echo "Suspend";}else{echo "Active";}?></td>
        <td><img src="images/<?php echo $key_cat['cat_img']; ?>" style="width: 80px; height: 80px;"></td>
        <?php
        if ($_SESSION['id_priv'] == 100) {
        
        ?>
        <td><a href="edit_cat.php?id=<?php echo $key_cat['id']; ?>" class="btn btn-primary">Edit</a>
        	<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $key_cat['id'] ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $key_cat['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are You Sure To Delete<span style="color: red;"> <?php echo $key_cat['cat_name']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_cat.php?id=<?php echo $key_cat['id']; ?>"><button  class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
        </td>
  <?php } ?>
      </tr>
    <?php } ?>  
   
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

$("#list2").addClass("active");

})
</script>