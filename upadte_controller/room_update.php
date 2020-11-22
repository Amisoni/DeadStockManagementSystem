<?php
include '../include/connection.php';
$room_id=$_POST['room_id'];
$room_name=$_POST['room_name'];
$room_no=$_POST['room_no'];
$room_type=$_POST['room_type'];
$query= "UPDATE `deadstock`.`room` SET `room_type`='".$room_type."',room_name='".$room_name."' WHERE `room_id`='".$room_id."';";
 $result = mysqli_query($conn, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
     header("LOCATION:../Tabs/room.php");    
    }
    mysqli_close($conn);
?>
