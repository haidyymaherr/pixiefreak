<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Profile</title>
    <link rel="icon" href="../images/blacklogo.ico">
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/team.css">
        <!-- GOOGLE FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900;1000&display=swap"
          rel="stylesheet"/>
          <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap" rel="stylesheet">
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
        <video autoplay loop muted class="back-video">
            <source src="../images/teams/videoteam.mp4" />
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
  
</div>
<div class="M">
<div class="main">
    <div class="team">
        <div class="img">
        
        </div>
        <div class="coverimg"></div>
        <div class="info">
           

          <div class="top">
            <div class="left">
              <div class="logo">
                <img src="../images/teams/pubgteam.png" alt="" style="width: 200px;">
              </div>
                <div class="txt1">
                  <h2>Symbol eSports <span><img src="../images/teams/egyptian-flag.png" alt="Highest Tier" style="width: 24px;"></span></h2>
                  <p id="date">Founded 4 Oct 2019</p>
                </div>
            </div>
            <div class="right">
               <table>
                <tr class="first"><td><p>454</p></td><td><p>156</p></td><td><p>85</p></td></tr>
                <tr class="second"><td><p>WIN</p></td><td><p>LOSES</p></td><TD><p>LOSES</p></TD></tr>
               </table>
            </div>
          </div>

          <div class="bottom">
            <h3>ABOUT THE TEAM</h3>
            <p>Prior to major incidents in the Overwatch League, there were known cases of controversial acts. His account was suspended twice for violating Blizzard's Terms Of Use.</p>
            <div class="icons">
              <a href="#"><i class="fa-brands face fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands insta fa-instagram"></i></a>
              <a href="#"><i class="fa-brands  twitch fa-twitch"></i></a>
              <a href="#"><i class="fa-brands  youtube fa-youtube"></i></a>
            </div>
          </div>
            
        </div>
    </div>

</div>
 

  <div class="members">
  <div class="member" data-tilt data-tilt-max-glare="0.5" data-tilt-speed="0" data-tilt-perspective="1000" data-tilt-glare data-tilt-max="5">
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
              <div class="id"><p>ID <span>55523794581</span></p></div>
              <div class="kd"><p>K.D <span>3.55</span></p></div>
              <div class="lvl"><p>Level <span>71</span></p></div>
              <div class="kills"><p>Most Kills <span>23</span></p> </div>
              <div class="rank">
               <span id="s">#81 Solo Wins on Egypt</span><span><img src="../images/teams/egyptian-flag.png" alt="Highest Tier" style="width: 24px;"></span>
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


    <div class="card" id="card2">
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
              <div class="id"><p>ID <span>55523794581</span></p></div>
              <div class="kd"><p>K.D <span>3.85</span></p></div>
              <div class="lvl"><p>Level <span>72</span></p></div>
              <div class="kills"><p>Most Kills <span>27</span></p> </div>
              <div class="rank">
               <span id="s">#9 Grenadier on Egypt</span><span><img src="../images/teams/egyptian-flag.png" alt="Highest Tier" style="width: 24px;"></span>
              </div>
              <div class="rank">
                <span id="s">#13 Squad Wins on Egypt</span><span><img src="../images/teams/egyptian-flag.png" alt="Highest Tier" style="width: 24px;"></span>
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
              <div class="id"><p>ID <span>55523794581</span></p></div>
              <div class="kd"><p>K.D <span>4.35</span></p></div>
              <div class="lvl"><p>Level <span>72</span></p></div>
              <div class="kills"><p>Most Kills <span>28</span></p> </div>
              <div class="rank">
               <span id="s">#9 Grenadier on Egypt</span><span><img src="../images/teams/egyptian-flag.png" alt="Highest Tier" style="width: 24px;"></span>
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
              <div class="id"><p>ID <span>55523794581</span></p></div>
              <div class="kd"><p>K.D <span>5.85</span></p></div>
              <div class="lvl"><p>Level <span>73</span></p></div>
              <div class="kills"><p>Most Kills <span>33</span></p> </div>
              <div class="rank">
               <span id="s">#4 Middle Man on Egypt</span><span><img src="../images/teams/egyptian-flag.png" alt="Highest Tier" style="width: 24px;"></span>
              </div>
              <div class="rank">
                <span id="s">#13 Squad Wins on Egypt</span><span><img src="../images/teams/egyptian-flag.png" alt="Highest Tier" style="width: 24px;"></span>
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


    <div class="card" id="card4" >
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
              <div class="id"><p>ID <span>55523794581</span></p></div>
              <div class="kd"><p>K.D <span>2.99</span></p></div>
              <div class="lvl"><p>Level <span>65</span></p></div>
              <div class="kills"><p>Most Kills <span>18</span></p> </div>
              <div class="rank">
               <span id="s">#99 Squad Wins on Egypt</span><span><img src="../images/teams/egyptian-flag.png" alt="Highest Tier" style="width: 24px;"></span>
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
              <div class="id"><p>ID <span>55523794581</span></p></div>
              <div class="kd"><p>K.D <span>2.79</span></p></div>
              <div class="lvl"><p>Level <span>67</span></p></div>
              <div class="kills"><p>Most Kills <span>17</span></p> </div>
              <div class="rank">
               <span id="s">#87 Grenadier on Egypt</span><span><img src="../images/teams/egyptian-flag.png" alt="Highest Tier" style="width: 24px;"></span>
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
   <script src="../js/teamp1.js"></script>
   <script src="../js/readyMade.js"></script>
    <script src="../js/home.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script>
      AOS.init();
    </script>
</body>
</html>





<!--  <div class="members">
    <div class="mkt-3dSlider py-6">
      <h1 class="mkt-3dSlider-title">Meet Team Members</h1>
        <p class="mkt-3dSlider-description">a description can be here</p> 
    <section id="slider">
      
     
      <input class="card-slider" type="radio" name="slider" id="s1">
      <input class="card-slider" type="radio" name="slider" id="s2">
      <input class="card-slider" type="radio" name="slider" id="s3" checked>
      <input class="card-slider" type="radio" name="slider" id="s4">
      <input class="card-slider"type="radio" name="slider" id="s5">
      <label for="s1" id="slide1" class="card-slider">
         
      </label>
      <label for="s2" id="slide2" class="card-slider">
        <h2 style="color: black;"></h2>
      </label>
      <label for="s3" id="slide3" class="card-slider"></label>
      <label for="s4" id="slide4" class="card-slider"></label>
      <label for="s5" id="slide5" class="card-slider"></label>
    </section>
    </div>
  </div> -->

