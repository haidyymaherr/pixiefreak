<?php
require_once 'databaseConfig.php';
$sql="SELECT * FROM matches1";
$results= $conn->query($sql);
?>

<!-- by haidy -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Matches</title>
    <link rel="icon" href="../images/blacklogo.ico">
    <!-- css links -->
    <link rel="stylesheet" href="../css/matches.css" />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
      rel="stylesheet"
    />
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/6b11d4a153.js" crossorigin="anonymous"></script>
     <!-- jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <!-- PLUGIN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
  <?php include 'load.php';?>
    <div class="cover"></div>
    <div class="container" id="nav">
        <!-- <video autoplay loop muted class="back-video">
            <source src="../images/file (1).mp4" />
          </video> -->
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
        <h1>Welcome to our Matches</h1>
        <h5>Here you can find all of the matches that we have</h5>
      </div>
    </div>
    <div class="tour">
      <h3>Want to join the playout?</h3>
      <h2>Do Not Miss Our Tournaments!</h2>
      <a href="../html/tournaments.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
       <button> View Tournaments</button></a>
    </div>
    <div class="main">
      
        <div class="matches">


            <div class="header" data-aos="fade-up">
                <p id="all">All MATCHES</p>
                <p id="up" >UPCOMING MATCHES</p>
                <p id="res">RECENT RESULTS</p>
            </div>
            <?php 
               while($row=mysqli_fetch_assoc($results))
               {
                 
                  ?>
               
            
            <div class="match <?php echo $row["type"] ?>" data-aos="fade-up" >
                <div class="left">
                    <div class="up"><p class="players"><?php echo $row["participants"] ?> PARTICIPANTS</p><p class="type">UPCOMPING</p></div>
                    <div class="down">
                        <a href="../html/live1.php">WATCH STREAM</a>
                        <p id="p1"><?php echo $row["name"] ?></p>
                        <p><?php echo $row["result"] ?></p>
                        <p><?php echo $row["date"]?></p>
                    </div>
                </div>

                <div class="right">
                    <div class="team1"><img style="width:<?php echo $row["size1"] ?>px;"  src= "<?php echo $row["team1"] ?>"  data-tilt data-tilt-scale="1.05" data-tilt-speed="0" ></div>
                    <div class="vs">VS</div>
                    <div class="team2"><img style="width:<?php echo $row["size1"] ?>px;" src="<?php echo $row["team2"]?>"   data-tilt data-tilt-scale="1.05" data-tilt-glare data-tilt-max-glare="0.8" data-tilt-speed="0"></div>
                </div>
            </div>
            <?php

               }
             
             ?>
             

        </div>

    
      
    </div>
    <?php
    include_once 'footer.php';
    ?>
    <script src="../js/home.js"></script>
    <script src="../js/matches.js"></script>
    <script src="../js/readyMade.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>