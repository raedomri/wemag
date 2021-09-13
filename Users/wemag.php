
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeMag</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./image/bootstrap.min.css">
    <link rel="stylesheet" href="./image/all.min.css">
    <link rel="stylesheet" href="./image/normalize.css">
    <link rel="stylesheet" href="./image/bootstrap.min.js">
    <link rel="stylesheet" href="./image/fontawesome.min.css">
    <link rel="stylesheet" href="./image/jquery-1.12.4.min.js">
    <link rel="preconnect" href=".https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,300;0,400;1,300;1,400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<script src="https://kit.fontawesome.com/9a427e7cd4.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="container">
            <a href=""  class="logo">
              <img src="../image/w1.png">
            </a>
            <nav>
               <i class="fas fa-bars toggel-menu"></i>
                <ul>
                    <li class="active"><a href="">HOMME</a></li>
                    <li><a href="magazine.php">WE MAG</a></li>
                    <li><a href="wegottalents.php">WE GOT TALENTS</a></li>
                    <li><a href="weblog.php">WE BLOG</a></li>
                    <li><a href="podcast.php">PODCAST</a></li>
                   
                     
                    
                    
                
                
                    
               
               
                               
                    
                </ul>
                <div class="form">
                    <i class="fas fa-search"></i>
                </div>
            </nav>

        </div>
    
        
    </header>
    
<!--End header-->
<!--start landing page-->
<div class="landing">
    <div class="overlay"></div>
        <div class="text">
            <div class="content">
        <h2>WeTalk</h2>
        <p class="color">
            WE TALK est le blog de WeCodeLand. Vous trouverez ici tout ce que vous devez savoir
             sur la startup: histoires inspirantes, astuces et actualités, tout y est.
          
            </p>
            </div>
        </div>
        <i class="fas fa-angle-left change-background fa-2x"></i>
        <i class="fas fa-angle-right change-background fa-2x"></i>
        <ul class="bullets">
            <li></li>
            <li class="active"></li>
            <li></li>
        </ul>
    
</div>
  <!--end landing-->
   <!--start features-->
  
    <!--end features-->
    <!--start wemag-->
<div class="main-heading">
    <h2> WeMag </h2>
    <p> WE TALK est le blog de WeCodeLand. Vous trouverez ici tout ce que vous devez savoir
        sur la startup: histoires inspirantes, astuces et actualités, tout y est.
     </p>
    </div>
    
    </div>
    <!--end Wemag-->
    <!--start WE GOT TALLENTS-->
<div class="main-heading">
    <h2> WE GOT TALLENTS </h2>
    <p> WE TALK est le blog de WeCodeLand. Vous trouverez ici tout ce que vous devez savoir
        sur la startup: histoires inspirantes, astuces et actualités, tout y est.
     </p>
    </div>
    <div class="features">
        <div class="container">
            <div class="feat">
                <img  class="image2" src="../image/picture1.jpg">
                <h3>raed omri</h3>
                <p>raed omi 4wjwhhjklpowighjkiwghjkjghjkljghjk</p>
            </div>
            <div class="feat">
                <img  class="image2" src="../image/picture1.jpg">
                <h3>raed omri</h3>
                <p>raed omi 4wjwhhjklpowighjkiwghjkjghjkljghjk</p>
            </div>
            <div class="feat">
                <img class="image2" src="../image/picture1.jpg">
                <h3>raed omri</h3>
                <p>raed omi 4wjwhhjklpowighjkiwghjkjghjkljghjk</p>
            </div>
        </div>
    <!--end WE GOT TALLENTS-->
    <!--start blog-->
<div class="main-heading">
    <h2> WE BLOG </h2>
    <p> WE TALK est le blog de WeCodeLand. Vous trouverez ici tout ce que vous devez savoir
        sur la startup: histoires inspirantes, astuces et actualités, tout y est.
     </p>
    </div>
    <!--end blog-->
<!--start podcast-->
<div class="main-heading">
    <h2>Podcast حكايات دجيتال </h2>
    <p> WE TALK est le blog de WeCodeLand. Vous trouverez ici tout ce que vous devez savoir
        sur la startup: histoires inspirantes, astuces et actualités, tout y est.
     </p>
    </div>
    <!--end podcast-->
    

    
    <!--start subscribe-->
    <div class="subscribe">
        <div class="container">
            <form action="wemag.php" method="POST">
                <?php
                $useremail ="";
                if(isset($_POST['Subscribe'])){
                    $useremail= $_POST['email'];
                if(filter_var($useremail, FILTER_VALIDATE_EMAIL)){
                     $subject= "thanks for subscribing us - Wetalk";
                     $message="thanks";
                     $sender="From: omri.raed@esprit.tn";
                     if(mail($useremail, $subject, $message, $sender)){
                        ?>
                        <div class="alertsuccess">  a  valid Email</div>
                        <?php
                        $useremail ="";

                     }else{
                        ?>
                        <div class="alerterror"> in a not  valid Email</div>
                        <?php

                     }
                }
                else{

                   ?>
                   <div class="alerterror"> <?php echo $useremail ?> in a not valid Email</div>
                   <?php
                }
                }
                
                
                
                ?>
                <i class="far fa-envelope fa-lg"> </i>
                <input type="email" name="email" placeholder="Your Email" required value="<?php echo $useremail ?>">
                <input type="submit" value="Subscribe"  />
            </form>
            <p>WE TALK est le blog de WeCodeLand</p>
        </div>
    </div>
    <!--start contact-->
    <div class="contact">
        <div class="container">
            <div class="main-heading">
                <h2>Contact Us</h2>
                <p> WE TALK est le blog de WeCodeLand. Vous trouverez ici tout ce que vous devez savoir
                    sur la startup: histoires inspirantes, astuces et actualités, tout y est.
                 </p>
                 <div class="content">
                     <form action="">
                         <input  class="main-input" type="text" name="t1" placeholder="Your Name">
                         <input  class="main-input" type="email" name="t2" placeholder="Your Email">
                         <textarea  class="main-input" name="m" placeholder="Your Message" ></textarea>
                         <input type="submit" name="" value="Send Message">
                     </form>
                     <div class="info">
                         <h4> Get In Touch </h4>
                         <span class="phone">71.136.136</span>
                         
                         <h4> Where We Are </h4>
                         <address>
                             04 Rue Sufulula<br> Mutuelle Ville<br>Tunis
                         </address>

                     </div>
                 </div>
            </div>
        </div>
    </div>
    
       

</body>
</html>
<?php  include('includes/footer.php') ?>