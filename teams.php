<!-- by haidy -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TEAMS</title>
    <link rel="icon" href="../images/blacklogo.ico">
    <!-- css links -->
    <link rel="stylesheet" href="../css/teams.css" />
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
        <h1>Welcome to our Teams</h1>
        <h5>Here you can find all of the teams that we have</h5>
      </div>
    </div>

    <section class="main">
      <div class="info">
        <div class="txt">
          <h3>Select filter option on the right</h3>
          <h5>and get hyped in a minute</h5>
        </div>
        <div class="check">
          <form action="">
            <input type="radio" id="ALL" name="games" value="ALL" onclick="allSelected()"/>
            <label for="ALL" onclick="">ALL</label>
            <input type="radio" id="PUBG" name="games" value="PUBG" onclick="pubgSelected()"/>
            <label for="PUBG">PUBG</label>
            <input type="radio" id="FORTNITE" name="games" value="FORTNITE" onclick="fortSelected()"/>
            <label for="FORTNITE" onclick="">FORTNITE</label>
            <input type="radio" id="LOL" name="games" value="LOL" onclick="lolSelected()"/>
            <label for="LOL">LEAUGE OF LEGENDS</label>
            <input
              type="radio"
              id="CALLOFDUTY"
              name="games"
              value="CALLOFDUTY"
             onclick="codSelected()"/>
            <label for="CALLOFDUTY">CALL OF DUTY</label>
          </form>
        </div>
      </div>



      <div class="teams" id="teams">


        <div class="team" id="lol">
          <div class="txt">
            <h5>Team Flawed Bot</h5>
            <h6>LEAUGE OF LEGENDS</h6>
          </div>
          <div class="members">
            <div class="member one"></div>
            <div class="member two"></div>
            <div class="member three"></div>
            <div class="member four"></div>
          </div>
          <div class="bottom">
            <div>
                <p>FROM</p>
                <p>EGYPT</p>
            </div>
            <div>
              <a href="../html/teamp1.php">TEAM PAGE <i class="fa-solid fa-arrow-right"></i></a>

            </div>
          </div>
        </div>


        <div class="team" id="fort">
          <div class="txt">
            <h5>Fortuna eSports</h5>
            <h6>FORTNITE</h6>
          </div>
          <div class="members">
            <div class="member one"></div>
            <div class="member two"></div>
            <div class="member three"></div>
            <div class="member four"></div>
          </div>
          <div class="bottom">
            <div>
                <p>FROM</p>
                <p>EGYPT</p>
            </div>
            <div>
              <a href="../html/teamp1.php">TEAM PAGE <i class="fa-solid fa-arrow-right"></i></a>

            </div>
          </div>
        </div>


        <div class="team" id="lol2">
          <div class="txt">
            <h5>Fnatic eSports</h5>
            <h6>LEAUGE OF LEGENDS</h6>
          </div>
          <div class="members">
            <div class="member one"></div>
            <div class="member two"></div>
            <div class="member three"></div>
            <div class="member four"></div>
          </div>
          <div class="bottom">
            <div>
                <p>FROM</p>
                <p>EGYPT</p>
            </div>
            <div>
              <a href="#">TEAM PAGE <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>


        <div class="team" id="pubg">
          <div class="txt">
            <h5>Symbol eSports</h5>
            <h6>PUBG</h6>
          </div>
          <div class="members">
            <div class="member d one"></div>
            <div class="member d two"></div>
            <div class="member d three"></div>
            <div class="member d four"></div>
          </div>
          <div class="bottom">
            <div>
                <p>FROM</p>
                <p>EGYPT</p>
            </div>
            <div>
              <a href="../html/teamp1.php">TEAM PAGE <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>


        <div class="team" id="cod">
          <div class="txt">
            <h5>Invictus Gaming</h5>
            <h6>CALL OF DUTY</h6>
          </div>
          <div class="members">
            <div class="member one"></div>
            <div class="member two"></div>
            <div class="member three"></div>
            <div class="member four"></div>
          </div>
          <div class="bottom">
            <div>
                <p>FROM</p>
                <p>EGYPT</p>
            </div>
            <div>
              <a href="../html/teamp1.php">TEAM PAGE <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>


        <div class="team" id="fort2">
          <div class="txt">
            <h5>Gambit Gaming</h5>
            <h6>FORTNITE</h6>
          </div>
          <div class="members">
            <div class="member one"></div>
            <div class="member two"></div>
            <div class="member three"></div>
            <div class="member four"></div>
          </div>
          <div class="bottom">
            <div>
                <p>FROM</p>
                <p>EGYPT</p>
            </div>
            <div>
              <a href="../html/teamp1.php">TEAM PAGE <i class="fa-solid fa-arrow-right"></i></a>

            </div>
          </div>
        </div>
      

      </div>
    
      <script src="../js/teams.js"></script>

    </section>
    <?php
    include_once 'footer.php';
    ?>
  </body>
</html>
