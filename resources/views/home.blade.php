<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AFEBAS</title>

    <!-- icon de google -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<!--body>
    <header>
        <div class="logo"-->
            <!--p><span>AFEBAS</span></p-->
            <!--img src="images/afebas logo 2.png" >
        </div>
        <ul class="menu">
            <li>
                <a href="#"><b>Acceuil</b></a>
            </li>
            <li>
                <a href="#"><b>Informations</b></a>
            </li>
            <li>
                <a href="#"><b>Equipe</b></a>
            </li>
            <li>
                <a href="#"><b>Tournois</b></a>
            </li>
            <li>
                <a href="#"><b>Compétition</b></a>
            </li>
            <li>
                <a href="#"><b>Licence</b></a>
            </li>
        </ul>
        <div class="search">
            <input type="text" placeholder="recherche">
        </div>
    </header-->

  
<!--/body-->
<body class="index-page">

    <header id="header" class="header d-flex align-items-center sticky-top bg-body text-body">
      <div class="container position-relative d-flex align-items-center justify-content-between">
  
        <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="images1/afebas logo 2.png" alt="">
            <!-- <h1 class="sitename">Yummy</h1>
            <span>.</span> -->
          </a>
  
        <nav id="navmenu" class="navmenu">
          <ul>
            <!--li><a href="#" class="active"><i class="fas fa-home text-primary"></i></a></li-->
            <!--li><a href="#gallery">Galerie</a></li-->
            <li><a href="/home/information">Informations</a></li>
            <li><a href="/home/tournois">Evènements</a></li>
            <li><a href="/home/competition">Classements</a></li>
            <!--li><a href="/home/resultats"></a></li-->
            <!--li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li-->
            <!--li><a href="#">Contact</a></li-->
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
  
        <!--a class="btn-getstarted" href="index.html#book-a-table">recherche</a-->
        <!--div class="search">
            <form class="btn-getstarted">
                <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Recherche"-->
                <!--button class="btn btn-outline-success" type="submit">Recherche</button-->
            <!--/form>
        </div>
  
      </div-->
    </header>
  
    <main class="main">

      <!-- section presentation -->
      <section class="presentation">
        <h1>AFEBAS Madagascar</h1>
        <h1>et La Réunion</h1>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to</p>
      </section>
      <!-- /section presentation -->
  
      <!-- Gallery Section -->
      <section id="gallery" class="gallery section bg-info-subtle text-info-emphasis">
  
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <!--h2>Galerie</h2-->
          <p><span>Notre</span> <span class="description-title">Collaboration</span></p>
        </div><!-- End Section Title -->
  
        <div class="container" data-aos="fade-up" data-aos-delay="100">
  
          <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "auto",
                "centeredSlides": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "breakpoints": {
                  "320": {
                    "slidesPerView": 1,
                    "spaceBetween": 0
                  },
                  "768": {
                    "slidesPerView": 3,
                    "spaceBetween": 20
                  },
                  "1200": {
                    "slidesPerView": 5,
                    "spaceBetween": 20
                  }
                }
              }
            </script>
            <div class="swiper-wrapper align-items-center">
              <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galerie-1.jpg"><img src="assets/img/gallery/galerie-1.jpg" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galerie-1.jpg"><img src="assets/img/gallery/galerie-1.jpg" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galerie-1.jpg"><img src="assets/img/gallery/galerie-1.jpg" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galerie-1.jpg"><img src="assets/img/gallery/galerie-1.jpg" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galerie-1.jpg"><img src="assets/img/gallery/galerie-1.jpg" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galerie-1.jpg"><img src="assets/img/gallery/galerie-1.jpg" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galerie-1.jpg"><img src="assets/img/gallery/galerie-1.jpg" class="img-fluid" alt=""></a></div>
              <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/gallery/galerie-1.jpg"><img src="assets/img/gallery/galerie-1.jpg" class="img-fluid" alt=""></a></div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
  
      </section>
      <!-- /Gallery Section -->

      <!-- Chefs Section -->
      <section id="chefs" class="chefs section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <!--h2>chefs</h2-->
          <p><span style="color: white"></span> <span class="description-title">Introduction<br></span></p>
          <p style="color: white; font-size: 15px">Le 8 pool coeur de l'océan Indien et une association affilié et déclaré au ministère des sports en France On a deux branches une à la Réunion et une autre à Madagascar</p>
        </div><!-- End Section Title -->
  
        <div class="container">
  
          <div class="row gy-4">
  
            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member">
                <div class="member-img">
                  <img src="assets/img/gallery/galerie-1.jpg" class="img-fluid" alt="">
                  <!--div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div-->
                </div>
                <div class="member-info">
                  <h4>Prochain évènement</h4>
                  <!--span></span-->
                  <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                </div>
              </div>
            </div><!-- End Chef Team Member -->
  
            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
              <div class="team-member">
                <div class="member-img">
                  <img src="assets/img/gallery/galerie-1.jpg" class="img-fluid" alt="">
                  <!--div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div-->
                </div>
                <div class="member-info">
                  <h4>Actualités à Madagascar</h4>
                  <!--span></span-->
                  <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                </div>
              </div>
            </div><!-- End Chef Team Member -->
  
            <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
              <div class="team-member">
                <div class="member-img">
                  <img src="assets/img/gallery/galerie-1.jpg" class="img-fluid" alt="">
                  <!--div class="social">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div-->
                </div>
                <div class="member-info">
                  <h4>Actualités à La Réunion</h4>
                  <!--span></span-->
                  <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt. Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                </div>
              </div>
            </div><!-- End Chef Team Member -->
  
          </div>
  
        </div>
  
      </section>
      <!-- /Chefs Section -->

     <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <!--h2>TESTIMONIALS</h2-->
        <p>Annonces<span class="description-title"></span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 6000,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                      <div class="testimonial-content">
                        <h3>Madagascar</h3>
                      
                      <!-- tableau pour l'annonce -->
                      <div class="matches-container">
                        <h3 class="details-title" id="matches-title">
                          Résultats des matchs
                        </h3>
                        <div class="matches details" id="matches-details">
                          <table>
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>Match</th>
                                <th>Points</th>
                                <th>Score</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>16/02/2024</td>
                                <td>Match 1</td>
                                <td>10 - 5</td>
                                <td>3 - 2</td>
                              </tr>
                              <tr>
                                <td>22/02/2024</td>
                                <td>Match 2</td>
                                <td>12 - 8</td>
                                <td>4 - 1</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <!-- fin de l'annonce -->
                    </div>

                  </div>

                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>Madagascar</h3>
                    
                    <!-- tableau pour l'annonce -->
                    <div class="calendar-container">
                      <h3 class="details-title" id="calendar-title">
                        Calendrier des matchs à venir
                      </h3>
                      <div class="calendar details" id="calendar-details">
                        <table>
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Match</th>
                              <th>Heure</th>
                              <th>Lieu</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>16/02/2024</td>
                              <td>Match 1</td>
                              <td>16:00</td>
                              <td>Salle de billard B</td>
                            </tr>
                            <tr>
                              <td>22/02/2024</td>
                              <td>Match 2</td>
                              <td>16:00</td>
                              <td>Salle de billard D</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- fin de l'annonce -->
                  </div>
                  </div> 
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                      <div class="testimonial-content">
                        <h3>La Réunion</h3>
                      
                      <!-- tableau pour l'annonce -->
                      <!--div class="matches-container">
                        <h3 class="details-title" id="matches-title">
                          Résultats des matchs
                        </h3>
                        <div class="matches details" id="matches-details">
                          <table>
                            <thead>
                              <tr>
                                <th>Date</th>
                                <th>Match</th>
                                <th>Points</th>
                                <th>Score</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>16/02/2024</td>
                                <td>Match 1</td>
                                <td>10 - 5</td>
                                <td>3 - 2</td>
                              </tr>
                              <tr>
                                <td>22/02/2024</td>
                                <td>Match 2</td>
                                <td>12 - 8</td>
                                <td>4 - 1</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div-->
                      <table class="table">
                        <h3 class="details-title" id="matches-title">
                          Résultats des matchs
                        </h3>
                        <thead>
                          <tr class="table-info">
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                          </tr>
                        </tbody>
                      </table>
                      <!-- fin de l'annonce -->
                    </div>

                    </div>
                  </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row gy-4 justify-content-center">
                  <div class="col-lg-6">
                    <div class="testimonial-content">
                      <h3>La Réunion</h3>
                    
                    <!-- tableau pour l'annonce -->
                    <div class="calendar-container">
                      <h3 class="details-title" id="calendar-title">
                        Calendrier des matchs à venir
                      </h3>
                      <div class="calendar details" id="calendar-details">
                        <table>
                          <thead>
                            <tr>
                              <th>Date</th>
                              <th>Match</th>
                              <th>Heure</th>
                              <th>Lieu</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>16/02/2024</td>
                              <td>Match 1</td>
                              <td>16:00</td>
                              <td>Salle de billard B</td>
                            </tr>
                            <tr>
                              <td>22/02/2024</td>
                              <td>Match 2</td>
                              <td>16:00</td>
                              <td>Salle de billard D</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- fin de l'annonce -->
                  </div>
                  </div> 
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section>
    <!-- /Testimonials Section -->

    <!-- Events Section -->
    <!-- /Events Section -->
  
    </main>

  
    <!--footer id="footer" class="footer dark-background">
  
      <div class="container">
        <div class="row gy-3">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div class="address">
              <h4>Address</h4>
              <p>A108 Adam Street</p>
              <p>New York, NY 535022</p>
              <p></p>
            </div>
  
          </div>
  
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Contact</h4>
              <p>
                <strong>Phone:</strong> <span>+1 5589 55488 55</span><br>
                <strong>Email:</strong> <span>info@example.com</span><br>
              </p>
            </div>
          </div>
  
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Sat:</strong> <span>11AM - 23PM</span><br>
                <strong>Sunday</strong>: <span>Closed</span>
              </p>
            </div>
          </div>
  
          <div class="col-lg-3 col-md-6">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
  
        </div>
      </div>
  
      <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Yummy</strong> <span>All Rights Reserved</span></p>
        <div class="credits"-->
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
  
    </footer-->
  
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Preloader -->
    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
  
  </body>
</html>