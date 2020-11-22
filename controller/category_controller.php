<?php
include '../include/connection.php';

$category=$_POST['category'];
$query= "INSERT INTO category (cat_name) VALUES ('".$category."') ";
 $result = mysqli_query($conn, $query);
 if (!$result) {
        $flag = FALSE;
        die('invalid query'); 
    } else {
        echo 'record added';
     header("LOCATION:../Tabs/category.php");    
    }
    mysqli_close($conn);
?>



