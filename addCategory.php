<?php

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsystem";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

    if(!$conn) {
        die("Connection failed:".mysqli_connect_error());
    }

    $category = $_POST["category"];

    $sql = "INSERT INTO categories (category) VALUES ('$category')";

    if($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>