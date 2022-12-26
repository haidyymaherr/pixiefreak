<?php
require_once 'connection1.php';
$sql="SELECT * FROM image";
$images= $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<!--by Enjy-->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PIXIE FREAK</title>
    <!-- LINK CSS 
    by haidy-->
    <link rel="stylesheet" href="../css/gallary.css" />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
        rel="stylesheet" />
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/6b11d4a153.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/587d92c94b.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
    <section class="contact1">
        <div class="container" >
            <div class="main"></div>
                <div class="nav">
                    <div class="logo"><img src="../images/logo.png" alt="logo" /></div>
                    <div class="nav-main">
                        <!-- putting links inside href by Enjy -->
                        <!-- html form by Haidy -->

             
                        <a href="../html/home.php">HOME</a>
              <a href="../html/news.php">NEWS</a>
              <a href="../html/about.php">ABOUT US</a>
              <a href="../html/tournaments.html">TOURNAMENTS</a>
              <a href="teams.php">TEAMS</a>
              <a href="../html/streams.html">STREAMS</a>
              <a href="../html/matches.php">MATCHES</a>
              <a href="../html/gallery.php">GALLERY</a>
              
              <a class="bars"><i class="fa fa-bars" onclick="menu()" id="bars"></i></a>
  
              <div class="drop" id="drop">
                <ul>
                  <li ><a class="drop-menu" href="../html/sponsers.php">SPONSERS</a></li>
                  <li ><a class="drop-menu" href="../html/contact.php">CONTACT US</a></li>
                  <li ><a class="drop-menu" href="../html/feedback.php">FEEDBACK</a></li>
                  <li ><a class="drop-menu" href="../html/signLoginForm.php">SIGN UP / LOG IN</a></li>
                </ul>
              </div>


                        <i class="fa-solid fa-magnifying-glass search"></i>


                    </div>
                </div>
        
        
            <span>Gallery</span>
        </div>
    </section>
    <section class="photos">
        <div class="title">
            <h4> Scroll for more photos</h4>
        </div>
        <div class="main-scroll">
        
            <div>
                <button class="icon"><i class="fas fa-angle-double-left" onclick="scrollr()"></i></button>
            </div>
            <div class="cover">
            <div class="scroll-images">
                
            <?php 
               while($row=mysqli_fetch_assoc($images))
               {
                 
           ?>     
           
                   <div class="child">
                    <img class="child-img" src="<?php echo $row["img"]; ?>">
                 </div>
               
            <?php
               }
               ?>
               
               </div>
            </div>
               <div>
                <button class="icon"><i class="fas fa-angle-double-right" onclick="scrolll()"></i></button>
            </div>
        </div>
    </section>
    <?php
    include_once 'footer.php';
    ?>
    <script src="../js/home.js"></script>
</body>
<script>
    function scrolll(){
        var left=document.querySelector(".scroll-images");
        left.scrollBy(350,0);
    }
    function scrollr(){
        var right=document.querySelector(".scroll-images");
        right.scrollBy(-350,0);
    }
</script>
</html>