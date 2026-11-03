<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>เพิ่มรายการลูกค้า</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
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
<br><br>


<a class="btn btn-primary" href="show_all_data2.php" role="button">HOME</a>

<div class="text-center mt-4 mb-4 h3 alert alert-success" role="alert">
    เพิ่มรายการลูกค้า
</div>

<div class="row">
<div class="col-sm-6">


<form action="insert_stu2.php" method="POST">

    <label for="name_customer">customer</label>
    <input type="text" name="name_customer" id="name_customer" class="form-control" placeholder="...ชื่อลูกค้า" required> <br>

    <label for="member">member</label>
    <input type="text" name="member" id="member" class="form-control" placeholder="...สิทธิ์สมาชิก" required> <br>

    <label for="address">address</label>
    <input type="text" name="address" id="address" class="form-control" placeholder="...ที่อยู่" required> <br>

    <label for="phone">phonenumber</label>
    <input type="text" name="phone" id="phone" class="form-control" placeholder="...เบอร์โทร " required> <br>

    
    <input type="submit" value="Submit" class="btn btn-success">
    <a href="show_all_data2.php" class="btn btn-warning" role="button">Cancel</a>

</form>

</div>
</div>
</div>
</body>
</html>