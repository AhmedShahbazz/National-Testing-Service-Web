<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Sign up Form</title>
</head>

<body>
    <?php
    $success = false;
    $error = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "config.php";

        // validate form inputs
        $reg_fname = trim($_POST['fname']);
        $reg_lname = trim($_POST['lname']);
        $reg_cnic = trim($_POST['rcnic']);
        $reg_phone = trim($_POST['contact']);
        $reg_email = 'email';
        $reg_pass = $_POST['password'];

        if (empty($reg_fname) || empty($reg_lname) || empty($reg_cnic) || empty($reg_phone) || empty($reg_email) || empty($reg_pass)) {
            $error = "All fields are required.";
        } 
        else {
                $sql = "INSERT INTO users (f_name, l_name , cnic, number , email, password) VALUES (? , ? , ? , ? , ? , ?)";
                $stmt = mysqli_prepare($conn, $sql);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "ssssss", $param_f_name, $param_l_name, $param_cnic, $param_mobile, $param_email, $param_password);
                    $param_f_name = $_POST["fname"];
                    $param_l_name = $_POST["lname"];
                    $param_cnic = $reg_cnic;
                    $param_mobile = $reg_phone;
                    $param_email = $_POST["email"];
                    $param_password = md5($reg_pass);
                    if (mysqli_stmt_execute($stmt)) {
                        echo "Data Send Successfully";
                        //header("location: login.php");
                    } else {
                        echo "Something went wrong, cant Redirect:";
                    }
                    mysqli_stmt_close($stmt);
                }
        }
        mysqli_close($conn);
    }
    ?>
    <section class="fill-parent bg-background d-flex flex-column justify-content-center align-items-center p-5">
        <?php if ($success) : ?>
            <div class="w-500 bg-success p-3 mb-3 text-white rounded">
                <p class="text-center">
                    Form submitted successfully!
                </p>
            </div>
        <?php endif; ?>
        <?php if ($error) : ?>
            <div class="w-500 bg-danger p-3 mb-3 text-white rounded">
                <p class="text-center">
                    <?php echo $error; ?>
                </p>
            </div>
        <?php endif; ?>
        <div class="bg-surface ps rounded p-3 text-center">
            <h2 class="text-success mb-3">Sign Up</h2>
            <form class="w-500" action="" method="POST">
                <input type="text" class="form-control mb-3" name="fname" placeholder="First Name">
                <input type="text" class="form-control mb-3" name="lname" placeholder="Last Name">
                <input type="number" class="form-control mb-3" name="contact" placeholder="Contact">
                <input type="number" class="form-control mb-3" name="rcnic" placeholder="CNIC">
                <input type="text" class="form-control mb-3" name="email" placeholder="email">
                <input type="text" class="form-control mb-3" name="password" placeholder="Password">
                <div class="input-group mb-3">
                    <div class="input-group-prepend"></div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    </section>





</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    .fill-parent {
        min-height: 100vh;
    }

    .bg-background {
        background-image: linear-gradient(#42f5a1, #1e154f);
    }

    .bg-surface {
        background-color: white;
    }

    .w-500 {
        min-width: 500px;
    }

    .no-resize {
        resize: none;
    }
</style>