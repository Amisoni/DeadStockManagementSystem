<?php
include '../include/connection.php';


$dept_type=$_POST['dept_type'];
$gpr = $_POST['gpr'];
$i_name = $_POST['i_name'];
$c_type = $_POST['c_type'];
$qty = $_POST['qty'];
$price_p_unit = $_POST['price_p_unit'];
$mul = $_POST['mul'];
$order_no = $_POST['order_no'];
$order_date = $_POST['order_date'];
$specification = $_POST['specification'];
$manufacturer = $_POST['manufacturer'];
$in_detail = $_POST['in_detail'];

$targetfolder = "../pdfs/";
$targetfolder = $targetfolder . basename($_FILES['file']['name']);
$ok = 1;
$file_type = $_FILES['file']['type'];
if ($file_type == "application/pdf" || $file_type == "image/gif" || $file_type == "image/jpeg") {

    if (move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder)) {
        echo "The file " . basename($_FILES['file']['name']) . " is uploaded";
// echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
    } else {
        echo "Problem uploading file";
    }
} else {
    echo "You may only upload PDFs, JPEGs or GIF files.<br>";
}

$query = "INSERT INTO `allotment`(`gpr`, `item_name`, `category`, `quantity`, `price_per_unit`, `total_price`, `order_no`, `order_date`, `specification`, `manufacturer`, `invoicedetail`, `file`,`department`) "
        . "VALUES ('".$gpr."','".$i_name."','".$c_type."','".$qty."','".$price_p_unit."','".$mul."','".$order_no."','".$order_date."','".$specification."','".$manufacturer."','".$in_detail."','".$targetfolder."','".$dept_type."')";
echo $query;
$result = mysqli_query($conn, $query);
if (!$result) {
    $flag = FALSE;
    die('invalid query');
} else {
    echo 'record added';
    header("LOCATION:../Tabs/allotment.php");
}
mysqli_close($conn);

?>
