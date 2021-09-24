<?php
        session_start();
        include "dbconfig.php";
         if(isset($_POST['login']))
          {
                $user=$_POST['username'];
                $pass=$_POST['password'];
                //echo $user+' '+$pass;
                $sql="select * from admin where name='$user' and password='$pass'";
                 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

               $_SESSION['username']=$user;
               $_SESSION['password']=$pass;
     echo '<META http-equiv="refresh" content="0;viewcontact">';
    
    }
}  
else{

               
                    echo "<script type=\"text/javascript\">alert(\"Enter valid username and password\");</script>";
                    
                echo '<META http-equiv="refresh" content="0;logout">';
                    
                   
                }

               
          }
          
        ?>