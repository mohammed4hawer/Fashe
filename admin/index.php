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
<?php
if ($_SESSION['id_priv'] == 100) {
  ?>
  <a href="add_admin.php" class="btn btn-warning">Add New Admin</a>
  <?php
}
?>
      
      
			<table class="table table-hover">
    <thead>
      <tr>
      	<th>#</th>
        <th>Userame</th>
        <th>Email</th>
        <th>Image</th>
        <th>Priv</th>
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
  $select_admin = "SELECT * FROM admin";
  $result_admin = $conn->query($select_admin);
  foreach ($result_admin as $key_admin) {
  	$id_priv = $key_admin['id_priv'];
   	
  
   ?>	
<tr>
      	<td><?php echo $count++ ?></td>
        <td><?php echo $key_admin['admin_name']; ?></td>
        <td><?php echo $key_admin['admin_email']; ?></td>
        <td><img style="width: 50px;height: 50px;" src="images/<?php echo $key_admin['img_admin']; ?>"></td>
        <?php $select_priv  = "SELECT priv_name FROM priv WHERE id = $id_priv";
        $result_priv = $conn->query($select_priv);
        $row_priv = $result_priv->fetch_assoc();
        ?>

    <td><?php echo $row_priv['priv_name'];  ?></td>
    <?php
        if ($_SESSION['id_priv'] == 100) {
        
        ?>
		<td><a href="edit_admin.php?id=<?php echo $key_admin['id']; ?>" class="btn btn-primary">Edit</a>
        	<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $key_admin['id'] ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $key_admin['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are You Sure To Delete<span style="color: red;"> <?php echo $key_admin['admin_name']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_admin.php?id=<?php echo $key_admin['id']; ?>"><button  class="btn btn-danger">Delete</button></a>
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

$("#list1").addClass("active");

})
</script>