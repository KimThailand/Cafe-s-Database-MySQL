<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>เพิ่มรายการร้านคาเฟ่</title>
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


<a class="btn btn-primary" href="show_all_data.php" role="button">HOME</a>

<div class="text-center mt-4 mb-4 h3 alert alert-success" role="alert">
    เพิ่มรายการร้านคาเฟ่
</div>

<div class="row">
<div class="col-sm-6">


<form action="insert_stu.php" method="POST">

    <label for="menu_name">menu_name</label>
    <input type="text" name="menu_name" id="menu_name" class="form-control" placeholder="...ชื่อเมนู" required> <br>

    <label for="category">category</label>
    <input type="text" name="category" id="category" class="form-control" placeholder="...ประเภท" required> <br>

    <label for="price">price</label>
    <input type="text" name="price" id="price" class="form-control" placeholder="...ราคา" required> <br>

    <label for="day">day</label>
    <input type="text" name="day" id="day" class="form-control" placeholder="...วันที่ " required> <br>

    
    <input type="submit" value="Submit" class="btn btn-success">
    <a href="show_all_data.php" class="btn btn-warning" role="button">Cancel</a>

</form>

</div>
</div>
</div>
</body>
</html>