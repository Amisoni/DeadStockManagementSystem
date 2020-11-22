<?php

include '../include/connection.php';

$cat_id = $_GET['cat_id'];

$query = "DELETE FROM  category WHERE cat_id = '" . $cat_id . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
    header("LOCATION:../Tabs/category.php");
}
mysqli_close($conn);
?>
