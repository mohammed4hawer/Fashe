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
				<li class="active">Blog Content</li>
			</ol>
		</div><!--/.row-->
		<div class="row">
            <?php
            $id = $_GET['id'];
            $select_blog_d = "SELECT * FROM blog WHERE id=$id";
            $result_blog_d = $conn->query($select_blog_d);
            $row_blog_d = $result_blog_d->fetch_assoc();

            ?>

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(../images/heading-pages-05.jpg);">
<h2 class="l-text2 t-center">
<?php echo $row_blog_d['blog_title']; ?>
</h2>
</section>
<!-- ===================================================================== -->
<section class="bgwhite p-t-60">
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-9 p-b-75">
<div class="p-r-50 p-r-0-lg">
<div class="item-blog p-b-80">

<a href="#" class="item-blog-img pos-relative dis-block hov-img-zoom">
<img src="images/<?php echo $row_blog_d['blog_img']; ?>" alt="IMG-BLOG" style="width: 820px; height: 481px;">
<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
<?php
echo $row_blog_d['blog_date'];
?>
</span>
</a>
<div class="item-blog-txt p-t-33">
<h4 class="p-b-11">
<a href="../blog-detail.php" class="m-text24">
Black Friday Guide: Best Sales & Discount Codes
</a>
</h4>
<div class="s-text8 flex-w flex-m p-b-21">
<span>
By Admin
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
Cooking, Food
<span class="m-l-3 m-r-6">|</span>
</span>
<span>
8 Comments
</span>
</div>
<br>
<p class="p-b-12">
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce eget dictum tortor. Donec dictum vitae sapien eu varius
<br><br>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ad rerum similique natus neque molestiae cupiditate vitae enim! Possimus, impedit doloribus optio aliquid vitae ut nobis labore aliquam ducimus corrupti!
<br>
Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis modi, consequatur nam quas distinctio numquam iusto quae mollitia. Iusto, aliquam accusantium quis doloremque sequi praesentium. Rem porro modi facere necessitatibus!
<br>
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores ratione deleniti totam, ipsa quibusdam in! Ad cupiditate explicabo mollitia architecto dolore? Quod pariatur praesentium at nemo non laudantium est nisi?
</p><br>
<!--================================================================-->
<?php
        if ($_SESSION['id_priv'] == 100) {
        
        ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModel<?php echo $row_blog_d['id'] ?>">
  Edit This Blog
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModel<?php echo $row_blog_d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Edit Blog</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: #003; font-size: 20px; font-weight: 600;">
       Editing <?php echo $row_blog_d['blog_title']; ?> Blog
	  </div>
<!--==============================================================-->	  
	  <form action="function/update_blog.php" method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<label>&nbsp; Blog Title:</label>
				<input type="text" name="name" class="form-control" value="<?php echo $row_blog_d['blog_title']; ?>"><br>
				<label>&nbsp; Content:</label>
				<textarea name="content" class="form-control"><?php echo $row_blog_d['blog_content']; ?></textarea><br>
				<label>&nbsp; Blog Image:</label><br>
				<img style="width: 100px; height: 100px;" src="images/<?php echo $row_blog_d['blog_img']; ?>"> 
        <input type="file" name="img" class="form-control"><br>
        
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		<input type="submit" name="submit" value="Edit Blog" class="btn btn-info">
	  </div>
	  </form>
    </div>
  </div>
</div>
<!--===============================================================-->
<span>&nbsp; &nbsp;</span>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row_blog_d['id'] ?>">
  Delete This Blog
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $row_blog_d['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Are You Sure To Delete<span style="color: red; font-weight: 600;"> <?php echo $row_blog_d['blog_title']; ?> Blog</span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="function/delete_blog.php?id=<?php echo $row_blog_d['id']; ?>"><button  class="btn btn-danger">Delete This Blog</button></a>
      </div>
    </div>
  </div>
</div>
        <?php } ?>
<!--==================================================================-->
</div>
</div>
</div>
</div>
</section>
<!-- ===================================================================== -->
		</div><!--/.row-->

<?php
}
else
{
	header("location: login.php");
}
include 'design/footer.php';
?>