<?php
include '../include/connection.php';

$item_name=$_POST['item_name'];
$c_type=$_POST['c_type'];
$query= "INSERT INTO `item`(`i_name`, `cat_id`) VALUES ('".$item_name."','".$c_type."') ";
 $result = mysqli_query($conn, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
                header("LOCATION:../Tabs/item.php");
    }
    mysqli_close($conn);
?>

