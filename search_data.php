<?php
include 'admin/function/connect_db.php';

$data = $_POST['word'];
$select_product = "SELECT * FROM product WHERE pro_name LIKE '%$data%'";
$result_data = $conn->query($select_product);
foreach ($result_data as $key_data) {
    ?>
    <li class="blur"><a href="product-detail.php?id=<?php echo $key_data['id']; ?>"><?php echo $key_data['pro_name']; ?></a></li>

    <?php
}

?>