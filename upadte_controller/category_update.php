<?php
include '../include/connection.php';
$cat_id= $_POST['cat_id'];
$cat_name= $_POST['cat_name'];
$query = "UPDATE `deadstock`.`category` SET `cat_name`='$cat_name' WHERE `cat_id`='$cat_id'";
echo $query;
$result = mysqli_query($conn,$query);
if (!$result) {
    $flag = FALSE;
    die('invalid query');
} else {
    echo 'record update';
     header("LOCATION:../Tabs/category.php");
}
mysqli_close($conn);
?>
