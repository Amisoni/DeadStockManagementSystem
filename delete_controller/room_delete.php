<?php

include '../include/connection.php';

$room_id = $_GET['room_id'];

$query = "DELETE FROM  room WHERE room_id = '" . $room_id . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
    header("LOCATION:../Tabs/room.php");
}
mysqli_close($conn);
?>
