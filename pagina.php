<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RomDev Games</title>
    <link rel="stylesheet" href="./styles/styles.css" />
    <link rel="icon" href="./assets/favicon.ico" />
    <script src="./scripts/index.js"></script>
    <script
      src="https://kit.fontawesome.com/492fd5106e.js"
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src=""
    ></script>
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <meta charset="UTF-8">
  <meta name="description" content="Romanian Developers">
  <meta name="keywords" content="Unity, C# , GAME">
  <meta name="author" content="Matei">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <section id="landing-page" onmousemove="moveBackground(event)">
      <nav>
        <figure class="personal-logo--container" onclick="darkTheme()">
        </figure>
        <ul class="nav__link--list">
          <li class="nav__link" onclick="toggleModal()">
            <a
              class="nav__link--anchor link__hover-effect link__hover-effect--black"
              >About</a
            >
          </li>
          <li class="nav__link">
            <a
              href="logout.php"
              class="nav__link--anchor link__hover-effect link__hover-effect--black"
              >Log Out</a 
            >
          </li>
          <li class="nav__link click" onclick="darkTheme()">
            <a href="#" class="nav__link--anchor"
              ><i class="fa-solid fa-adjust fa-circle-half-stroke"></i
            ></a>
          </li>
        </ul>
      </nav>
      <header class="header">
        <div class="header__content">
          <h1 class="title">RomDev</h1>
          <h1 class="title title--secondary">
            <span class="text--blue">Games</span>
          </h1>
          <p class="header__para">
            Echipa noastră de programatori este compusă din doi 
            <span class="text--blue text--bold"> profesioniști</span>,
           pasionați și experimentați în domeniul dezvoltării software.Împreună,formam o 
             <span class="text--blue text--bold"> echipă </span>
             sinergică, abordând proiectele cu o combinație de competențe tehnice, creativitate și o atitudine orientată către rezultate. 
            Mai multe despre noi
            <span
              class="text--blue text--bold cursor--pointer"
              onclick="toggleModal()"
              >aici</span>.
            
          </p>
          <div class="social__links">
            <a
              href="https://github.com/marakatat"
              class="social__link click"
              target="_blank"
            >
            <i class="fa-brands fa-github"></i>
            </a>
            <a
              href="https://discord.gg/5KgaHFVJ2M"
              class="social__link click"
              target="_blank"
            >
            <i class="fa-brands fa-discord" style="color: #434242;"></i>
            </a>
            <a onclick="alertNotification()" class="social__link click cursor__hover">
              <i class="fa-solid fa-file-lines"></i>
            </a>
          </div>
        </div>
        <img src="./assets/logo.png" class="header__me--photo" />
      </header>
        </a>
      </button>
      <a href="#projects" class="scroll">
        <div class="scroll__icon click"></div>
      </a>
      <div class="modal">
        <div class="modal__half modal__about">
          <h3 class="modal__title modal__title--about">
            RomDev Games
          </h3>
          <h4 class="modal__sub-title modal__sub-title--about text--galben">
            Beginner Programmers
          </h4>
          <div class="mode__para--container">
            <p class="model__para">
              Bine ai venit pe platforma noastră online, unde doi adolescenți pasionați din
              <span class="text--galben text--bold">România</span>
              își pun imaginația și creativitatea la treabă pentru a dezvolta proiecte captivante chiar din confortul caselor lor. Avem o gamă variată de
              <span class="text--galben text--bold">inițiative interesante </span>,cu accente speciale în lumea jocurilor și nu numai.
              Cu idei inovatoare și multă energie pozitivă, 
              <span class="text--galben text--bold">echipa </span>, 
              noastră aduce la viață jocuri captivante care te vor transporta în universuri fascinante și aventuri neașteptate. De la povești interactive la provocări strategice, explorăm diverse genuri pentru a oferi o experiență de divertisment unică.
         </p>
          </div>
          <h3
            class="modal__languages--title text--galben text--bold link__hover-effect2 link__hover-effect--blue"
          >
            Limbaje de progamare cunoscute
          </h3>
          <div class="modal__languages">
            <figure class="modal__language--container">
              <img src="./assets/HTML.png" class="modal__language--img" />
              <span class="language__name">HTML</span>
            </figure>
            <figure class="modal__language--container">
              <img src="./assets/CSS.png" class="modal__language--img" />
              <span class="language__name">CSS</span>
            </figure>
            <figure class="modal__language--container">
              <img src="./assets/JS.png" class="modal__language--img" />
              <span class="language__name">JavaScript</span>
            </figure>
            <figure class="modal__language--container">
              <img src="./assets/c.png" class="modal__language--img" />
              <span class="language__name">C#</span>
            </figure>
          </div>
        </div>
        <div class="modal__half modal__contact">
          <i
            class="fa-solid fa-times modal__exit click"
            onclick="toggleModal()"
          ></i>
          <h3 class="modal__title modal__title--contact">Echipa Noastra</h3>
          <h4 class="modal__sub-title modal__sub-title--contact">
            Puteti sa ne gasiti si pe retelele noaste de socializare!
          </h4>
          <br />

          <img id="imaginemodal" src="https://cdn.discordapp.com/avatars/703315979773673613/aa90677532d25052d91873ef0d6f1192.webp">
          <h1>Matei</h1>
          <h5>Web Developer</h5>
          <br>
          <a
          href="https://www.instagram.com/maniamatei/"
          class="textmodal colorinstagram"
      >Instagram</a
      target="_blank">
    
        </a> 
    
        <br>
    <a
      href="https://discord.com/users/703315979773673613"
      class="textmodal colordiscord imgainemodal"
      >Discord</a
      target="_blank">
 
        </a> <br /> 
     
       <img id="imaginemodal" src="https://cdn.discordapp.com/avatars/404666692879253504/02d1acfa2191b9b2e7a38aa65f063247.webp">
          <h1>Emanuel</h1>  
          <h5>Web Developer / Game Developer</h5>
          <br>
          <a
          href="https://www.instagram.com/kobe.fer/"
          class="textmodal colorinstagram"
          >Instagram</a
          target="_blank">
          <br>
        </a> 
          <a
          href="https://discord.com/users/404666692879253504"
          class="textmodal  colordiscord "
          >Discord</a
          target="_blank">
            </a> 
        <br>
            <br /> <br /> 
          </div>
        </div>
      </div>
      <img src="./assets/circle.svg" class="shape shape--0" />
      <img src="./assets/triangle.svg" class="shape shape--1" />
      <img src="./assets/semi_circle.svg" class="shape shape--2" />
      <img src="./assets/semi_circle.svg" class="shape shape--3" />
      <img src="./assets/squiggly.svg" class="shape shape--4" />
      <img src="./assets/squiggly.svg" class="shape shape--5" />
      <img src="./assets/circle.svg" class="shape shape--6" />
      <img src="./assets/triangle.svg" class="shape shape--7" />
      <img src="./assets/circle.svg" class="shape shape--8" />
    </section>
    <section id="projects">
      <div class="container">
        <div class="row">
          <h1 class="projects__title">
            Proiectele <span class="text--blue">Noastre</span>
          </h1>
          <ul class="project__list">
            <li class="project">
              <div class="project__wrapper" data-aos="fade-up">
                <img src="./assets/nuca.png" class="project__img" />
                <div class="project__wrapper--bg"></div>
                <div class="project__description">
                  <h3 class="project__description--title">Flappy Nuts</h3>
                  <h4 class="project__description--sub-title">UNITY, C#</h4>
                  <p class="project__description--para">
                    Joc facut in 25 de minute si exportat in 30.
                   
                  </p>
                  <div class="project__description--links">
                    <a
                      class="project__description--link"
                      href="https://github.com/marakatat/Flappy-Nuts/releases/tag/1.0"
                      target="_blank"
                    >
                      <i class="fa-brands fa-github"></i>
                    </a>
                    <a
                      class="project__description--link"
                      href="https://github.com/marakatat/Flappy-Nuts/releases/download/1.0/FlappyNuts.zip"
                      target="_blank"
                    >
                      <i class="fa-solid fa-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </li>
           
           
            <li class="project">
              <div class="project__wrapper" data-aos="fade-up">
                <img src="./assets/minimartian.png" class="project__img" />
                <div class="project__wrapper--bg"></div>
                <div class="project__description">
                  <h3 class="project__description--title">
                    NAGR
                  </h3>
                  <h4 class="project__description--sub-title">UNITY, C#</h4>
                  <p class="project__description--para">
                  Ești un astronaut și încerci să ocolesto obstacolele în timp ce asculți muzică.
                  </p>
                  <div class="project__description--links">
                    <a
                      class="project__description--link"
                      href="https://github.com/marakatat/NAGR/releases/tag/1.0"
                      target="_blank"
                    >
                      <i class="fa-brands fa-github"></i>
                    </a>
                    <a
                      class="project__description--link"
                      href="https://github.com/marakatat/NAGR/releases/download/1.0/NAGR.zip"
                      target="_blank"
                    >
                      <i class="fa-solid fa-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </li>
            <li class="project">
              <div class="project__wrapper" data-aos="fade-up">
                <img
                  src="./assets/ok.jpg"
                  class="project__img"
                />
                <div class="project__wrapper--bg"></div>
                <div class="project__description">
                  <h3 class="project__description--title">Alte Proiecte</h3>
                  <h4 class="project__description--sub-title">HTML, CSS, JavaScript, C#</h4>
                  <p class="project__description--para">
                    Alte proiecte secundare.
                  </p> 
                  <div class="project__description--links">
                    <a
                      class="project__description--link"
                      href="https://github.com/marakatat"
                      target="_blank"
                    > 
                     <i class="fa-solid fa-link"></i>
                    </a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </section>
    <footer>
      <div class="container">
        <div class="row footer__row" data-aos="zoom-in">
          <figure class="footer__logo--container">
           
              <img src="./assets/logo.png" class="footer__logo--img" />
 
          </figure>
          <span class="footer__logo--popper">
            Top
            <i class="fas fa-arrow-up"></i>
          </span>
          <div class="footer__social--list">
            <a
              target="_blank"
              href="https://github.com/MateiReed"
              class="footer__social--link link__hover-effect link__hover-effect--white"
            >
              Github</a
            >
            <a
              target="_blank"
              href="https://discord.com/invite/5KgaHFVJ2M"
              class="footer__social--link link__hover-effect link__hover-effect--white"
            >
              Discord</a
            >
            <a
              href="#"
              onclick="toggleModal()"
              class="footer__social--link link__hover-effect link__hover-effect--white"
            >
              Contact</a
            >
          </div>
          <div class="footer__copyright">Copyright &copy; 2023 RomDev</div>
        </div>
      </div>
    </footer>
  </body>
</html>

