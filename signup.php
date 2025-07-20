<?php
session_start();

$uname = $_POST['l1'];
$pass = $_POST['l3'];
$em = $_POST['l2'];
$mob = $_POST['l4'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$connection = new mysqli($servername, $username, $password, $dbname);

// Use prepared statements to avoid SQL injection
$stmt = $connection->prepare("INSERT INTO student2 (username, password, email, mobileNo) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $uname, $pass, $em, $mob);

if ($stmt->execute()) {
    // Store only non-sensitive information in session variables
    $_SESSION['uname'] = $uname;
    $_SESSION['em'] = $em;
    $_SESSION['mob'] = $mob;

    echo "Sign up Successfully";
    header("location: profile.php");
    exit;
} else {
    echo "Not able to login";
}
?>
