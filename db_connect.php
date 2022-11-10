
<?php 

    $conn = mysqli_connect('localhost','root', '','my_database');

    if(!$conn){
        die("ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้".mysqli_connect_error($conn));
    }

?>