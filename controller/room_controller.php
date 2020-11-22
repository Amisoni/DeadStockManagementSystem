<?php
include '../include/connection.php';

$room_name=$_POST['room_name'];
$room_no=$_POST['room_no'];
$room_type=$_POST['room_type'];
$query= "INSERT INTO room (room_name, room_no, room_type) VALUES ('".$room_name."','".$room_no."','".$room_type."') ";
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
