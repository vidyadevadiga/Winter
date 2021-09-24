<?php
session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password']))
    {
        $user=$_SESSION['username'];
        $pass=$_SESSION['password'];
    }
    else
    {
      echo '<META http-equiv="refresh" content="0;logout">';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport"content="width=device-width,initial-scale=1.0">
        <title>website design</title>
        <link rel="stylesheet" href="index.css">
        <ink rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,500;1,600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>

        <section class="sub-header">
            <nav>
                <a href="index.html"><img src="Images/logo.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hideMenu()"></i>
                    <ul>
                       
                        <li><a href="logout">LOGOUT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
            <h1>CONTACT View</h1>
        </section>

        

        <section class="contact-us">
            <div class="row">
<?php
include 'dbconfig.php';
$sql="SELECT * FROM `contact`";
                 $result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $name=$row['name'];
        $email=$row['email'];
        $phno=$row['phno'];
        $msg=$row['msg'];
?>
                <div class="contact-col">
                   <div>
                     <i class="fa fa-home"></i> 
                     <span>
                        <h4><?php echo $name;?></h4>
                        <p><?php echo $email;?></p>
                        <p><?php echo $phno;?></p>
                        <p><?php echo $msg;?></p>
                        
                     </span>
                   </div>
                   
               </div>
           <?php 
    }
}
           ?>
               
        </div>
        </section>

        <footer>
            <div class="row">
                <div class="col">
                    <img src="Images/logo.png" class="logo">
                    <p>A group of Enthusiasts now have a vision of training students towards their goals.</p>
                </div>
                <div class="col">
                    <h5>Office <div class="underline"><span></span></div></h5>
                    <p>XYZ Road</p>
                    <p>Whitefield, Shimoga</p>
                    <p>Karnataka, PIN 577201,India</p>
                    <p class="email-id">abc21@gmail.com</p>
                    <h6>+91 - 0123456789</h6>
                </div>
                <div class="col">
                    <h5>Links <div class="underline"><span></span></h5>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">About Us</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="">Gallery</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Newsletter <div class="underline"><span></span></h5>
                    <form>
                        <i class="fa fa-envelope"></i>
                        <input type="email" placeholder="Enter your email id" required>
                        <button type="submit"><i class="fa fa-arrow-right"></i></button>
                    </form>
                    <div class="social-icons">
                        <i class="fa fa-whatsapp"></i>
                        <i class="fa fa-instagram"></i>
                        <i class="fa fa-facebook-f"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-linkedin"></i>
                    </div>
                </div>
            </div>
            <hr>
            <p1 class="copyright">Quient Trainings Pvt Ltd &copy; 2021 - All Rights Reserved</p1>
        </footer>

        <script>
            var navLinks = document.getElementById("navLinks");
              function showMenu() {
                  navLinks.style.right="0";
                  }
              function hideMenu() {
                  navLinks.style.right="-200px";
                  }

        </script>

    </body>
</html>