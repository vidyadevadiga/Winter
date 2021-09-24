<?php
               if(isset($_POST['submit']))
               {
                   include 'dbconfig.php';
                $name=$_POST['name'];
                $email=$_POST['email'];
                $phno=$_POST['phno'];
                $message=$_POST['message'];
               $sql="INSERT INTO `contact` (`id`, `name`, `email`, `phno`, `msg`) VALUES (NULL, '$name', '$email', '$phno', '$message')";
                if(mysqli_query($conn, $sql))
                {
                    echo "<script type=\"text/javascript\">alert(\"Thakyou for contacting us, Your message is important to us we will get back to you soon.\");</script>";
                
                }
                else
                {
                echo "<script type=\"text/javascript\">alert(\"Error Please Try again after some time\");</script>";
                }
                
                echo '<META http-equiv="refresh" content="0;index.html">';
               }
               
 ?>