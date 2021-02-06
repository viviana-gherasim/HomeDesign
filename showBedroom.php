<?php

    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsystem";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

    if(!$conn) {
        die("Connection failed:".mysqli_connect_error());
    }

    $sql = "SELECT * FROM projects";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()){
    ?>

        <div class="table">
            <div class="row">
                
                <div class="container">
                    <img src="images/<?php echo $row['imagePath']; ?>" class="images">
                </div>

                <div class="cell">
                    <div class="type">
                        Type :
                        <?php echo $row['projectType']; ?>
                    </div>
                    <div class="date">
                        Date :
                        <?php echo $row['projectDate']; ?>
                    </div>
                    <div class="duration">
                        Duration(months) :
                        <?php echo $row['projectDuration']; ?>
                    </div>

                    <div class="category">
                        Category :
                        <?php echo $row['category']; ?>
                    </div>
                
                </div>

                

            </div>
        </div>
    <?php }?> 

