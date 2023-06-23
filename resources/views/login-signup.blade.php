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

    <!--Swipper js-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/login-signup.css" />

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
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="courses.html">Courses</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="header-icons">
          <a href="login-signup.html"><i class="bx bx-user"></i></a>
          <a href="#"><i class="bx bx-heart"></i></a>
          <a href="#"><i class="bx bx-cart"></i></a>
          <button id="open-menu-btn"><i class="uil uil-bars"></i></button>
          <button id="close-menu-btn"><i class="uil uil-multiply"></i></button>
        </div>
      </div>
    </nav>
    <!--End Navbar-->

    <!--body login-->
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="index.html" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="{{ asset('storage/img/logo.png')}}" alt="kursusmu" />
                <h4>KursusMU</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input type="text" minlength="4" class="input-field" autocomplete="off" required />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input type="password" minlength="4" class="input-field" autocomplete="off" required />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <form action="index.html" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="{{ asset('storage/img/logo.png')}}" alt="kursusmu" />
                <h4>KursusMU</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input type="text" minlength="4" class="input-field" autocomplete="off" required />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input type="email" class="input-field" autocomplete="off" required />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input type="password" minlength="4" class="input-field" autocomplete="off" required />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="{{ asset('storage/img/image1.png')}}" class="image img-1 show" alt="" />
              <img src="{{ asset('storage/img/image2.png')}}" class="image img-2" alt="" />
              <img src="{{ asset('storage/img/image3.png')}}" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Create your own courses</h2>
                  <h2>Customize as you like</h2>
                  <h2>Invite students to your class</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!--end body login-->

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

    <!-- Javascript file -->
    <script src="./js/main.js"></script>
    <script src="./js/app.js"></script>
  </body>
</html>
