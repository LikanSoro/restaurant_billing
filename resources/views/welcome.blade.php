<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dee's Kitchen</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Dee Kitchen</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon">
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">

    </head>
    <body class="antialiased">
        @include('layouts.nav')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            {{-- <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                

                

                
            </div> --}}

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative text-lg-start" data-aos="zoom-in" data-aos-delay="100" style="padding-top:0px;">
              <div class="row">
                <div class="col-3">
                  <h1><span style="color: white">Dee's Kitchen</span></h1>
                  <div class="btns">
                    {{-- <a href="#menu" class="btn-menu animated fadeInUp scrollto">Our Menu</a> --}}
                    {{-- <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Book a Table</a> --}}
                  </div>
                </div>
                <div class="col-8 justify-content-center position-relative">
        
                  
                </div>
              </div>
            </div>
          </section><!-- End Hero -->

        </div>

        <main id="main">

            <!-- ======= About Section ======= -->
            <!-- End About Section -->
        
            
            <!-- ======= Menu Section ======= -->
            <section id="menu" class="menu section-bg">
              <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                  <h2>Menu</h2>
                  <p>Check Our Tasty Menu</p>
                </div>
        
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                  <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="menu-flters">
                      <li data-filter="*" class="filter-active">All</li>
                      <li data-filter=".filter-starters">Starters</li>
                      <li data-filter=".filter-salads">Salads</li>
                      <li data-filter=".filter-specialty">Specialty</li>
                    </ul>
                  </div>
                </div>
        
                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        
                  <div class="col-lg-6 menu-item filter-starters">
                    <img src="assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                      <a href="#">Chicken Biryani</a><span>300</span>
                    </div>
                    <div class="menu-ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </div>
                  </div>
        
                  <div class="col-lg-6 menu-item filter-specialty">
                    <img src="assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                      <a href="#">Bread Barrel</a><span>$6.95</span>
                    </div>
                    <div class="menu-ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </div>
                  </div>
        
                  <div class="col-lg-6 menu-item filter-starters">
                    <img src="assets/img/menu/cake.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                      <a href="#">Crab Cake</a><span>$7.95</span>
                    </div>
                    <div class="menu-ingredients">
                      A delicate crab cake served on a toasted roll with lettuce and tartar sauce
                    </div>
                  </div>
        
                  <div class="col-lg-6 menu-item filter-salads">
                    <img src="assets/img/menu/caesar.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                      <a href="#">Caesar Selections</a><span>$8.95</span>
                    </div>
                    <div class="menu-ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </div>
                  </div>
        
                  <div class="col-lg-6 menu-item filter-specialty">
                    <img src="assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                      <a href="#">Tuscan Grilled</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                      Grilled chicken with provolone, artichoke hearts, and roasted red pesto
                    </div>
                  </div>
        
                  <div class="col-lg-6 menu-item filter-starters">
                    <img src="assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                      <a href="#">Mozzarella Stick</a><span>$4.95</span>
                    </div>
                    <div class="menu-ingredients">
                      Lorem, deren, trataro, filede, nerada
                    </div>
                  </div>
        
                  <div class="col-lg-6 menu-item filter-salads">
                    <img src="assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                      <a href="#">Greek Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                      Fresh spinach, crisp romaine, tomatoes, and Greek olives
                    </div>
                  </div>
        
                  <div class="col-lg-6 menu-item filter-salads">
                    <img src="assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                      <a href="#">Spinach Salad</a><span>$9.95</span>
                    </div>
                    <div class="menu-ingredients">
                      Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
                    </div>
                  </div>
        
                  <div class="col-lg-6 menu-item filter-specialty">
                    <img src="assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
                    <div class="menu-content">
                      <a href="#">Lobster Roll</a><span>$12.95</span>
                    </div>
                    <div class="menu-ingredients">
                      Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
                    </div>
                  </div>
        
                </div>
        
              </div>
            </section><!-- End Menu Section -->
        
            <!-- ======= Specials Section ======= -->
            <!-- End Specials Section -->
        
            <!-- ======= Events Section ======= -->
        <!-- End Events Section -->
        
            
            <!-- ======= Gallery Section ======= -->
            <!-- End Gallery Section -->
        
            <!-- ======= Chefs Section ======= -->
            <section id="chefs" class="chefs">
              <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                  <h2>Chefs</h2>
                  <p>Our Proffesional Chefs</p>
                </div>
        
                <div class="row">
        
                  <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                      <img src="assets/img/chefs/Jyoti.jpeg" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>Jyoti Prakash Bora</h4>
                          <span>Master Chef</span>
                        </div>
                        <div class="social">
                          <a href=""><i class="bi bi-twitter"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                      <img src="assets/img/chefs/Debojit.jpeg" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>Debojit Debnath</h4>
                          <span>Patissier</span>
                        </div>
                        <div class="social">
                          <a href=""><i class="bi bi-twitter"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
        
                  <div class="col-lg-4 col-md-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                      <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4>William Anderson</h4>
                          <span>Cook</span>
                        </div>
                        <div class="social">
                          <a href=""><i class="bi bi-twitter"></i></a>
                          <a href=""><i class="bi bi-facebook"></i></a>
                          <a href=""><i class="bi bi-instagram"></i></a>
                          <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
        
                </div>
        
              </div>
            </section><!-- End Chefs Section -->
        
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
              <div class="container" data-aos="fade-up">
        
                <div class="section-title">
                  <h2>Contact</h2>
                  <p>Contact Us</p>
                </div>
              </div>
        
              {{-- <div data-aos="fade-up">
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
              </div> --}}
        
              <div class="container" data-aos="fade-up">
        
                <div class="row mt-5">
        
                  <div class="col-lg-4">
                    <div class="info">
                      <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>Garali,Jorhat</p>
                      </div>
        
                      <div class="open-hours">
                        <i class="bi bi-clock"></i>
                        <h4>Open Hours:</h4>
                        <p>
                          Monday-Saturday:<br>
                          11:00 AM - 2300 PM
                        </p>
                      </div>
        
                      <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>deeskitchen@gmail.com</p>
                      </div>
        
                      <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Call:</h4>
                        <p>+91 9101839882</p>
                      </div>
        
                    </div>
        
                  </div>
        
                  
        
                </div>
        
              </div>
            </section><!-- End Contact Section -->
          </main><!-- End #main -->
        
          <!-- ======= Footer ======= -->
          <footer id="footer">
            <div class="footer-top">
              <div class="container">
                <div class="row">
        
                  <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                      <h3>Dees's Kitchen</h3>
                      <p>
                        Garhali <br>
                        Jorhat<br><br>
                        <strong>Phone:</strong> +91 9101839882<br>
                        <strong>Email:</strong> deeskitchen@gmail.com<br>
                      </p>
                      <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
        
                  
        
                </div>
              </div>
            </div>
        
            <div class="container">
              <div class="copyright">
                &copy; Copyright <strong><span>Dee's Kitchen</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Abhi&DK</a>
              </div>
            </div>
          </footer><!-- End Footer -->
        
          <div id="preloader"></div>
          <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        
          <!-- Vendor JS Files -->
          <script src="assets/vendor/aos/aos.js"></script>
          <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
          <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
          <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
          <script src="assets/vendor/php-email-form/validate.js"></script>
        
          <!-- Template Main JS File -->
          <script src="assets/js/main.js"></script>

    </body>
</html>
