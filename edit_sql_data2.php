<?php
include("connect.php");

$menu_id = $_POST["menu_di"];
$menu_name = $_POST["name_customer"];
$category = $_POST["member"];
$price = $_POST["address"];
$day = $_POST["phone"];

$sql = "UPDATE customer SET name_customer='$menu_name' ,member='$category', address='$price' , phone='$day'
WHERE menu_di=$menu_id";
if (mysqli_query($conn, $sql)) { // run sql และ เปรียบเทียบผล ถ้าท างานส าเร็จ จะให้ผลเป็นจริง
//echo "New record created successfully";
echo "<script> window.alert('บันทึกข้อมูลสำเร็จok'); </script>";
echo "<script> window.location.assign('show_all_data2.php'); </script>";
} 
else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<script> window.alert('ไม่สามารถบันทึกข้อมูลได้'); </script>";
echo "<script> window.location='show_all_data2.php'; </script>";
}
mysqli_close($conn);
?>

