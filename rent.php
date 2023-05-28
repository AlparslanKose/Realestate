<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Real Estate | Rent</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RealEstate, Loan, Sale, Home, Sell, Buy, Rent, Search,Real Estate News" />
    <meta name="keywords" content="RealEstate, Loan, Sale, Home, Sell, Buy, Rent, Search,Real Estate News" />
    <meta name="author" content="Alparslan, Berk, Kerem" />


    <!-- will add later -->
    <!--  ><link rel="shortcut icon" href="images/favicon.ico	" type="image/x-icon">  -->
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

                                <li><a href="buy.php">Buy</a></li>
                                <li class="active"><a href="rent.php">Rent</a></li>
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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $targetDir = 'pics/'; // Kaydetmek istediğiniz klasörün yolu
    $targetFile = $targetDir . basename($_FILES['picture']['name']); // Kaydetmek istediğiniz dosyanın tam yolu
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Dosya uzantısını alın

    // Sadece JPG ve PNG dosyalarını kabul edin
    if ($imageFileType == 'jpg' || $imageFileType == 'jpeg' || $imageFileType == 'png') {
        // Dosyayı belirtilen klasöre taşıyın
        if (move_uploaded_file($_FILES['picture']['tmp_name'], $targetFile)) {
            // Dosya başarıyla yüklendiğinde veritabanına kaydedin
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $phoneNumber = $_POST["phoneNumber"];
            $email = $_POST["email"];
            $address = $_POST["address"];
            $size = $_POST["size"];
            $rooms = $_POST["rooms"];
            $price = $_POST["price"];
            $picture = $targetFile;
            $title = $_POST["title"];

            // Veritabanına ekleme sorgusu
            $sql = "INSERT INTO rent (name, surname, phoneNumber, email, address, size, rooms, price, picture, title) VALUES ('$name', '$surname', '$phoneNumber', '$email',  '$address', '$size', '$rooms', '$price', '$picture', '$title')";

            if ($conn->query($sql) === TRUE) {
                header("Location: http://localhost/realestate/buy.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo 'Dosya yüklenirken bir hata oluştu.';
        }
    } else {
        echo 'Sadece JPG ve PNG dosyaları kabul edilir.';
    }
}

// Veritabanı bağlantısını kapatma
$conn->close();
?>


 <div id="rentForms">
    <div class="boxSell">
        <span class="borderLineSell"></span>
        <form method="post" enctype="multipart/form-data">
            <h2>Real Estate Rent Form</h2>
            <div id="ContactInformation">
                <div class="inputBoxSell">
                    <input type="text" name="title" required="required">
                    <span>Title</span>
                    <i></i>
                </div>
                <div class="inputBoxSell">
                    <input type="text" name="name" required="required">
                    <span>Name</span>
                    <i></i>
                </div>
                <div class="inputBoxSell">
                    <input type="text" name="surname" required="required">
                    <span>Surname</span>
                    <i></i>
                </div>
                <div class="inputBoxSell">
                    <input type="text" name="phoneNumber" required="required">
                    <span>Phone</span>
                    <i></i>
                </div>
                <div class="inputBoxSell">
                    <input type="text" name="email" required="required">
                    <span>E-mail</span>
                    <i></i>
                </div>
            </div>
            <div id="PropertyInformation">
                <div class="inputBoxSell">
                    <input type="text" name="address" required="required">
                    <span>Location</span>
                    <i></i>
                </div>
                <div class="inputBoxSell">
                    <input type="text" name="size" required="required">
                    <span>Size</span>
                    <i></i>
                </div>
                <div class="inputBoxSell">
                    <input type="text" name="rooms" required="required">
                    <span>Rooms</span>
                    <i></i>
                </div>
            </div>
            <div id="PriceInformation">
                <div class="inputBoxSell">
                    <input type="text" name="price" required="required">
                    <span>Price</span>
                    <i></i>
                </div>
                <div class="inputBoxSellFile">
                    <label for="picture"></label>
                    <input type="file" name="picture" id="picture">
                </div>
            </div>
            <input type="submit" value="Upload">
        </form>
    </div>
</div>


</div>


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

                                    <li><a href="index.php">News</a></li>
                                    <li><a href="sell.php">Sell</a></li>
                                    <li><a href="rent.php">Rent</a></li>
                                    <li><a href="buy.php">Buy</a></li>
                                    <li><a href="search.php ">Search</a></li>
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