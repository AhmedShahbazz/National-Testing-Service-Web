<?php
require 'config.php';
// Checking if the form is submitted
session_start();
$email = $_SESSION['email'];
if (isset($_POST['submit'])) {

    // Getting the form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $test_name = $_POST['test_name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $name = $first_name . ' . '  . $last_name; 

    // Uploading the files
    $profile_pic = $_FILES['profile_pic']['name'];
    $resume = $_FILES['resume']['name'];

    $target_dir = "uploads/";
    move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_dir . $profile_pic);
    move_uploaded_file($_FILES["resume"]["tmp_name"], $target_dir . $resume);

    // Inserting the data into the database
    $sql = "INSERT INTO js (email , first_name, last_name, test_name, phone_number, address, profile_pic, resume) 
            VALUES ('$email' , '$first_name', '$last_name', '$test_name', '$phone_number', '$address', '$profile_pic', '$resume')";

    if (mysqli_query($conn, $sql)) {
        echo ".";
        header("Location: ./in.php?name=$name&no=$phone_number&testName=$test_name&tblName=js");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


?>






<!DOCTYPE html>
<html>
  <head>
    <title>My Form</title>
    <style>
    /* Style the form labels */
/* Style the form */
form {
			width: 400px;
			margin: 120px auto 0;
			padding: 40px;
			border: 2px solid #ccc;
			border-radius: 10px;
			background-color: #fff;
			box-shadow: 0 2px 4px rgba(0,0,0,0.2);
		}

/* Style the form labels */
label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: black;
  font-size: 16px;
}

/* Style the form inputs and textareas */
input[type="text"],
input[type="tel"],
textarea {
  display: block;
  width: 100%;
  padding: 12px;
  border-radius: 8px;
  border: none;
  box-sizing: border-box;
  margin-bottom: 20px;
  font-size: 16px;
  background-color: while;
  color: #444;
  border: 2px solid black;
}

/* Style the file input fields */
input[type="file"] {
  margin-bottom: 20px;
}

/* Style the submit button */
input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  border: none;
  padding: 16px 24px;
  border-radius: 8px;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

input[type="submit"]:focus {
  outline: none;
}

/* Style form validation error messages */
input:invalid,
textarea:invalid {
  border: 2px solid #f00;
}

input:invalid + span,
textarea:invalid + span {
  color: #f00;
  font-size: 14px;
  font-weight: normal;
  display: block;
  margin-top: 5px;
}

input:valid,
textarea:valid {
  border: 2px solid #4CAF50;
}

input:valid + span,
textarea:valid + span {
  display: none;
}

/* Style the form file input fields */
.upload {
  position: relative;
  overflow: hidden;
  display: inline-block;
  vertical-align: middle;
  margin-bottom: 20px;
}

.upload input[type=file] {
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}

.upload label {
  padding: 12px 24px;
  border-radius: 8px;
  border: 2px solid black;
  background-color: black;
  color: black;
  cursor: pointer;
  transition: all 0.3s ease-in-out;
}

.upload label:hover {
  background-color: black;
  color: black;
}


    textarea[name="address"] {
  border: 2px solid black;




}
.top-bar {
			background-color:orange;
			height: 70px;
			position: fixed;
            display:flex;
			top: 0;
      justify-content: center;
			left: 0;
			right: 0;
			z-index: 999;
			box-shadow: 0 2px 4px rgba(0,0,0,0.2);
		}
        input[type="text"] {
  border: 2px solid black; /* set a default border */
}
input[type="text"], 
input[type="tel"], 
textarea, 
input[type="file"] {
  border: 2px solid black;
}

input[type="text"]:focus, 
input[type="tel"]:focus, 
textarea:focus {
  outline: none; /* removes the default blue outline on focus */
  border: 2px solid blue; /* adds a blue border on focus instead of red */
}
.logout-btn {
  display: inline-block;
  background-color: #4CAF50;
  color: white;
  padding: 18px 30px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  border-radius: 25px;
  border: none;
  margin-left: 810px;
  height: 10px;
  margin-top: 10px;
  line-height: 10px;
}

.logout-btn:hover {
  background-color: #3e8e41;
}






</style>
  </head>
  <body>
   <div class="top-bar" style=" text-align: center;"> 
   <img src="https://upload.wikimedia.org/wikipedia/en/4/47/National_Testing_Service_%28NTS%29_Pakistan_logo.png" alt="Your Logo" class="logo"> 
  <h1> &nbsp; Project Coordinator</h1> 
  <a href="logout.php" class="logout-btn">Logout</a>

</div>
    <form method="post" action="" enctype="multipart/form-data">
      <label for="first_name">First Name:</label>
      <input type="text" id="first_name" name="first_name" required><br>

      <label for="last_name">Last Name:</label>
      <input type="text" id="last_name" name="last_name" required><br>

      <label for="test_name">test_name:</label>
      <input type="tel" id="test_name" name="test_name" required><br>

      <label for="phone_number">Phone Number:</label>
      <input type="tel" id="phone_number" name="phone_number" required><br>

      <label for="address">Address:</label>
      <textarea id="address" name="address" required></textarea><br>

      <label for="profile_pic">Upload Profile Picture:</label>
      <input type="file" id="profile_pic" name="profile_pic" accept="image/*" required><br>

      <label for="resume">Upload Resume:</label>
      <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required><br>

      <input type="submit" value="Submit" name="submit">
    </form>
    <!-- <a href="logout.php">logout</a> -->
  </body>
</html>

    
