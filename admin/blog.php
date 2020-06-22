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
				<li class="active">Blog</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
      <?php
      if ($_SESSION['id_priv'] == 100) {

      ?>
    <a href="add_blog.php" class="btn btn-warning">Add New Blog</a>
    <?php 
    } 
      ?>
		
			<table class="table table-hover">
    <thead>
      <tr>
      	<th>#</th>
        <th>Blog Name</th>
        <th>Blog Content</th>
        <th>Image</th>
        <th>Date</th>
        <th>Administrator</th>
      </tr>
    </thead>
    <tbody>
  <?php
  $count = 1;
  $select_blog = "SELECT * FROM blog";
  $result_blog = $conn->query($select_blog);
  foreach ($result_blog as $key_blog) {	
   	
  
   ?>	
      <tr>
      	<td><?php echo $count++ ?></td>
        <td><a href="blog_details.php?id=<?php echo $key_blog['id']; ?>"><?php echo $key_blog['blog_title']; ?></a></td>
        <td class="blogcontent"><?php echo $key_blog['blog_content']; ?></td>
        <td><img src="images/<?php echo $key_blog['blog_img']; ?>" style="width: 60px; height: 50px;"></td>
        <td><?php echo $key_blog['blog_date']; ?></td>
        <td><?php 
        $id = $key_blog['blog_admin'];  
        $select_blog_admin = "SELECT * FROM admin WHERE id= $id";
        $result_blog_admin = $conn->query($select_blog_admin);
        $row_blog_admin = $result_blog_admin ->fetch_assoc();

        echo $row_blog_admin['admin_name']; ?>
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

$("#list5").addClass("active");

})
</script>