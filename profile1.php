<?php
  session_start();
?>
  <!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
   <br>
   <br>
   <?php
   if(isset($_SESSION['suser']))
   {
    echo "<h1> Dashboard</h1>";
    echo "<a href='update.html'> update password</a>";
    echo "<a href='delete.html'>delete password</a>";
    echo "<a href='logout.html'> logout</a>";
    echo "<a href='updatepass.html'> update password</a>";
    echo "<a href='updatepass.html'> update password</a>";
    echo "<a href='index.html'>home</a>";
    echo '<br><br>';
    echo "welcome" .$_SESSION['suser'];
    echo "login sucessfully";
   }
   else{
    echo "please login";
    echo "<a href='login.html'>click here</a>";
   }
   ?>
  </body>
  </html>