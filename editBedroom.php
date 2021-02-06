<?php
    
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsystem";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

    if(!$conn) {
        die("Connection failed:".mysqli_connect_error());
    }

    $duration = '';

    if(isset($_GET['edit_id'])){
        $var = $_GET['edit_id'];
        $query= "SELECT * FROM projects WHERE imagePath = '$var'";
        $result = mysqli_query($conn, $query); 

        if ( mysqli_num_rows($result) == 1 ){
            $row = mysqli_fetch_array($result);
            $type = $row['projectType'];
            $date = $row['projectDate'];
            $duration = $row['projectDuration'];
        }
    }

    if(isset($_POST['update'])) {
        $var = $_GET['edit_id'];
        $type = $_POST['type'];
        $date = $_POST['date'];
        $duration = $_POST['duration'];

        $query = "UPDATE projects set projectType ='$type', projectDate = '$date', projectDuration = '$duration' WHERE imagePath = '$var'";
         mysqli_query($conn, $query);
         header ("Location: displayBedroom.php");
    }

    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <style>

            body {
                background: url(images/living5.jpg);
                background-size: 1600px 800px;
                background-repeat: no-repeat;
                padding: 0 10px;
            }

            .container {
                max-width: 500px;
                width: 100%;
                background: #fff;
                margin: 20px auto;
                padding: 30px;
                box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.125);
            
            }
            
            .container .row .col-md-4 .card-body {
                width: 100%;
            }

            /*.container .row .col-md-4 .card-body .form-group {
                margin-bottom: 15px;
                display: flex;
                align-items: center;
            }*/

            .container .row .col-md-4 .card-body .form-group label {
                width: 200px;
                color: #757575;
                margin-right: 10px;
                font-size: 18px;
            }

            .container .row .col-md-4 .card-body .form-group .input {
                width: 100%;
                outline: none;
                border: 1px solid #d5dbd9;
                font-size: 15px;
                padding: 8px 10px;
                border-radius: 3px;
                transition: all 0.3s ease;
                
            }

            .container .row .col-md-4 .card-body .form-group .custom_select {
                position: relative;
                width: 100%;
                height: 37px;
            }

            .container .row .col-md-4 .card-body .form-group .custom_select select {
                appearance: none;
                border: 1px solid  #d5dbd9;
                width: 100%;
                height: 100%;
                padding: 8px 10px;
                border-radius: 3px;
                outline: none;
            }

            .container .row .col-md-4 .card-body .form-group .custom_select:before {
                content: "";
                position: absolute;
                top: 12px;
                right: 10px;
                border: 8px solid;
                border-color: #00b28f transparent transparent transparent;
                pointer-events: none;
            }

            .container .row .col-md-4 .card-body .form-group .input:focus, 
            .container .row .col-md-4 .card-body .form-group select:focus {
                border: 1px solid  #6c7a77;;
            }

            .container .row .col-md-4 .card-body .form-group .btn {
                width: 100%;
                padding: 8px 10px;
                font-size: 15px;
                border: 0;
                cursor: pointer;
                border-radius: 3px;
                outline: none;
            }

            .container .row .col-md-4 .card-body .form-group .btn:hover {
                background: #90e7d6;
            }


        </style>
        <body>

        <div class="container p-4">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <form action="editBedroom.php?edit_id=<?php echo $_GET['edit_id']; ?>" method="POST">
                            <div class="form-group">
                                <label>Project Type</label>
                                <div class="custom_select">
                                    <select name="type" class="form-control">
                                        <option value="Select">Select</option>
                                        <option value="Residential">Residential</option>
                                        <option value="Commercial">Commercial</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Project Date</label>
                                    <input type="date" name="date" value="<?php echo $date;?>" class="form-control" placeholder="Update Date">
                                </div>

                                <div class="form-group">
                                    <label>Project Duration</label>
                                    <input type="text" name="duration" value="<?php echo $duration;?>" class="form-control" placeholder="Update Duration">
                                </div>

                                <button class="btn btn-success" name="update">
                                    Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </body>
    </head>
</html>