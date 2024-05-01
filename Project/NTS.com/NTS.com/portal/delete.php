<html>

<head>
    <title>Apps Table</title>
    <style>
       table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 5px;

}
.top-bar {
			background-color:orange;
			height: 70px;
      display:flex;
			/* position: fixed;
            
			top: 0;
			left: 0;
			right: 0;
			z-index: 999; */
			box-shadow: 0 2px 4px rgba(0,0,0,0.2);
		}

th {
  background-color: orange;
  color: white;
  font-weight: bold;
  padding: 12px;
  text-align: left;
  text-transform: uppercase;
}

td {
  border: 1px solid #ddd;
  padding: 12px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

/* Button style */
button {
  background-color: #5e72e4;
  border: none;
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 4px;
}

button:hover {
  background-color: #7f90f0;
}
.my-heading {
        color:black
    }
    .container {
      padding: 0%; 
      margin-top: 1%;
      
        background-color: orange;
    }

    .my-headings {
        color:black
    }
    .containers {
      padding: 0%; 
      margin-top: 5%;
      
        background-color: orange;
    }
    *{
      padding: 0%;
      margin: 0%;
    }
    td a {
  display: inline-block;
  padding: 8px 16px;
  background-color: darkred;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

td a:hover {
  background-color: #3e8e41;
}
    </style>
</head>
<body>
<div class="top-bar" style=" text-align: center;"> 
   <img src="https://upload.wikimedia.org/wikipedia/en/4/47/National_Testing_Service_%28NTS%29_Pakistan_logo.png" alt="Your Logo" class="logo"> 
  <h1> &nbsp; NTS  TESTING RECORD </h1> 

</div>
<div class="container">
    <h1 class="my-heading">Application Record</h1>
</div>
<?php

if(isset($_GET['message'])){
    echo '<br>
    <div style="margin:0px 20px;padding: 20px 30px;background-color:#3e8e41;color:white;border-radius:20px">
        <h3>Record Deleted Successfully</h3>
    </div>
    <br>';
}

?>
    <?php
    require 'config.php';

    $query = "SELECT * FROM apps";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    

    if ($total != 0) {
        echo "
        <table border='2'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Test Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Profile</th>
                <th>Resume</th>
                <th>Operation</th>
            </tr>";

        while ($result = mysqli_fetch_assoc($data)) {
           // $url = $result['profile_pic'];
           // echo ('url is : ' . $url);
            echo "
            <tr>
                <td>".$result['id']."</td>
                <td>".$result['first_name']."</td>
                <td>".$result['last_name']."</td>
                <td>".$result['test_name']."</td>
                <td>".$result['phone_number']."</td>
                <td>".$result['address']."</td>
                <td><img  src=".'uploads/' . $result['profile_pic']." alt='' width='40'></td>
                <td>".$result['resume']."</td>
                <td><a href ='remove.php?rn=$result[id]'>Delete</td>
            </tr>";
        }

        echo "
        </table>";
    } else {
        echo "No records found";
    }
    ?>

<div class="containers">
    <h1 class="my-headings">Open Test Record</h1>
</div>
<?php
    // require 'config.php';

    $query = "SELECT * FROM ap";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    

    if ($total != 0) {
        echo "
        <table border='2'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Test Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Profile</th>
                <th>Resume</th>
                <th>Operation</th>
            </tr>";

        while ($result = mysqli_fetch_assoc($data)) {
           // $url = $result['profile_pic'];
           // echo ('url is : ' . $url);
            echo "
            <tr>
                <td>".$result['id']."</td>
                <td>".$result['first_name']."</td>
                <td>".$result['last_name']."</td>
                <td>".$result['test_name']."</td>
                <td>".$result['phone_number']."</td>
                <td>".$result['address']."</td>
                <td><img  src=".'uploads/' . $result['profile_pic']." alt='' width='40'></td>
                <td>".$result['resume']."</td>
                <td><a href ='remove.php?rn=$result[id]'>Delete</td>
            </tr>";
        }

        echo "
        </table>";
    } else {
        echo "No records found";
    }
    ?>

<div class="containers">
    <h1 class="my-headings">Open Job Applications</h1>
</div>
<?php
    // require 'config.php';

    $query = "SELECT * FROM js";
    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    

    if ($total != 0) {
        echo "
        <table border='2'>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Test Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Profile</th>
                <th>Resume</th>
                <th>Operation</th>
            </tr>";

        while ($result = mysqli_fetch_assoc($data)) {
           // $url = $result['profile_pic'];
           // echo ('url is : ' . $url);
            echo "
            <tr>
                <td>".$result['id']."</td>
                <td>".$result['first_name']."</td>
                <td>".$result['last_name']."</td>
                <td>".$result['test_name']."</td>
                <td>".$result['phone_number']."</td>
                <td>".$result['address']."</td>
                <td><img  src=".'uploads/' . $result['profile_pic']." alt='' width='40'></td>
                <td>".$result['resume']."</td>
                <td><a href ='remove.php?rn=$result[id]'>Delete</td>
            </tr>";
        }

        echo "
        </table>";
    } else {
        echo "No records found";
    }
    ?>
</body>
</html>
