<?php

include("connect.php");

$sell_customer = $_POST["sell_customer"];
$sell_idmenu = $_POST["sell_idmenu"];
$sell_day = $_POST["sell_day"];

$sql = "INSERT INTO sell
        (sell_customer, sell_idmenu, sell_day)
        VALUES
        ('$sell_customer', '$sell_idmenu', '$sell_day')";

if (mysqli_query($conn, $sql)) {

    echo "<script>
            alert('บันทึกการขายสำเร็จ');
            window.location='regis_page.php';
          </script>";

} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);

    echo "<script>
            alert('ไม่สามารถบันทึกการขายได้');
            window.location='regis_page.php';
          </script>";
}

mysqli_close($conn);

?>
