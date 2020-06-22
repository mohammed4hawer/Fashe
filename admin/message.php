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
				<li class="active">Messages</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
		<table class="table table-hover">
    <thead>
      <tr>
      	<th>#</th>
        <th>Name</th>
        <th>View</th>
        <th>Control</th>
      </tr>
    </thead>
    <tbody>
		<?php
		$count = 1;
		$select_mes = "SELECT * FROM contact_msg";
		$result_msg = $conn->query($select_mes);
		foreach ($result_msg as $key_msg) {
?>
<tr>
      	<td><?php echo $count++ ?></td>
        <td><?php echo $key_msg['name']; ?></td>
        <td><?php if($key_msg['view'] == '0'){echo "unseen";}else{echo "seen";} ?></td>
        
        <td><a href="view_msg.php?id=<?php echo $key_msg['id']; ?>" class="btn btn-primary">View Message</a>
        <?php
        if ($_SESSION['id_priv'] == 100) {
        
        ?>
        	<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $key_msg['id']; ?>">
  Delete
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $key_msg['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are You Sure To Delete Message From<span style="color: red;"> <?php echo $key_msg['name']; ?></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_msg.php?id=<?php echo $key_msg['id']; ?>"><button  class="btn btn-danger">Delete</button></a>
      </div>
    </div>
  </div>
</div>
        <?php } ?>
        </td>
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

$("#list4").addClass("active");

})
</script>