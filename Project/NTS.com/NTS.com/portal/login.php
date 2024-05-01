<?php
require 'config.php';

if (isset($_POST["submit"])) {
	$name = $_POST["name"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE email='$name' AND password='$password'");
    if ($result && mysqli_num_rows($result) > 0) {
		echo "<script> alert('function Called'); </script>";
        $row = mysqli_fetch_assoc($result);
        if (isset($row["datatype"])) {
            if ($row["datatype"] == "user") {
                header("Location: indexx.php");
				session_start();
				$_SESSION['email'] = $name;
				$_SESSION['name'] = $row["name"];
                exit();
            } elseif ($row["datatype"] == "admin") {
                header("Location: wel_admin.php");
                exit();
            }
        }
    }
	else{
		echo "<script> alert('something wrong'); </script>";
	}
    
}
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		/* Top bar styling */
		.top-bar {
			background-color:orange;
			height: 70px;
			position: fixed;
            display:flex;
			top: 0;
			left: 0;
			right: 0;
			z-index: 999;
			box-shadow: 0 2px 4px rgba(0,0,0,0.2);
		}

		/* Form styling */
		form {
			width: 400px;
			margin: 120px auto 0;
			padding: 40px;
			border: 2px solid #ccc;
			border-radius: 10px;
			background-color: #fff;
			box-shadow: 0 2px 4px rgba(0,0,0,0.2);
		}

		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 5px;
			font-size: 16px;
		}

		input[type=text]:focus, input[type=password]:focus {
			border-color: #4CAF50;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 14px 24px;
			margin: 16px 0;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}

		button:hover {
			background-color: #3e8e41;
		}

		.container {
			background-color: #f1f1f1;
			padding: 16px;
			text-align: center;
			border-radius: 5px;
		}

		h2 {
			text-align: center;
			margin-top: 0;
			color: #4CAF50;
			font-size: 32px;
			font-weight: 400;
			text-transform: uppercase;
			letter-spacing: 1px;
		}

		label {
			font-weight: bold;
			display: block;
			margin-bottom: 10px;
			color: #444;
			font-size: 16px;
		}

		a {
			color: #4CAF50;
			font-size: 16px;
			font-weight: 600;
			text-decoration: none;
			transition: color 0.3s ease;
		}

		a:hover {
			color: #3e8e41;
		}

		body {
			background-color: #f5f5f5;
			font-family: Arial, sans-serif;
		}
	</style>
</head>
<body>
<div class="top-bar" style=" text-align: center;"> 
   <img src="https://upload.wikimedia.org/wikipedia/en/4/47/National_Testing_Service_%28NTS%29_Pakistan_logo.png" alt="Your Logo" class="logo"> 
  

</div>
	<form class="" action="" method="post" autocomplete="off">
		<h2>Log in</h2>
		<label for="name">Email</label>
		<input type="text" id="name" name="name" placeholder="Enter your name">
		<label for="password">Password</label>
		<input type="password" id="password" name="password" placeholder="Enter your password">
		<button type="submit" name="submit">Log in</button>
		<p>Don't have an account? <a href="Signup.php">Signup</a></p>
</form>
