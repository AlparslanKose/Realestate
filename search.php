<!DOCTYPE html>
<html>
<head>
    <title>Real Estate Search</title>
    <link rel="stylesheet" href="css/style.css">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Real Estate</title>
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


     <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
			
        }

        h2 {
            margin-bottom: 20px;
        }



        .property-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .property {
            width: calc(15% - 10px);
            flex-basis: calc(45% - 40px);
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 50px;
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
        }

        .property img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }


        .property h3 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .property p {
            margin: 0;
        }

        #search-form {
            margin-bottom: 20px;
        }

        .inputBoxSell {
            margin-bottom: 10px;
        }

        .inputBoxSell input {
            width: 200px;
            padding: 5px;
        }

        #search-button {
            padding: 11px 26px;
            background-color: #0f1f10;
            border: none;
            color: white;
            cursor: pointer;
        }

        #search-button:hover {
            background-color: #4CAF50;
        }
    </style>
	
 
	
</head>

<body>
 <div id="fh5co-wrapper">
        <div id="fh5co-page">

            <header id="fh5co-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.php"><i class="icon-home"></i>Real<span>Estate.bg</span></a></h1>
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
							
							
								<li><a href=index.php">News</a></li>
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
            </header>
                </div>

<form id="search-form" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div id="fh5co-search-map">
                <div class="search-property">
                    <div class="s-holder">
                     <center>   <h2>Search Properties</h2> </center>  <br>
                        <div class="row">
                            <div class="col-xxs-12 col-xs-12">
                                <div class="input-field">
                                    <label for="from">Name:</label>
                                    <input type="text" class="form-control" name="name" id="from-place" placeholder="Any" />
                                </div>
                            </div>
							    <div class="col-xxs-12 col-xs-12">
                                <div class="input-field">
                                    <label for="from">Surname:</label>
                                    <input type="text" class="form-control" name="surname" id="from-place" placeholder="Any" />
                                </div>
                            </div>
								<div class="col-xxs-12 col-xs-12">
                                <div class="input-field">
                                    <label for="from">Price:</label>
                                    <input type="text" class="form-control" name="price" id="from-place" placeholder="Type" />
                                </div>
                            </div>
                            <div class="col-xxs-12 col-xs-12">
                                <div class="input-field">
                                    <label for="from">Location:</label>
                                    <input type="text" class="form-control" name="address" id="from-place" placeholder="Type" />
                                </div>
                            </div>
							    <div class="col-xxs-12 col-xs-12">
                                <div class="input-field">
                                    <label for="from">E-Mail:</label>
                                    <input type="text" class="form-control" name="email" id="from-place" placeholder="Type" />
                                </div>
                            </div>

                            </section>
                        </div>
                        <div class="col-xxs-12 col-xs-12 text-center">
				 <input id="search-button" type="submit" value="Search">   
  
                        </div>
                    </div>
                </div>
            </div>
</form>




<?php
require 'database.php';

// Formdan gelen verileri al
$name = $_POST['name'] ?? '';
$surname = $_POST['surname'] ?? '';
$phoneNumber = $_POST['phoneNumber'] ?? '';
$email = $_POST['email'] ?? '';
$address = $_POST['address'] ?? '';
$size = $_POST['size'] ?? '';
$rooms = $_POST['rooms'] ?? '';
$price = $_POST['price'] ?? '';

// Arama sorgusu oluştur
$sql = "SELECT * FROM sell WHERE 1=1";

if (!empty($name)) {
    $sql .= " AND `name` LIKE '%$name%'";
}
if (!empty($surname)) {
    $sql .= " AND `surname` LIKE '%$surname%'";
}
if (!empty($phoneNumber)) {
    $sql .= " AND `phoneNumber` LIKE '%$phoneNumber%'";
}
if (!empty($email)) {
    $sql .= " AND `email` LIKE '%$email%'";
}
if (!empty($address)) {
    $sql .= " AND `address` LIKE '%$address%'";
}
if (!empty($size)) {
    $sql .= " AND `size` LIKE '%$size%'";
}

if (!empty($price)) {
    $sql .= " AND `price` LIKE '%$price%'";
}

$result = $conn->query($sql);

// Sonuçları kontrol et
if ($result->num_rows > 0) {
    // Sonuçları döngüyle işle
    while ($row = $result->fetch_assoc()) {
        // Sonuçları kullanarak kartları oluştur
        echo '<div class="property">';
		echo '<p><strong> <center> Sale </center></strong>'  . '</p>';
        echo '<img src="' . $row["picture"] . '" alt="House Image">';
        echo '<h3>' . $row["title"] . '</h3>';
        echo '<p>Name: ' . $row["name"] . '</p>';
        echo '<p>Surname: ' . $row["surname"] . '</p>';
        echo '<p>Phone Number: ' . $row["phoneNumber"] . '</p>';
        echo '<p>Email: ' . $row["email"] . '</p>';
        echo '<p>Location: ' . $row["address"] . '</p>';
        echo '<p>Size: ' . $row["size"] .' EUR'. '</p>';
        echo '<p>Price: ' . $row["price"] . '</p>';
        echo '</div>';
    }
} else {
    echo "";
}

// Arama sorgusu oluştur (rent tablosu için)
$sql_rent = "SELECT * FROM rent WHERE 1=1";

if (!empty($name)) {
    $sql_rent .= " AND `name` LIKE '%$name%'";
}
if (!empty($surname)) {
    $sql_rent .= " AND `surname` LIKE '%$surname%'";
}
if (!empty($phoneNumber)) {
    $sql_rent .= " AND `phoneNumber` LIKE '%$phoneNumber%'";
}
if (!empty($email)) {
    $sql_rent .= " AND `email` LIKE '%$email%'";
}
if (!empty($address)) {
    $sql_rent .= " AND `address` LIKE '%$address%'";
}
if (!empty($size)) {
    $sql_rent .= " AND `size` LIKE '%$size%'";
}
if (!empty($rooms)) {
    $sql_rent .= " AND `rooms` LIKE '%$rooms%'";
}
if (!empty($price)) {
    $sql_rent .= " AND `price` LIKE '%$price%'";
}

$result_rent = $conn->query($sql_rent);

// Sonuçları kontrol et (rent tablosu için)
if ($result_rent->num_rows > 0) {
    // Sonuçları döngüyle işle
    while ($row_rent = $result_rent->fetch_assoc()) {
        // Sonuçları kullanarak kartları oluştur
        echo '<div class="property">';
		echo '<p><strong> <center> Rent </center></strong>'  . '</p>';
        echo '<img src="' . $row_rent["picture"] . '" alt="House Image">';
        echo '<h3>' . $row_rent["title"] . '</h3>';
        echo '<p>Name: ' . $row_rent["name"] . '</p>';
        echo '<p>Surname: ' . $row_rent["surname"] . '</p>';
        echo '<p>Phone Number: ' . $row_rent["phoneNumber"] . '</p>';
        echo '<p>Email: ' . $row_rent["email"] . '</p>';
        echo '<p>Location: ' . $row_rent["address"] . '</p>';
        echo '<p>Size: ' . $row_rent["size"] . '</p>';
        echo '<p>Price: ' . $row_rent["price"] .' EUR/per month'. '</p>';
        echo '</div>';
    }
} else {
    echo "";
}

// Veritabanı bağlantısını kapat
$conn->close();
?>

</div>
</div>

    <footer>
        <div id="footer">
            <div class="container">
                <div class="row row-bottom-padded-md">
                    <div class="col-md-3">
                        <h3 class="section-title">About RealEstate.BG</h3>
                        <p>"Our real estate website provides a user-friendly platform for buyers, sellers, and renters to connect and find their perfect property."</p>
                        <p>Home is not about walls. <br> -Poppins</p>
                    </div>

                    <div class="col-md-3 col-md-push-1">
                        <h3 class="section-title">Links</h3>
                        <ul>
                            <li><a href="#fh5co-about">Agent Finder</a></li>
                            <li><a href="index.php">Buy</a></li>
                            <li><a href="index.php">Rent</a></li>
                            <li><a href="index.php">Sell</a></li>
                            <li><a href="index.php">News</a></li>
                            <li><a href="#fh5co-search-map">Search</a></li>
                            <li><a href="loan-calculator.php">Loan Calculator</a></li>
                            <li><a href="signin.php">Login</a></li>
                            <li class="active"><a href="signup.php">Sign Up</a></li>
                            <!-- 
                                    <li><a href="login.html ">Login</a></li>
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
                        <p>Looking new house? Subscribe for our newsletter</p>
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
                        <p>Copyright 2023 RealEstate.bg 
                            <a href="https://www.instagram.com/alparslan.exe/ " target="_blank ">AlparslanKöse</a>
                            <a href="# " target="_blank ">,Kerem</a>
                            <a href="# " target="_blank ">,Berk</a>


                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/sticky.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/selectFx.js"></script>
    <script src="js/main.js"></script>


</body>
</html>
