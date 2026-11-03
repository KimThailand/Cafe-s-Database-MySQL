<?php
include("connect.php");
$edt_id=$_GET["menu_di"]; //รับค่า ID บรรทัดที่จะแก้ไข จากลิ้ง ใช้ GET
$sql = "SELECT  menu_di,name_customer, member,address,phone FROM customer where
menu_di=$edt_id"; // เขียน SQL ดึงข้อมูลบรรทัดที่จะแก้ไข
$result = mysqli_query($conn, $sql); // run SQL
$row = mysqli_fetch_assoc($result); // ดึงข้อมูลใส่ Array
// เอาข้อมูลจาก Array เก็บไว้ในตัวแปร ไว้ก่อน
$edt_id = $row["menu_di"];
$edt_name = $row["name_customer"];
$edt_category = $row["member"];
$edt_price = $row["address"];
$edt_day = $row["phone"];
?>
<!-- เขียนหน้าเวป แก้ไขชื่อนักศึกษา -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>edit</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
    .banner-top{
        	display: block;
            width: 100%;
            height: 320px;
            object-fit: cover;
            object-position: center 60%;
    }
</style>
<body>
<img src="bannercafe.jpg" class="banner-top" alt="Banner">

<div class="container">
<div class="row">
<div class="col-sm-6 ">
<br><br>
<a class="btn btn-primary" href="show_all_data2.php" role="button">HOME</a>
<div class="text-center mt-4 mb-4 h3 alert alert-success" role="alert">
    แก้ไขรายการของลูกค้า
</div>


<form action="edit_sql_data2.php" method="post">
<label for="">id</label>
<input type="text" name="menu_di" id="" class="form-control" placeholder="...id"
value="<?php echo $edt_id;?>" readonly> <br> <!—ไอดี อ่านได้อย่างเดียว -->

<label for="">customer</label>
<input type="text" name="name_customer" id="" class="form-control" placeholder="...=ชื่อลูกค้า"
value="<?php echo $edt_name;?>" required> <br> <!— required บังคับต้องป้อนข้อมูล -->

<label for="">member</label>
<input type="text" name="member" id="" class="form-control" placeholder="...สิทธิ์สมาชิก"
value="<?php echo $edt_category;?>" required> <br> <!— required บังคับต้องป้อนข้อมูล -->

<label for="">address</label>
<input type="text" name="address" id="" class="form-control" placeholder="...ที่อยู่"
value="<?php echo $edt_price;?>" required> <br>

<label for="">phonenumber</label>
<input type="text" name="phone" id="" class="form-control" placeholder="...เบอร์โทร"
value="<?php echo $edt_day;?>" required> <br>

<input type="submit" value="Submit" class="btn btn-success">
<a class="btn btn-primary" href="show_all_data2.php" role="button">Cancle</a>
</form>
</div></div>
</div>
</body>
</html>