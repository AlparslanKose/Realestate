<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Real Estate | Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RealEstate, Loan, Sale, Home, Sell, Buy, Rent, Search,Real Estate News" />
    <meta name="keywords" content="RealEstate, Loan, Sale, Home, Sell, Buy, Rent, Search,Real Estate News" />
    <meta name="author" content="Alparslan, Berk, Kerem" />

    <!-- 
	//////////////////////////////////////////////////////

	RealEstate

	DESIGNED & DEVELOPED by Alparslan Köse
		
	Website: 		https://alparslankose.github.io/Realestate/
	Email: 			alparslan.kosee@gmail.com
	Instagram: 		https://www.instagram.com/alparslan.exe/

	//////////////////////////////////////////////////////
	 -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico -->
    <link rel="shortcut icon" href="images/favicon.ico	" type="image/x-icon">
    <!-- Place Text Type -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/cs-skin-border.css">

    <link rel="stylesheet" href="css/style.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <header id="fh5co-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.php"><i class="icon-home"></i>Real<span>Estate</span></a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">

                                <li><a href="index.php">News</a></li>

                                <li><a href="index.php#fh5co-about">Agent Finder</a></li>

                                <li><a href="buy.php">Buy</a></li>
                                <li><a href="rent.php">Rent</a></li>
                                <li><a href="sell.php">Sell</a></li>

                                <li><a href="search.php">Search</a></li>

                                <li><a href="loan-calculator.php">Loan Calculator</a></li>

                                <li><a href="signin.php">Login</a></li>
                                <li class="active"><a href="signup.php">Sign Up</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

<?php
require 'database.php';
?>

<?php
// Kayıt formu gönderildiğinde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdaki gerekli verileri alın
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Veritabanına ekleme sorgusu
    $sql = "INSERT INTO register (username, email, password) VALUES ('$username', '$email', '$password')";
 
    if ($conn->query($sql) === TRUE) {
        echo "   <script>alert('Kayıt başarıyla oluşturuldu!')</script>";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

// Veritabanı bağlantısını kapatma
$conn->close();
?>
            <!-- Sign Up Page -->
            <div id="signUp">
                <div class="boxSignUp">
                    <span class="borderLineSignUp"></span>
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <h2>Sign Up</h2>
                        <div class="inputBoxSignUp">
                            <input type="text" name="username" required="required">
                            <span>Username</span>
                            <i></i>
                        </div>
                        <div class="inputBoxSignUp">
                            <input type="text" name="email" required="required">
                            <span>E-mail</span>
                            <i></i>
                        </div>
                        <div class="inputBoxSignUp">
                            <input type="password" name="password" required="required">
                            <span>Password</span>
                            <i></i>
                        </div>

                        <div class="linksSignUp">
                            <a href="signin.html"><span> I have account </span>SignIn</a>
                        </div>

                        <input type="submit" value="Create New Account">
                    </form>
                </div>
            </div>
            
            
            <!-- fh5co-blog-section -->
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
                                    <li><a href="signin.html ">Login</a></li>
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
                                <p>Copyright 2023 RealEstate Standart Page <a href="https://github.com/AlparslanKose/Realestate ">Module</a>. All Rights Reserved.
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
        <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->


    <script src="js/jquery.min.js "></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js "></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js "></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js "></script>
    <script src="js/sticky.js "></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js "></script>
    <script src="js/superfish.js "></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js "></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.min.js "></script>
    <!-- CS Select -->
    <script src="js/classie.js "></script>
    <script src="js/selectFx.js "></script>


    <!-- Main JS -->
    <script src="js/main.js "></script>

</body>

</html>
