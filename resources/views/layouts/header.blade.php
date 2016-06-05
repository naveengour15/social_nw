        <nav class="navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Andia - a super cool design agency...</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-navbar-1">
                    <ul class="nav navbar-nav navbar-right">
                          <li class="{{ Request::is( 'home', 'home/*' ) ? 'active' : '' }}" >  
                      <!--   <li  class="active"> -->
                            <a href="{{ url('/home') }}">
                                <i class="fa fa-home"></i><br>Home 
                            </a>
                           
                        </li>
                         <li class="{{ Request::is( 'photo', 'photo/*' ) ? 'active' : '' }}" >  
                      
                            <a href="portfolio.html"><i class="fa fa-camera"></i><br>Photo</a>
                        </li>
                        <li class="{{ Request::is( 'setting', 'setting/*' ) ? 'active' : '' }}" >  
                      
                            <a href="services.html"><i class="fa fa-tasks"></i><br>Setting</a>
                        </li>
                        <li class="{{ Request::is( 'viewprofile', 'viewprofile/*' ) ? 'active' : '' }}" >  
                      
                            <a href="{{ url('/viewprofile/'.Auth::user()->id)}}"><i class="fa fa-user"></i><br>Profile</a>
                        </li>
                         <li class="{{ Request::is( 'message', 'message/*' ) ? 'active' : '' }}" >  
                      
                            <a href="contact.html"><i class="fa fa-envelope"></i><br>Messages</a>
                        </li>
                     
                    <!-- Authentication Links -->
                @if (Auth::guest())
                        <li class="{{ Request::is( 'login', 'login/*' ) ? 'active' : '' }}" >  
                      
                         <a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i><br>Login</a></li>
                        <li class="{{ Request::is( 'register', 'register/*' ) ? 'active' : '' }}" >  
                           <a href="{{ url('/register') }}" ><i class="fa fa-lock"></i><br>Register</a></li>
                        
                @else
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
                                <i class="fa fa-paperclip"></i><br> {{ Auth::user()->username }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                @endif
                    </ul>
                </div>
            </div>
        </nav>
