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

    <!-- Custom Css Link-->
    <link rel="stylesheet" href="./css/style.css" />

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

    <!--Header Hero-->
    <header>
      <div class="container header__container">
        <div class="header__left">
          <h1>Better and Faster Than RuangGuru</h1>
          <p>Ayok kuliah di STKIP Muhammadiyah Kuningan dan dapatkan Gratis Kursus dengan cara bayar SPP Rutin setiap Semester otomatis dapat akses Kursus Selamanya</p>
          <a href="/register" class="btn btn-primary">Utiwi Daftar</a>
        </div>

        <div class="header__right">
          <div class="header__right-image">
            <img src="{{ asset('storage/img/bgbb.png')}}" />
          </div>
        </div>
      </div>
    </header>
    <!--End Header Hero-->

    <!--Section Categories-->
    <section class="categories">
      <div class="container categories__container">
        <div class="categories__left">
          <h1>Categories</h1>
          <p>Kategori kursus yang di tawarkan di KursusMU sangat banyak dan bervariatif anda bisa memilih sesuai dengan minat dan bakat anda. Kalo gak minat gak usah daftar ya adik - adik</p>
          <a href="courses.html" class="btn">Selengkapnya</a>
        </div>

        <div class="categories__right">
          <article class="category">
            <span class="category__icon">
              <i class="uil uil-palette"></i>
            </span>
            <h5>Design Graphic</h5>
            <p>Belajar Desain Grafis bukan pakai Canva</p>
          </article>

          <article class="category">
            <span class="category__icon">
              <i class="uil uil-code-branch"></i>
            </span>
            <h5>Web Developper</h5>
            <p>Belajar Web Easy to Sepuh</p>
          </article>

          <article class="category">
            <span class="category__icon">
              <i class="uil uil-adobe"></i>
            </span>
            <h5>UI / UX</h5>
            <p>Belajar UI / UX biar kaya di Start-Up</p>
          </article>

          <article class="category">
            <span class="category__icon">
              <i class="uil uil-usd-circle"></i>
            </span>
            <h5>Bussinness</h5>
            <p>Belajar tentang Duit biar ga kena tipu</p>
          </article>

          <article class="category">
            <span class="category__icon">
              <i class="uil uil-folder-network"></i>
            </span>
            <h5>Data Analys</h5>
            <p>Belajar mengolah data, hingga bisa mengolah masakan</p>
          </article>

          <article class="category">
            <span class="category__icon">
              <i class="uil uil-megaphone"></i>
            </span>
            <h5>Sosmed Officer</h5>
            <p>Belajar tentang mengelola sosial media</p>
          </article>
        </div>
      </div>
    </section>
    <!--End Section Categories-->

    <!--Our Popular Categories-->
    <section class="courses">
      <h2>Our Popular Courses</h2>
      <div class="container courses__container">
        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course1.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Web Developper</h4>
            <p>
              Front – End , Back – End, hingga Full – Stack Web Developper kita pelajari di kelas ini. Kamu juga bisa mendapat berbagai benefit dan bisa mendapatkan Portfolio projek web yang anda buat. Hingga semua orang
              kagum dan menganggap anda sepuh website anjay
            </p>
            <a href="courses.html" class="btn btn-primary">Beli Sekarang</a>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course2.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Sosmed Officer</h4>
            <p>
              Menjadi seorang Social Media Officer bukanlah hal yang mudah apalagi memegang akun social media perusahaan start – up dan lainnya. Disini anda akan mempelajari bagaimana cara kerja seorang social media
              officer dari pemula hingga menjadi mahir
            </p>
            <a href="courses.html" class="btn btn-primary">Beli Sekarang</a>
          </div>
        </article>

        <article class="course">
          <div class="course__image">
            <img src="{{ asset('storage/img/course3.jpg')}}" />
          </div>
          <div class="course__info">
            <h4>Graphic Designer</h4>
            <p>
              Bosan dengan design menggunakan template dari canva ? tentang di kursus ini merupakan solusi nya. Anda bisa menjadi seorang professional graphic designer dari newbie hingga menjadi pro. Disini akan
              mempelajari adobe illustrator, photosop, figma, coreldraw dll
            </p>
            <a href="courses.html" class="btn btn-primary">Beli Sekarang</a>
          </div>
        </article>
      </div>
    </section>
    <!--End Popular categories-->

    <!--Faqs-->
    <section class="faqs">
      <h2>Pertanyaan Yang Sering Ditanyakan</h2>
      <div class="container faqs__container">
        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>Bagaimana cara mendapatkan kursus di sini, gratis ?</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio odit vero magni fugit praesentium fuga, qui maxime atque earum nostrum ipsam, amet animi, tempora sequi voluptatem modi illum sed in.</p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>Apakah kampus lain harus bayar kalau disini kak ?</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio odit vero magni fugit praesentium fuga, qui maxime atque earum nostrum ipsam, amet animi, tempora sequi voluptatem modi illum sed in.</p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>Admin team bumi datar atau bulat ? atau tahayul ?</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio odit vero magni fugit praesentium fuga, qui maxime atque earum nostrum ipsam, amet animi, tempora sequi voluptatem modi illum sed in.</p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>Apakah sering bolong bayar SPP bisa mengajukan ?</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio odit vero magni fugit praesentium fuga, qui maxime atque earum nostrum ipsam, amet animi, tempora sequi voluptatem modi illum sed in.</p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>Alumni kampus bisa jadi mentor kah ? gaji berapa ?</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio odit vero magni fugit praesentium fuga, qui maxime atque earum nostrum ipsam, amet animi, tempora sequi voluptatem modi illum sed in.</p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>Apakah terjamin akan di hire perusahaan tinggi ?</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio odit vero magni fugit praesentium fuga, qui maxime atque earum nostrum ipsam, amet animi, tempora sequi voluptatem modi illum sed in.</p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>Berapa lama untuk bisa menjadi seorang dewa web ?</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio odit vero magni fugit praesentium fuga, qui maxime atque earum nostrum ipsam, amet animi, tempora sequi voluptatem modi illum sed in.</p>
          </div>
        </article>

        <article class="faq">
          <div class="faq__icon"><i class="uil uil-plus"></i></div>
          <div class="question__answer">
            <h4>Saya sebenarnya dua orang, eh empat orang, atau ?</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Optio odit vero magni fugit praesentium fuga, qui maxime atque earum nostrum ipsam, amet animi, tempora sequi voluptatem modi illum sed in.</p>
          </div>
        </article>
      </div>
    </section>
    <!-- End Faqs-->

    <!-- Testimonial-->
    <section class="container testimonials__container mySwiper">
      <h2>Testimonial Murid KursusMU</h2>
      <div class="swiper-wrapper">
        <article class="testimonial swiper-slide">
          <div class="avatar">
            <img src="{{ asset('storage/img/avatar1.jpg')}}" alt="orang1" />
          </div>
          <div class="testimonial__info">
            <h5>M Fikri Abhyasa</h5>
            <small>Murid</small>
          </div>
          <div class="testimonial__body">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, deleniti amet fuga maxime hic ex iusto debitis blanditiis at deserunt aperiam commodi laboriosam vel dolores, delectus beatae, modi sint
              nulla.
            </p>
          </div>
        </article>

        <article class="testimonial swiper-slide">
          <div class="avatar">
            <img src="{{ asset('storage/img/avatar2.jpg')}}" alt="orang1" />
          </div>
          <div class="testimonial__info">
            <h5>Alamsyah F</h5>
            <small>Murid</small>
          </div>
          <div class="testimonial__body">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, deleniti amet fuga maxime hic ex iusto debitis blanditiis at deserunt aperiam commodi laboriosam vel dolores, delectus beatae, modi sint
              nulla.
            </p>
          </div>
        </article>

        <article class="testimonial swiper-slide">
          <div class="avatar">
            <img src="{{ asset('storage/img/avatar3.jpg')}}" alt="orang1" />
          </div>
          <div class="testimonial__info">
            <h5>Aldy Maulana Bukan Taher</h5>
            <small>Murid</small>
          </div>
          <div class="testimonial__body">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, deleniti amet fuga maxime hic ex iusto debitis blanditiis at deserunt aperiam commodi laboriosam vel dolores, delectus beatae, modi sint
              nulla.
            </p>
          </div>
        </article>

        <article class="testimonial swiper-slide">
          <div class="avatar">
            <img src="{{ asset('storage/img/avatar4.jpg')}}" alt="orang1" />
          </div>
          <div class="testimonial__info">
            <h5>Angeli Intan DW</h5>
            <small>Murid</small>
          </div>
          <div class="testimonial__body">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, deleniti amet fuga maxime hic ex iusto debitis blanditiis at deserunt aperiam commodi laboriosam vel dolores, delectus beatae, modi sint
              nulla.
            </p>
          </div>
        </article>

        <article class="testimonial swiper-slide">
          <div class="avatar">
            <img src="{{ asset('storage/img/avatar5.jpg')}}" alt="orang1" />
          </div>
          <div class="testimonial__info">
            <h5>Bapak Saya</h5>
            <small>Murid</small>
          </div>
          <div class="testimonial__body">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque, deleniti amet fuga maxime hic ex iusto debitis blanditiis at deserunt aperiam commodi laboriosam vel dolores, delectus beatae, modi sint
              nulla.
            </p>
          </div>
        </article>
      </div>
      <div class="swiper-pagination"></div>
    </section>
    <!-- End Testimonial-->

    <!--Video Kalo bisa-->
    <!--End Video-->

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

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        //when window width is >= 600px
        breakpoints: {
          600: {
            slidesPerView: 2,
          },
        },
      });
    </script>
  </body>
</html>
