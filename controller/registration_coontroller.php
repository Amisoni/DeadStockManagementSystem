<?php
include '../include/connection.php';
session_start();
$firstname = $_POST['InputFName'];
$lastname = $_POST['InputMName'];
$middlename = $_POST['InputLName'];
$birthdate = $_POST['date'];
$password = $_POST['txtPassword'];
$email = $_POST['InputEmail'];
//$gender = $_POST['rBtnGender'];
$gender = $_POST['optradio'];
$phonenumber = $_POST['txtNo'];
$type = $_POST['type'];
$add_line_one = $_POST['txtAdd'];
$add_line_two = $_POST['txtAdd2'];

$valid_formats = array("jpg", "jpeg", "png");
$max_file_size = 1024 * 1024 * 1; //1 MB
$targetPath = "";
$flagFileUpload = FALSE;
if (isset($_FILES["flUserPhoto"]["type"])) {
    $file_extension = strtolower(pathinfo($_FILES["flUserPhoto"]["name"], PATHINFO_EXTENSION));
    //($_FILES["flUserPhoto"]["type"] == "application/pdf") &&
    if (($_FILES["flUserPhoto"]["size"] <= $max_file_size) && in_array($file_extension, $valid_formats)) {
        if ($_FILES["flUserPhoto"]["error"] > 0) {
            $flag = FALSE;
            echo "Please enter valid photo: " . $_FILES["flUserPhoto"]["error"] . "<br/><br/>";
        } else {    
            $sourcePath = $_FILES['flUserPhoto']['tmp_name']; // Storing source path of the file in a variable
            $targetPath = '../profile_photo/' . time() . '_' . uniqid() . '.' . $file_extension; // Target path where file is to be stored
            $fileResult = move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file    
            $flagFileUpload = TRUE;
        }
    }
}

$query = "INSERT INTO registration(profile_photo,firstname, middlename, lastname, gender, birthdate, email, password,mobile_no,add_line1,add_line2,no)"
        . " VALUES ('" . $targetPath . "','" . $firstname . "','" . $middlename . "','" . $lastname . "','" . $gender . "','" . $birthdate . "','" . $email . "','" . $password . "','" . $phonenumber . "','" . $add_line_one . "','" . $add_line_two . "','" . $type . "')";

echo $query;
$result = mysqli_query($conn, $query);
if (!$result) {
    $flag = FALSE;
    die('invalid query');
    header("LOCATION:../signup.php");
} else {
    echo 'record added';
    $id = mysqli_insert_id($conn);
    $_SESSION['reg_id'] = $id;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['profile_photo'] = $targetPath;
    header("LOCATION:../index.php");
}
mysqli_close($conn);
?>
