 <?php
session_start();
include('dbconnect.php');
?>
<?php
if(isset($_SESSION['suser']))
{
$un=$_SESSION['suser'];
$opd=$_POST['l1'];
$npd=$_POST['l3'];
$sql="update student2 set password='$npd'where username ='$un'and password='$opd'";
$result=mysqli_query($conn,$sql);
}

if($result){
    echo "Password updated";

}else{
echo "Please login";
echo "<a href='login.html'>Click here</a>";
} 
?>

