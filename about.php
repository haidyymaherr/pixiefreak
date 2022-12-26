<!DOCTYPE html>
<html lang="en">
  <!-- ABOUT US by Enjy -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/about.css" />
    <link rel="icon" href="../images/blacklogo.ico">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css"
    />
     <!-- GOOGLE FONTS -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link
       href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
       rel="stylesheet"
     />
      <!-- jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/587d92c94b.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
  <?php include 'load.php';?>
    <section>
      <div class="container2">
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

        <div class="container">
          <div class="left"></div>
          <div class="right">
            <div class="content">
              <h1>WHO WE ARE</h1>
              <p>
                We are one of the biggest organisations that offer provided a
                dedicated zone where gamers<br />
                can entrench themselves in the experience of the most popular
                games in the Battle Royale<br />
                genre.We also offer one of the wildest STREAMS, TOURNAMENTS, and
                NEWS for gamers all over<br />
                the world.
              </p>
              <h2>WE ARE THE GOATS</h2>
              <div class="icons">
                <div>
                  <div><i class="fa-solid fa-sack-dollar fa-2x"></i></div>
                  <p>$150m</p>
                </div>
                <div>
                  <div><i class="fa-solid fa-location-dot fa-2x"></i></div>
                  <p>2020</p>
                </div>
                <div>
                  <div><i class="fa-solid fa-people-group fa-2x"></i></div>
                  <p>34</p>
                </div>
                <div>
                  <div><i class="fa-solid fa-trophy fa-2x"></i></div>
                  <p>60</p>
                </div>
              </div>
              </div>
            </div>
        </div>

           
          </div>
        </div>
      </div>
    </section>
    <section class="teams">
      <h1 class="headding">MEET OUR TEAM</h1>
      <div class="profiles">
        <div class="profile">
          <img
            src="../images/WhatsApp Image 2022-11-04 at 2.49.45 PM.jpeg"
            class="profile-img"
            alt="img"
          />
          <h3 class="username">Haidy Maher</h3>
          <h5>CEO / FOUNDER</h5>
          <p>
            A hard woking university student who will be the upcoming microsoft
            or google best game developer and she won't give up until achieving
            that.
          </p>
        </div>
        <div class="profile">
          <img
            src="../images/WhatsApp Image 2022-11-04 at 2.59.16 PM.jpeg"
            class="profile-img"
            alt="img"
          />
          <h3 class="username">Enjy Ramadan</h3>
          <h5>CEO / FOUNDER</h5>
          <p>
            A hard working university student and a tennis player who will be
            the up coming microsoft or google cyber security CEO and she fights
            for that everyday.
          </p>
        </div>
      </div>
    </section>
    <?php
    include_once 'footer.php';
    ?>
    <script src="../js/home.js"></script>
  </body>
</html>
