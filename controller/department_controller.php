<?php
include '../include/connection.php';

$dept_name=$_POST['dept_name'];
$query= "INSERT INTO department (dept_name) VALUES ('".$dept_name."') ";
 $result = mysqli_query($conn, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
                header("LOCATION:../Tabs/department.php");
    }
    mysqli_close($conn);
?>
