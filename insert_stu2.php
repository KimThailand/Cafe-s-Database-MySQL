<?php
include("connect.php");
$menu_name = $_POST["name_customer"];
$category = $_POST["member"];
$price = $_POST["address"];
$day = $_POST["phone"];

$sql = "INSERT INTO customer(name_customer,member,address,phone)
VALUES('$menu_name','$category','$price','$day') ";
if (mysqli_query($conn, $sql)) {

echo "<script> window.alert('บันทึกข้อมูลสำเร็จ ok'); </script>";
echo "<script> window.location.assign('show_all_data2.php'); </script>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<script> window.alert('ไม่สามารถบันทึกข้อมูลได้'); </script>";
echo "<script> window.location='show_all_data2.php'; </script>";
}
mysqli_close($conn);
?>