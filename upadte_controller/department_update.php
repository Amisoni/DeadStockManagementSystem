<?php
include '../include/connection.php';
$dept_id= $_POST['dept_id'];
$dept_name= $_POST['dept_name'];
$query = "UPDATE `deadstock`.`department` SET `dept_name`='$dept_name' WHERE `dept_id`='$dept_id'";
echo $query;
$result = mysqli_query($conn,$query);
if (!$result) {
    $flag = FALSE;
    die('invalid query');
} else {
    echo 'record update';
     header("LOCATION:../Tabs/department.php");
}
mysqli_close($conn);
?>
