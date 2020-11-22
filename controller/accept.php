<?php
include '../include/connection.php';
$allot_id= $_GET['allot_id'];
$query = "UPDATE `deadstock`.`allotment` SET `status`='Accept' WHERE `allot_id`='".$allot_id."';";
echo $query;
$result = mysqli_query($conn,$query);
if (!$result) {
    $flag = FALSE;
    die('invalid query');
} else {
    echo 'record update';
     header("LOCATION:../Tabs/allotment_list.php");
}
mysqli_close($conn);
?>
