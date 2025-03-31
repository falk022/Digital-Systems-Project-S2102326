<div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{url('/')}}"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{url('/')}}">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="room.html">Our room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gallery.html">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              
                              

                              @if (Route::has('login'))
                            
                                @auth


                                <!-- Check if user is an admin -->
                                 @if (Auth::user()->usertype === 'admin')
                                       <li class="nav-item">
                                          <a class="nav-link" href="{{ url('/home') }}">
                                             <i class="fas fa-cog"></i> Admin Dashboard
                                          </a>
                                       </li>
                                 @endif
                                 
                                 <!-- Account Dropdown -->
                                 <li class="nav-item dropdown">
                                       <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          {{ Auth::user()->name }}
                                       </a>
                                       <div class="dropdown-menu" aria-labelledby="accountDropdown">
                                          <!-- Profile -->
                                          <a class="dropdown-item" href="{{ route('profile.show') }}">
                                             <i class="fas fa-user"></i> Profile
                                          </a>

                                          <!-- Jetstream has a built-in logout form -->
                                          <form method="POST" action="{{ route('logout') }}">
                                             @csrf
                                             <button type="submit" class="dropdown-item">
                                                   <i class="fas fa-sign-out-alt"></i> Logout
                                             </button>
                                          </form>
                                       </div>
                                 </li>
                                @else
                                <li class="nav-item" style="padding-right: 10px;">
                                       <a class="btn btn-success" href="{{url('login')}}">Login</a>
                                    </li>

                                    @if (Route::has('register'))
                                    <li class="nav-item">
                                       <a class="btn btn-primary" href="{{url('register')}}">Register</a>
                                    </li>
                                    @endif
                                @endauth
                            
                        @endif
                              
                        

                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>