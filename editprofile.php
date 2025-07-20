<?php 
               if(isset($_POST['users'])){
                $uname = $_POST['l1'];
                $em = $_POST['l2'];
                $mob = $_POST['l4'];
                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE student2 SET Username='$username', Email='$em', mob='$mob' WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                </div> <br>";
              echo "<a href='index1.html'><button class='btn'>Go Home</button>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM student2 WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['uname'];
                    $res_Email = $result['em'];
                    $res_mob = $result['mob'];
                }
            }
            ?>