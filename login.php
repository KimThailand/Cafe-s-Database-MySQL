<!DOCTYPE html>
<html lang="th">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f5f5;
}

.banner-top{
    		display: block;
            width: 100%;
            height: 320px;
            object-fit: cover;
            object-position: center 60%;
}


/* กล่อง Login */

.login-box{
    width:420px;
    margin:50px auto;
    padding:35px;
    background:white;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,0.15);
}


/* หัว Login */

.login-title{
    text-align:center;
    font-size:28px;
    font-weight:bold;
    margin-bottom:10px;
}

.login-subtitle{
    text-align:center;
    color:#777;
    margin-bottom:30px;
}


/* ช่องกรอก */

.form-control{
    height:48px;
    border-radius:8px;
}


/* ปุ่ม */

.btn-login{
    width:100%;
    height:48px;
    border-radius:8px;
    font-size:17px;
    margin-top:10px;
}

.btn-reset{
    width:100%;
    height:45px;
    border-radius:8px;
    margin-top:10px;
}


/* ไอคอนหัว */

.login-icon{
    width:65px;
    height:65px;
    background:#0d6efd;
    color:white;
    border-radius:50%;
    margin:0 auto 15px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:30px;
}

</style>

</head>


<body>


<img src="bannercafe.jpg"
     class="banner-top">


<div class="container mt-4">


<!-- เมนู -->

<div class="mb-3">

<a class="btn btn-primary"
   href="aboutme.html">
HOME
</a>

<a class="btn btn-primary"
   href="show_all_data.php">
MENU
</a>

<a class="btn btn-primary"
   href="show_all_data2.php">
CUSTOMER
</a>

<a class="btn btn-primary"
   href="regis_page.php">
SELL
</a>

<a class="btn btn-primary"
   href="good_customer.php">
Good_customer
</a>

<a class="btn btn-primary"
   href="good_menu.php">
Best_Seller
</a>

<a class="btn btn-warning"
   href="login.php">
LOGIN
</a>

</div>


<!-- หัวข้อเว็บ -->




<!-- LOGIN -->

<div class="login-box">


<div class="login-icon">
👤
</div>


<div class="login-title">

Customer Login

</div>


<div class="login-subtitle">

กรุณากรอกรหัสลูกค้าและเบอร์โทรศัพท์

</div>


<form action="login_cheak.php" method="POST">


<label class="mb-2">
รหัสลูกค้า
</label>

<input type="text"
       name="customer_id"
       class="form-control"
       placeholder="กรอกรหัสลูกค้า"
       required>


<br>


<label class="mb-2">
เบอร์โทรศัพท์
</label>

<input type="text"
       name="phone"
       class="form-control"
       placeholder="กรอกเบอร์โทรศัพท์"
       required>


<button type="submit"
        class="btn btn-primary btn-login">

เข้าสู่ระบบ

</button>


<input type="reset"
       value="เคลียร์"
       class="btn btn-outline-secondary btn-reset">


</form>


</div>


</div>

</body>

</html>