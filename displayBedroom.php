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


?>

<!DOCTYPE html>
<html>
    <head>
         <!-- Javascript function for deleting data -->
        <script language="javascript">
            function deleteme(delid)
            {
                if(confirm("Are you sure?")){
                    window.location.href='deleteBedroom.php?del_id=' +delid+'';
                    return true;
                }
            } 
        </script>
        <style>
        
        body {
            background: url(images/bedroom.jpg);
            background-size: 1600px 800px;
            background-repeat: no-repeat;
            padding: 0 10px;
            }
        </style>

        
    </head>
    
    <body> 
        
        <h1 align="center">Projects</h1>
        <table border="1" align="center" style="line-height:25px;">
        
        <tr>
            <th>Image</th>
            <th>Project type</th>
            <th>Project date</th>
            <th>Project duration(months)</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){ 
        ?>

        <tr>
            <td><?php echo $row['imagePath']; ?></td>
            <td><?php echo $row['projectType']; ?></td>
            <td><?php echo $row['projectDate']; ?></td>
            <td><?php echo $row['projectDuration']; ?></td>
            <td><?php echo $row['category']; ?></td>
            
             
            <!--Edit option -->
            <td>
                <button><a href="editBedroom.php?edit_id=<?php echo $row['imagePath']; ?>" >Edit</a></button>
            </td>
 
           <!-- Delete Button -->
            <td><input type="button" onClick="deleteme('<?php echo $row['imagePath']; ?>')" name="Delete" value="Delete"></td>
        </tr>

       
        
        <?php
        }
        }
        else
        {
        ?>
        <tr>
        <th colspan="2">There's No data found!!!</th>
         </tr>
        <?php
        }
        ?>
        </table>

        <a href="bedroom.php"><button style="padding:10px 20px; font-size: 15px" class="button" >Go Back</button></a>

        
     </body>
</html>
