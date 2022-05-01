
 <h3>{{ $movieDetails['name'] }}</h3>
 @for ($i = 0; $i < count($slot); $i++)
     <a href="{{ $slot[$i]['link_embed'] }}">Tập {{$i+1}}</a>

 @endfor
 <!DOCTYPE html>
 <html lang="en">
 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Flix | Movie web</title>

      <link rel="shortcut icon" href="./assets/img/Images/logo-foursquare.svg">

      <!-- CSS -->
      <link rel="stylesheet" href="./assets/style.css">
      <link rel="stylesheet" href="./assets/grid.css">
      <link rel="stylesheet" href="./assets/component.css">

      <!-- GOOGLE FONTS -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Open+Sans:ital,wght@0,400;1,300&family=Playfair+Display:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&family=Shizuru&display=swap" rel="stylesheet">

      <!-- BOX ICON  -->
      <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="./assets/fontawesome-free-5.15.4-web/css/all.min.css">
      <link rel="stylesheet" href="./themify-icons/themify-icons.css">
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
 </head>
 <body>

      <div class="progress-bar" id="progress-bar">
           <a href="#" id="progress-val">
                <ion-icon name="logo-foursquare"></ion-icon>
           </a>
      </div>

      <div class="container">
           <div class="nav bg-color">
                <a href="index.html" class="logo">
                     <i style="margin-right: 10px;" class='bx bx-movie-play bx-tada main-color'></i>Fl<span class="main-color">i</span>x
                </a>

                <form action="" class="search-box">
                     <input type="text" name="search" placeholder="Search Your Movie ....." class="nav-search">
                     <button type="password">
                          <i class='bx bx-search-alt'></i>
                     </button>
                </form>

                <div class="nav-sign">
                     <a href="#" class="btn btn-hover">
                          <span>Sign in</span>
                     </a>

                </div>
                <div class="menu-toggle">
                     <ion-icon name="menu-outline" class="open"></ion-icon>
                     <ion-icon name="close-outline" class="close"></ion-icon>
                </div>
           </div>
      </div>


      <!-- SECTIONS -->

      <section class="movie-banner">
           <div class="hero-wrapper">
                <div class="movie-banner-item">
                     <img src="./assets/img/Images/raya3.jpg" alt="">
                </div>

                <div class="movie-card">
                     <img src="assets/img/Images/raya1.jpg" alt="raya">

                     <div class="movie-card-content">
                          <h2>Raya and the last Dragon</h2>


                          <ul class="movie-card-btns">
                               <li class="movie-card-btn">
                                    family
                               </li>
                               <li class="movie-card-btn">
                                    Fantacy
                               </li>
                               <li class="movie-card-btn">
                                    animation
                               </li>
                               <li class="movie-card-btn">
                                    action
                               </li>
                               <li class="movie-card-btn">
                                    adventure
                               </li>
                          </ul>

                          <p class="movie-card-description">
                               Lorem ipsum dolor sit amet consectetur adipisicing elit.
                               Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                               laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                               facere ab suscipit.
                          </p>

                          <h3>screen shot</h3>
                          <div class="movie-casts">
                               <div class="movie-cast-item">
                                    <img src="./assets/img/Movie-Data/Pirates-of-the-Caribbean-Salazar's-Revenge/screenshot-1.jpg" alt="cast1">
                               </div>
                               <div class="movie-cast-item">
                                    <img src="./assets/img/Movie-Data/Pirates-of-the-Caribbean-Salazar's-Revenge/screenshot-2.jpg" alt="cast1">
                               </div>
                               <div class="movie-cast-item">
                                    <img src="./assets/img/Movie-Data/Pirates-of-the-Caribbean-Salazar's-Revenge/screenshot-3.jpg" alt="cast1">
                               </div>
                               <div class="movie-cast-item">
                                    <img src="./assets/img/Movie-Data/Pirates-of-the-Caribbean-Salazar's-Revenge/screenshot-4.jpg" alt="cast1">
                               </div>
                          </div>
                     </div>
                </div>

           </div>
      </section>


      <section class="international-trailer">
         <div class="trailer-title">
                <h3>international trailer</h3>
         </div>
         <div class="international-vid">
           <iframe width="560" height="515" src="https://www.youtube.com/embed/3UFWsEY8Hdc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
      </section>

      <section class="international-trailer  margin">
           <div class="trailer-title">
                  <h3>official trailer</h3>
           </div>
           <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/1VIZ89FEjYI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>

        <section class="international-trailer margin">
           <div class="trailer-title">
                  <h3>teaser trailer</h3>
           </div>
           <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/9BPMTr-NS9s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>


      <footer class="footer ">
           <div class="section-wrapper trailer">
                <div class="row">
                    <div class="col-6 footer-header">
                          <a href="#" class="logo">
                               <i style="margin-right: 10px;" class='bx bx-movie-play bx-tada main-color'></i>Fl<span class="main-color">i</span>x
                          </a>

                          <p class="description">
                               Lorem ipsum dolor sit amet consectetur adipisicing elit.
                               Quas, possimus eius. Deserunt non odit, cum vero reprehenderit
                               laudantium odio vitae autem quam, incidunt molestias ratione mollitia accusantium,
                               facere ab suscipit.
                          </p>
                          <div class="social-list">
                               <a href="#" class="social-item">
                                    <i class="bx bxl-facebook"></i>
                               </a>
                               <a href="#" class="social-item">
                                    <i class="bx bxl-instagram"></i>
                               </a>
                               <a href="#" class="social-item">
                                    <i class="bx bxl-twitter"></i>
                               </a>
                          </div>
                    </div>

                    <div class="col-12 footer-item">
                          <div class="row">
                               <div class="col-4 align-items-center">
                                    <div class="content">
                                         <p class="main-color" style="font-size: 1.2rem;"><b>Flix</b></p>
                                         <ul class="footer-menu">
                                             <li><a href="#"> About us</a></li>
                                             <li><a href="#"> My profile</a></li>
                                             <li><a href="#"> Pricing plans</a></li>
                                             <li><a href="#"> Contacts</a></li>
                                         </ul>
                                      </div>
                               </div>


                               <div class="col-4 align-items-center">
                                    <div class="content">
                                         <p class="main-color" style="font-size: 1.2rem;"><b>Browse</b></p>
                                         <ul class="footer-menu">
                                             <li><a href="#">Live TV</a></li>
                                             <li><a href="#">Live Movies</a></li>
                                             <li><a href="#">Live Series</a></li>
                                             <li><a href="#">Streaming Library</a></li>
                                         </ul>
                                      </div>
                               </div>

                               <div class="col-4 align-items-center">
                                    <div class="content">
                                         <p class="main-color" style="font-size: 1.2rem;"><b>Help</b></p>
                                         <ul class="footer-menu">
                                             <li><a href="#">Account & Billing</a></li>
                                             <li><a href="#">Plans & Pricing</a></li>
                                             <li><a href="#">Supported devices</a></li>
                                             <li><a href="#">Accessibility</a></li>
                                         </ul>
                                      </div>
                               </div>

                          </div>
                    </div>
                </div>
           </div>
       </footer>




   <script src="main.js"></script>

 </body>
 </html>
