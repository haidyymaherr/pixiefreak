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
  <link rel="stylesheet" href="../css/news.css" />
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
    rel="stylesheet" />
  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/6b11d4a153.js" crossorigin="anonymous"></script>
  <script
      src="https://kit.fontawesome.com/587d92c94b.js"
      crossorigin="anonymous"
    ></script>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <iframe width="0" height="0" src="../images/Untitled video - Made with Clipchamp (1).mp3" frameborder="0"
    allowfullscreen></iframe>
</head>

<body>
  <section>
    <div class="container">
      <video autoplay loop muted class="back-video">
        <source src="../images/Ninja - 83274 (1).mp4" />
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
        <h1>NEWS PAGE</h1>
        <h4> This where you can browse through our tournaments</h4>
      </div>
    </div>
  </section>

  <section class="main">
    <div class="container2">
      <div class="txt1">
        <p class="glitch">
          <span aria-hidden="true">NEWS FEED</span>
          NEWS FEED
          <span aria-hidden="true">NEWS FEED</span>
        </p>
       </div>
      <div class="boxes" >
        <div class="box" id="box1">
         <div class="img1"></div>
          <div class="txt">
            <div class="top">GAMING</div>
            <h3>Na'Vi moves to second in Europe ESL Pro league</h3>
            <a href="../html/news2.php" class="read" >read more...</a>
            <div class="bottom">October 23, 2021</div>
          </div>
        </div>
        <div class="box" id="box2">
          <div class="img2"></div>
          <div class="txt">
            <div class="top">NEWS</div>
            <h3> Coldzera: if you ask me the best team I've played in my life,i'll say it's LG</h3>
            <a href="../html/news2.php" class="read">read more...</a>
            <div class="bottom">October 23, 2021</div>
          </div>
        </div>
        <div class="box" id="box3">
        <div class="img3"></div>
          <div class="txt">
            <div class="top">NEWS</div>
            <h3> World's 2021 quarterfinal Predections</h3>
            <a href="../html/news2.php" class="read">read more...</a>
            <div class="bottom">October 23, 2021</div>
          </div>
        </div>
        <div class="box" id="box4">
          <div class="img4"></div>
          <div class="txt">
            <div class="top">E_SPORTS</div>
            <h3>Black Ops 4 tourney Code Red, reviewed:'We just got shrouded on, bro'</h3>
            <a href="../html/news2.php" class="read">read more...</a>
            <div class="bottom">October 23, 2021</div>
          </div>
        </div>
        <div class="box" id="box5">
          <div class="img5"></div>
          <div class="txt">
            <div class="top">GAMING</div>
            <h3>League of Legends world championship landing page</h3>
            <a href="../html/news2.php"class="read" >read more...</a>
            <div class="bottom">October 23, 2021</div>
          </div>
        </div>
        <div class="box" id="box6">
          <div class="img6"></div>
          <div class="txt">
            <div class="top">E-SPORTS</div>
            <h3>Thank you cloud9 for bringing back hope to North America</h3>
            <a href="../html/news2.php" class="read">read more...</a>
            <div class="bottom">October 23, 2021</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
    include_once 'footer.php';
    ?>
  <script src="../js/home.js"></script>
</body>

</html>