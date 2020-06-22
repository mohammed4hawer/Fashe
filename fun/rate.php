<?php
include '../admin/function/connect_db.php';

$user_id = $_POST['user'];
$pro_id  = $_POST['pro'];
$rate    = $_POST['rate'];

//echo "$user_id / $pro_id / $rate"; 

$select_rat = "SELECT * FROM rate WHERE pro_id='$pro_id' && user_id='$user_id'";
$result_rat = $conn->query($select_rat);
$fetch_rat  = $result_rat->fetch_assoc();
$count      = $result_rat->num_rows;

if($count > 0 ){
    
    echo " Rated Before";
    
}
else{
    if ($user_id > 0) {
        
    
    $insert_rate  = "INSERT INTO rate (pro_id, user_id, rate_value) VALUES ('$pro_id', '$user_id', '$rate')";
    $conn->query($insert_rate);

$select_rate = "SELECT count(id) FROM rate WHERE pro_id='$pro_id'";
$result_rate = $conn->query($select_rate);
$fetch_rate  = $result_rate->fetch_assoc();
$countz      = $fetch_rate['count(id)'];


$select_rat5 = "SELECT count(id) FROM rate WHERE pro_id='$pro_id' && rate_value = 5 ";
$result_rat5 = $conn->query($select_rat5);
$row_rat5    = $result_rat5->fetch_assoc();
$rate5 		 = $row_rat5['count(id)'];

$select_rat4 = "SELECT count(id) FROM rate WHERE pro_id='$pro_id' && rate_value = 4 ";
$result_rat4 = $conn->query($select_rat4);
$row_rat4    = $result_rat4->fetch_assoc();
$rate4 		 = $row_rat4['count(id)'];

$select_rat3 = "SELECT count(id) FROM rate WHERE pro_id='$pro_id' && rate_value = 3 ";
$result_rat3 = $conn->query($select_rat3);
$row_rat3    = $result_rat3->fetch_assoc();
$rate3 		 = $row_rat3['count(id)'];

$select_rat2 = "SELECT count(id) FROM rate WHERE pro_id='$pro_id' && rate_value = 2 ";
$result_rat2 = $conn->query($select_rat2);
$row_rat2    = $result_rat2->fetch_assoc();
$rate2 		 = $row_rat2['count(id)'];

$select_rat1 = "SELECT count(id) FROM rate WHERE pro_id='$pro_id' && rate_value = 1 ";
$result_rat1 = $conn->query($select_rat1);
$row_rat1    = $result_rat1->fetch_assoc();
$rate1 		 = $row_rat1['count(id)'];

$totalrate   = ($rate5*5) + ($rate4*4) + ($rate3*3) + ($rate2*2) + ($rate1*1) ;

// echo var_dump($totalrate);

$ratetotal = $totalrate/$countz;
    
    
     $update_pros  = "UPDATE product SET pro_rate = '$ratetotal' WHERE id = '$pro_id' ";
     $conn->query($update_pros);
    
     echo "Rate sent (" . $ratetotal .")";
}
else
{
    echo "You have to login first to access this feature!";
}
}

?>
