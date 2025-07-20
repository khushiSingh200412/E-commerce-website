<?php
$uname = $_POST['l1'];
$pass = $_POST['l3'];
$em = $_POST['l2'];
$mob = $_POST['l4'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$connection = new mysqli($servername, $username, $password, $dbname);
$sql = "insert into student2 values('$uname', '$pass', '$em' , '$mob')";
$result = mysqli_query($connection, $sql);

if($result)
{
    echo "Sign up Successfully";
    header("location: login.html");
    
}
else{
    echo "Not able to login";
}

?>