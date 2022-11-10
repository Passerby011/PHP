<?php 
    include("db_connect.php");
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $POST['password'];

    $sql = "UPDATE user SET username = '$username', email = '$email', password = '$password' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script> alert('แก้ไขข้อมูลสำเร็จ') </script>";
        header("Location:show_user.php");
        
    }else{
        echo "<script> alert('ไม่สามารถแก้ไขข้อมูลได้') </script>";
        header("Location:edit.php");
    }
?>
