<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wtpracs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$price = 0.0;
$item = $_POST['item'];
var_dump($item);
foreach ($item as $value) {
	// echo $value;
	$sql = "SELECT * FROM items where item_name = '{$value}'";
 $result = $conn->query($sql) or die($conn->error);
 	while($row = $result->fetch_assoc()) {
            $price = $price + $row['price'];
    }
}
// echo $_POST['chb'];
$type = $_POST['chb'] or "None";
if ($type == "Platinium") {
	$price = $price * 70/100;
	}
	elseif ($type == "Gold") {
	$price = $price * 80/100;
	}
	elseif ($type == "Silver") {
	$price = $price * 90/100;
	}
echo $price;
// $sql = "SELECT id, firstname, lastname FROM MyGuests";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    }
// } else {
//     echo "0 results";
// }

$conn->close();
?>
