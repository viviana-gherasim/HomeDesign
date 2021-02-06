<?php

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsystem";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

    if(!$conn) {
        die("Connection failed:".mysqli_connect_error());
    }

    $var = $_GET['del_id'];
    $select = "DELETE FROM categories WHERE category='$var'";
    
    if(mysqli_query( $conn, $select)){
        echo "Records were deleted successfully.";
    } else{
        echo "ERROR: Could not able to execute $select. " . mysqli_error($conn);
    }
    header ("Location: displayCategories.php");

?>