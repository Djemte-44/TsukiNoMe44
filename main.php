<?php

session_start();


?>


<!DOCTYPE html>
<html>
<style>
  a {
    color: white;
    font-family: var(--body-font);
    text-decoration: none;


  }

  .light-mode a {
    color: black;

  }

  h3 ,h1 {
    text-align: center;
    color: white;
  }

  .light-mode h3 {
    color: black;

  }
  .light-mode h1 {
    color: black;

  }

  p {
    text-align: center;
    color: white;
  }
</style>
<meta charset="UTF-8">
<link rel="stylesheet" href="loader.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<meta name="viewport"
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
<link rel="stylesheet" href="stylenews.css">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/logo69.png">

</head>

<body>
  <!-- videoja ne sfond -->
  <div class="video-bg">
    <video w idth="320" height="240" autoplay loop muted>
      <source src="images/maniak.mp4" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
  <!-- dark mode -->
  <div class="dark-light">
    <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"
      stroke-linejoin="round">
      <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
    </svg>
  </div>
  <!-- transparent menu -->
  <div class="app">
    <div class="header">
      <div class="menu-circle"></div>
      <div class="header-menu">
        <a class="menu-link is-active" href="main.html">Home</a>
        <a class="menu-link " href="teams.html">Teams</a>
        <a class="menu-link" href="descover.html">Standings</a>
        <a class="menu-link " href="contact.html">Contact</a>
      </div>

      <!-- searchbar -->
      <div class="search-bar">
        <input type="text" placeholder="Search" id="myInput" onkeyup="myFunction()">
      </div>


      <!-- profile pic & notification -->
      <div class="header-profile">
      
        <path d="M448.773 235.551A135.893 135.893 0 00451 211c0-74.443-60.557-135-135-135-47.52 0-91.567 25.313-115.766 65.537-32.666-10.59-66.182-6.049-93.794 12.979-27.612 19.013-44.092 49.116-45.425 82.031C24.716 253.788 0 290.497 0 331c0 7.031 1.703 13.887 3.006 20.537l.015.015C12.719 400.492 56.034 436 106 436h300c57.891 0 106-47.109 106-105 0-40.942-25.053-77.798-63.227-95.449z" />
  
        <a href="logout.php"><img class="profile-img" src="images\onepiece.png" alt=""  ></a>
      </div>
     </div>
     

    <!-- content -->
 <?php echo"<h1>Welcome @".$_SESSION['username']." "." !</h1>"; ?>

    
    <div class="content-section">
      <div class="content-section-title">Players</div>
      <h3>Best players for 21/22 season: </h3>
      <ul id="myUL">
        <li><a href="https://www.transfermarkt.com/karim-benzema/profil/spieler/18922">Karim Benzema</a></li>
        <li><a href="https://www.transfermarkt.com/robert-lewandowski/profil/spieler/38253">Robert Lewandowski</a></li>
        <li><a href="https://www.transfermarkt.com/kylian-mbappe/profil/spieler/342229">Kylian Mbappe</a></li>
        <li><a href="https://www.transfermarkt.com/kevin-de-bruyne/profil/spieler/88755">Kevin De Bruyne</a></li>
        <li><a href="https://www.transfermarkt.com/luka-modric/profil/spieler/27992">Luka Modric</a></li>
        <li><a href="https://www.transfermarkt.com/heung-min-son/profil/spieler/91845">Son Heung-min </a></li>
        <li><a href="https://www.transfermarkt.com/lautaro-martinez/profil/spieler/406625">Lautaro Martinez </a></li>
        <li><a href="https://www.transfermarkt.com/ivan-perisic/profil/spieler/42460">Ivan Perišić </a></li>
        <li><a href="https://www.transfermarkt.com/rafael-leao/profil/spieler/357164">Rafael Leão </a></li>
        <li><a href="https://www.transfermarkt.com/marcelo-brozovi%C4%87/profil/spieler/156617">Marcelo Brozović </a></li>
        <li><a href="https://www.transfermarkt.com/mike-maignan/profil/spieler/182906">Mike Maignan </a></li>
        <li><a href="https://www.transfermarkt.com/achraf-hakimi/profil/spieler/398073">Achraf Hakimi </a></li>
        <li><a href="https://www.transfermarkt.com/erling-haaland/profil/spieler/418560">Erling Braut Håland </a></li>
        <li><a href="https://www.transfermarkt.com/thibaut-courtois/profil/spieler/108390">Thibaut Courtois </a></li>
        <li><a href="https://www.transfermarkt.com/mohamed-salah/profil/spieler/148455">Mohamed Salah </a></li>
        <li><a href="https://www.transfermarkt.com/sadio-mane/profil/spieler/200512">Sadio Mané </a></li>
      </ul>
      
    </div>

    <div class="content-section">
      <div class="content-section-title">News</div>
      <div class="wrapper">

        <svg hidden="hidden">
          <defs>
            <symbol id="icon-arrow-left" viewBox="0 0 32 32">
              <title>arrow-left</title>
              <path
                d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z">
              </path>
            </symbol>
            <symbol id="icon-arrow-right" viewBox="0 0 32 32">
              <title>arrow-right</title>
              <path
                d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z">
              </path>
            </symbol>
          </defs>
        </svg>

      </div>

   


      <div class="item-bg"></div>

      <div class="news-slider">
        <div class="news-slider__wrp swiper-wrapper">
          <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">24</span>
                <span class="news-date__txt">May</span>
              </div>
              <div class="news__title">
                Suarez in tears at Atletico, farewell!
              </div>

              <p class="news__txt">
                ADIOS Luis Suarez pictured in tears after final Atletico Madrid appearance as Steven Gerrard reportedly
                plots surprise reunion with ex-Liverpool teammate at Aston Villa...
              </p>

              <div class="news__img">
                <img
                  src="https://talksport.com/wp-content/uploads/sites/5/2022/05/Luis-Suarez-crying.png?strip=all&quality=100&w=960"
                  alt="news">
              </div>
            </a>
          </div>

          <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">25</span>
                <span class="news-date__txt">May</span>
              </div>
              <div class="news__title">
                Salah loves facing Southampton but star could miss Liverpool's title race clash
              </div>

              <p class="news__txt">
                The Reds know a defeat would confirm Manchester City ...
              </p>

              <div class="news__img">
                <img
                  src="https://talksport.com/wp-content/uploads/sites/5/2022/01/TALKSPORT-KLOPP-SALAH.jpg?strip=all&quality=100&w=960"
                  alt="news">
              </div>
            </a>
          </div>

          <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">26</span>
                <span class="news-date__txt">May</span>
              </div>
              <div class="news__title">
                Lionel Messi's father Jorge hopes his son returns to Barcelona
              </div>

              <p class="news__txt">
                Jorge was filmed by Spanish Twitch channel Jijantes FC as he arrived in Barcelona and was asked about
                Lionel’s future....
              </p>

              <div class="news__img">
                <img
                  src="https://talksport.com/wp-content/uploads/sites/5/2021/08/crop-767798-3.jpg?strip=all&quality=100&w=960"
                  alt="news">
              </div>
            </a>
          </div>

          <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">27</span>
                <span class="news-date__txt">May</span>
              </div>
              <div class="news__title">
                Robert Lewandowski admits he might’ve played his last match for Bayern Munich
              </div>

              <p class="news__txt">
                The 33-year-old has been linked with a summer transfer to Barcelona after yet another incredible season
                in front of goal...
              </p>

              <div class="news__img">
                <img
                  src="https://talksport.com/wp-content/uploads/sites/5/2022/05/NINTCHDBPICT000732856678.jpg?strip=all&quality=100&w=960"
                  alt="news">
              </div>
            </a>
          </div>

          <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">28</span>
                <span class="news-date__txt">May</span>
              </div>
              <div class="news__title">
                Morata away from Juve? Indiscretion on the future of the Spanish
              </div>

              <p class="news__txt">
                Alvaro Morata's future could once again be in Spain . Juventus , in fact, ishalla iken, would have no
                intention of paying the 35 million euros agreed for the redemption in the coffers of Atletico Madrid...
              </p>

              <div class="news__img">
                <img src="https://www.juventusnews24.com/wp-content/uploads/2022/05/Morata.jpg" alt="news">
              </div>
            </a>
          </div>

          <div class="news-slider__item swiper-slide">
            <a href="#" class="news__item">
              <div class="news-date">
                <span class="news-date__title">29</span>
                <span class="news-date__txt">May</span>
              </div>
              <div class="news__title">
                Meeting for Pogba, Chiellini's long farewell letter
              </div>

              <p class="news__txt">
                The Juventus transfer market never sleeps. The club's policy keeps everyone active throughout the year,
                in order to identify the right profiles in case of staff expansion, always thinking in perspective...
              </p>

              <div class="news__img">
                <img src="https://www.juventusnews24.com/wp-content/uploads/2022/03/pogba-juve.jpg" alt="news">
              </div>
            </a>
          </div>
        </div>
        <div class="news-slider__ctr">

          <div class="news-slider__arrows">
            <button class="news-slider__arrow news-slider-prev">
              <span class="icon-font">
                <svg class="icon icon-arrow-left">
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </span>
            </button>
            <button class="news-slider__arrow news-slider-next">
              <span class="icon-font">
                <svg class="icon icon-arrow-right">
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </span>
            </button>
          </div>

          <div class="news-slider__pagination"></div>

        </div>
      </div>



      <!-- partial -->


    </div>

    <!-- script -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./script.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
    <script src="scriptnews.js.js"></script>



</body>

</html>