<nav class="navbar navbar-expand-lg navbar-dark bg-transparent" >
                        <div class="container-fluid">
                          <a class="navbar-brand px-5" href="/" ><img src="/image/wisatain.png" alt="" width="211" height="60"></a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav mx-auto">
                              <li class="nav-item px-4">
                                <a style="color:black; font-size:20px; font-family: 'Poppins', sans-serif;"  class="nav-link {{ ($active === "home") ? 'active' : '' }}"  href="/"><b>Home</b></a>
                              </li>
                              <li class="nav-item px-4">
                                <a  style="color:black; font-size:20px; font-family: 'Poppins', sans-serif;" class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts"><b style="color:#077584">Destination</b></a>
                              </li>
                              <li class="nav-item px-4">
                                <a  style="color:black; font-size:20px; font-family: 'Poppins', sans-serif;" class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about"><b >Service</b></a>
                              </li>
                              <li class="nav-item px-4">
                                <a  style="color:black; font-size:20px; font-family: 'Poppins', sans-serif;" class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about"><b>Testimonial</b></a>
                              </li>
                              <!--<li class="nav-item px-4">-->
                              <!--  <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories"><b>Categories</b></a>-->
                              <!--</li>-->
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
                                <a class="btn log-btn1 " href="/login"></i> Login </a>
                              @endauth
                            </ul>
                          </div>
                        </div>
                      </nav>