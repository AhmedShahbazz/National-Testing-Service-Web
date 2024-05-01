<?php
require 'config.php';

if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$re_password = $_POST["re_password"];
	$duplicate = mysqli_query($conn, "SELECT  FOM user WHERE name='$name' OR email='$email'");
	if (mysqli_num_rows($duplicate) > 0) {
		echo "<script> alert('Name or email has already been taken'); </script>";
	} else {
		if ($password == $re_password) {
			$query = "INSERT INTO user (name, email, password, re_password, datatype) VALUES ('$name', '$email', '$password', '$re_password', 'user')";
			mysqli_query($conn, $query);
			// echo "<script> alert('Registration successful!'); </script>";
			header("Location: login.php");
		} else {
			echo "<script> alert('Passwords do not match'); </script>";
		}
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Sign Up</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}

		.top-bar {
			background-color: orange;
			height: 70px;
			position: fixed;
			display: flex;
			top: 0;
			left: 0;
			right: 0;
			z-index: 999;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
		}

		form {
			width: 400px;
			margin: 120px auto 0;
			padding: 20px;
			background-color: white;
			border: 2px solid #ccc;
			border-radius: 10px;
			box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
		}

		input[type=text],
		input[type=password],
		input[type=email] {
			width: 100%;
			padding: 10px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 2px solid #ccc;
			border-radius: 4px;
			background-color: #f2f2f2;
		}

		input[type=text]:focus,
		input[type=password]:focus,
		input[type=email]:focus {
			border-color: #4CAF50;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			font-weight: bold;
			transition: background-color 0.3s ease;
		}

		button:hover {
			background-color: #45a049;
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
			font-weight: bold;
			text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
		}

		label {
			font-weight: bold;
			display: block;
			margin-bottom: 10px;
			color: #666;
			font-size: 16px;
			text-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
		}

		a {
			color: #4CAF50;
			text-decoration: none;
			font-size: 14px;
			transition: color 0.3s ease;
		}

		a:hover {
			color: #45a049;
		}

		.btn-login {
			display: inline-block;
			padding: 10px 20px;
			background-color: #4CAF50;
			color: white;
			text-decoration: none;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
			font-weight: bold;
			transition: background-color 0.3s ease;
			margin-top: 10px;
		}

		.btn-login:hover {
			background-color: #45a049;
		}
	</style>
</head>

<body>
	<form class="" action="" method="post" autocomplete="off">
	<div class="top-bar" style="text-align: center; display: flex; justify-content: space-between; padding: 0px 30px; align-items: center">
    <img width="100" src="https://upload.wikimedia.org/wikipedia/en/4/47/National_Testing_Service_%28NTS%29_Pakistan_logo.png" alt="Your Logo" class="logo">

    <a style="background-color: white ; color:green;padding:10px 10px;border-radius:20px" href="offline_form.pdf">Apply Offline</a>
</div>


		<h2>Sign Up</h2>
		<label for="name">name</label>
		<input type="text" id="name" name="name" placeholder="Enter your name">

		<label for="email">email</label>
		<input type="email" id="email" name="email" placeholder="Enter your email">

		<label for="password">password</label>
		<input type="password" id="password" name="password" placeholder="Enter your password">

		<label for="re_password">re_password</label>
		<input type="password" id="re_password" name="re_password" placeholder="Enter your password">

		<button type="submit" name="submit">Sign Up</button>

		<a href="login.php" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border: none; border-radius: 4px; cursor: pointer;">Login</a>



	</form>

</body>

</html>