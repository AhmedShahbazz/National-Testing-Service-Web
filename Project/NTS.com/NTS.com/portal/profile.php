<?php
require 'config.php';
// Checking if the form is submitted

session_start();
$email = $_SESSION['email'];

if (isset($_POST['submit'])) {

  // Getting the form data
  $father_name = $_POST['father_name'];
  $phone_number = $_POST['phone_number'];
  $dob = $_POST['dob'];
  $deg = $_POST['deg'];
  $exp = $_POST['exp'];

  // Uploading the files
  $profile_pic = $_FILES['profile_pic']['name'];

  $target_dir = "uploads/";
  move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_dir . $profile_pic);

  // Checking if the email already exists
  $query = "SELECT email FROM pf WHERE email = '$email'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    // Email already exists, update the data
    $sql = "UPDATE pf SET father_name = '$father_name' , dob = '$dob', phone_number = '$phone_number', last_degree = '$deg', exp = '$exp', profile_pic = '$profile_pic' WHERE email = '$email'";
  } else {
    // Email doesn't exist, insert the data
    $sql = "INSERT INTO pf (email, father_name, phone_number, dob, last_degree, exp, profile_pic) VALUES ('$email', '$father_name', '$phone_number', '$dob' ,'$deg', '$exp', '$profile_pic')";
  }

  if (mysqli_query($conn, $sql)) {
    echo ".";
    header("Location: view_profile.php");
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
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
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

    input:invalid+span,
    textarea:invalid+span {
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

    input:valid+span,
    textarea:valid+span {
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
      background-color: orange;
      height: 70px;
      position: fixed;
      display: flex;
      top: 0;
      left: 0;
      right: 0;
      z-index: 999;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      justify-content: center;
    }

    input[type="text"] {
      border: 2px solid black;
      /* set a default border */
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
      outline: none;
      /* removes the default blue outline on focus */
      border: 2px solid blue;
      /* adds a blue border on focus instead of red */
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
      margin-left: 780px;
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
    <h1> &nbsp; PROFILE</h1>


  </div>
  <form method="post" action="" enctype="multipart/form-data">


    <label for="last_name">Father Name:</label>
    <input type="text" id="father_name" name="father_name" required><br>

    <label for="dob">date of birth</label>
    <input style="width: 90%;padding: 17px;margin: 20px 0px;border-radius: 10px;" type="date" id="dob" name="dob" required><br>

    <label for="phone_number">Phone Number:</label>
    <input type="tel" id="phone_number" name="phone_number" required><br>
    <label for="phone_number">Last Degree:</label>
    <input type="text" id="deg" name="deg" required><br>
    <label for="phone_number">Employeement Experience:</label>
    <input type="text" id="exp" name="exp" required><br>



    <label for="profile_pic">Upload Profile Picture:</label>
    <input type="file" id="profile_pic" name="profile_pic" accept="image/*" required><br>

    <input type="submit" value="Submit" name="submit">
  </form>
</body>

</html>