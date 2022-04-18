<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/home-page.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    {{-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="/js/jquery.tiltedpage-scroll.js"></script>
    <link href='/css/tiltedpage-scroll.css' rel='stylesheet' type='text/css'> --}}

    <title>Wisatain | {{ $title }}</title>
    <link rel="icon" href="/image/wisatain .png">
  </head>
    <body>
        <div class="main">
        <section class="header">
            <div class="content-box">
                <div class="menu">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent" >
                        <div class="container-fluid">
                          <a class="navbar-brand px-5" href="/" ><img src="/image/wisatain.png" alt="" width="211" height="60"></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNav">        
                            <ul class="navbar-nav mx-auto">
                              <li class="nav-item px-4">
                                <a style="color:black; font-size:20px; font-family: 'Poppins', sans-serif;" class="nav-link {{ ($active === "home") ? 'active' : '' }}"  href="/"><b style="color:#077584">Home</b></a>
                              </li>
                              <li class="nav-item px-4">
                                <a style="color:black; font-size:20px; font-family: 'Poppins', sans-serif;" class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts"><b>Destination</b></a>
                              </li>
                              <li class="nav-item px-4">
                                <a style="color:black; font-size:20px; font-family: 'Poppins', sans-serif;" class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about"><b>Service</b></a>
                              </li>
                               <li class="nav-item px-4">
                                <a style="color:black; font-size:20px; font-family: 'Poppins', sans-serif; " class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories"><b>Testimonial</b></a>
                              </li> 
                              <!--<li class="nav-item px-4">-->
                              <!--  <a class="nav-link {{ ($active === "payment") ? 'active' : '' }}" href="/payment"><b>Payment</b></a>-->
                              <!--</li>-->
                            </ul>
                            <ul class="navbar-nav px-4">
                            @auth
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-light" style="font-size:20px;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><b>
                                      Welcome Back, {{ auth()->user()->name }}
                                    </b></a>
                                    <ul class="dropdown-menu bg-warning " aria-labelledby="navbarDropdown">
                                    {{-- <li><a class="dropdown-item" href="#">Profil</a></li>
                                      <li><hr class="dropdown-divider"></li> --}}
                                      <form action="/logout" method="post">
                                            @csrf
                                          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>Logout</a></li></button>
                                      </form>
                                    </ul>
                                  </li>
                              @else
                              <div class="login-btn">
                                <a class="btn log-btn1 "  href="/login"></i> Login </a>
                              @endauth
                            </ul>
                          </div>
                        </div>
                      </nav>
                      <div class="banner-text">
                            <div class="container-fluid px-4">
                                <div class="row align-items-center gap-y">
                                  <div class="col-lg text-excerpt px-5">
                                    <h1 class="slide-left" style="font-weight:700; font-size:56px; font-family: 'Poppins', sans-serif;" >Let's find a tourist place<br>
                                    you've never been
                                        <br></h1> <br>
                                    <p class="slide-left" style="font-size:24px; font-weight:500; opacity:80%; font-family: 'Poppins', sans-serif;">Quidam alii sunt, et non est in nostra potestate<br> Quae omnia in nostra sententia, pursuit, <br>cupiditatem, aversatio, ex quibus in 
                                    <br>Verbo, quicquid
                                    </p>
                                    <br>
                                    <div class="buy">
                                        <a class="btn dtl slide-left"><p style="margin-left: -20px;"> Explore Now </p><img style="margin-left: 150px; margin-top:-100px" src="/image/arrow.png" alt=""></i></a>
                                    </div>
                                  </div>
                        <div class="col-lg order-first order-lg-last mb-5 mt-5 image2 slide-left">
                                <img style="margin-left: 80px;" src="/image/mountain.png" class=" w-100" alt="...">
                        </div>
                </div>
            </div>
        </section>

        {{-- service --}}

        <section class="service">
        <div class="content-service">
            <div class="container">
                
                    <P style="font-size:38px; font-family: 'Poppins', sans-serif; font-weight:600">Destination <br> <p style="font-size:32px; margin-left:60px">100+
                
            
                    <div style="margin-left:500px; margin-top:-135px" class="text2">               
                    <P style="font-size:38px; font-family: 'Poppins', sans-serif; font-weight:600">Tour Guide <br><p style="font-size:32px; margin-left:80px"> 99+
                    </div>
            
                    <div style="margin-left:1000px; margin-top:-135px" class="text3">               
                    <P style="font-size:38px; font-family: 'Poppins', sans-serif; font-weight:600">Souvenir Tour <br><p style="font-size:32px; margin-left:100px"> 125+
                    </div>
                    <img src="/image/element.png" alt="" width="600" height="600" style="margin-left: -350px; margin-top:-250px">
                    
        </section>

        {{-- Feature --}}

        <section class="feature">
        <div class="content-vid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mt-5 py-5 text-center">
                        <P style="font-size:38px;font-family: 'Poppins', sans-serif; font-weight:700; margin-right:1300px">Most Popular Destination</P>
                            
                    </div>
                </div>
            </div>
            <div class="container">

    
  </div>
        </div>
        

</div>
<div class="content-card">
<div class="w3-row-padding" style="margin-left:100px">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/image/i4.png" alt="Norway" style="width:90%" class="w3-hover-opacity">
                                     
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Pantai Parai  Tenggiri</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praeterea, ex culpa non invenies unum aut<br>non accusatis unum. 
Et nihil inuitam. </p>
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>                           
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/image/i5.png" alt="Norway" style="width:90%" class="w3-hover-opacity">
                                     
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Nusa Dua (Bali)</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praesent tincidunt sed tellus ut rutrum. Sed <br>vitae justo condimentum, porta lectus<br> vitae, ultricies congue gravida diam<br> non fringilla.</p>
        
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>   
    </div>
    <div class="w3-third w3-container">
      <img src="/image/i7.png" alt="Norway" style="width:90%" class="w3-hover-opacity">
    
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Gili Trawangan (NTB)</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praesent tincidunt sed tellus ut rutrum. Sed <br>vitae justo condimentum, porta lectus<br> vitae, ultricies congue gravida diam<br> non fringilla.</p>
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>   
    </div>
</div>

<div class="content-end">
            <div class="container-fluid mt-5">
                <div class="row px-5">
                    <div class="col-lg px-5 py-5">
                    <P style="font-size:38px;font-family: 'Poppins', sans-serif; font-weight:700; margin-right:-1000px">Our Service</P>
                      
                    </div>
                                      
<div class="w3-row-padding" style="margin-left:100px">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/image/tourist 1.png"  style="width:30%; margin-left: 100px;" class="w3-hover-opacity">
                                     
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px; margin-left:100px">Tour Guide</p>
        <center><p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif; margin-left:-200px">Praeterea, ex culpa non invenies unum aut<br>non accusatis unum. 
Et nihil inuitam. </p></center>
        <br>
                        
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/image/accomodation 1.png" alt="Norway" style="width:30%; margin-left: 100px;" class="w3-hover-opacity">
                                     
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px; margin-left:50px">Accommodation</p>
        <center><p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif; margin-left:-200px">Praesent tincidunt sed tellus ut rutrum. Sed <br>vitae justo condimentum, porta lectus<br> vitae, ultricies congue gravida diam<br> non fringilla.</p></center>
        
        <br>
   
    </div>
    <div class="w3-third w3-container" >
      <img src="/image/key 1.png" alt="Norway" style="width:30%; margin-left: 100px;"  class="w3-hover-opacity">
    
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px; margin-left:120px">Car Rental</p>
        <center><p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif; margin-left:-200px">Praesent tincidunt sed tellus ut rutrum. Sed <br>vitae justo condimentum, porta lectus<br> vitae, ultricies congue gravida diam<br> non fringilla.</p></center>
        <br>
        
    </div>
</div>
</div>
                    
                </div>
                
            </div>
             <P style="font-size:38px;font-family: 'Poppins', sans-serif; font-weight:700; margin-left:1200px; margin-bottom:-200px; margin-top:400px">Testimonial</P>
            <div class="container-fluid mt-5">
                <div class="row px-5">
                    <div class="col-lg px-5 py-5">
                   
                    <img src="/image/testi.png" alt="" width="480" height="440" style="margin-left: 250px; margin-top:100px">
                    <img src="/image/comment.png" alt="" width="900" height="270" style="margin-left: 1100px; margin-top:-600px">
                    </div>
          
        </div>
        
        
</div>



        </section>

     


        {{-- END --}}

        <section class="end">
        

        </section>

        {{-- Footer --}}

        <section>
        <div class="content-footer">
            <div class="container-fluid py-5">
                <div class="row">
                    <div class="col-md px-5">
                        <img src="/image/wisatain.png" alt="" width="180" height="80">
                    </div>
                    <div style="margin-top: -20px;" class="col-md px-5 py-3">
                        <h1>Wisatain</h1>
                        <br>
                        <p>Tentang</p>
                        <p>Product</p>
                        <p>Feature</p>
                        <p>Finance</p>
                    </div>
                    <div class="col-md px-5">
                        <h1>Partner</h1>
                        <br>
                        <p>Paradise Site</p>
                        <p>Pengandaran Beach</p>
                    </div>
                    <div class="col-md px-5">
                        <h1>Tentang</h1>
                        <br>
                        <p>Magang</p>
                        <p>Profesional</p>
                    </div>
                 
                </div>
            </div>
        </div>
        </section>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script>
         $(".main").tiltedpage_scroll({
    sectionContainer: "> section",
    angle: 50,
    opacity: true,
    scale: true,
    outAnimation: true
  });
    </script>
  </body>
</html>