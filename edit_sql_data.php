<?php
include("connect.php");

$menu_id = $_POST["menu_id"];
$menu_name = $_POST["menu_name"];
$category = $_POST["category"];
$price = $_POST["price"];
$day = $_POST["day"];

$sql = "UPDATE menu SET menu_name='$menu_name' ,category='$category', price='$price' , day='$day'
WHERE menu_id=$menu_id";
if (mysqli_query($conn, $sql)) { // run sql และ เปรียบเทียบผล ถ้าท างานส าเร็จ จะให้ผลเป็นจริง
//echo "New record created successfully";
echo "<script> window.alert('บันทึกข้อมูลสำเร็จok'); </script>";
echo "<script> window.location.assign('show_all_data.php'); </script>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<script> window.alert('ไม่สามารถบันทึกข้อมูลได้'); </script>";
echo "<script> window.location='show_all_data.php'; </script>";
}
mysqli_close($conn);
?>

