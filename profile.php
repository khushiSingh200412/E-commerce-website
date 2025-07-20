<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_SESSION['suser'])) {
    $suser = $_SESSION['suser'];

    $sql = "SELECT * FROM student2 WHERE username='$suser'";
    $result = $connection->query($sql);

    if ($result) {
        // Check if any rows were returned
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $uname = $row['username']; // Corrected column name
            $em = $row['emailid'];
            $mob = $row['mobileno'];
        } else {
            echo "User not found.";
            exit();
        }
    } else {
        echo "Error executing the query: " . $connection->error;
        exit();
    }
} else {
    echo "Session not set. Please log in.";
    exit();
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

<div class="profile-container">
    <h2>User Profile</h2>

    <?php
    // Display user information
    echo "Username: " . htmlspecialchars($uname) . "<br>";
    echo "Email: " . htmlspecialchars($em) . "<br>";
    echo "Mobile No: " . htmlspecialchars($mob) . "<br>";
    ?>

    <p><a href="updateprofile.html">Update Profile</a></p>
</div>

<div class="logout">
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</div>
<div class="delete-account-container">
    <h2>Delete Account</h2>
    <p>Are you sure you want to delete your account? This action is irreversible.</p>
    
    <form action="deleteaccount.php" method="post">
        <label for="confirmation">Type 'DELETE' to confirm:</label>
        <input type="text" id="confirmation" name="confirmation" required>
        
        <button type="submit">Delete Account</button>
    </form>
</div>
</body>
</html>
