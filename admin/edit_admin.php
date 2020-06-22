<?php
session_start();

if(isset($_SESSION['email'])){

 include 'design/header.php';
 include 'design/nav.php';
 include 'design/sidebar.php';
 
 $id = $_GET['id'];
 $select_admins = "SELECT * FROM admin WHERE id = $id";
 $result_admins = $conn->query($select_admins);
 $row_admins = $result_admins->fetch_assoc();
 $id_priv = $row_admins['id_priv'];
 
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
			<form action="function/update_admin.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id ?>">
        <label>Username:</label>
     <input type="text" name="username" class="form-control" value="<?php echo $row_admins['admin_name'] ?>">
     <label>Password:</label>   
     <input type="password" name="password" class="form-control"> 
     <label>Email:</label>  
     <input type="email" name="email" class="form-control" value="<?php echo $row_admins['admin_email']; ?>">
     <label>Img:</label>
     <img style="width: 100px;height: 100px;" src="images/<?php echo $row_admins['img_admin']; ?>">   
     <input type="file" name="img"  class="form-control"> 
     <label>Priv:</label>     
     <select class="form-control" name="priv">
      
      <?php $select_priv = "SELECT * FROM priv ";
      $result_priv = $conn->query($select_priv);
      foreach ($result_priv as $key_priv) {
      	$id_privv = $key_priv['id'];

       ?>
       <option <?php if($id_priv == $id_privv ){echo "selected";} ?> value="<?php echo $key_priv['id']; ?>"><?php echo $key_priv['priv_name']; ?></option>
     <?php } ?>
     </select> 
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

 
		