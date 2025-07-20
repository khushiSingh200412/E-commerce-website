<?php
$servername="localhost";// your server name
$username="root";
$password="";
$dbname="project";
$conn = mysqli_connect($servername, $username, $password,$dbname);
// check information
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
?>