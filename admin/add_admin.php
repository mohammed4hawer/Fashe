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
			<form action="function/add_admin.php" method="post" enctype="multipart/form-data">
      <label>Username:</label>
     <input type="text" name="username" class="form-control">
     <label>Password:</label>   
     <input type="password" name="password" class="form-control"> 
     <label>Email:</label>  
     <input type="email" name="email" class="form-control">
     <label>Img:</label>   
     <input type="file" name="img"  class="form-control"> 
     <label>Privilege:</label>     
     <select class="form-control" name="priv">
      <option selected="" disabled="">Choose Privilege</option>
      <?php 
      $select_priv = "SELECT * FROM priv";
      $result_priv = $conn->query($select_priv);
      foreach ($result_priv as $key_priv) {
       ?>
       <option value="<?php echo $key_priv['id']; ?>"><?php echo $key_priv['priv_name']; ?></option>
     <?php } ?>
     </select> 
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

 
		