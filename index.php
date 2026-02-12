<?php

session_start();

if (isset ($_SESSION["user_id"])) {

  $mysqli = require __DIR__ . "/database.php";

  $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

  $result = $mysqli->query($sql);

  $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" conetent="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="" type="image/x-icon">

  <script src="
https://cdn.jsdelivr.net/npm/kute.js@2.2.4/dist/kute.min.js
"></script>
</head>

<body>
  <div id="loading">
    <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>
  </div>

  <div id="nav-bar" class="nav-bar">
    <img id="compa-image" class="compa-image" href="">
    <div id="scrollmenu" class="scrollmenu">
      <a href="#home"><button id="home" class="home"><i class="fa fa-home" aria-hidden="true"></i> Home</button></a>
      <a href="#about"><button id="about" class="about"><i class="fa fa-info-circle" aria-hidden="true"></i>
          About Page</button></a>
      <a href="#project"><button id="project" class="project"><i class="fa fa-star" aria-hidden="true"></i>
          Skillset</button></a>
      <a href="#lang-exp"><button id="lang-exp" class="lang-exp"><i class="fa fa-graduation-cap" aria-hidden="true"></i> 
      Education</button></a>
      <a href="#lang-exp"><button id="lang-exp" class="lang-exp1"><i class="fa fa-briefcase" aria-hidden="true"></i> Work
          Experience</button></a>
    </div>
    <button id="slideLeft" class="left" type="button">❮</button>
    <button id="slideRight" class="right" type="button">❯</button>

    <div id="search" class="search">
      <form type="submit">
        <p id="search-icon" class="search-icon">&#9906</p>
        <input type="search" placeholder="Search the Website...">
      </form>
    </div>
    <a href="logout.php"><button id="log-out" class="log-out"><i class="fa fa-sign-out" aria-hidden="true"></i> Log
        Out</button></a>
    <a href="#account"><button id="account" class="account"><i class="fa fa-user" aria-hidden="true"></i>
        Account</button></a>
  </div>

  <script>
    /*$(window).on('load', function() {
$('#loading').hide();
});*/
    // Show the loading icon
    function showLoadingIcon() {
      document.getElementById("loading").style.display = "block";
    }

    // Hide the loading icon
    function hideLoadingIcon() {
      document.getElementById("loading").style.display = "none";
    }

    // Call the showLoadingIcon function when the page starts loading
    window.addEventListener("load", showLoadingIcon);

    // Call the hideLoadingIcon function when the page finishes loading
    window.addEventListener("load", hideLoadingIcon);

    window.addEventListener('scroll', (e) => {
      const nav = document.querySelector('.nav-bar');
      if (window.pageYOffset > 0) {
        nav.classList.add('add-shadow');

      } else {
        nav.classList.remove('add-shadow');
      }
    });
    window.addEventListener('scroll', (e) => {
      const nav = document.querySelector('.nav-bar');
      if (window.pageYOffset > 0) {
        nav.classList.add('add-nav');

      } else {
        nav.classList.remove('add-nav');
      }
    });
    /*
    window.addEventListener('scroll', (e) =>{
        const nav = document.querySelector('.compa-name');
        if(window.pageYOffset>0) {
        nav.classList.add('add-name');

        }else{
        nav.classList.remove('add-name');
        }
    });
          //this is where the lines stop and the b.s. begins
    window.addEventListener('scroll', (e) =>{
        const nav = document.querySelector('.home');
        if(window.pageYOffset>0) {
        nav.classList.add('add-home');

        }else{
        nav.classList.remove('add-home');
        }
    });
    window.addEventListener('scroll', (e) =>{
        const nav = document.querySelector('.about');
        if(window.pageYOffset>0) {
        nav.classList.add('add-about');

        }else{
        nav.classList.remove('add-about');
        }
    });
    window.addEventListener('scroll', (e) =>{
        const nav = document.querySelector('.project');
        if(window.pageYOffset>0) {
        nav.classList.add('add-project');

        }else{
        nav.classList.remove('add-project');
        }
    });
    window.addEventListener('scroll', (e) =>{
        const nav = document.querySelector('.lang-exp');
        if(window.pageYOffset>0) {
        nav.classList.add('add-lang');

        }else{
        nav.classList.remove('add-lang');
        }
    });
    window.addEventListener('scroll', (e) =>{
        const nav = document.querySelector('input');
        if(window.pageYOffset>0) {
        nav.classList.add('add-input');

        }else{
        nav.classList.remove('add-input');
        }
    });
    window.addEventListener('scroll', (e) =>{
        const nav = document.querySelector('::-webkit-input-placeholder');
        if(window.pageYOffset>0) {
        nav.classList.add('.add-::-webkit-input-placeholder');

        }else{
        nav.classList.remove('.add-::-webkit-input-placeholder');
        }
    });
    window.addEventListener('scroll', (e) =>{
        const nav = document.querySelector('p');
        if(window.pageYOffset>0) {
        nav.classList.add('add-p');

        }else{
        nav.classList.remove('add-p');
        }
    });
    window.addEventListener('scroll', (e) =>{
        const nav = document.querySelector('.cancel');
        if(window.pageYOffset>0) {
        nav.classList.add('add-cancel');

        }else{
        nav.classList.remove('add-cancel');
        }
    });
    window.addEventListener('scroll', (e) =>{
        const nav = document.querySelector('.account');
        if(window.pageYOffset>0) {
        nav.classList.add('add-acc');

        }else{
        nav.classList.remove('add-acc');
        }
    });
*/
    const buttonRight = document.getElementById('slideRight');
    const buttonLeft = document.getElementById('slideLeft');

    buttonRight.onclick = function () {
      document.getElementById('scrollmenu').scrollLeft += 20;
    };

    buttonRight.onmousedown = function () {
      document.getElementById('scrollmenu').scrollLeft += 200;
    };

    buttonLeft.onclick = function () {
      document.getElementById('scrollmenu').scrollLeft -= 20;
    };

    buttonLeft.onmousedown = function () {
      document.getElementById('scrollmenu').scrollLeft -= 200;
    };
    /*
          window.addEventListener('scroll', (e) =>{
              const nav = document.querySelector('.log-out');
              if(window.pageYOffset>0) {
              nav.classList.add('add-log');
    
              }else{
              nav.classList.remove('add-log');
              }
          });
          */
  </script>
  <div id="home" class="homes">
    <svg id="visual" class="spacer1" viewBox="0 0 1000 600" width="1000" height="600" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
      <path id="peak1"
        d="M0 206L143 192L286 154L429 168L571 163L714 150L857 228L1000 197L1000 0L857 0L714 0L571 0L429 0L286 0L143 0L0 0Z"
        fill="#c16e5c"></path>
      <path id="peak3"
        d="M0 134L143 143L286 155L429 177L571 187L714 138L857 146L1000 151L1000 0L857 0L714 0L571 0L429 0L286 0L143 0L0 0Z"
        fill="#d07461"></path>
      <path id="peak5"
        d="M0 132L143 100L286 102L429 115L571 111L714 122L857 98L1000 146L1000 0L857 0L714 0L571 0L429 0L286 0L143 0L0 0Z"
        fill="#e07b65"></path>
      <path id="peak7"
        d="M0 78L143 105L286 113L429 55L571 105L714 57L857 101L1000 68L1000 0L857 0L714 0L571 0L429 0L286 0L143 0L0 0Z"
        fill="#ef826a"></path>
      <path id="peak9"
        d="M0 45L143 72L286 36L429 51L571 55L714 49L857 52L1000 64L1000 0L857 0L714 0L571 0L429 0L286 0L143 0L0 0Z"
        fill="#ff896f"></path>
          
      <path id="peak2" style="visibility: hidden" d="M0 205L143 175L286 171L429 238L571 156L714 175L857 169L1000 222L1000 0L857 0L714 0L571 0L429 0L286 0L143 0L0 0Z" fill="#c16e5c"></path>
      <path id="peak4" style="visibility: hidden" d="M0 141L143 155L286 187L429 134L571 156L714 126L857 130L1000 185L1000 0L857 0L714 0L571 0L429 0L286 0L143 0L0 0Z" fill="#d07461"></path>
      <path id="peak6" style="visibility: hidden" d="M0 141L143 116L286 151L429 112L571 105L714 146L857 153L1000 120L1000 0L857 0L714 0L571 0L429 0L286 0L143 0L0 0Z" fill="#e07b65"></path>
      <path id="peak8" style="visibility: hidden" d="M0 82L143 84L286 58L429 78L571 70L714 108L857 106L1000 102L1000 0L857 0L714 0L571 0L429 0L286 0L143 0L0 0Z" fill="#ef826a"></path>
      <path id="peak10" style="visibility: hidden" d="M0 71L143 68L286 39L429 44L571 55L714 36L857 72L1000 58L1000 0L857 0L714 0L571 0L429 0L286 0L143 0L0 0Z" fill="#ff896f"></path>
    </svg>
    <script>
      const tween = KUTE.fromTo(
        '#peak1',
        { path: '#peak1' },
        { path: '#peak2' },
        { repeat: 999, duration: 3000, yoyo: true }
      )
      tween.start()
      //
    </script>
    <script>
      const tween1 = KUTE.fromTo(
        '#peak3',
        { path: '#peak3' },
        { path: '#peak4' },
        { repeat: 999, duration: 3000, yoyo: true }
      )
      tween1.start()
      //
    </script>
    <script>
      const tween = KUTE.fromTo(
        '#peak5',
        { path: '#peak5' },
        { path: '#peak6' },
        { repeat: 999, duration: 3000, yoyo: true }
      )
      tween.start()
      /*      <div class="container-life">
      <h2>About Me</h2>
      </div>
      <div class="container-hobbies">
      <h2>Hobbies</h2>
      </div>
      <div class="container-goals">
      <h2>Goals</h2>
      </div>
      */
    </script>
        <script>
      const tween = KUTE.fromTo(
        '#peak7',
        { path: '#peak7' },
        { path: '#peak8' },
        { repeat: 999, duration: 3000, yoyo: true }
      )
      tween.start()
      //
    </script>
    <script>
      const tween = KUTE.fromTo(
        '#peak9',
        { path: '#peak9' },
        { path: '#peak10' },
        { repeat: 999, duration: 3000, yoyo: true }
      )
      tween.start()
    </script>
    <div class="spacer layer1"></div>

    <h2 id="title" class="title">Hello,&#128075;<h2 class="name"> I'm Lawrence Mishkin</h2>
    </h2>
    <?php if (isset ($user)): ?>
      <div class="container-home">
        <h3 class="intro">Welcome
          <?= htmlspecialchars($user["name"]) ?>, I'm a self-taught web-developer in high school. I hope you find this
          journey to be a fun and interesting learning experience. If you'd like to reach out to me, go to the about page
          or email me with the button below!
        </h3>
        <a href="#contact-me"><button id="contact-me" class="contact-me"><i class="fa fa-comments" aria-hidden="true"></i>
            Contact Me</button></a>
      </div>
      <img class="intro-photo" alt="image of computer" src="_460829f8-f1a5-4009-b744-9a46caa21990-removebg-preview.png">
      <div class="spin-tri"></div>
      <div class="rev-spin-tri"></div>
      <div class="spin-tri1"></div>
      <div class="rev-spin-tri2"></div>
      <div class="extender"></div>
    <?php else: ?>

      <a href="login.php"><button id="log-in" class="log-in"><i class="fa fa-sign-in" aria-hidden="true"></i> Log
          In</button></a>
      <a href="signup.html"><button id="sign-up" class="sign-up"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign
          Up</button></a>


    <?php endif; ?>
  </div>
  <section class="margin">
  <div class="slideshow-container">

<div class="about-con">
      <h2>About</h2>
      </div>

      <div class="about-con">
      <h2>About21</h2>
      </div>

</div>
<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

<div class="dot-con">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
  </section>
  <section class="blue">
    <h2 class="rev" >Skillset</h2>
  </section>
  <section class="green">
    <h2>Education</h2>
  </section>
    <section class="black">
    <h2>Work Experience</h2>
  </section>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("about-con");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</body>
</html>