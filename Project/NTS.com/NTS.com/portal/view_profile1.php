<?php
include 'config.php';

session_start();
$email = $_SESSION['email'];

?>  


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php

    $getDataSQL = "SELECT * FROM pf WHERE email = '$email'";

    $result = mysqli_query($conn, $getDataSQL);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $name = $row["first_name"];
        echo '
<div class="container">
    <img width="100" src="uploads/'.$row["profile_pic"] . '" alt="User Avatar" class="avatar">
    <table>
        <tbody>
            <tr>
                <th>Username</th>
                <td style="border: 1px solid #ccc;"> ' . $name . ' </td>
            </tr>
            <tr>
                <th>Father Name</th>
                <td style="border: 1px solid #ccc;">' . $row["last_name"] . '</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td style="border: 1px solid #ccc;">' . $row["test_name"] . '</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td style="border: 1px solid #ccc;">' . $row["phone_number"] . '</td>
            </tr>
        </tbody>
    </table>
</div>
';
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>