<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel = "icon" href = "{{ asset('dist/img/arsa.png') }}" sizes="16x20" type = "image/x-icon">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>

    <title>Arsa Muda Radio</title>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/style.css') }}" />
  </head>
  <body style="background-color: #080814;">
    
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom" style="color: white !important;">
      <div class="container-fluid" style="color: white !important;">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('dist/img/arsa.png') }}" alt="" width="50" height="30"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <img src="{{ asset('dist/img/icons8-menu-24.png') }}">
    </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">HOME</a>
            <a class="nav-item nav-link" href="#acara">ARENA</a>
          </div>
        </div>
        @auth
        <div class="bs-example">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 button-custom" id="navbarNavAltMarkup">
                <a href="#live" class="mr-4" style="font-size: 16px;font-family: 'Assistant'; color: white; text-decoration: none; font-weight: bold;">Live Broadcast</a>
                <!-- Example split danger button -->
                <div class="dropdown d-inline">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                    Hi, {{ auth()->user()->name }}
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @else
        <div class="bs-example">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 button-custom" id="navbarNavAltMarkup">
                <a href="#live" class="mr-4" style="font-size: 16px;font-family: 'Assistant'; color: white; text-decoration: none; font-weight: bold;">Live Broadcast</a>
                <button type="button" class="btn btn-info btn-sm pl-3 pr-3"><a href="/login_user" class="text-decoration-none text-white">LOGIN</a></button>&nbsp;|
                <button
                  type="button"
                  class="btn btn-success btn-sm pl-3 pr-3"><a href="#daftar" class="text-decoration-none text-white">
                  SIGN UP</a></button>
              </div>
            </div>
          </div>
        </div>
        @endauth
      </div>
    </nav>
    <!-- END NAVBAR-->

    
    <!-- JUMBOTRON -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-4">The Best Chill <br>Millenial Station</h1>
      </div>
    </div>
    <!-- END JUMBOTRON -->

    <!-- LIVE SECTION-->
      <div class="container" id="live">
          <div class="row">
            <div class="col text-center">
              <h2 class="display-10" data-aos="fade-down"> Live Broadcast</h2>
              <p class="display-2" data-aos="fade-down">Tekan live brodcast dan dengarkan lagu - lagu dari 104,1 FM secara langsung.</p>
            </div>
            <div class="col-md-12 text-center">
                <a href="#! " class="btn btn-primary" id="stream">Live Broadcast</a>
        </div>
      </div>
    </div>
    <!-- END SECTION -->
    
    <audio id="siaran">
      <source src="{{ asset('dist/covid.mp3') }}" type="audio/mp3">
    </audio>

    <!-- ABOUT -->
    <div id="about" class="about">
      <div class="container" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
        <div class="row">
          <div class="col-lg-6">
            <div class="about-box">
              <h2 style="margin-top: 50px;">About Us</h2>
              <p>ArsaMuda Radio merupakan salah satu radio anak muda paling HITS di kota Bandung, tepatnya di jalan Dipatiukur No.103 Bandung dengan frekuensi modulasi 103.9 FM. Dahulu, radio ini dikenal dengan ArsaMuda, namun setelah diakuisisi oleh Agrico, kemudian tetap menjadi ArsaMuda tidak menjadi AgricoRadio. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END ABOUT -->

    
    <!-- ACARA -->
      <div id="acara" class="container" data-aos="fade-down"data-aos-easing="linear" data-aos-duration="1500">
          <div class="row">
            <div class="col text-center">
              <h2 class="display-1">Tema Acara</h2>
              <h3 class="display-6">acara hari sabtu</h4>
                <p class="display-5">Arsa Morning</p>
                <p class="display-5">Chill Chat</p>
                <p class="display-5">Nightaimen</p>
              <h3 class="display-6">acara hari Minggu</h4>
                <p class="display-5">Arsa Morning</p>
                <p class="display-5">Girl Corner</p>
                <p class="display-5">Modis Music</p>
                <p class="display-5">Rileks Vibe</p>
            </div>
          </div>
      </div>
    <!-- END ACARA -->

    
    <!-- TEAM -->
              <section class="team" id="team">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12">
                      <h2 class="module-title font-alt display-1">ON AIR TEAM</h2>
                    </div>
                  </div>
                  <div class="d-none d-md-block">
                    <div class="row ">
                    <div class="col-sm-4 wow fadeInUp" onclick="wow fadeInUp">
                      <div class="team-item" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="500">
                        <div class="team-image"><img src="{{ asset('dist/img/user1.jpg') }}" alt="Agrico"/>
                          <div class="team-detail">
                            <h5 class="font-alt">Agrico</h5>
                            <p class="font-serif">Get busy living or get busy dying.</p>
                            <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-twitter"></i></a></div>
                          </div>
                        </div>
                        <div class="team-descr font-alt">
                          <div class="team-name">Agrico El Nino</div>
                          <div class="team-role">UI/UX Designer</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp" onclick="wow fadeInUp">
                      <div class="team-item" data-aos="fade-down"data-aos-easing="linear" data-aos-duration="500">
                        <div class="team-image"><img src="{{ asset('dist/img/user2.jpg') }}" alt="Hadi"/>
                          <div class="team-detail">
                            <h5 class="font-alt">Nopal</h5>
                            <p class="font-serif">Many of life’s failures are people who did not realize how close they were to success when they gave up.</p>
                            <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                          </div>
                        </div>
                        <div class="team-descr font-alt">
                          <div class="team-name">Nopal Widodo</div>
                          <div class="team-role">Back End Developer</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 wow fadeInUp" onclick="wow fadeInUp">
                      <div class="team-item" data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="500">
                        <div class="team-image"><img src="{{ asset('dist/img/user3.jpg') }}" alt="Raendy"/>
                          <div class="team-detail">
                            <h5 class="font-alt">Maret</h5>
                            <p class="font-serif">Never let the fear of striking out keep you from playing the game.</p>
                            <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="https://www.instagram.com/raendyy_/"><i class="fa fa-skype"></i></a></div>
                          </div>
                        </div>
                        <div class="team-descr font-alt">
                          <div class="team-name">Maret Baswedan</div>
                          <div class="team-role">Front End Developer</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </section>
                  
                  <div id="carouselExampleControls" class="carousel slide d-sm-block d-md-none" data-ride="carousel">
                      <div class="carousel-inner ">
                        <div class="carousel-item active">
                          <img src="{{ asset('dist/img/img3.jpg') }}" class="d-block w-100" alt="Agrico">
                          <p style="font-family: 'Bebas Neue';text-align: center;margin-top: 20px;color: white;font-size: 20px;">Agrico El Nino</p>
                          <p style="font-family: 'Assistant';text-align: center;color: white;font-size: 15px;">UI/UX Desginer</p>
                          <div class="team-social" style="text-align: center;"><a href="#"><i class="fa fa-facebook"></i></a><a href=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="https://www.instagram.com/raendyy_/"><i class="fa fa-skype"></i></a>
                      </div>
                  </div>
                        <div class="carousel-item">
                          <img src="{{ asset('dist/img/meme.jpg') }}" class="d-block w-100" alt="Nopal"style>
                          <p style="font-family: 'Bebas Neue';text-align: center;margin-top: 20px;color: white;font-size: 20px;">Nopal Widodo</p>
                          <p style="font-family: 'Assistant';text-align: center;color: white;font-size: 15px;">Back End Developer</p>
                          <div class="team-social" style="text-align: center;"><a href="#"><i class="fa fa-facebook"></i></a><a href=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="https://www.instagram.com/raendyy_/"><i class="fa fa-skype"></i></a></div>

                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('dist/img/IMG2.jpg') }}" class="d-block w-100" alt="Raendy">
                          <p style="font-family: 'Bebas Neue';text-align: center;margin-top: 20px;color: white;font-size: 20px;">Raendy Baswedan</p>
                          <p style="font-family: 'Assistant';text-align: center;color: white;font-size: 15px;">Front End Developer</p>
                          <div class="team-social" style="text-align: center;"><a href="#"><i class="fa fa-facebook"></i></a><a href=""><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="https://www.instagram.com/raendyy_/"><i class="fa fa-skype"></i></a></div>

                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>

    <!-- END TEAM -->

    
    <!-- CONTACT-->
      <div class="contact" id="daftar">
        <div class="form-container">
          <form action="/daftar" method="POST">
            @csrf
            <h2 class="display-11">JOIN ARSA MUDA</h2>
            <p class="display-5" style="padding-bottom: 5px;">Bergabung dan jadilah Sobat Arsa Muda untuk mendapatkan informasi seputar Arsa Muda</p>
            <div class="input-holder">
            <input type="text" required name="name" placeholder="Masukkan nama" class="text-white mb-4" style="background: transparent; width: 45%; height: 40px; border: white; border-radius: 3px; border-style: groove;"><br>  
            <input type="email" required name="email" placeholder="Masukkan Email" class="text-white mb-4" style="background: transparent; width: 45%; height: 40px; border: white; border-radius: 3px; border-style: groove;"><br>
            <input type="password" required name="password" placeholder="Masukkan Password" class="text-white" style="background: transparent; width: 45%; height: 40px; border: white; border-radius: 3px; border-style: groove; "><br>
            <button type="submit" class="btn btn-success  mt-3 btn-sm pl-3 pr-3">SIGN UP</button>
            {{-- <button type="button" class="btn btn-outline-light" ></button> --}}
          </form>
        </div>
      </div>
      </div>
    <!-- END CONTACT -->

    
    <!-- FOOTER -->
   <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>NAVIGATOR</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Arena</a></li>
            <li><a href="#live">Live Broadcast</a></li>
            <li><a href="#">Masuk</a></li>
            <li><a href="#">Daftar</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>COMMUNITIES</h4>
          <ul>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Advertising</a></li>
            <li><a href="#">Investor</a></li>
            <li><a href="#">Vendors</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>GET CONNECTED</h4>
          <ul>
            <li><a href="#">Sumedang, Indonesia</a></li>
            <li><a href="#">0812 - 2001 - 0951</a></li>
            <li><a href="#">Elang1by1@gmail.com</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>FOLLOW US</h4>
          <div class="social-links">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/arsamuda104.1/"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
     </div>
     <div class="text-center">
       <p style="color:gray; margin-top: 50px;font-family: 'Assistant';">Copyright © Arsa Muda Radio 2021. </p>
     </div>
  </footer>
    <!-- END FOOTER -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>

    <script>
      var mySong = document.getElementById("siaran");
      var button = document.getElementById("stream");

      button.onclick = function(){
        if(mySong.paused){
          mySong.play();
          button.src = "dist/covid.mp3"
        }else{
          mySong.pause();
          button.src = "dist/covid.mp3"
        }
      }
    </script>

    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    {{-- Sweet Alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (Session::has('success-login'))
        <script>
            Swal.fire({
            icon: 'success',
            title: 'Terimakasih',
            text: '{!! session("success-login") !!}'
            })
        </script>
    @endif
    @if (Session::has('logout'))
        <script>
            Swal.fire({
            icon: 'success',
            title: 'Anda',
            text: '{!! session("logout") !!}'
            })
        </script>
    @endif
  </body>
</html>
