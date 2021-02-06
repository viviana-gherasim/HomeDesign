<?php
    
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "loginsystem";

    $conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

    if(!$conn) {
        die("Connection failed:".mysqli_connect_error());
    }

    $sql = "SELECT * FROM categories";
    $result = $conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin Form</title>
        <link rel="stylesheet" href="formStyle.css">

        <style media="screen">

            body {
                background: url(images/bedroom8.jpg);
                background-size: 1600px 800px;
                background-repeat: no-repeat;
                padding: 0 10px;
            }
            #custom-button {
                color: white;
                padding: 10px;
                background-color: #009578;
                border: 1px solid #000;
                border-radius: 5px;
                cursor: pointer;
            }

            #custom-button:hover { 
                background-color: #00b28f;
            }

            #custom-text {
                font-family: sans-serif;
                color: #aaa;
            }

            
        </style>

    </head>

    <body>

        <div class="wrapper"> 
            <div class="title">
                Add Project Form
            </div>

            <form action="insert.php" method="POST">
            <div class="form">
                
                <div class="input_field">
                    <label>Project Type</label>
                
                    <div class="custom_select">
                        <select name="type">
                            <option value="Select">Select</option>
                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                        </select>
                    </div>
                </div> 

                <div class="input_field">
                    <label>Project Date</label>
                    <input type="date" name="date" class="input">
                </div>

                <div class="input_field">
                    <label>Project Duration</label>
                    <input type="text" name="duration" class="input">
                </div>

                <input type="file" name="image" id="real-file" hidden="hidden"/>
                <button type="button" id = "custom-button">CHOOSE A FILE</button>
                <span id="custom-text">No file chosen</span>

                <div class="input_field">
                    <label>Category</label>
                    <select name="category">
                        
                        <?php
                        if($result->num_rows > 0){
                             while($row = $result->fetch_assoc()){ 

                        ?>
                        <option><?php echo $row['category']; ?></option>
                             <?php }} ?>
                        
                    </select>

                </div>

                <div class="input_field">
                    <input type="submit" id="custom-button" value="ADD PROJECT" class="btn">
                </div>
            </div>
            </form>
        </div>

        <script type="text/javascript">
            const realFileBtn = document.getElementById("real-file");
            const customBtn = document.getElementById("custom-button");
            const cumstomTxt = document.getElementById("custom-text");

            customBtn.addEventListener("click", function() {
                realFileBtn.click();
            });

            realFileBtn.addEventListener("change", function() {
                if(realFileBtn.value) {
                    cumstomTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
                }
                else {
                    cumstomTxt.innerHTML = "No file chosen";
                }
            });
        </script>
    </body>
</html>