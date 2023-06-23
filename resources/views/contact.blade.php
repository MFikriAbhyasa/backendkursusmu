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
    <link rel="stylesheet" href="./css/contact.css" />
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

    <!--Contact section-->
    <section class="contact">
      <div class="container contact__container">
        <aside class="contact__aside">
          <div class="aside__image">
            <img src="{{ asset('storage/img/contactusbg.png')}}" />
          </div>
          <h2>Contact Us</h2>
          <p>jika anda bingung percayalah semua orang bingung, kalau ga bingung nanti kalau sudah di surga. – Aldi Taher</p>
          <ul class="contact__details">
            <li>
              <i class="uil uil-phone-times"></i>
              <h5>081 500 2 1000</h5>
            </li>
            <li>
              <i class="uil uil-envelope"></i>
              <h5>fk488768@gmail.com</h5>
            </li>
            <li>
              <i class="uil uil-location-point"></i>
              <h5>Cigugur, Kuningan</h5>
            </li>
          </ul>
          <ul class="contact__socials">
            <li>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
            </li>
            <li>
              <a href="#"><i class="uil uil-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="uil uil-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="uil uil-browser"></i></a>
            </li>
          </ul>
        </aside>

        <!--form-->

        <form action="https://formspree.io/f/mzbqlqll" method="POST" class="contact__form">
          <div class="form__name">
            <input type="text" name="First Name" placeholder="First Name" required />
            <input type="text" name="Last Name" placeholder="Last Name" required />
          </div>
          <input type="email" name="Email Address" placeholder="Your Email Address" required />
          <textarea name="Message" rows="7" placeholder="Message" required></textarea>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
        <!--end form-->
      </div>
    </section>
    <!-- end contact section-->

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
