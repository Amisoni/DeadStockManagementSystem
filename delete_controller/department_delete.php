<?php

include '../include/connection.php';

$dept_id = $_GET['dept_id'];

$query = "DELETE FROM  department WHERE dept_id = '" . $dept_id . "'";
$result = mysqli_query($conn, $query);

if ($result == 0) {
    echo'invalid query';
} else {
    echo 'record deleted';
    header("LOCATION:../Tabs/department.php");
}
mysqli_close($conn);
?>
