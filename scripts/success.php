
 <!DOCTYPE html>
 <html lang="de">
     <head>
         <meta charset="utf-8">
         <title>Among Us Wiki</title>
         <link rel="stylesheet" href="../styles/style.css">
         <link rel="stylesheet" href="../styles/StyleBG.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="../styles/header.css">
         <link rel="stylesheet" href="../styles/footer.css">
         <link rel="stylesheet" href="../styles/aside.css">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
     </head>
     <body id="body">
       <video id="videoBG" poster="../assets/BG_Load_Screen.PNG" autoplay muted loop>
           <source src="../assets/video/BG_Video_klein.mp4" type="video/mp4">
       </video>
       <header>
           <a id="home-klick" href="../index.php"><strong class="logo-text"><img class="logo" src="../assets/logo_amongus.svg" alt="logo">Wiki</strong></a>
           <nav>
               <ul class="nav_links nav_css">
                   <li class="nav_css"><a class="nav_css" href="../tasks.php">Tasks</a></li>
                   <li class="nav_css"><a class="nav_css" href="../maps.php">Maps</a></li>
                   <li class="nav_css"><a class="nav_css" href="../roles.php">Roles</a></li>
                   <li class="nav_css"><a class="nav_css" href="../abilities.php">Abilities</a></li>
                   <li class="nav_css"><a class="nav_css" href="../skins.php">Skins</a></li>
                   <li class="nav_css"><a class="nav_css" href="../locations.php">Locations</a></li>
                   <li class="nav_css"><a class="nav_css" href="../colors.php">Colors</a></li>
                   <li class="nav_css"><a class="nav_css" href="../audios.php">Audios</a></li>
                   <li class="nav_css"><a class="nav_css" href="../contact.php">Contact</a></li>
               </ul>
           </nav>
       </header>
       <hr>
 <?php
 $firstname = $_POST["firstname"];
 $email = $_POST["email"];
 ?>
 <section class="content_section">
     <div class="content_div">
         <h1>Success</h1>
     </div>
     <img class="welcome_img" src="../assets/success.jpg" alt="Success Banner">
     <br>

 <?php
   echo "<p class=\"aside_p\"> Thank you <strong> $firstname </strong> for contacting us. We will reply to your E-Mail: <strong> ($email) </strong>as soon as we can. <p>";

   echo "</section>";
  ?>
  <footer class="footer">
      <div class="footer-left">
          <strong class="logo-text"><img src="../assets/logo_amongus.svg" alt="logo">Wiki</strong>
          <p>Wiki to present the game and give Informations to starter Gamers.</p>
          <div class="socials">
              <a href="https://www.facebook.com/InnerSloth/"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/InnerslothDevs"><i class="fa fa-twitter"></i></a>
              <a href="https://www.instagram.com/innerslothdevs/"><i class="fa fa-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCKuI2VapWQjkMz2DDrLvLKw"><i class="fa fa-youtube"></i></a>
          </div>
      </div>
      <ul class="footer-right">
          <li class="features">
              <h2>Overview</h2>
              <ul class="box">
                  <li><a href="../about.php">About</a></li>
                  <li><a href="../contact.php">Contact</a></li>
                  <li><a href="../tou.php">Terms of Use</a></li>
                  <li><a href="../privacy.php">Privacy Policy</a></li>
              </ul>
          </li>
          <li>
              <h2>Address</h2>
              <ul class="box">
                  <li><a>Musterstrasse 123</a></li>
                  <li><a>98765 Musterstadt</a></li>
                  <li><a>Musterbundesland</a></li>
                  <li><a>Musterland</a></li>
              </ul>
          </li>
      </ul>
      <div class="footer-bottom">
          <p>All Right reserved by &copy;Among Us Wiki</p>
      </div>
  </footer>

 </body>
 </html>
