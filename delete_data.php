<?php
include("connect.php"); //คือรวมการติดต่อเซิฟตเ์วอร์11 บรรทัดแรก ไว้ในไฟล์connect.php
$del_id=$_GET["del_id"]; //รับค่า id จากปุ่ ม มาใส่ไวใ้นตวัแปร $del_id
$sql = "DELETE FROM menu where menu_id=$del_id"; //ภาษา SQL ลบ
if (mysqli_query($conn, $sql)) {
//แจ้งการลบข้อมูลส าเร็จ แล้วให้กดปุ่ ม OK จะกลบัไปแสดงขอ้มูลท้งัหมด ที่หนา้ student.php
echo "<script> window.alert('การลบข้อมูลสำเร็จ ok'); </script>";
echo "<script> window.location.assign('show_all_data.php');

</script>";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
echo "<script> window.alert('ไม่สามารถลบข้อมูลได้'); </script>";
echo "<script> window.location='show_all_data.php'; </script>";
}
mysqli_close($conn);
?>