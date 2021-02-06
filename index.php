<?php
    session_start();
?>

<!DOCTYPE html>

<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, 
        initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home design</title>
        <!--Font awesome CDN-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <!--Scroll reveal CDN-->
        <script src="https://unpkg.com/scrollreveal"></script>
        <link rel="stylesheet" href="styles.css">

        <style>
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
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {background-color: #f1f1f1;}

            .dropdown:hover .dropdown-content {
                display: block;
            }

        </style>
    </head>

    <body>

        <header>
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

                        <li class="nav-item">
                            <a href="bedroom.php" class="nav-link">Interior design</a>
                        
                        </li>

                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>

                    </ul>

                    

                    <div class="header-login">
                            
                            <?php
                                if(isset($_SESSION['loggedin'])) {
                                    echo '<form action="logout.php" method="post">
                                    <button type="submit" class="btn cta-btn" name="logout-submit">Logout</button>
                                    
                                    </form>';
                                }
                                else {
                                    echo '<form action="login.php" method="post">
                                        <input type="email" name="mailuid" placeholder="E-mail...">
                                        <input type="password" name="pwd" placeholder="Password...">
                                        <button type="submit" class="btn cta-btn" name="login-submit">Login</button>
                                    </form>';
                                }
                            ?>
                            
                         
                    </div>
                        
                </nav>
            </div>
        </header>
        <!--Header ends-->
        
        <section class="hero" id="hero">
            <div class="container">
                <h2 class="sub-headline">
                    <span class="first-letter">W</span>elcome
                </h2>
                <h1 class="headline">Home design</h1>
                <div class="headline-description">
                    <div class="separator">
                        <div class="line line-left"></div>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        <div class="line line-right"></div>
                    </div>
                    <div class="single-animation">
                        <h5>Inspiration</h5>
                        
                    </div>
                </div>
            </div>
        </section> 
        <!--Hero ends-->

        <section class="discover-our-story">
            <div class="container">
                <div class="design-info">
                    <div class="design-description padding-right animate-left">
                        <div class="global-headline">
                            <h2 class="sub-headline">
                                <span class="first-letter">D</span>iscover
                            </h2>
                            <h1 class="headline headline-dark">Our story</h1>
                            <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        </div>
                        <p>In prezent interesul pentru amenajarea interioara a 
                        spatiilor se confrunta cu o afluenta tot mai mare de clienti ce se regaseste 
                        intr-o nevoie de a crea o identitate proprie fiecarui interior.</p>

                        <a href="about.html" class="btn body-btn">About us</a>
                    </div>

                    <div class="design-info-img animate-right">
                        <img src="images/our-story1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--Discover our story ends-->

        <section class="living between">
            <div class="container">
                <div class="global-headline">
                   
                    <div class="animate-top">
                        <h2 class="sub-headline">
                            <span class="first-letter">L</span>iving
                        </h2>
                    </div>
                   
                    <div class="animate-bottom">
                        <h1 class="headline">Ideas</h1>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--Living ends-->

        <section class="discover-interior-design">
            <div class="container">
                <div class="design-info">
                    <div class="image-group padding-right animate-left">
                        <img src="images/discover1.jpg" alt="">
                        <img src="images/discover2.jpg" alt="">
                        <img src="images/discover3.jpg" alt="">
                        <img src="images/discover4.jpg" alt="">
                    </div>

                    <div class="interior-design-description animate-right">
                        <div class="global-headline">
                            <h2 class="sub-headline">
                                <span class="first-letter">I</span>nterior
                            </h2>
                            <h1 class="headline headline-dark">Design</h1>
                            <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        </div>

                        <p>
                            Think of it like this: learning about the ingredients that go 
                            into your favorite recipes will help you master cooking. 
                            In the same way, learning about the design elements that go 
                            into your favorite styles will help you master decorating.
                        </p>
                        <br></br>
                        <p>
                            So what are the seven key elements of interior design? They include:
                            color, form, light, line, pattern, texture, space.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--Discover interior design ends-->

        <section class="bedroom between">
            <div class="container">
                <div class="global-headline">
                   
                    <div class="animate-top">
                        <h2 class="sub-headline">
                            <span class="first-letter">B</span>edroom
                        </h2>
                    </div>
                   
                    <div class="animate-bottom">
                        <h1 class="headline">Ideas</h1>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--Bedroom ends-->

        <section class="get-inspired">
            <div class="container">
                <div class="design-info">
                    <div class="design-description padding-right animate-left">
                        <div class="global-headline">
                            <h2 class="sub-headline">
                                <span class="first-letter">G</span>et
                            </h2>
                            <h1 class="headline headline-dark">Inspired</h1>
                            <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        </div>
                        <p>"The essence of interior design will always be about people 
                            and how they live. It is about the realities of what makes 
                            for an attractive, civilized, meaningful environment, 
                            not about fashion or what's in or what's out. 
                            This is not an easy job."</p>

                    </div>

                    <div class="image-group">
                        <img class="animate-top" src="images/inspire1.jpg" alt="">
                        <img class="animate-bottom" src="images/inspire2.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--Get inspired ends-->

        <section class="bathroom between">
            <div class="container">
                <div class="global-headline">
                   
                    <div class="animate-top">
                        <h2 class="sub-headline">
                            <span class="first-letter">B</span>athroom
                        </h2>
                    </div>
                   
                    <div class="animate-bottom">
                        <h1 class="headline">Ideas</h1>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--Bathroom ends-->

        <section class="kitchen between">
            <div class="container">
                <div class="global-headline">
                   
                    <div class="animate-top">
                        <h2 class="sub-headline">
                            <span class="first-letter">K</span>itchen
                        </h2>
                    </div>
                   
                    <div class="animate-bottom">
                        <h1 class="headline">Ideas</h1>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--Kitchen ends-->

        <footer>
            <div class="container">
                <div class="back-to-top">
                    <a href="#hero"><i class="fas fa-chevron-up"></i></a>
                </div>

                <div class="footer-content">
                    <div class="footer-content-about animate-top">
                        <h4>About Home Design</h4>
                        <div class="asterisk"><i class="fas fa-asterisk"></i></div>
                        <p>
                            Experience in design, ergonomics and psychology is 
                            found in the success of a significant number of 
                            completed projects of interior design and furniture execution.
                        </p>
                    </div>

                    <div class="footer-content-divider animate-bottom">
                        <div class="social-media">
                            <h4>Follow along</h4>
                            <ul class="social-icons">
                                <li>
                                    <a href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/DesignHomeGame/"><i class="fab fa-facebook-square"></i></a>
                                </li>
                                <li>
                                    <a href="https://ro.pinterest.com/"><i class="fab fa-pinterest"></i></a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="newsletter-container">
                            <h4>Newsletter</h4>
                            <form action="" class="newsletter-form">
                                <input type="text" class="newsletter-input" placeholder="Your email adress">
                                <button class="newsletter-btn" type="submit">
                                    <i class="fas fa-envelope"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!--Footer ends-->

       
        
        
        <script src="main.js"></script>
    </body>

    </html>