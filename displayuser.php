<?php
include("dbconnect.php");
?>

<?php
$sql="SELECT* FROM student2";
$result = mysqli_query($conn,$sql);
echo mysqli_num_rows($result);
if(mysqli_num_rows($result))
{
    while($rows=mysqli_fetch_assoc($result))
    {
        
        // Display user information
        echo "Username: " . htmlspecialchars($uname) . "<br>";
        echo "Email: " . htmlspecialchars($em) . "<br>";
        echo "Mobile No: " . htmlspecialchars($mob) . "<br>";
        
    
    }
}

mysqli_close($conn);
?>