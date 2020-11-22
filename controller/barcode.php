<?php

include '../include/connection.php';

$c_type = $_POST['c_type'];
$item_name = $_POST['item_name'];
$loc_type = $_POST['loc_type'];
$dsn = $_POST['dsn'];
$query = "INSERT INTO `barcode`(`category`, `item`, `location`, `dsn`) VALUES ('" . $c_type . "','" . $item_name . "','" . $loc_type . "','" . $dsn . "')";
$result = mysqli_query($conn, $query);
if (!$result) {
    $flag = FALSE;
    die('invalid query');
   
} else {
    echo 'record added';
    header("LOCATION:../Tables/barcode.php");
}
mysqli_close($conn);
?>

