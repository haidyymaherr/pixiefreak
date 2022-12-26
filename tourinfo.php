<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tournament Info</title>
  <link rel="icon" href="../images/blacklogo.ico">
  <link rel="stylesheet" href="../css/tourinfo.css">
  <!-- GOOGLE FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
  <!-- FONT AWESOME -->
  <script src="https://kit.fontawesome.com/6b11d4a153.js" crossorigin="anonymous"></script>
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <!-- PLUGIN -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
<?php include 'load.php';?>
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

  </div>

  <div class="Main">

    <div class="team">
      <div class="overlay">
        <div class="logo">
          <img src="../images/tournamnts/tournament_logo.png" alt="logo">
        </div>
        <div class="txt">
          <div class="top">
            <p id="otit">EU WINNERS League - Starter Division</p>
          </div>
          <div class="bottom">
            <div class="left"><i class="fa-solid fa-location-dot" id="ologo"></i>
              <p id="otxt">Cairo Egypt</p>
            </div>
            <div class="right"><i class="fa-solid fa-clock" id="ologo"></i>
              <p id="otxt">25 OCT 2018 13:06 PM</p>
            </div>
          </div>
        </div>

      </div>
      <div class="img">

      </div>
      <div class="coverimg"></div>
      <div class="info">


        <div class="top">
          <div class="left">
            <div class="logo">
              <img src="../images/teams/pubgteam.png" alt="" style="width: 200px;">
            </div>

          </div>
          <div class="right">
            <!-- <button id="reg">
              Register
            </button> -->
            <button id="reg" >
             
                <span></span>
                <span></span>
                <span></span>
                <span></span>
               <p id="r1">Register</p>
               <p id="r2">Registered</p>
            
            </button>
          </div>

        </div>

        <div class="bottom">
          <div class="left">
            <h3 style="color: var(--red);">ABOUT THE TOURNAMENT</h3>
            <p>Prior to major incidents in the Overwatch League, there were known cases of controversial acts. His
              account was suspended twice for violating Blizzard's Terms Of Use.</p>
            <div class="icons1">
              <a href="#"><i class="fa-brands face fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands insta fa-instagram"></i></a>
              <a href="#"><i class="fa-brands  twitch fa-twitch"></i></a>
              <a href="#"><i class="fa-brands  youtube fa-youtube"></i></a>
            </div>
          </div>
          <div class="right">
            <div class="d1">
              <p>32 TEAMS</p>
              <p>ROUND ROBIN</p>
            </div>
            <div class="d2">
              <p>2 GROUPS</p>
              <p>36 PLAYERS</p>
            </div>
            <div class="d3">
              <p>PRIZE POOL</p>
              <p>$ 300 USD</p>
            </div>
            <div class="d4">
              <p>PLAYOUT</p>
              <p>ROUND ROBIN</p>
            </div>
          </div>
        </div>

      </div>
    </div>


  </div>
  <div class="tour">
    <h3>Want to Watch the best players in the playout?</h3>
    <h2>Do Not Miss Our Streams!</h2>
    <a href="../html/streams.html">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button id="btn" class="btn"> View Streams</button></a>
  </div>
  <div class="members">
    <video loop autoplay muted id="light" style="background-image: url(../images/abstract.jpg);">
      <source src="../images/Light - 98741.mp4" type="">
    </video>


    <div class="section">
      <h1>Meet The Competitors</h1>
    </div>
    <div class="FS">
      <div class="first">
        <div class="member"  data-tilt data-tilt-max-glare="0.5" data-tilt-speed="0" data-tilt-perspective="1000" data-tilt-glare data-tilt-max="5">
          <div class="card" id="card1">
            <div class="card-inner" id="in1">


              <div class="card-front">
                <div class="image1"></div>
                <div class="txt">
                  <h2>DARK</h2>
                  <p>IGL</p>
                  <div class="icons">
                    <a href="#"><i class="fa-brands face fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands insta fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands  twitch fa-twitch"></i></a>
                    <a href="#"><i class="fa-brands  youtube fa-youtube"></i></a>
                  </div>
                </div>
              </div>


              <div class="card-back" id="card11">
                <h2>Player Info</h2>
                <div class="info">
                  <div class="left">
                    <div class="id">
                      <p>ID <span>55523794581</span></p>
                    </div>
                    <div class="kd">
                      <p>K.D <span>3.55</span></p>
                    </div>
                    <div class="lvl">
                      <p>Level <span>71</span></p>
                    </div>
                    <div class="kills">
                      <p>Most Kills <span>23</span></p>
                    </div>
                    <div class="rank">
                      <span id="s">#81 Solo Wins on Egypt</span><span><img src="../images/teams/egyptian-flag.png"
                          alt="Highest Tier" style="width: 24px;"></span>
                    </div>

                  </div>
                  <div class="imgC">
                    <img src=" ../images/teams/PngItem_6846701.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>




        <div class="member" data-tilt data-tilt-max-glare="0.5" data-tilt-speed="0" data-tilt-perspective="1000" data-tilt-glare data-tilt-max="5">


          <div class="card" id="card2" >
            <div class="card-inner" id="in2">


              <div class="card-front">
                <div class="image2"></div>
                <div class="txt">
                  <h2>BOO</h2>
                  <p>Frager</p>
                  <div class="icons">
                    <a href="#"><i class="fa-brands face fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands insta fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands  twitch fa-twitch"></i></a>
                    <a href="#"><i class="fa-brands  youtube fa-youtube"></i></a>
                  </div>
                </div>
              </div>


              <div class="card-back">
                <h2>Player Info</h2>
                <div class="info">
                  <div class="left">
                    <div class="id">
                      <p>ID <span>55523794581</span></p>
                    </div>
                    <div class="kd">
                      <p>K.D <span>3.85</span></p>
                    </div>
                    <div class="lvl">
                      <p>Level <span>72</span></p>
                    </div>
                    <div class="kills">
                      <p>Most Kills <span>27</span></p>
                    </div>
                    <div class="rank">
                      <span id="s">#9 Grenadier on Egypt</span><span><img src="../images/teams/egyptian-flag.png"
                          alt="Highest Tier" style="width: 24px;"></span>
                    </div>
                    <div class="rank">
                      <span id="s">#13 Squad Wins on Egypt</span><span><img src="../images/teams/egyptian-flag.png"
                          alt="Highest Tier" style="width: 24px;"></span>
                    </div>
                  </div>
                  <div class="imgC">
                    <img src=" ../images/teams/PngItem_6846701.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>



        <div class="member" data-tilt data-tilt-max-glare="0.5" data-tilt-speed="0" data-tilt-perspective="1000" data-tilt-glare data-tilt-max="5">


          <div class="card" id="card3">
            <div class="card-inner" id="in3">


              <div class="card-front">
                <div class="image3"></div>
                <div class="txt">
                  <h2>BELADN</h2>
                  <p>Sniper</p>
                  <div class="icons">
                    <a href="#"><i class="fa-brands face fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands insta fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands  twitch fa-twitch"></i></a>
                    <a href="#"><i class="fa-brands  youtube fa-youtube"></i></a>
                  </div>
                </div>
              </div>


              <div class="card-back">
                <h2>Player Info</h2>
                <div class="info">
                  <div class="left">
                    <div class="id">
                      <p>ID <span>55523794581</span></p>
                    </div>
                    <div class="kd">
                      <p>K.D <span>4.35</span></p>
                    </div>
                    <div class="lvl">
                      <p>Level <span>72</span></p>
                    </div>
                    <div class="kills">
                      <p>Most Kills <span>28</span></p>
                    </div>
                    <div class="rank">
                      <span id="s">#9 Grenadier on Egypt</span><span><img src="../images/teams/egyptian-flag.png"
                          alt="Highest Tier" style="width: 24px;"></span>
                    </div>

                  </div>
                  <div class="imgC">
                    <img src=" ../images/teams/PngItem_6846701.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
      </div>

      <div class="second">
        <div class="member" data-tilt data-tilt-max-glare="0.5" data-tilt-speed="0" data-tilt-perspective="1000" data-tilt-glare data-tilt-max="5">


          <div class="card" id="card5">
            <div class="card-inner" id="in5">


              <div class="card-front">
                <div class="image5"></div>
                <div class="txt">
                  <h2>REMAN</h2>
                  <p>Frager</p>
                  <div class="icons">
                    <a href="#"><i class="fa-brands face fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands insta fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands  twitch fa-twitch"></i></a>
                    <a href="#"><i class="fa-brands  youtube fa-youtube"></i></a>
                  </div>
                </div>
              </div>


              <div class="card-back">
                <h2>Player Info</h2>
                <div class="info">
                  <div class="left">
                    <div class="id">
                      <p>ID <span>55523794581</span></p>
                    </div>
                    <div class="kd">
                      <p>K.D <span>5.85</span></p>
                    </div>
                    <div class="lvl">
                      <p>Level <span>73</span></p>
                    </div>
                    <div class="kills">
                      <p>Most Kills <span>33</span></p>
                    </div>
                    <div class="rank">
                      <span id="s">#4 Middle Man on Egypt</span><span><img src="../images/teams/egyptian-flag.png"
                          alt="Highest Tier" style="width: 24px;"></span>
                    </div>
                    <div class="rank">
                      <span id="s">#13 Squad Wins on Egypt</span><span><img src="../images/teams/egyptian-flag.png"
                          alt="Highest Tier" style="width: 24px;"></span>
                    </div>
                  </div>
                  <div class="imgC">
                    <img src=" ../images/teams/PngItem_6846701.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
        <div class="member"  data-tilt data-tilt-max-glare="0.5" data-tilt-speed="0" data-tilt-perspective="1000" data-tilt-glare data-tilt-max="5">


          <div class="card" id="card4">
            <div class="card-inner" id="in4">


              <div class="card-front">
                <div class="image4"></div>
                <div class="txt">
                  <h2>FAROUK</h2>
                  <p>Sniper</p>
                  <div class="icons">
                    <a href="#"><i class="fa-brands face fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands insta fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands  twitch fa-twitch"></i></a>
                    <a href="#"><i class="fa-brands  youtube fa-youtube"></i></a>
                  </div>
                </div>
              </div>


              <div class="card-back">
                <h2>Player Info</h2>
                <div class="info">
                  <div class="left">
                    <div class="id">
                      <p>ID <span>55523794581</span></p>
                    </div>
                    <div class="kd">
                      <p>K.D <span>2.99</span></p>
                    </div>
                    <div class="lvl">
                      <p>Level <span>65</span></p>
                    </div>
                    <div class="kills">
                      <p>Most Kills <span>18</span></p>
                    </div>
                    <div class="rank">
                      <span id="s">#99 Squad Wins on Egypt</span><span><img src="../images/teams/egyptian-flag.png"
                          alt="Highest Tier" style="width: 24px;"></span>
                    </div>
                  </div>
                  <div class="imgC">
                    <img src=" ../images/teams/PngItem_6846701.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>






        <div class="member"  data-tilt data-tilt-max-glare="0.5" data-tilt-speed="0" data-tilt-perspective="1000" data-tilt-glare data-tilt-max="5">


          <div class="card" id="card6">
            <div class="card-inner" id="in6">


              <div class="card-front">
                <div class="image6"></div>
                <div class="txt">
                  <h2>RANA</h2>
                  <p>Support</p>
                  <div class="icons">
                    <a href="#"><i class="fa-brands face fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands insta fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands  twitch fa-twitch"></i></a>
                    <a href="#"><i class="fa-brands  youtube fa-youtube"></i></a>
                  </div>
                </div>
              </div>


              <div class="card-back">
                <h2>Player Info</h2>
                <div class="info">
                  <div class="left">
                    <div class="id">
                      <p>ID <span>55523794581</span></p>
                    </div>
                    <div class="kd">
                      <p>K.D <span>2.79</span></p>
                    </div>
                    <div class="lvl">
                      <p>Level <span>67</span></p>
                    </div>
                    <div class="kills">
                      <p>Most Kills <span>17</span></p>
                    </div>
                    <div class="rank">
                      <span id="s">#87 Grenadier on Egypt</span><span><img src="../images/teams/egyptian-flag.png"
                          alt="Highest Tier" style="width: 24px;"></span>
                    </div>
                  </div>
                  <div class="imgC">
                    <img src=" ../images/teams/PngItem_6846701.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="twoDots">
      <div Id="fDot"></div>
      <div ID="sDot"></div>
    </div>
  </div>

  </div>
  </div>

  <script src="../js/tourinfo.js"></script>
  <script src="../js/readyMade.js"></script>
  <script src="../js/home.js"></script>

  <script>
    AOS.init();
  </script>
</body>

</html>