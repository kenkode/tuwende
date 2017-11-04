
<body>
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs" style="background: #fdb714">
                <!-- <div class="container">
                    <ul class="quick-menu pull-left">
                        <li><a href="#">My Account</a></li>
                        <li class="ribbon">
                            <a href="#">English</a>
                            <ul class="menu mini">
                                <li><a href="#" title="Dansk">Dansk</a></li>
                                <li><a href="#" title="Deutsch">Deutsch</a></li>
                                <li class="active"><a href="#" title="English">English</a></li>
                                <li><a href="#" title="Español">Español</a></li>
                                <li><a href="#" title="Français">Français</a></li>
                                <li><a href="#" title="Italiano">Italiano</a></li>
                                <li><a href="#" title="Magyar">Magyar</a></li>
                                <li><a href="#" title="Nederlands">Nederlands</a></li>
                                <li><a href="#" title="Norsk">Norsk</a></li>
                                <li><a href="#" title="Polski">Polski</a></li>
                                <li><a href="#" title="Português">Português</a></li>
                                <li><a href="#" title="Suomi">Suomi</a></li>
                                <li><a href="#" title="Svenska">Svenska</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="quick-menu pull-right">
                        <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                        <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                        <li class="ribbon currency">
                            <a href="#" title="">USD</a>
                            <ul class="menu mini">
                                <li><a href="#" title="AUD">AUD</a></li>
                                <li><a href="#" title="BRL">BRL</a></li>
                                <li class="active"><a href="#" title="USD">USD</a></li>
                                <li><a href="#" title="CAD">CAD</a></li>
                                <li><a href="#" title="CHF">CHF</a></li>
                                <li><a href="#" title="CNY">CNY</a></li>
                                <li><a href="#" title="CZK">CZK</a></li>
                                <li><a href="#" title="DKK">DKK</a></li>
                                <li><a href="#" title="EUR">EUR</a></li>
                                <li><a href="#" title="GBP">GBP</a></li>
                                <li><a href="#" title="HKD">HKD</a></li>
                                <li><a href="#" title="HUF">HUF</a></li>
                                <li><a href="#" title="IDR">IDR</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> -->
            </div>
            
            <div class="main-header">
                
                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>

                <div class="container">
                    <h1 class="navbar-brand">
                        <a href="{{URL::to('/')}}" title="Tuwende - home">
                            <!-- <img src="images/logo.png" alt="Tuwende" /> -->
                            <h4><img src="images/favicon.png" alt="Tuwende" />Tuwende</h4>
                        </a>
                    </h1>

                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li>
                                <a href="{{URL::to('/')}}">Home</a>
                                
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Booking</a>
                                <ul>
                                    <li><a href="#">Hotel</a></li>
                                    <li><a href="#">Flights</a></li>
                                    <li><a href="#">Bus</a></li>
                                    <li><a href="#">Train</a></li>
                                    <li><a href="#">Taxi</a></li>
                                    <li><a href="#">Car Hire</a></li>
                                    <li><a href="#">Events</a></li>
                                </ul>
                            </li>
                            
                           <li>
                                <a href="#">Check Status</a>
                                
                            </li>

                            <li>
                                <a href="#">Request Refund</a>
                                
                            </li>

                            <li>
                                <a href="{{URL::to('/contact')}}">Contact Us</a>
                                
                            </li>
                        </ul>
                    </nav>
                </div>
                
                <nav id="mobile-menu-01" class="mobile-menu collapse">
                    <ul id="mobile-primary-menu" class="menu">
                        <li >
                            <a href="{{URL::to('/')}}">Home</a>
                            
                        </li>
                        <li class="menu-item-has-children">
                            <a href="hotel-index.html">Booking</a>
                            <ul>
                                    <li><a href="#">Hotel</a></li>
                                    <li><a href="#">Flights</a></li>
                                    <li><a href="#">Bus</a></li>
                                    <li><a href="#">Train</a></li>
                                    <li><a href="#">Taxi</a></li>
                                    <li><a href="#">Car Hire</a></li>
                                    <li><a href="#">Events</a></li>
                            </ul>
                        </li>
                        
                        <li>
                                <a href="#">Request Refund</a>
                                
                            </li>

                            <li>
                                <a href="{{URL::to('/contact')}}">Contact Us</a>
                                
                            </li>
                    </ul>
                    
                    <!-- <ul class="mobile-topnav container">
                        <li><a href="#">MY ACCOUNT</a></li>
                        <li class="ribbon language menu-color-skin">
                            <a href="#" data-toggle="collapse">ENGLISH</a>
                            <ul class="menu mini">
                                <li><a href="#" title="Dansk">Dansk</a></li>
                                <li><a href="#" title="Deutsch">Deutsch</a></li>
                                <li class="active"><a href="#" title="English">English</a></li>
                                <li><a href="#" title="Español">Español</a></li>
                                <li><a href="#" title="Français">Français</a></li>
                                <li><a href="#" title="Italiano">Italiano</a></li>
                                <li><a href="#" title="Magyar">Magyar</a></li>
                                <li><a href="#" title="Nederlands">Nederlands</a></li>
                                <li><a href="#" title="Norsk">Norsk</a></li>
                                <li><a href="#" title="Polski">Polski</a></li>
                                <li><a href="#" title="Português">Português</a></li>
                                <li><a href="#" title="Suomi">Suomi</a></li>
                                <li><a href="#" title="Svenska">Svenska</a></li>
                            </ul>
                        </li>
                        <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                        <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                        <li class="ribbon currency menu-color-skin">
                            <a href="#">USD</a>
                            <ul class="menu mini">
                                <li><a href="#" title="AUD">AUD</a></li>
                                <li><a href="#" title="BRL">BRL</a></li>
                                <li class="active"><a href="#" title="USD">USD</a></li>
                                <li><a href="#" title="CAD">CAD</a></li>
                                <li><a href="#" title="CHF">CHF</a></li>
                                <li><a href="#" title="CNY">CNY</a></li>
                                <li><a href="#" title="CZK">CZK</a></li>
                                <li><a href="#" title="DKK">DKK</a></li>
                                <li><a href="#" title="EUR">EUR</a></li>
                                <li><a href="#" title="GBP">GBP</a></li>
                                <li><a href="#" title="HKD">HKD</a></li>
                                <li><a href="#" title="HUF">HUF</a></li>
                                <li><a href="#" title="IDR">IDR</a></li>
                            </ul>
                        </li>
                    </ul> -->
                    
                </nav>
            </div>
            <div id="travelo-signup" class="travelo-signup-box travelo-box">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <div class="simple-signup">
                    <div class="text-center signup-email-section">
                        <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Sign up with Email</a>
                    </div>
                    <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
                </div>
                <div class="email-signup">
                    <form>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="first name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="last name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="email address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="confirm password">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Tell me about Travelo news
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
                        </div>
                        <button type="submit" class="full-width btn-medium">SIGNUP</button>
                    </form>
                </div>
                <div class="seperator"></div>
                <p>Already a Travelo member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
            </div>
            <div id="travelo-login" class="travelo-login-box travelo-box">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <form>
                    <div class="form-group">
                        <input type="text" class="input-text full-width" placeholder="email address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-text full-width" placeholder="password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="forgot-password pull-right">Forgot password?</a>
                        <div class="checkbox checkbox-inline">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </form>
                <div class="seperator"></div>
                <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
            </div>
        </header>