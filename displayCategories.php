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
<html>
    <head>
         <!-- Javascript function for deleting data -->
        <script language="javascript">
            function deleteme(delid)
            {
                if(confirm("Are you sure?")){
                    window.location.href='deleteCategory.php?del_id=' +delid+'';
                    return true;
                }
            } 
        </script>
        <style>
        
        body {
            background: url(images/living.jpg);
            background-size: 1600px 800px;
            background-repeat: no-repeat;
            padding: 0 10px;
            }
        </style>

        
    </head>
    
    <body> 
        
        <h1 align="center">Categories</h1>
        <table border="1" align="center" style="line-height:25px;">
        
        <tr>
            <th>Category</th>
            <th>Delete</th>
        </tr>

        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){ 
        ?>

        <tr>
    
            <td><?php echo $row['category']; ?></td>
             
 
           <!-- Delete Button -->
            <td><input type="button" onClick="deleteme('<?php echo $row['category']; ?>')" name="Delete" value="Delete"></td>
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
        <a href="categoryForm.html"><button style="padding:10px 20px; font-size: 15px" class="button" >Add category</button></a>

        
     </body>
</html>
