<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KursusMu | Platform Kuliah</title>

    <!-- Custom cdn Iconscout-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css" />

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />

    <!--Font Montserrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Custom Css Link-->
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/about.css" />

    <style>
      body {
        background-image: url({{asset('storage/img/bg-texture.png')}});
      }
    </style>
  </head>

  <body>
    <!-- Navbar -->
    <nav>
      <div class="container nav__container">
        <a href="index.html"><h4>KursusMU</h4></a>
        <ul class="nav__menu">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/kursus">Courses</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
        <div class="header-icons">
          <a href="/login"><i class="bx bx-user"></i></a>
          <a href="#"><i class="bx bx-heart"></i></a>
          <a href="#"><i class="bx bx-cart"></i></a>
          <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
          <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
      </div>
    </nav>
    <!--End Navbar-->

    <!--Achievment section-->
    <div class="about__achievments">
      <div class="container about__achievments-container">
        <div class="about__achievments-left">
          <img src="{{ asset('storage/img/bg22.png')}}" alt="achievements" />
        </div>

        <div class="about__achievments-right">
          <h1>Benefit</h1>
          <p>Benefit yang di dapat jika mendaftar di KursusMU adalah ya banyak, kaya benefit tempat kursus lainnya. Cuman kalau di KursusMU bisa bayar dengan SPP Rutin setiap bulan ya gaes</p>
          <div class="achievments__cards">
            <article class="achievment__card">
              <span class="achievment__icon">
                <i class="uil uil-video"></i>
              </span>
              <h3>450+</h3>
              <p>Kursus</p>
            </article>

            <article class="achievment__card">
              <span class="achievment__icon">
                <i class="uil uil-users-alt"></i>
              </span>
              <h3>79K+</h3>
              <p>Murid</p>
            </article>

            <article class="achievment__card">
              <span class="achievment__icon">
                <i class="uil uil-trophy"></i>
              </span>
              <h3>10K</h3>
              <p>Penghargaan</p>
            </article>
          </div>
        </div>
      </div>
    </div>
    <!--achievment section end-->

    <!--Tim section-->
    <section class="team">
      <h2>Kelompok 5 PTIK 4 B</h2>
      <div class="container team__container">
        <article class="team__member">
          <div class="team__member-image">
            <img src="{{ asset('storage/img/tm1.jpg')}}" alt="team1" />
          </div>
          <div class="team__member-info">
            <h4>M. Fikri A</h4>
            <p>Kapten Team</p>
          </div>
          <div class="team__member-socials">
            <a href="https://instagram.com/muhamadfikri_abhyasa?igshid=MzNlNGNkZWQ4Mg==" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="https://twitter.com/FforFikriii?t=BwM4xQK2p1Uxz0KkJ2D_5A&s=09" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="{{ asset('storage/img/tm6.jpg')}}" alt="team2" />
          </div>
          <div class="team__member-info">
            <h4>Alamsyah F</h4>
            <p>Expert Tutor</p>
          </div>
          <div class="team__member-socials">
            <a href="https://instagram.com/asyahf_02?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="{{ asset('storage/img/tm8.jpg')}}" alt="team3" />
          </div>
          <div class="team__member-info">
            <h4>Aldy M</h4>
            <p>Expert Tutor</p>
          </div>
          <div class="team__member-socials">
            <a href="https://instagram.com/aldymaulana141?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="{{ asset('storage/img/tm2.jpg')}}" alt="team4" />
          </div>
          <div class="team__member-info">
            <h4>Angel I Dw</h4>
            <p>Expert Tutor</p>
          </div>
          <div class="team__member-socials">
            <a href="https://instagram.com/angelidiw?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="{{ asset('storage/img/tm5.jpg')}}" alt="team5" />
          </div>
          <div class="team__member-info">
            <h4>Para Sepuh</h4>
            <p>Member Kelas Pak Niko, Eng.</p>
          </div>
          <div class="team__member-socials">
            <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="{{ asset('storage/img/tm2.jpg')}}" alt="team6" />
          </div>
          <div class="team__member-info">
            <h4>Chat GPT</h4>
            <p>Random Member</p>
          </div>
          <div class="team__member-socials">
            <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="{{ asset('storage/img/tm7.jpg')}}" alt="team7" />
          </div>
          <div class="team__member-info">
            <h4>Pak Shofian</h4>
            <p>Dosen Pengampu</p>
          </div>
          <div class="team__member-socials">
            <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>

        <article class="team__member">
          <div class="team__member-image">
            <img src="{{ asset('storage/img/tm8.jpg')}}" alt="team8" />
          </div>
          <div class="team__member-info">
            <h4>Channel WPU</h4>
            <p>Expert Tutor</p>
          </div>
          <div class="team__member-socials">
            <a href="#" target="_blank"><i class="uil uil-instagram"></i></a>
            <a href="#" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            <a href="#" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
          </div>
        </article>
      </div>
    </section>
    <!--End tim section-->

    <!--Footer-->
    <footer>
      <div class="container footer__container">
        <div class="footer__1">
          <a href="index.html" class="footer__logo"><h4>KursusMU</h4></a>
          <p>KursusMU adalah Platform Kuliah STKIP Muhammadiyah Kuningan dan dibuat oleh Kelompok 5 PTIK 4 B</p>
        </div>

        <div class="footer__2">
          <h4>Permalinks</h4>
          <ul class="permalinks">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="courses.html">Courses</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>

        <div class="footer__3">
          <h4>Privacy</h4>
          <ul class="privacy">
            <li><a href="#">Privacy Police</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Refund SPP</a></li>
          </ul>
        </div>

        <div class="footer__4">
          <h4>Contact Us</h4>
          <div>
            <p>08 1 500 2 1000</p>
            <p>fk488768@gmail.com</p>
          </div>

          <ul class="footer__socials">
            <li>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
            </li>

            <li>
              <a href="#"><i class="uil uil-instagram-alt"></i></a>
            </li>

            <li>
              <a href="#"><i class="uil uil-twitter"></i></a>
            </li>

            <li>
              <a href="#"><i class="uil uil-browser"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer__copyright"><i class="uil uil-copyright"></i><small>Copyright by | Kelompok 5 & PTIK 4 B</small></div>
    </footer>

    <!--End Footer-->

    <script src="./js/main.js"></script>
  </body>
</html>
