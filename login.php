<?php
session_start();
include("dbconnect.php");
?>
<?php
$uname=$_POST['l1'];
$pass=$_POST['l3'];

$sql="SELECT*FROM student2";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result))
{
    if($row["username"]==$uname && $row["password"]==$pass)
    {
        $_SESSION["suser"]="$uname";
        $_SESSION["spass"]="$pass";
        
        echo "login succesfully";
         header("location:index1.html");

    }
}

echo "incorrect username and password";


mysqli_close($conn);
?>