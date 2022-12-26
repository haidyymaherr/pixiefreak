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
    <link rel="stylesheet" href="../css/contact.css" />
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
        <div class="container">
            <video autoplay loop muted class="back-video">
                <source src="../images/Woman - 98228 (1).mp4" />
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
            <div class="con">
                <div class="contact">
                    <h2>Contact Us</h2>
                    <p> Welcome to the best E-sports website in Egypt</p>
                </div>
                <div class="container2">
                    <div class="contactinfo">
                        <div class="box">
                            <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="text">
                                <h3>Address</h3>
                                <p>Egypt, Giza</p>
                            </div>

                        </div>
                        <div class="box">
                            <div class="icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="text">
                                <h3>Phone</h3>
                                <p>507-475-6094</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon"><i class="fa-solid fa-envelope"></i></i></div>
                            <div class="text">
                                <h3>Email</h3>
                                <p>press@pixiefusion.com</p>
                            </div>

                        </div>
                    </div>
                    <div class="contactform">
                        <form>
                            <h2>Send Message</h2>
                            <div class="inputbox">
                                <input type="text" name="" required="required">
                                <span>Full Name</span>
                            </div>
                            <div class="inputbox">
                                <input type="text" name="" required="required">
                                <span>Email</span>
                            </div>
                            <div class="inputbox">
                                <textarea required="required"></textarea>
                                <span>Type Your Message...</span>
                            </div>
                            <div class="inputbox">
                                <input type="submit" name="" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    
        </div>
 
    </section>
   
    <script src="../js/home.js"></script>
</body>

</html>