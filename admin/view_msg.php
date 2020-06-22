<?php

session_start();

if (isset($_SESSION['email'])) {
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
<?php	
        $id = $_GET['id'];
        $select_mes = "SELECT * FROM contact_msg WHERE id = $id ";
        $result_mes = $conn->query($select_mes);
        $row_mes = $result_mes->fetch_assoc();

$update_mes = "UPDATE contact_msg SET view = '1' WHERE id = $id";
$conn->query($update_mes);

?>
<div>
    <center>
      <h2 style="font-weight: bold;">Name:<?php echo $row_mes['name']; ?></h2>
      <p>phone:<?php echo $row_mes['phone']; ?></p>
      <p>email:<?php echo $row_mes['email']; ?></p>
      <p>Time:<?php echo $row_mes['msg_date']; ?></p>
      <p style="font-size: 30px;">Message:<?php echo $row_mes['message']; ?></p>
      <a href="message.php" class="btn btn-primary">Go Back</a>
    </center>
  </div>
			
		</div><!--/.row-->


<?php
}
else
{
    header("location: login.php");
}

include 'design/footer.php';
?>