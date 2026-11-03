<!-- File name show_all_data.php -->

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>listMenu</title>

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


<div class="container mt-4">


<div class="d-flex justify-content-between mb-3">

    <div>
        <a class="btn btn-primary" href="aboutme.html">
            HOME
        </a>

        <a class="btn btn-warning" href="show_all_data.php">
            MENU
        </a>

        <a class="btn btn-primary" href="show_all_data2.php">
            CUSTOMER
        </a>

        <a class="btn btn-primary" href="regis_page.php">
            SELL
        </a>

        <a class="btn btn-primary" href="good_customer.php">
            Good_customer
        </a>

        <a class="btn btn-primary" href="good_menu.php">
        Best_Seller
        </a>

        <a class="btn btn-primary" href="login.php">
        LOGIN
        </a>

        

    </div>


</div>


<div class="text-center mt-4 mb-4 h3 alert alert-success">

    รายการเมนูร้านคาเฟ่

</div>



<?php

include("connect.php");

?>


<div class="col-md-15 mx-auto">




<table class="table table-striped table-bordered">


<tr class="table-info text-center">

    <th>รหัส</th>
    <th>ชื่อเมนู</th>
    <th>ประเภท</th>
    <th>ราคา</th>
    <th>วันที่เพิ่มเมนู</th>
    <th colspan="2" class="text-center">
        <a class="btn btn-success" href="insert_fr_stu.php">
            Add+
        </a>
    </th>

</tr>



<?php


$sql = "SELECT menu_id, menu_name, category, price, day FROM menu";

$result = mysqli_query($conn,$sql);



if($result && mysqli_num_rows($result)>0){


    while($row = mysqli_fetch_assoc($result)){


        $del_id = $row["menu_id"];

?>


<tr>


<td class="text-center">
    <?php echo $row["menu_id"]; ?>
</td>


<td>
    <?php echo $row["menu_name"]; ?>
</td>


<td>
    <?php echo $row["category"]; ?>
</td>


<td class="text-center">
    <?php echo $row["price"]; ?>
</td>


<td class="text-center">
    <?php echo $row["day"]; ?>
</td>



<td class="text-center">

<a class="btn btn-warning"
href="edit_form_data.php?menu_id=<?php echo $row['menu_id']; ?>">

Edit

</a>

</td>



<td class="text-center">

<a class="btn btn-danger"
href="delete_data.php?del_id=<?php echo $row['menu_id']; ?>"
onclick="return confirm('คุณต้องการลบเมนู ID=<?php echo $del_id; ?>?');">

Delete

</a>

</td>


</tr>


<?php

    }

}else{


echo "

<tr>

<td colspan='7' class='text-center'>

ไม่มีข้อมูล

</td>

</tr>

";


}


mysqli_close($conn);


?>


</table>


</div>


</div>


</body>

</html>