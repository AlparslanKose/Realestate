<!DOCTYPE html>
<html>
<head>
    <title>Real Estate Search</title>
    <link rel="stylesheet" href="css/style.css">

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
            justify-content: center;
        }

        .property {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 10px;
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
            padding: 8px 16px;
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
        }

        #search-button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
<h2>Real Estate Search</h2>

<form id="search-form" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div id="ContactInformation">
        <div class="inputBoxSell">
            <input type="text" name="name" placeholder="Name">
        </div>
        <div class="inputBoxSell">
            <input type="text" name="surname" placeholder="Surname">
        </div>
        <div class="inputBoxSell">
            <input type="text" name="phoneNumber" placeholder="Phone">
        </div>
        <div class="inputBoxSell">
            <input type="text" name="email" placeholder="E-mail">
        </div>
    </div>
    <div id="PropertyInformation">
        <div class="inputBoxSell">
            <input type="text" name="address" placeholder="Address">
        </div>
        <div class="inputBoxSell">
            <input type="text" name="size" placeholder="Area">
        </div>
        <div class="inputBoxSell">
            <input type="text" name="rooms" placeholder="Rooms">
        </div>
    </div>
    <div id="PriceInformation">
        <div class="inputBoxSell">
            <input type="text" name="price" placeholder="Price">
        </div>
    </div>
    <input id="search-button" type="submit" value="Search">
</form>
<?php
require 'database.php';
?>


<?php
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
if (!empty($rooms)) {
    $sql .= " AND `rooms` LIKE '%$rooms%'";
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
            echo '<img src="' . $row["picture"] . '" alt="House Image">';
            echo '<h3>' . $row["title"] . '</h3>';
            echo '<p>Name: ' . $row["name"] . '</p>';
            echo '<p>Surname: ' . $row["surname"] . '</p>';
            echo '<p>Phone Number: ' . $row["phoneNumber"] . '</p>';
            echo '<p>Email: ' . $row["email"] . '</p>';
            echo '<p>Address: ' . $row["address"] . '</p>';
            echo '<p>Size: ' . $row["size"] . '</p>';
            echo '<p>Rooms: ' . $row["rooms"] . '</p>';
            echo '<p>Price: ' . $row["price"] . '</p>';
            echo '</div>';
        }
    } else {
        echo "No results found.";
    }

// Veritabanı bağlantısını kapat
$conn->close();
?>
			</div>
	</div>

</body>
</html>
