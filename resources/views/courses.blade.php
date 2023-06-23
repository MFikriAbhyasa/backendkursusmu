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
    <link rel="stylesheet" href="./css/courses.css" />
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

    <!--Our Popular Categories-->
    <section class="courses">
      <h2>Kursus</h2>
      <div class="container courses__container">
        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course1.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Web Developper</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course2.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Sosmed Officer</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course3.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Graphic Designer</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course1.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Video Editting</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course2.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Programming</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course3.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Data Analys</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course1.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>UI / UX</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course2.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Office School</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course3.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>English TOEFL</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course1.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Copy Writter</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course2.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Game Developper</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course3.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Digital Marketing</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course1.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Enterpreneurship</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course2.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Photography</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course3.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Public Relationship</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course1.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Finance</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course2.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Google Language</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course3.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Tapak Suci</h4>
            <div class="iconkur">
              <p><i class="bx bx-video"></i>52 Jam Video Belajar</p>
              <p><i class="bx bx-news"></i>85 Artikel Materi</p>
              <p><i class="bx bx-cloud-download"></i>Download File Resource</p>
              <p><i class="bx bx-infinite"></i>Full Akses Selamanya</p>
              <p><i class="bx bxs-devices"></i>Acces 2 perangkat</p>
              <p><i class="bx bx-paperclip"></i>Penugasan</p>
              <p><i class="bx bx-trophy"></i>Certificate Kursus</p>
              <a href="cekout.html" class="btn btn-primary">Beli Kursus</a>
            </div>
          </div>
        </article>
      </div>
    </section>
    <!--End Popular categories-->

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
