<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home design</title>
        <link rel="stylesheet" href="styles.css">

        <style>
            body {
              background-color: black;
            }

            .row {
                margin: 5px;
                border: 3px solid #ccc;
                float: left;
                width: 550px;
                
            }

            .container img {
                width: 100%;
                height: auto;
            }

            .cell {
                padding: 15px;
                text-align: center;
            }

            .cell .type {
                font-size: 1.6rem;
                font-family: cursive;
                letter-spacing: 2px;
                color: #fff;
            }

            .cell .date {
                font-size: 1.6rem;
                font-family: cursive;
                letter-spacing: 2px;
                color: #fff;
            }

            .cell .duration {
                font-size: 1.6rem;
                font-family: cursive;
                letter-spacing: 2px;
                color: #fff;
            }

            .cell .category {
                font-size: 1.6rem;
                font-family: cursive;
                letter-spacing: 2px;
                color: #fff;
            }

            li.dropdown {
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position:absolute;  
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color:#f1f1f1;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {background-color: black}

            .dropdown:hover .dropdown-content {
                display: block;
            }
            </style>
    </head>

    <body>
        
       
            <div class="container">
                <nav class="nav">
                    
                    <div class="menu-toggle">
                        <i class="fas fa-bars"></i>
                        <i class="fas fa-times"></i>
                    </div>
                    
                    <ul class="nav-list">
                        
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="about.html" class="nav-link">About</a>
                        </li>

                        <li class="dropdown">
                            <a href="bedroom.php" class="nav-link">Interior design</a>
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>


                    </ul>

                    <?php
                            if(isset($_SESSION['loggedin'])){
                                echo '<form action="displayBedroom.php" method="post">
                                    <button type="submit" class="btn cta-btn" name="edit-submit">Edit project</button>
                                    </form>';

                            }
                    ?>
                    
                    <?php
                            if(isset($_SESSION['loggedin'])){
                                echo '<form action="form.php" method="post">
                                    <button type="submit" class="btn cta-btn" name="insert-submit">Add project</button>
                                    </form>';

                            }
                    ?>


                    <?php       
                            if(isset($_SESSION['loggedin'])){
                                echo '<form action="displayCategories.php" method="post">
                                    <button type="submit" class="btn cta-btn" name="category-submit">Edit Category</button>
                                    </form>';

                            }
                    ?>

                </nav>
            </div>
       

        <div class="container">
            
           
            <div>
                <?php include 'showBedroom.php';?>
            </div>
            
        </div>

    </body>
</html>