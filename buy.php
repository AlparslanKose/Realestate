<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Real Estate | Buy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RealEstate, Loan, Sale, Home, Sell, Buy, Rent, Search,Real Estate News" />
    <meta name="keywords" content="RealEstate, Loan, Sale, Home, Sell, Buy, Rent, Search,Real Estate News" />
    <meta name="author" content="Alparslan, Berk, Kerem" />

    <link rel="shortcut icon" href="images/favicon.ico	" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/superfish.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/cs-skin-border.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/modernizr-2.6.2.min.js"></script>
</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <header id="fh5co-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.php"><i class="icon-home"></i>Real<span>Estate</span></a></h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                         
                                <li><a href="index.php">News</a></li>

                                <li><a href="index.php#fh5co-about">Agent Finder</a></li>

                                <li class="active"><a href="buy.php">Buy</a></li>
                                <li><a href="rent.php">Rent</a></li>
                                <li><a href="sell.php">Sell</a></li>

                                <li><a href="search.php">Search</a></li>

                                <li><a href="loan-calculator.php">Loan Calculator</a></li>

                                <li><a href="signin.php">Login</a></li>
                                <li><a href="signup.php">Sign Up</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

            
<?php
require 'database.php';
?>

<div id="bodyBuy">
    <div id="containerBuy">
        <?php
        $sql = "SELECT * FROM sell";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Create card view
                echo '<div class="card">';
				echo '<p><strong> <center> Sale </center></strong>'  . '</p>';
                echo '<img src="' . $row["picture"] . '" alt="House Image">';
                echo '<div class="card-details">';				                      
                echo '<p><strong>Price: </strong>' . $row["price"] .' EUR'. '</p>';
                echo '<p><strong>Rooms: </strong>' . $row["rooms"] . '</p>';
                echo '<p><strong>Area: </strong>' . $row["size"] ." sq. m.". '</p>';
                echo '<p><strong>Location: </strong>' . $row["address"] . '</p>';
              /*  echo '<p><strong>Name: </strong>' . $row["name"] . '</p>';
                echo '<p><strong>Surname: </strong>' . $row["surname"] . '</p>';*/
                echo '<p><strong>Phone: </strong>' . $row["phoneNumber"] . '</p>'; 
                echo '<p><strong>Email: </strong>' . $row["email"] . '</p>';
				echo '<br>';
				echo '<h2>' . $row["title"] . '</h2>';  
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Kayıt bulunamadı.";
        }
      
        ?>
		
		<div id="bodySell">
    <div id="containerSell">
        <?php
        $sql = "SELECT * FROM rent";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Create card view
                echo '<div class="card">';
				echo '<p><strong> <center> Rent </center></strong>'  . '</p>';
                echo '<img src="' . $row["picture"] . '" alt="House Image">';
                echo '<div class="card-details">';				                      
                echo '<p><strong>Price: </strong>' . $row["price"] .' EUR'. '</p>';
                echo '<p><strong>Rooms: </strong>' . $row["rooms"] . '</p>';
                echo '<p><strong>Area: </strong>' . $row["size"] ." sq. m.". '</p>';
                echo '<p><strong>Location: </strong>' . $row["address"] . '</p>';
              /*  echo '<p><strong>Name: </strong>' . $row["name"] . '</p>';
                echo '<p><strong>Surname: </strong>' . $row["surname"] . '</p>';*/
                echo '<p><strong>Phone: </strong>' . $row["phoneNumber"] . '</p>'; 
                echo '<p><strong>Email: </strong>' . $row["email"] . '</p>';
				echo '<br>';
				echo '<h2>' . $row["title"] . '</h2>';  
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "Kayıt bulunamadı.";
        }
        $conn->close();
        ?>
		
    </div></div>





            <div id="fh5co-contact" class="fh5co-contact">

            </div>
            <footer>
                <div id="footer">
                    <div class="container">
                        <div class="row row-bottom-padded-md">
                            <div class="col-md-3">
                                <h3 class="section-title">About Real Estate</h3>
                                <p>"Our real estate website provides a user-friendly platform for buyers, sellers, and renters to connect and find their perfect property. With a vast database of listings, advanced search filters, and expert advice from experienced
                                    agents, we strive to make the process of buying, selling, or renting a property as smooth and efficient as possible."</p>
                            </div>

                            <div class="col-md-3 col-md-push-1">
                                <h3 class="section-title">Links</h3>
                                <ul>

                                    <li><a href="index.html">News</a></li>
                                    <li><a href="sell.html">Sell</a></li>
                                    <li><a href="rent.html">Rent</a></li>
                                    <li><a href="buy.html">Buy</a></li>
                                    <li><a href="search.html ">Search</a></li>
                                    <!-- 
                                    <li><a href="signin.html ">signin</a></li>
                                    <li><a href="signup.html ">Sign Up</a></li>
                                    -->

                                </ul>
                            </div>

                            <div class="col-md-3 ">
                                <h3 class="section-title ">Information</h3>
                                <ul>
                                    <li><a href="# ">Terms &amp; Condition</a></li>
                                    <li><a href="# ">License</a></li>
                                    <li><a href="# ">Privacy &amp; Policy</a></li>
                                    <li><a href="# ">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 ">
                                <h3 class="section-title ">Newsletter</h3>
                                <p>Subscribe for our newsletter</p>
                                <form class="form-inline " id="fh5co-header-subscribe ">
                                    <div class="row ">
                                        <div class="col-md-12 col-md-offset-0 ">
                                            <div class="form-group ">
                                                <input type="text " class="form-control " id="email " placeholder="Enter your email ">
                                                <button type="submit " class="btn btn-default "><i class="icon-paper-plane "></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12 ">
                                <p class="fh5co-social-icons ">
                                    <a href="# "><i class="icon-twitter2 "></i></a>
                                    <a href="# "><i class="icon-facebook2 "></i></a>
                                    <a href="# "><i class="icon-instagram "></i></a>
                                    <a href="# "><i class="icon-dribbble2 "></i></a>
                                    <a href="# "><i class="icon-youtube "></i></a>
                                </p>
                                <p>Copyright 2023 RealEstate.bg <a href="https://github.com/AlparslanKose/Realestate ">Module</a>. All Rights Reserved.
                                    <br>Made with <i class="icon-heart3 "></i> by
                                    <a href="https://www.instagram.com/alparslan.exe/ " target="_blank ">AlparslanKöse</a>
                                    <a href="# " target="_blank ">,Kerem</a>
                                    <a href="# " target="_blank ">,Berk</a>


                            </div>
                        </div>
                    </div>
                </div>
            </footer>



        </div>

    </div>


    <script src="js/jquery.min.js "></script>
    <script src="js/jquery.easing.1.3.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/jquery.waypoints.min.js "></script>
    <script src="js/sticky.js "></script>
    <script src="js/hoverIntent.js "></script>
    <script src="js/superfish.js "></script>
    <script src="js/jquery.flexslider-min.js "></script>
    <script src="js/bootstrap-datepicker.min.js "></script>
    <script src="js/classie.js "></script>
    <script src="js/selectFx.js "></script>
    <script src="js/main.js "></script>

</body>

</html>