<?php

require 'config.php';

$name = $_GET['name'];
$number = $_GET['no'];
$testName = $_GET['testName'];
$tblName = $_GET['tblName'];

$voucherId = round(microtime(true) * 1000);


?>
<?php

// Checking if the form is submitted
if (isset($_POST['submit'])) {

	$targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["payment"]["name"]);
    $uploadOk = 1;
	echo $targetFile;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $targetFile = $targetDir . $number . "." . $imageFileType;
	echo $targetFile;
	$voucher_pic = $targetFile;

    if ($_FILES["payment"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if (file_exists($targetFile)) {
        if (unlink($targetFile)) {
            echo "Existing file deleted. ";
        } else {
            echo "Sorry, there was an error deleting the existing file. ";
            $uploadOk = 0;
        }
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["payment"]["tmp_name"], $targetFile)) {
            echo "The file " . basename($_FILES["payment"]["name"]) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    // Inserting the data into the database
	echo $tblName;
	if($tblName == "ap"){

		$sql = "UPDATE ap SET payment = '$voucher_pic' WHERE phone_number = '$number'";
	}else if($tblName == "js"){
    $sql = "UPDATE js SET payment = '$voucher_pic' WHERE phone_number = '$number'";
  }
	else{
		$sql = "UPDATE apps SET payment = '$voucher_pic' WHERE phone_number = '$number'";
	}
    if (mysqli_query($conn, $sql)) {
        echo ".";
        header("Location: ./indexx.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Fees Voucher</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
		}
		.container {
			background-color: #fff;
			border: 1px solid #ccc;
			padding: 20px;
			margin: 20px auto;
			max-width: 600px;
            height: 1040px;
		}
		.containers {
			background-color: #fff;
			border: 1px solid #ccc;
			padding: 20px;
			margin: 20px auto;
			max-width: 600px;
            height: 150px;
		}
		

		h1 {
			font-size: 28px;
			margin-top: 0;
		}
		p {
			font-size: 18px;
			margin-bottom: 10px;
		}
		.table {
			width: 100%;
			border-collapse: collapse;
			margin-bottom: 20px;
		}
		.table th, .table td {
			padding: 10px;
			border: 1px solid #ccc;
		}
		.table th {
			background-color: #f5f5f5;
		}
		.total {
			font-weight: bold;
		}
        body {
  margin: 0;
  padding: 0;
}

.container {
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}



h1 {
  color: #333;
  text-align: center;
  margin-bottom: 30px;
}

.table th, .table td {
  text-align: center;
}

.table th {
  font-weight: bold;
}

.table tr:nth-child(even) {
  background-color: #f5f5f5;
}

.total {
  text-align: right;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

ul li:before {
  content: "\2022";
  color: #333;
  display: inline-block;
  width: 1em;
  margin-left: -1em;
}
img {
  display: block;
  margin: 0 auto; /* Set horizontal margin to auto */
  
}


@media only screen and (max-width: 600px) {
  .logo {
    display: block;
    margin: auto;
  }
}

@media only screen and (max-width: 600px) {
  .logos {
    display: block;
    margin: auto;
  }
}
#download-button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 24px;
    text-align: center;
    text-decoration: none;
    float: right;
    display: inline-block;
    font-size: 16px;
    /* margin: 4px 2px; */
    
    margin-top: -30px; 
    cursor: pointer;
    border-radius: 8px;
  }

  #download-button:hover {
    background-color: #3e8e41;
  }

  #download-button:active {
    background-color: #295c30;
  }
  label {
  display: block;
  font-size: 16px;
  margin-bottom: 10px;
}

input[type="file"] {
  display: block;
  margin-bottom: 20px;
  font-size: 16px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
  background-color: #f5f5f5;
  color: #555;
  cursor: pointer;
}

input[type="file"]:hover,
input[type="file"]:focus {
  background-color: #e0e0e0;
}
input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  float: right; /* added property to float the button to the right */
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}




	</style>
</head>
<body>
    
	<div class="container">

		<div class="logo">
            <img src="img/nts_logo.png" class="l">
        </div>
		<h1>Fees Voucher</h1>
		<p><b>Test Name:</b> <?php echo $testName ?></p>
		<p><b>Student Name:</b> <?php echo $name ?></p>
		<p><b>Phone Number:</b> <?php echo $number ?></p>
		<p><b>Voucher No:</b> <?php echo $voucherId ?></p>
		<p><b>Account Number:</b> 03320143701  <b>(Via Jaaz Cash)</b></p>
		<table class="table">
			<thead>
				<tr>
					<th>Description</th>
					<th>Amount</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Test Fees</td>
					<td>500.00</td>
				</tr>
				<!-- <tr>
					<td>Lab Fee</td>
					<td>$50.00</td>
				</tr>
				<tr>
					<td>Books and Supplies</td>
					<td>$100.00</td> -->
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td class="total">Total</td>
					<td class="total">500.00</td>
				</tr>
			</tfoot>
              
		</table>
		<div class="logos">
		<p><b>Jaaz Cash QR Code:</p>
		<img src="img/jazz.jpg" class="l" style="width: 50%; height: 50%;">
        </div>
        <br>
		<p>Payment Due Date: June 31, 2023</p>
		<p>Payment Options:</p>
		<ul>
			<li>Cash (Vist Our Office)</li>
			<li>Bank Transfer ( Go your nearest Bank)</li>
		</ul>

        <button id="download-button">Download</button>

	</div>
	<form action="" method="post" enctype="multipart/form-data">
	<div class="containers">
		<label>Upload Your Payment Receipt:</label>
		<input type="file" id="payment" name="payment" accept="image/*" required><br>
		<input type="submit" value="Submit" name="submit">
	</div>
</form>


    <script>
        const downloadButton = document.getElementById("download-button");
      
        downloadButton.addEventListener("click", () => {
          window.print();
        });
      </script>
</body>
</html>
