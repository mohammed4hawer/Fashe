<?php
include 'admin/function/connect_db.php';

$data = $_POST['word_d'];
$select_blog = "SELECT * FROM blog WHERE blog_title LIKE '%$data%'";
$result_data = $conn->query($select_blog);
foreach ($result_data as $key_data) {
    ?>
    <li><a href="blog-detail.php?id=<?php echo $key_data['id']; ?>"><?php echo $key_data['blog_title']; ?></a></li>

    <?php
}

?>