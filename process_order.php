<?php
$fullName = $_POST["fullname"];
$mobileNumber = $_POST["mobilenumber"];
$address = $_POST["address"];
$city = $_POST["city"];
$zipCode = $_POST["zipCode"];
$orderDetails = $_POST["order_details"];
$orderTotal = $_POST["order_total"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$connection = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Use prepared statement to prevent SQL injection
$sql = "INSERT INTO orders (fullname, mobilenumber, address, city, zipCode, order_details, order_total) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $connection->prepare($sql);
$stmt->bind_param("sssssss", $fullName, $mobileNumber, $address, $city, $zipCode, $orderDetails, $orderTotal);

if ($stmt->execute()) {
    echo "Order successfully";
    header("location: index1.html");
} else {
    echo "Not able to order";
}

$stmt->close();
$connection->close();
?>
