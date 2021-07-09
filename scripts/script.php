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
            $lastname = $_POST["lastname"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $selectOption = $_POST["prios"];
        ?>
        <section class="content_section">
            <div class="content_div">
                <h1>Contact Us</h1>
            </div>
            <img class="welcome_img" src="../assets/contact_us.gif" alt="Contact Banner">
            <br>

        <?php
            echo "<section class=\"inner_content_section \">";
            echo "<div class=\"content_div \">";
            echo "<h1>Your Data:</h1></div>";
            echo "<p class=\"aside_p\">Fullname: $lastname, $firstname<p>";
            echo "<p class=\"aside_p\">E-Mail: $email<p>";
            if ($selectOption == "High"){
              echo "<p class=\"aside_p\">Priority: $selectOption<p><figure class=\"content_centered\"><img class=\"prio\" src=\"../assets/high_p.png\" alt=\"\"></figure></section>";
            }
            if ($selectOption == "Medium"){
              echo "<p class=\"aside_p\">Priority: $selectOption<p><figure class=\"content_centered\"><img  class=\"prio\" src=\"../assets/medium_p.png\" alt=\"\"></figure></section>";
            }
            if ($selectOption == "Low"){
              echo "<p class=\"aside_p\">Priority: $selectOption<p><figure class=\"content_centered\"><img class=\"prio\" src=\"../assets/low_p.png\" alt=\"\"></figure></section>";
            }
            echo "<section class=\"inner_content_section \">";
            echo "<div class=\"content_div \">";
            echo "<h1>Message:</h1></div>";
            echo "<p class=\"aside_p\">$message<p></section><br><br>";
            echo "<p class=\"aside_p\">Are the Data Correct? If yes klick on the send Button down below 🠗<p>";
            echo "<div class=\"home_features\">";
            echo "<form action=\"./success.php\" class=\"flex-item\" method=\"post\">";
            echo "<span class=\"hide_span\"><input type=\"text\" name=\"firstname\" value=\"$firstname\"></span>";
            echo "<span class=\"hide_span\"><input type=\"email\" name=\"email\" value=\"$email\"></span><br>";
            echo "<button class=\"button_send\">Send</button>";
            echo "</form></div>";
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
