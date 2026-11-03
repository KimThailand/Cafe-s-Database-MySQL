<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Best Seller</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.banner-top{
    		display: block;
            width: 100%;
            height: 320px;
            object-fit: cover;
            object-position: center 60%;
}
.chart{
    display:flex;
    align-items:flex-end;
    gap:10px;
    margin-top:20px;
}
.chart-item{
    width:70px;
    text-align:center;
}
.bar{
    width:50px;
    background:#087ff5;
    margin:auto;
}
</style>
</head>

<body>

<img src="bannercafe.jpg" class="banner-top">

<div class="container mt-4">

<div class="mb-3">
<a class="btn btn-primary" href="aboutme.html">HOME</a>
<a class="btn btn-primary" href="show_all_data.php">MENU</a>
<a class="btn btn-primary" href="show_all_data2.php">CUSTOMER</a>
<a class="btn btn-primary" href="regis_page.php">SELL</a>
<a class="btn btn-primary" href="good_customer.php">Good_customer</a>
<a class="btn btn-warning" href="good_menu.php">Best_Seller</a>
<a class="btn btn-primary" href="login.php">LOGIN</a>
</div>

<div class="text-center mt-4 mb-4 h3 alert alert-success">
สินค้าขายดี ของ ร้านคาเฟ่
</div>

<?php
include("connect.php");

$sql="SELECT menu.menu_id,menu.menu_name,
COUNT(sell.sell_id) sumquan,SUM(menu.price) sumcost
FROM sell
INNER JOIN menu ON sell.sell_idmenu=menu.menu_id
GROUP BY menu.menu_id,menu.menu_name
ORDER BY sumcost DESC";

$result=mysqli_query($conn,$sql);
if(!$result) die("SQL Error : ".mysqli_error($conn));
?>

<table class="table table-striped table-bordered">
<tr class="table-info text-center">
<th>รหัสสินค้า</th>
<th>ชื่อสินค้า</th>
<th>จำนวนชิ้น</th>
<th>ราคารวม</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>
<tr>
<td class="text-center"><?php echo $row["menu_id"]; ?></td>
<td><?php echo $row["menu_name"]; ?></td>
<td class="text-center"><?php echo $row["sumquan"]; ?></td>
<td class="text-center"><?php echo number_format($row["sumcost"]); ?></td>
</tr>
<?php } ?>
</table>

<div class="chart">
<?php
mysqli_data_seek($result,0);
while($row=mysqli_fetch_assoc($result)){
?>
<div class="chart-item">
<b><?php echo number_format($row["sumcost"]); ?></b>
<div class="bar" style="height:<?php echo $row["sumcost"]/2; ?>px"></div>
<?php echo $row["menu_id"]; ?>
</div>
<?php } mysqli_close($conn); ?>
</div>

</div>
</body>
</html>