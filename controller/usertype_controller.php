<?php
include '../include/connection.php';

$type=$_POST['type'];
$query= "INSERT INTO user_type (type) VALUES ('".$type."') ";
 $result = mysqli_query($conn, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
         header("LOCATION:../Tabs/user_type.php"); 
    }
    mysqli_close($conn);
?>