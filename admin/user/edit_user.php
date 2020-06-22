<?php
session_start();
if(isset($_SESSION['email'])){

include 'design/header.php';
include 'design/nav.php';
include 'design/side.php';

$id = $_GET['id'];
$select_user = "SELECT * FROM users WHERE id = $id";
$result_user = $conn->query($select_user);
$fetch_user = $result_user->fetch_assoc();

?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">User</li>
			</ol>
		</div><!--/.row-->
		
<div class="row">
	<form action="fun/update_user.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $id ?>">
     <label>Username:</label>
     <input type="text" name="username" class="form-control" value="<?php echo $fetch_user['name'] ?>">
     <label>Password:</label>   
     <input type="password" name="password" class="form-control"> 
     <label>Email:</label>  
     <input type="email" name="email" class="form-control" value="<?php echo $fetch_user['email']; ?>">
     <label>Img:</label>
     <img style="width: 100px;height: 100px;" src="../images/<?php echo $fetch_user['img']; ?>">   
     <input type="file" name="img"  class="form-control"> 
     
     <br>
     <input type="submit" name="submit" value="Apply Changes" class="btn btn-info"> 
      </form>
			
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
});
</script>