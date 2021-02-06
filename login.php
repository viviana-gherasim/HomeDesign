<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
    die("Connection failed:".mysqli_connect_error());
}


$mailuid = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE uidUsers='$mailuid' OR emailUsers='$mailuid'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
         while($row = $result->fetch_assoc()) {
            if($row["idUsers"]==1) {
                //echo "id: " . $row["idUsers"]. " - Name: " . $row["uidUsers"]. " " . $row["pwdUsers"]. "<br>";
                session_start();
                $_SESSION["loggedin"] = true;
                header("Location: index.php?login=succes");
            }
            else
                echo "Nu merge";
        }
}
else {
    echo "0 results";
}
        
$conn->close();

?>