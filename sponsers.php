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
    <link rel="stylesheet" href="../css/sponsors.css" />
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
    <section>
        <div class="container">
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
                <h1>Sponsors & Partners</h1>
                <h4>They support our organization</h4>
            </div>
        </div>
    </section>
    <section class="main">
        <div class="container2">
            <div class="boxes">
                <div class="box" id="box1">
                    <div class="img1"></div>
                    <div class="txt">
                        <h3>Alien ware</h3>
                    </div>
                    <div class="social">
                        <a href="#" class="social-icon" id="ic1">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="box" id="box2">
                    <div class="img2"></div>
                    <div class="txt">
                        <h3>msi</h3>
                    </div>
                    <div class="social">
                        <a href="#" class="social-icon" id="ic1">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="box" id="box3">
                    <div class="img3"></div>
                   
                    <div class="social">
                        <a href="#" class="social-icon" id="ic1">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="box" id="box4">
                    <div class="img4"></div>
                   
                    <div class="social">
                        <a href="#" class="social-icon" id="ic1">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="box" id="box5">
                    <div class="img5"></div>
                    <div class="social">
                        <a href="#" class="social-icon" id="ic1">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
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