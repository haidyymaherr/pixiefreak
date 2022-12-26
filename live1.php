<?php
require_once 'databaseConfig.php';
$sql="SELECT * FROM matches1";
$results= $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Stream</title>
    <link rel="icon" href="../images/blacklogo.ico">
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
          <!-- css -->
          
    <link rel="stylesheet" href="../css/live.css">
</head>
<body>
<?php include 'load.php';?>
    <div class="container" id="con">
       
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
        

       <div class="stream">
        <div data-dowall="63a378b11c73df002867a705" id="dowall"></div>
        <button class="sett"><i class="fa-solid fa-gear" id="sett" style="font-size:27px;"></i></button>
        <div class="theme">
      
        <div class="toggle">
    
          <div class="btn"><button id="light" onclick="setCookie('theme', 'light', 7);" value="sumbit">LIGHT</button>
            <button id="dark" onclick="setCookie('theme', 'dark', 7);">DARK</button></div>
        </div>
        </div>
        <div class="video">
            <!-- <video loop autoplay controls MUTED id="vid">
                <source src="../../images/pubg.MOV" type="" >
                
            </video>
            -->
            <!-- insert where you want your wall (change the data-dowall "code" to the code from your wall) -->
           
            <!-- <iframe id="vid" width="560" height="500" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <!-- <div class="livedot"><p>Live</p><div class="dot"></div></div> -->
          
        </div>
  

        </div>
       </div>
   

    <script src="../js/live1.js"></script>
    <script src="../js/home.js"></script>
    <script async src="https://cdn.dowall.tv/embed.js?event=63a378b11c73df002867a703"></script>
</body>
</html>