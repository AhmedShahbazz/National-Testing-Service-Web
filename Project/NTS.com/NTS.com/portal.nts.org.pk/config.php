<?php

    $DB_SERVER = "localhost";
    $DB_USERNAME = "root";
    $DB_NAME = "nts_db";
    $DB_PASSWORD = "";

    $conn = mysqli_connect($DB_SERVER , $DB_USERNAME , $DB_PASSWORD , $DB_NAME);

    if($conn == false){
        echo "connection Failed";
    }
    

?>
