<!DOCTYPE html>
<html lang="th">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ร้านคาเฟ่</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
:root{
    --coffee-dark:#5a3418;
    --coffee:#86592d;
    --coffee-light:#d9b48a;
    --cream:#ffffe6;
    --cream-card:#fffdf5;
}

body{
    background:var(--cream);
}

/* แบนเนอร์ (คงเดิม) */
.banner{
    display:block;
    width:100%;
    height:320px;
    object-fit:cover;
    object-position:center 60%;
}

/* เมนูด้านบน */
.nav-menu .btn{
    border-radius:50px;
    padding:8px 20px;
    font-weight:500;
    box-shadow:0 2px 6px rgba(0,0,0,.12);
    transition:.2s;
}

.nav-menu .btn:hover{
    transform:translateY(-2px);
    box-shadow:0 5px 12px rgba(0,0,0,.2);
}

/* หัวข้อ */
.page-title{
    background:linear-gradient(135deg,var(--coffee),var(--coffee-dark));
    color:white;
    text-align:center;
    padding:18px;
    border-radius:15px;
    font-weight:bold;
    letter-spacing:.5px;
    box-shadow:0 5px 15px rgba(90,52,24,.3);
}

/* กล่องฟอร์ม */
.form-box{
    background:var(--cream-card);
    padding:28px;
    border-radius:20px;
    border:1px solid #ecdcc4;
    box-shadow:0 6px 22px rgba(90,52,24,.12);
}

.form-box h5{
    font-weight:bold;
    margin-bottom:20px;
    color:var(--coffee-dark);
    padding-bottom:10px;
    border-bottom:2px dashed var(--coffee-light);
}

.form-box label{
    font-weight:500;
    color:var(--coffee);
    margin-bottom:5px;
}

.form-box .form-control{
    border-radius:10px;
    border:1px solid #e5d3b8;
    padding:10px 14px;
    background:white;
}

.form-box .form-control:focus{
    border-color:var(--coffee);
    box-shadow:0 0 0 .2rem rgba(134,89,45,.2);
}

.form-box .btn{
    border-radius:50px;
    padding:8px 26px;
    font-weight:500;
}

/* หัวข้อรายการสินค้า */
.section-title{
    font-weight:bold;
    color:var(--coffee-dark);
    margin-bottom:15px;
}

/* รายการสินค้า */
.product-list{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:15px;
}

.product-card{
    background:var(--cream-card);
    border:1px solid #ecdcc4;
    border-radius:18px;
    overflow:hidden;
    transition:.25s;
    box-shadow:0 4px 12px rgba(90,52,24,.1);
}

.product-card:hover{
    transform:translateY(-6px);
    box-shadow:0 12px 26px rgba(90,52,24,.22);
}

.product-card.selected{
    border:3px solid #198754;
    box-shadow:0 8px 22px rgba(25,135,84,.3);
}

.product-img{
    width:100%;
    height:150px;
    object-fit:cover;
    cursor:pointer;
    transition:.3s;
}

.product-card:hover .product-img{
    transform:scale(1.05);
}

.product-card .card-body{
    padding:12px;
}

.card-title{
    font-size:17px;
    font-weight:bold;
    color:var(--coffee-dark);
}

.product-card p{
    margin-bottom:5px;
    font-size:14px;
    color:#6b5035;
}

.price{
    color:#c0392b;
    font-size:16px;
}

.select-text{
    color:#198754 !important;
    font-weight:bold;
    display:none;
}

.selected .select-text{
    display:block;
}

/* ตาราง */
.table-wrap{
    background:var(--cream-card);
    border-radius:18px;
    padding:20px;
    border:1px solid #ecdcc4;
    box-shadow:0 6px 22px rgba(90,52,24,.12);
    overflow-x:auto;
}

.table-wrap table{
    margin-bottom:0;
}

.table-wrap thead th,
.table-wrap tr.table-head th{
    background:var(--coffee) !important;
    color:white !important;
    border-color:var(--coffee) !important;
    padding:12px;
}

.table-wrap td{
    vertical-align:middle;
    padding:10px;
}

@media(max-width:576px){
    .product-list{
        grid-template-columns:1fr;
    }

    .banner{
        height:200px;
    }
}
</style>
</head>

<body>

<img src="bannercafe.jpg" class="banner" alt="Banner">

<div class="container mt-4">

<!-- เมนูด้านบน -->
<div class="d-flex justify-content-between mb-3 nav-menu">

    <div class="d-flex flex-wrap gap-2">

        <a class="btn btn-primary" href="aboutme.html">HOME</a>

        <a class="btn btn-primary" href="show_all_data.php">MENU</a>

        <a class="btn btn-primary" href="show_all_data2.php">CUSTOMER</a>

        <a class="btn btn-warning" href="regis_page.php">SELL</a>

        <a class="btn btn-primary" href="good_customer.php">Good_customer</a>

        <a class="btn btn-primary" href="good_menu.php">Best_Seller</a>

        <a class="btn btn-primary" href="login.php">LOGIN</a>

    </div>

</div>


<!-- หัวข้อ -->
<div class="page-title h3 mt-4 mb-4">
    ☕ ระบบซื้อ-ขาย ร้านคาเฟ่
</div>


<div class="row g-4">

<!-- ฟอร์ม -->
<div class="col-md-6">

<div class="form-box">

<h5>📝 บันทึกรายการซื้อ-ขาย</h5>

<form action="regis_save.php" method="POST">

<label>รหัสลูกค้า</label>

<input type="text"
       name="sell_customer"
       class="form-control"
       placeholder="...รหัสลูกค้า"
       required>

<br>

<label>รหัสสินค้า</label>

<input type="text"
       name="sell_idmenu"
       id="sell_idmenu"
       class="form-control"
       placeholder="กดรูปสินค้าเพื่อเลือกรหัสสินค้า"
       readonly
       required>

<br>

<label>ซื้อวันที่</label>

<input type="text"
       name="sell_day"
       class="form-control"
       placeholder="...ซื้อวันที่ เช่น 12/08/2026"
       required>

<br>

<input type="submit"
       value="บันทึก"
       class="btn btn-success">

<input type="reset"
       value="เคลียร์"
       class="btn btn-warning"
       onclick="clearProduct()">

</form>

</div>
</div>


<!-- รายการสินค้า -->
<div class="col-md-6">

<h5 class="section-title">🍰 รายการสินค้าในร้าน</h5>

<div class="product-list">

<?php

include("connect.php");

$result_menu=mysqli_query($conn,"SELECT * FROM menu");

while($menu=mysqli_fetch_assoc($result_menu)){

?>

<div class="card product-card"
     id="product-<?php echo $menu["menu_id"]; ?>">

<img src="img/<?php echo $menu["menu_id"]; ?>.jpg"
     class="product-img"
     alt="<?php echo $menu["menu_name"]; ?>"
     onclick="selectProduct(<?php echo $menu["menu_id"]; ?>)">

<div class="card-body text-center">

<h5 class="card-title">
<?php echo $menu["menu_name"]; ?>
</h5>

<p>
รหัสสินค้า : <?php echo $menu["menu_id"]; ?>
</p>

<p class="price">
<strong>
ราคา <?php echo $menu["price"]; ?> บาท
</strong>
</p>

<p class="select-text">
✓ เลือกสินค้านี้แล้ว
</p>

</div>

</div>

<?php } ?>

</div>
</div>

</div>


<br>


<!-- รายการซื้อขายล่าสุด -->
<h5 class="section-title mt-3">🧾 แสดงรายการซื้อ-ขาย ล่าสุด 10 รายการ</h5>

<div class="table-wrap mb-5">

<table class="table table-striped table-bordered">

<tr class="table-head text-center">

<th>รายการที่</th>
<th>ชื่อลูกค้า</th>
<th>สินค้าที่ซื้อ</th>
<th>ราคา</th>
<th>ซื้อวันที่</th>

</tr>

<?php

$sql="SELECT * FROM sell
INNER JOIN menu
ON sell.sell_idmenu=menu.menu_id
INNER JOIN customer
ON sell.sell_customer=customer.menu_di
ORDER BY sell_id DESC
LIMIT 10";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){

?>

<tr>

<td class="text-center">
<?php echo $row["sell_id"]; ?>
</td>

<td>
<?php echo $row["name_customer"]; ?>
</td>

<td>
<?php echo $row["menu_id"]." - ".$row["menu_name"]; ?>
</td>

<td class="text-center">
<?php echo $row["price"]; ?>
</td>

<td class="text-center">
<?php echo $row["sell_day"]; ?>
</td>

</tr>

<?php

}

}else{

?>

<tr>

<td colspan="5" class="text-center">
ไม่มีข้อมูล
</td>

</tr>

<?php } ?>

</table>

</div>

</div>


<script>

function selectProduct(id){

    document.getElementById("sell_idmenu").value=id;

    document.querySelectorAll(".product-card")
    .forEach(x=>x.classList.remove("selected"));

    document.getElementById("product-"+id)
    .classList.add("selected");

}

function clearProduct(){

    document.getElementById("sell_idmenu").value="";

    document.querySelectorAll(".product-card")
    .forEach(x=>x.classList.remove("selected"));

}

</script>

</body>
</html>