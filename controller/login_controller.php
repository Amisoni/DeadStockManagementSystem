<?php
session_start();
include '../include/connection.php';
$email = $_POST['InputEmail'];
$password = $_POST['txtPassword'];
$query = "SELECT  * FROM  registration WHERE email = '" . $email . "'  AND password = '" . $password . "' ";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $_SESSION['reg_id'] = $data['reg_id'];
    $_SESSION['firstname'] = $data['firstname'];
    $_SESSION['lastname'] = $data['lastname'];
    $_SESSION['profile_photo'] = $data['profile_photo'];
    $_SESSION['no'] = $data['no'];
    $var = $data['no'];
//    echo $var;
    if ($var == 1) {
        echo "<script>";
        echo "window.location='../index.php'";
        echo "</script>";
    } elseif ($var == 2) {
        echo "<script>";
        echo "window.location='../department_index.php'";
        echo "</script>";
    }
        elseif ($var == 3) {
        echo "<script>";
        echo "window.location='../storekeeper_index.php'";
        echo "</script>";
    }
} 
elseif ($email == '' && $password == '') {
    echo "<script>";
    echo "alert('UserName Or Passwor Is Blank')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../login.php'";
    echo "</script>";
} else {
    echo "<script>";
    echo "alert('UserName Or Passwor Is Wrong')";
    echo "</script>";
    echo "<script>";
    echo "window.location='../login.php'";
    echo "</script>";
}
//if ((mysqli_num_rows($result) > 0 && $no == '2')) {
//  $data = mysqli_fetch_assoc($result);
//    $_SESSION['reg_id'] = $data['reg_id'];
//    $_SESSION['firstname'] = $data['firstname'];
//    $_SESSION['lastname'] = $data['lastname'];
//    $_SESSION['profile_photo'] = $data['profile_photo'];
//    header("LOCATION:../Tabs/inward.php");
//    echo $query;
//    
//}
mysqli_free_result($result);
mysqli_close($conn);
?>


