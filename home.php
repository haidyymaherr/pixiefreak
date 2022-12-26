<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PIXIE FREAK</title>
    <link rel="icon" href="../images/blacklogo.ico">
    <!-- LINK CSS 
    by haidy-->
    <link rel="stylesheet" href="../css/home.css" />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
      rel="stylesheet"/>
      <!-- FONT AWESOME -->
      <script src="https://kit.fontawesome.com/6b11d4a153.js" crossorigin="anonymous"></script>
       <!-- jQuery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  </head>

  <!-- HOME AND TEAMS by Haidy -->
  <!-- ABOUT US by Enjy -->=
  <body>
  <?php include 'load.php';?>
    <div class="container">
      <video autoplay loop muted class="back-video">
        <source src="../images/Anime - 103434.mp4" />
      </video>
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
      
      <div class="title">
         <h4>PIXIEFREAK GAMING</h4>
         <h1>We organize eSports tournaments <br> for professional and amateur gamers</h1>
         <div class="btn">
            <a href="../html/about.php">READ MORE</a>
            <i class="fa fa-arrow-right"></i>
         </div>
      </div>
  
    </div>
   
  
    <script src="../js/home.js"></script>
  </body>
</html>
