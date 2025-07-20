<?php

$name = $_POST['l1'];
$em = $_POST['l2'];
$msg = $_POST['l3'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$connection = new mysqli($servername,$username,$password, $dbname);
$sql = "insert into contactus values('$name', '$em', '$msg' )";
$result = mysqli_query($connection, $sql);

if($result)
{
    echo "Congratulations! your message are send sucessfully";
    
}
else{
    echo "Not able to  send message";
}

?>