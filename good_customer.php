<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Good Customer</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

.banner-top{
    		display: block;
            width: 100%;
            height: 320px;
            object-fit: cover;
            object-position: center 60%;
}

.graph{
    display:flex;
    align-items:center;
    gap:10px;
}

.bar{
    height:25px;
    background:#087ff5;
}

</style>

</head>


<body>


<img src="bannercafe.jpg" class="banner-top">


<div class="container mt-4">


<!-- เมนู -->

<div class="mb-3">

    <a class="btn btn-primary" href="aboutme.html">
        HOME
    </a>

    <a class="btn btn-primary" href="show_all_data.php">
        MENU
    </a>

    <a class="btn btn-primary" href="show_all_data2.php">
        CUSTOMER
    </a>

    <a class="btn btn-primary" href="regis_page.php">
        SELL
    </a>

    <a class="btn btn-warning" href="good_customer.php">
        Good_customer
    </a>

    <a class="btn btn-primary" href="good_menu.php">
        Best_Seller
    </a>
    <a class="btn btn-primary" href="login.php">
        LOGIN
    </a>



</div>


<!-- หัวข้อ -->

<div class="text-center mt-4 mb-4 h3 alert alert-success">

    ลูกค้าชั้นดี ของร้านคาเฟ่

</div>


<?php

include("connect.php");


/* ดึงข้อมูลลูกค้า
   เรียงจากยอดซื้อสูงสุด */

$sql = "SELECT
            customer.name_customer,
            customer.member,
            SUM(menu.price) AS sumcost

        FROM sell

        INNER JOIN menu
        ON sell.sell_idmenu = menu.menu_id

        INNER JOIN customer
        ON sell.sell_customer = customer.menu_di

        GROUP BY
            customer.menu_di,
            customer.name_customer,
            customer.member

        ORDER BY sumcost DESC";


$result = mysqli_query($conn, $sql);


/* ตรวจสอบ SQL */

if(!$result){

    die("SQL Error : " . mysqli_error($conn));

}

?>


<!-- ตารางลูกค้าชั้นดี -->

<table class="table table-striped table-bordered">


<tr class="table-info text-center">

    <th>รายการที่</th>

    <th>ชื่อลูกค้า</th>

    <th>สิทธิ์สมาชิก</th>

    <th>ราคารวม</th>

</tr>


<?php


if(mysqli_num_rows($result) > 0){

    $top = 1;


    while($row = mysqli_fetch_assoc($result)){

        /*
        ลดความยาวของกราฟ
        เช่น 400 บาท / 2 = 200 px
        */

        $bar = $row["sumcost"] / 2;

?>


<tr>


    <!-- ลำดับ -->

    <td class="text-center">

        <?php echo $top; ?>

    </td>


    <!-- ชื่อลูกค้า -->

    <td>

        <?php echo $row["name_customer"]; ?>

    </td>


    <!-- สมาชิก -->

    <td class="text-center">

        <?php echo $row["member"]; ?>

    </td>


    <!-- ยอดซื้อ + กราฟ -->

    <td>

        <div class="graph">

            <b>
                <?php echo number_format($row["sumcost"]); ?>
            </b>

            <div
                class="bar"
                style="width:<?php echo $bar; ?>px">
            </div>

        </div>

    </td>


</tr>


<?php

        $top++;

    }


}else{


?>


<tr>

    <td colspan="4" class="text-center">

        ไม่มีข้อมูล

    </td>

</tr>


<?php

}


mysqli_close($conn);

?>


</table>


</div>


</body>

</html>