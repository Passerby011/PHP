<?php

    include_once("db_connect.php");
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>
<body>
    <div class="container">
        <h1>Information</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col"> Status </th>
                    <th scope="col"> Edit </th>
                    <th scope="col"> Delete </th>
                </tr>
            </thead>
            <tbody>
                <?php   while($row = mysqli_fetch_array($result))
                {?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td> <button type="submit" class="btn btn-warning"> Edit</button></td>
                        <td> <button type="submit" class="btn btn-danger"> Edit</button></td>

                    </tr>

                <?php }?>

    </div>
</body>
</html>