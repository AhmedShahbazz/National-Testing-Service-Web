<?php

require 'config.php';

$fn = $_GET['fn'];
$ln = $_GET['ln'];
$tn = $_GET['tn'];
$pn = $_GET['pn'];
$ad = $_GET['ad'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get form values
  $tbl = $_GET['tbl'];
  $fn = $_POST['first_name'];
  $ln = $_POST['last_name'];
  $tn = $_POST['test_name'];
  $pn = $_POST['phone_number'];
  $ad = $_POST['address'];

  // Update data in the database
  $sql = "UPDATE $tbl SET first_name = '$fn', last_name = '$ln', test_name = '$tn', phone_number = '$pn', address = '$ad' WHERE first_name = '$fn'";

  $result = mysqli_query($conn, $sql);

  // Check if update was successful
  if ($result) {
      echo "Data updated successfully";
      header("Location: update.php?message=success");
  } else {
      echo "Error updating data: " . mysqli_error($conn);
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





</style>
  </head>
  <body>
   <div class="top-bar" style=" text-align: center;"> 
   <img src="https://upload.wikimedia.org/wikipedia/en/4/47/National_Testing_Service_%28NTS%29_Pakistan_logo.png" alt="Your Logo" class="logo"> 
  <h1> &nbsp; Situation Vacant National Testing Service</h1> 

</div>
    <form method="post" action="" enctype="multipart/form-data">
      <label for="first_name">First Name:</label>
      <input type="text" value="<?php echo "$fn"?> " id="first_name" name="first_name" required><br>

      <label for="last_name">Last Name:</label>
      <input type="text" value="<?php echo "$ln"?> " id="last_name" name="last_name" required><br>

      <label for="test_name">test_name:</label>
      <input type="tel"  value="<?php echo "$tn"?> "id="test_name" name="test_name" required><br>

      <label for="phone_number">Phone Number:</label>
      <input type="tel"  value="<?php echo "$pn"?> " id="phone_number" name="phone_number" required><br>

      <label for="address">Address:</label>
      <input type="tel" value="<?php echo "$ad"?> "  id="address" name="address" required><br>

      <input type="submit" value="submit" name="submit" id="submit">
    </form>

  </body>
</html>
