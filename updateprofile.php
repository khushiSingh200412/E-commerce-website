<?php
session_start();
include('dbconnect.php');

// Check if the database connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['suser'])) {
    $currentUsername = $_SESSION['suser'];
    $newUsername = $_POST['newUsername'];
    $newEmail = $_POST['newEmail'];
    $newPassword = $_POST['newPassword'];
    $newMobileNo = $_POST['newMobileNo'];

    // Construct the SQL query
    $sql = "UPDATE student2 SET username='$newUsername', emailid='$newEmail', password='$newPassword', mobileno='$newMobileNo' WHERE username='$currentUsername'";
    
    // Execute the query
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Redirect to profile page with updated information
        header("location:index1.html?username=$newUsername&email=$newEmail&mobileNo=$newMobileNo");
    } else {
        echo "Error updating profile: " . mysqli_error($conn);
    }
} else {
    echo "Please log in";
    header("location: login.html");
}

// Close the database connection
mysqli_close($conn);
?>
