<?php

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsystem";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

    if(!$conn) {
        die("Connection failed:".mysqli_connect_error());
    }

    $image = $_POST["image"];
    $type = $_POST["type"];
    $date = $_POST["date"];
    $duration = $_POST["duration"];
    $category = $_POST["category"];

    echo $category;
    $sql = "SELECT id_category FROM categories WHERE category = '$category'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $id = $row['id_category'];

    $sql = "INSERT INTO projects (imagePath, projectType, projectDate, projectDuration, category) VALUES ('$image', '$type', '$date', '$duration', '$id')";


    if($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>